<?php
/**
 * Created by PhpStorm.
 * User: theco
 * Date: 26/02/2016
 * Time: 13:18
 */

namespace test {

    include 'be\pxl\workers\Setterinjection.php';

    use \be\pxl\workers as directory;

    $jef = new directory\Handyman();
    $jef->setTool(new directory\Broom());
    $jef->work();
}