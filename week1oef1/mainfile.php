<HTML>
<form action="verwerk.php" method="get">
    Dag:<br>
    <input type="text" name="dag"><br>
    Maand:<br>
    <input type="text" name="maand"><br>
    Jaar:<br>
    <input type="text" name="jaar"><br><br>
    <input type="submit" value="submit">
</form>
<br>
<br>
<form action="verwerkpost.php" method="post">
    Dag:<br>
    <input type="text" name="dag"><br>
    Maand:<br>
    <input type="text" name="maand"><br>
    Jaar:<br>
    <input type="text" name="jaar"><br><br>
    <input type="submit" value="submit">
</form>
</HTML>

<?php
/**
 * Created by PhpStorm.
 * User: theco
 * Date: 24/02/2016
 * Time: 14:57
 */
class Datum{
    public $dag;
    public $maand;

    /**
     * @return int
     */
    public function getDag()
    {
        return $this->dag;
    }

    /**
     * @param int $dag
     */
    public function setDag($dag)
    {
        $this->dag = $dag;
    }

    /**
     * @return int
     */
    public function getMaand()
    {
        return $this->maand;
    }

    /**
     * @param int $maand
     */
    public function setMaand($maand)
    {
        $this->maand = $maand;
    }

    /**
     * @return int
     */
    public function getJaartal()
    {
        return $this->jaartal;
    }

    /**
     * @param int $jaartal
     */
    public function setJaartal($jaartal)
    {
        $this->jaartal = $jaartal;
    }
    public $jaartal;

    function __construct($dag=1,$maand=1,$jaartal=2008)
    {
        $this->dag = $dag;
        $this->maand = $maand;
        $this->jaartal = $jaartal;
    }

    function toon(){
        echo "$this->dag/$this->maand/$this->jaartal";
    }

    function toonMaand(){
      $maanden = array(
            "1" => "Januari",
            "2" => "Februari",
            "3" => "Maart",
            "4" => "April",
            "5" => "Mei",
            "6" => "Juni",
            "7" => "Juli",
            "8" => "Augustus",
            "9" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "December",
        );

        echo "$this->dag/";
        echo $maanden[$this->maand];
        echo "/$this->jaartal";
    }
}