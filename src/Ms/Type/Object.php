<?php
/**
* Mangos Object Class
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

class Object
{
    public function getRootClass()
    {
        return get_class();
    } 

    public function toString()
    {
        return get_class($this);
    }
    
     public function isInstanceOf($object){
        if (is_object($object))
            return is_a($this, $object->toString());
        return false;  
    }

    
    public function equals($object)
    {
        return ($this == $object);
    }
    
    public function getHashCode()
    {
        return spl_object_hash($this);
    }
    
    public function getType($value)
    {
        return gettype();  //-> http://php.net/manual/fr/function.gettype.php
    }

}

?>
