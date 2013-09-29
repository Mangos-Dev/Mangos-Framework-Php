<?php

class Object {
    
    
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
