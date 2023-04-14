<?php 
 
  abstract class BangunDatar{
    abstract protected function hitungLuas();
  }
 
  class Persegi extends BangunDatar{
    protected $sisi = 20;
 
    public function hitungLuas(){
      return pow($this->sisi,2);
    }
  }
 
  class Lingkaran extends BangunDatar{
    protected $jarijari = 25;
    
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }
 
  $persegi = new Persegi();
  echo 'Luas Persegi = '. $persegi->hitungLuas() . "<br>";
 
 
  $lingkaran = new Lingkaran();
  echo 'Luas Lingkaran = '.$lingkaran->hitungLuas() . "<br>";