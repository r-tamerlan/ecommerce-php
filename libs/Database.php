<?php

class Database extends PDO
{

    protected $veriler = array();
    protected $bilgi;

    public function __construct()
    {

        parent::__construct('mysql:dbname=electrolab;host=localhost;charset=utf8', "root", "root");

        $this->bilgi = new Bilgi();

    }


    // Burda SQL kodlaridir \/
    public function listele($tabloisim, $kosul = false, $arraycontrol = false)
    {
        if ($kosul == false) :
            $sorgum = "select * from " . $tabloisim;
        else:
            $sorgum = "select * from " . $tabloisim . " " . $kosul;
        endif;
        $son = $this->prepare($sorgum);
        $son->execute();

        if ($arraycontrol == false):
            return $son->fetchAll();
        elseif ($arraycontrol == "ok"):
            return $son->fetch(PDO::FETCH_ASSOC);
        endif;

    }

    public function ekle($tabloisim, $sutunadlari, $veriler, $valuX, $willshowpage = null,$yol=SITE_URL)
    {

        $sorgum = $this->prepare("insert into " . $tabloisim . " (" . $sutunadlari . ") VALUES(" . $valuX . ")");
        if ($willshowpage != null):

            if ($sorgum->execute($veriler)):
                // gelen değerin boşmu dolu olduğunu kontrol
                return $this->bilgi->basarili("EKLEME BAŞARILI", $yol . $willshowpage);
            else:
                return $this->bilgi->hata("HATA OLUŞTU", $yol . $willshowpage);
            endif;
        else:
            $sorgum->execute($veriler);
        endif;

    }

    public function guncelle($tabloisim, $veriler, $kosul, $valu, $willshowpage=null,$yol=SITE_URL)
    {
        $sorgum = $this->prepare("update " . $tabloisim . " set " . $valu . "  where " . $kosul);
        if ($willshowpage != null):

            if ($sorgum->execute($veriler)):
                // gelen değerin boşmu dolu olduğunu kontrol
                return $this->bilgi->basarili("EKLEME BAŞARILI", SITE_URL . $willshowpage);
            else:
                return $this->bilgi->hata("HATA OLUŞTU", $yol . $willshowpage);
            endif;
        else:
            $sorgum->execute($veriler);
        endif;


    }

    public function silme($tabloisim, $kosul, $willshowpage=null,$favControl=false)
    {
        $sorgum = $this->prepare('delete from ' . $tabloisim . ' where ' . $kosul);
     if ($favControl==true):
            $sorgum->execute();
     else:
        if ($sorgum->execute()):
            return $this->bilgi->basarili("SİLME BAŞARILI", SITE_URL . $willshowpage);
        else:
            return $this->bilgi->hata("HATA OLUŞTU", SITE_URL . $willshowpage);
        endif;
     endif;
    }
    // Burda SQL kodlaridir /\
}

?>