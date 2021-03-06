<?php
/**
 * Created by PhpStorm.
 * User: Uttam Dhungana
 * Date: 1/18/2018
 * Time: 10:23 PM
 */


/**
 * Represents the main properties of a PHP variable.
 */
class Stub implements \Serializable
{
    const TYPE_REF = 1;
    const TYPE_STRING = 2;
    const TYPE_ARRAY = 3;
    const TYPE_OBJECT = 4;
    const TYPE_RESOURCE = 5;

    const STRING_BINARY = 1;
    const STRING_UTF8 = 2;

    const ARRAY_ASSOC = 1;
    const ARRAY_INDEXED = 2;

    public $type = self::TYPE_REF;
    public $class = '';
    public $value;
    public $cut = 0;
    public $handle = 0;
    public $refCount = 0;
    public $position = 0;
    public $attr = array();

    /**
     * @internal
     */
    public function serialize()
    {
        return \serialize(array($this->class, $this->position, $this->cut, $this->type, $this->value, $this->handle, $this->refCount, $this->attr));
    }

    /**
     * @internal
     */
    public function unserialize($serialized)
    {
        list($this->class, $this->position, $this->cut, $this->type, $this->value, $this->handle, $this->refCount, $this->attr) = \unserialize($serialized);
    }
}

