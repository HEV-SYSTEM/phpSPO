<?php

namespace Office365\Runtime;
use ArrayAccess;
use Exception;
use Generator;
use IteratorAggregate;
use Office365\Runtime\Http\RequestOptions;
use Office365\Runtime\OData\V3\JsonLightFormat;
use Office365\Runtime\Types\EventHandler;
use Traversable;


class PageInfo {

    public function __construct()
    {
        $this->startIndex = 0;
        $this->endIndex = 0;
    }

    public function setNextPage($index){
        if($index == 0)
            return;

        if($this->endIndex < $index){
            $this->startIndex = $this->endIndex;
            $this->endIndex = $index;
        }
    }

    public function __toString()
    {
        return "$this->endIndex";
    }

    /**
     * @var int
     */
    public $startIndex;

    /**
     * @var int
     */
    public $endIndex;

}


/**
 * Client objects collection (represents EntitySet in terms of OData)
 */
class ClientObjectCollection extends ClientObject implements IteratorAggregate, ArrayAccess
{

    /**
     * @var array
     */
    private $data = null;

    /**
     * @var string|null
     */
    public $NextRequestUrl;


    /**
     * @var string
     */
    protected $itemTypeName;


    /**
     * @var bool
     */
    protected $pagedMode;

    /**
     * @var EventHandler
     */
    protected $pageLoaded;

    /**
     * @var PageInfo
     */
    protected $pageInfo;


    /**
     * @param ClientRuntimeContext $ctx
     * @param ResourcePath $resourcePath
     * @param string $itemTypeName
     */
    public function __construct(ClientRuntimeContext $ctx, ?ResourcePath $resourcePath = null, $itemTypeName=null)
    {
        parent::__construct($ctx, $resourcePath);
        $this->data = array();
        $this->NextRequestUrl = null;
        $this->itemTypeName = $itemTypeName;
        $this->pagedMode = false;
        $this->pageInfo = new PageInfo();
        $this->pageLoaded = new EventHandler();
    }


    /**
     * @return bool
     */
    function getServerObjectIsNull()
    {
        return !is_array($this->data);
    }

    function isPropertyAvailable($name)
    {
        return isset($this->data[$name]);
    }

    /**
     * Adds client object into collection
     * @param ClientObject $clientObject
     * @param int $index
     */
    public function addChildAt(ClientObject $clientObject, $index)
    {
        array_splice($this->data, $index, 0, [$clientObject]);
        if (is_null($clientObject->parentCollection))
            $clientObject->parentCollection = $this;
    }

    /**
     * Adds client object into collection
     * @param ClientObject $clientObject
     */
    public function addChild($clientObject)
    {
        $this->data[] = $clientObject;
        if (is_null($clientObject->parentCollection))
            $clientObject->parentCollection = $this;
        return $this;
    }


