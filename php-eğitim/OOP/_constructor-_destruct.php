<?php

/* Sınıflar (class) 'lar bir plan gibidir , nesneler ise bu planın gerçek dünyada ki temsilidir. */

class Araba2 {
    public $marka;
    public $model;

    // __construct metodu sınıf çalıştığı zaman direkt çalışıcak olan ilk değerdir.

    public function __construct($marka,$model)
    {
        $this->marka = $marka;
        $this->model = $model;
    }

    public function bilgileriGoster() {
        return $this->marka . ' ' . $this->model;
    }
}

$bmw = new Araba2('BMW','X6');
// $bmw->marka = 'BMW';
// $bmw->model = 'X6';

echo $bmw->bilgileriGoster();


?>