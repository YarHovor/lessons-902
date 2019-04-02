<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 02.04.19
 * Time: 19:30
 */

class Registry
{
    /**
     * @var Registry
     */
    private static $instance;

    /**
     * @var string
     */
    //private $formElementClass()

    private function __construct()
    {
    }
    static public function getInstance()
    {
        if (!self::$instance){
            self::$instance=new Registry();
        }
        return self::$instance;
    }
//  .......................V VIDOS
}