    /**
     * @param ClientObject $clientObject
     */
    public function removeChild(ClientObject $clientObject)
    {
        if (($key = array_search($clientObject, $this->data)) !== false) {
            unset($this->data[$key]);
        }
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * Finds the first item
     * @param string $key
     * @param string $value
     * @return ClientObject|null
     */
    public function findFirst($key, $value)
    {
        $result = $this->findItems(
            function (ClientObject $item) use ($key, $value) {
                return $item->getProperty($key) === $value;
            });
        return (is_array($result) && (count($result) > 0) ? array_values($result)[0] : null);
    }


    /**
     * Finds items by entity property
     * @param callable $callback
     * @return array
     */
    public function findItems(callable $callback)
    {
        $result = array_filter(
            $this->data,
            function (ClientObject $item) use ($callback) {
                return call_user_func($callback, $item);
            }
        );
        if (count($result) > 0)
            return array_values($result);
        return null;
    }


    /**
     * Gets the item at the specified index
     * @param $index
     * @return ClientObject
     */
    public function getItem($index)
    {
        return $this->data[$index];
    }

    /**
     * Returns total items count
     * @return int
     * @throws Exception
     */
    public function getCount()
    {
        $it = $this->getIterator();
        while($it->valid() ){
            $it->next();
        }
        return count($this->data);
    }


    public function clearData()
    {
        if(!$this->pagedMode){
            $this->data = array();
        }
        $this->NextRequestUrl = null;
    }

    /**
     * Specifies an expression or function that must evaluate to true for a record to be returned in the collection.
     * @param string $value
     * @return ClientObjectCollection $this
     */
    public function filter($value)
    {
        $this->queryOptions->Filter = rawurlencode($value);
        return $this;
    }


    /**
     * Retrieves via server-driven paging mode
     * @param int $pageSize
     * @param callable $pageLoaded
     */
    public function paged($pageSize=null, $pageLoaded=null){
        $this->pagedMode = true;
        if(isset($pageLoaded))
            $this->pageLoaded->addEvent($pageLoaded);
        if(isset($pageSize)){
            $this->top($pageSize);
        }
        return $this;
    }


    /**
     * Determines the maximum number of records to return.
     * @param string $value
     * @return ClientObjectCollection $this
     */
    public function orderBy($value)
    {
        $this->queryOptions->OrderBy = rawurlencode($value);
        return $this;
    }

    /**
     * Determines the maximum number of records to return.
     * @param int $value
     * @return ClientObjectCollection $this
     */
    public function top($value)
    {
        $this->queryOptions->Top = $value;
        return $this;
    }

    /**
     * Sets the number of records to skip before it retrieves records in a collection.
     * @param int $value
     * @return ClientObjectCollection $this
     */
    public function skip($value)
    {
        $this->queryOptions->Skip = $value;
        return $this;
    }


    /**
     * Sets the number of records to skip before it retrieves records in a collection.
     * @param string $value
     * @return ClientObjectCollection $this
     */
    public function skiptoken($value)
    {
        $this->queryOptions->SkipToken = rawurlencode($value);
        return $this;
    }


    /**
     * Creates resource for a collection
     * @param ResourcePath|null $resourcePath
     * @return ClientObject
     */
    public function createType($resourcePath=null)
    {
        $itemTypeName = $this->getItemTypeName();
        $clientObject = new $itemTypeName($this->getContext(),$resourcePath);
        $clientObject->parentCollection = $this;
        return $clientObject;
    }

    /**
     * @return string
     */
    public function getItemTypeName()
    {
        if(!is_null($this->itemTypeName))
            return $this->itemTypeName;
        return str_replace("Collection", "", get_class($this));
    }


    /**
     * @return array
     */
    function toJson($onlyChanges=false)
    {
        return array_map(function (ClientObject $item) use($onlyChanges) {
            return $item->toJson($onlyChanges);
        }, $this->getData());
    }


    /**
     * @param string|integer $index
     * @param mixed $value
     * @param bool $persistChanges
     */
    function setProperty($index, $value, $persistChanges = true)
    {
        if((is_int($index))){
            $itemType = $this->createType();
            foreach ($value as $k=>$v) {
                $itemType->setProperty($k, $v, $persistChanges);
            }
            $this->addChild($itemType);
        }
        else{
            parent::setProperty($index,$value,$persistChanges);
        }
    }


    /**
     * @return Traversable
     * @throws Exception
     */
    public function getIterator(): Traversable
    {
        /** @var ClientObject $item */
        foreach ($this->data as $index => $item) {
            yield $index => $item;
        }

        if($this->pagedMode){
            if($this->hasNext()){
                $nextItems = $this->getNext()->executeQuery();
                foreach ($nextItems as $item){
                    yield $item;
                }
            }
        }
    }

    protected function hasNext(){
        return !is_null($this->NextRequestUrl);
    }

    /**
     * @return self
     */
    public function get()
    {
        $this->getContext()->getPendingRequest()->afterExecuteRequest(function (){
            $this->pageInfo->setNextPage(count($this->data));
            $this->pageLoaded->triggerEvent(array($this));
        });
        return parent::get();
    }


    /**
     * Gets all the items in a collection, regardless of the size.
     * @param int $pageSize
     * @param callable $pageLoaded
     * @return self
     */
    public function getAll($pageSize=null, $pageLoaded=null)
    {
        $this->paged($pageSize,$pageLoaded);
        $this->getContext()->getPendingRequest()->afterExecuteRequest(function (){
            if($this->hasNext()) {
                $this->getNext();
            }
        }, false);
        return $this->get();
    }



    /**
     * @return ClientObjectCollection
     * @throws Exception
     */
    private function getNext(){
        $this->getContext()->getPendingRequest()->beforeExecuteRequest(function (RequestOptions $request){
            $request->Url = $this->NextRequestUrl;
        });
        $this->get();
        return $this;
    }

    /**
     * Whether or not an offset exists
     *
     * @param int An offset to check for
     * @access public
     * @return boolean
     * @abstracting ArrayAccess
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    #[\ReturnTypeWillChange]
    /**
     * Returns the value at specified offset
     *
     * @param int The offset to retrieve
     * @access public
     * @return ClientObject
     * @abstracting ArrayAccess
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : null;
    }


    /**
     * Assigns a value to the specified offset
     *
     * @param int The offset to assign the value to
     * @param ClientObject  The value to set
     * @access public
     * @abstracting ArrayAccess
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    /**
     * Unsets an offset
     *
     * @param int The offset to unset
     * @access public
     * @abstracting ArrayAccess
     */
    public function offsetUnset($offset): void
    {
        if ($this->offsetExists($offset)) {
            unset($this->data[$offset]);
        }
    }

    public function getPageInfo(){
        return $this->pageInfo;
    }
}
