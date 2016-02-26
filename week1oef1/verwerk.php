<?php
/**
 * Created by PhpStorm.
 * User: theco
 * Date: 24/02/2016
 * Time: 15:51
 */

include 'mainfile.php';

if (!empty($_GET['jaar'])) {
    $datum = new Datum($_GET['dag'],$_GET['maand'],$_GET['jaar']);
    $datum->toonMaand();
}
