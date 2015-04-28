<?php

/**
 * Interface for BenchmarkTest.
 *
 * @version 0.1
 * @author Andre lohmann <lohmann.andre@gmail.com>
 */
interface BenchmarkTestInterface {
    
    /**
     * Build the BenchmarkTest Logic
     * 
     * return value will be added to CONTENT Template Variable
     * 
     * Implementation:
     * Directly on Object
     * <code>
     * public static function run(){
     *      // put your testing logic here
     * 
     *      // picking a random User and logging him in could be done like this
     *      $o_Member = Member::get()->sort('RAND()')->First();
     *      $o_Member->logIn();
     *      // do some stuff with member
     * 
     *      return _t('Benchmark.RUNSUCCESSCONTENT', 'Benchmark.RUNSUCCESSCONTENT');
     * }
     * </code>
     * 
     * @return string
     */
    public static function run();
}