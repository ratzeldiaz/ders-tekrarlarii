<?php


class PersonelIslemleri
{

    public $isimSoyisim;
    public $gelir;
    public $gider;

    public function __construct($isim,$gelir,$gider)
    {
        $this->isimSoyisim = $isim;
        $this->gelir = $gelir;
        $this->gider = $gider;
    }

    public function aylikDurumHesapla()
    {
        return ($this->gelir - $this->gider);
    }

    public function yillikDurumHesapla()
    {
        return (($this->gelir - $this->gider) * 12);
    }
}

class ElemanlarDahili extends PersonelIslemleri
{
    /* Firmada Çalışan Personeller */

    public function aylikDurumHesapla()
    {
        return parent::yillikDurumHesapla();
    }

    public function yillikDurumHesapla()
    {
        return "Şirket içindeki personelin yıllık durumu burada hesaplanır.";
    }
}


class ElemanlarHarici extends PersonelIslemleri
{
    /* Firmada Dışı Çalışan Personeller */
}


$dahili = new ElemanlarDahili("Ahmet Yılmaz",25000,2500);
echo $dahili->aylikDurumHesapla();
echo "<br>";
echo $dahili->yillikDurumHesapla();


echo "<br><br><br> Şirket Dışı Eleman:";
$harici = new ElemanlarHarici("Mehmet Yılmaz",2200,25);
echo $harici->aylikDurumHesapla();
echo "<br>";
echo $harici->yillikDurumHesapla();