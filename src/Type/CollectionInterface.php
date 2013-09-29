<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CollectionInterface
 *
 * @author ibm-ibm
 */
interface Collection extends IterableInterface
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
