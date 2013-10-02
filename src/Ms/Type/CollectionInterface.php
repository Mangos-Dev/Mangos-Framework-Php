<?php
/**
* Mangos CollectionInterface Interface
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

namespace Ms\Type;

interface CollectionInterface extends IterableInterface
{
        public function add($object);
        public function addRange($collection);
        public function clear();
        public function contains($object);
        public function containsAll($collection);
        public function isEmpty();
        public function remove($object);
        public function removeAll($collection);
        public function size();
        public function toArray() ;
}


?>
