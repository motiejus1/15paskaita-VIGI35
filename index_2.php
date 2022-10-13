<?php
//Statines savybes ir metodai

//klase - yra objekto sablonas
//objektas - tai tam tikras kintamasis, turintis savybes ir metodus, sukurtas pagal klase


//Kol nera sukuriamas objektas, visas klases kodas nevykdomas

//Skaiciuotuvas
class Skaiciuotuvas {
    public $a;
    public $b;


    //statine savybe
    public static $pi = 3.14;
    public $e = 2.71;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        self::$pi = 3.1415;

        // this-> - tai objekto savybems ir metodams
        // self:: - tai statinei savybei ir metodui
    }


    //jeigu metodas naudoja klases savybes, jisai negali buti statinis

    public function sudeti() {
        return $this->a + $this->b;
    }

    public function atimti() {
        return $this->a - $this->b;
    }

    public function dauginti() {
        return $this->a * $this->b;
    }

    public function dalinti() {
        return $this->a / $this->b;
    }

    public function kelimasLaipsniu() {
        return pow($this->a, $this->b);
    }

    public function laipsniaiIRadianus() {
        return $this->a * $this->pi / 180;
    }

    public static function milesIkm($a) {
        return $a * 1.609344;
    }

    //Statiniai metodai ir savybes gali
    //buti paveldimos
    //t.y. klase gali paveldeti statinius metodus ir savybes
    //ju as negaliu perasyti!!!!!!
    //konstantos(pi,e) - statines savybes
    //metodai, kurie galimai gali buti panaudoti ne tik objekte, bet ir bet kur kode - statiniai metodai

    //class KonvertavimoIrankiuDezesKlase {
    //public static function milesIkm($a) {
    //return $a * 1.609344;
    //}
    //public static function milesIkm($a) {
    //return $a * 1.609344;
    //}
    //public static function milesIkm($a) {
    //return $a * 1.609344;
    //}
    //public static function milesIkm($a) {
    //return $a * 1.609344;
    //}

    // }
}

//$skaiciuotuvas = new Skaiciuotuvas(2, 3);  //vykdo visa klases koda, kuris yra __construct metode, perziuri visa klase ir sukuria objekta

//mylias paversti i kilometrus
// $skaiciutuvas = new Skaiciuotuvas(2, 3); //
// echo $skaiciutuvas->milesIkm();

//pasiekti metoda tiesiai is klases nekuriant objekto

//Statinis metodas - toks klases metodas, kuris gali buti pasauktas nesukuriant objekto
//Statine savybe - tokia savybe, kuri gali buti panaudota nesukuriant objekto

//kreipiames i statine savybe

echo Skaiciuotuvas::$pi;

echo Skaiciuotuvas::milesIkm(2);