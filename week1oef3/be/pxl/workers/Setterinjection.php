<?php
/**
 * Created by PhpStorm.
 * User: theco
 * Date: 26/02/2016
 * Time: 12:57
 */

namespace be\pxl\workers {

    interface Tool
    {
        function doSomething();
    }

    class Broom implements Tool
    {

        function doSomething()
        {
            echo "Twang";
        }
    }

    interface Worker
    {
        function work();
    }

    class Handyman implements Worker
    {

        private $tool;

        function work()
        {
            $this->tool->doSomething();
        }

        function setTool(Tool $tool)
        {
            $this->tool = $tool;
        }
    }
}

