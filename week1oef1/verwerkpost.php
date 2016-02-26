<?php
/**
 * Created by PhpStorm.
 * User: theco
 * Date: 24/02/2016
 * Time: 16:11
 */

include 'mainfile.php';

if (!empty($_POST['jaar'])) {
    $datum = new Datum($_POST['dag'],$_POST['maand'],$_POST['jaar']);
    $datum->toonMaand();
}