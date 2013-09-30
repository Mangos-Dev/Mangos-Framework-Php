<?php
/**
* Mangos StopWatch Class
*
* @package	      Mangos Framework
* @author             Mangos Team Dev
* @copyright          Copyright (c) 2013, Mangos.fr, Inc. (http://framework.mangos.fr/)
*/

namespace Ms\Diagnostics;

class StopWatch {
    
    /**
     * Elapsed Time
     */
    private $elapsed;
   
    /**
    * Start the stopwatch timing.
    * 
    * @return	void 
    */
    public function start() {
        $this->elapsed = microtime(true);
    }
   
    /**
     * Stop the stopwatch timing.
     * 
     * @return	void
     */
    public function stop() {
        $this->elapsed -= microtime(true);
    }
    
    /**
    * Returns the time in seconds.
    *
    * @return The the time in seconds as float.
    */
    public function getElapsed() {
        return number_format(abs($this->elapsed), 5);
    }
    
    /**
     * Reset the stopwatch timing.
     */
    public function reset() {
        $this->elapsed = 0;
    }
}
?>
