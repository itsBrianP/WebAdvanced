<?php
/**
 * Created by PhpStorm.
 * User: theco
 * Date: 24/02/2016
 * Time: 18:16
 */

$een = new voertuig("Audi", "A1", 2012);
$twee = new auto("Volkswagen", "Golf", 1995, 5);
$drie = new vrachtwagen("Mercedes", "kut", 2005, "1000kg");

$een->printVoertuig();
$twee->printVoertuig();
$drie->printVoertuig();
$een->printAantal();

class voertuig
{
    protected $merk;
    protected $type;
    protected $bouwjaar;
    public static $aantal = 0;

   function __construct($merk, $type, $bouwjaar){
       $this->merk = $merk;
       $this->type = $type;
       $this->bouwjaar = $bouwjaar;
       self::$aantal = self::$aantal + 1;
   }

    function printVoertuig(){
        echo "$this->merk/$this->type/$this->bouwjaar<br>";
    }

    function printAantal(){
        echo self::$aantal;
    }

}

class auto extends voertuig
{
    protected $aantalDeuren;

    function __construct($merk, $type, $bouwjaar, $aantaldeuren){
        parent::__construct($merk, $type, $bouwjaar);
        $this->aantalDeuren = $aantaldeuren;
    }

    function printVoertuig(){
        echo "$this->merk/$this->type/$this->bouwjaar/$this->aantalDeuren<br>";
    }
}

class vrachtwagen extends voertuig
{
    protected $laadVermogen;

    function __construct($merk, $type, $bouwjaar, $laadvermogen)
    {
        parent::__construct($merk, $type, $bouwjaar);
        $this->laadVermogen = $laadvermogen;
    }

    function printVoertuig(){
        echo "$this->merk/$this->type/$this->bouwjaar/$this->laadVermogen<br>";
    }
}

