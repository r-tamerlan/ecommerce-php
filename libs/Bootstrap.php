<?php

class Bootstrap
{

    public function __construct()
    {

        @$url = $_GET["url"];
        error_log($url);
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        /*
     $url[0]/$url[1]/$url[2]/$url[3]
       admin/categoriya.php/categoriyaGuncelle/$id
       admin/categoriya.php->categoriyaGuncelle($id)
echo $url[0]; unvan: site - admin
echo $url[1]; controller qovlugunun icindeki konturulcu fayildir. mes.: categories.php
echo $url[2]; controller qovlugunun icindeki konturulcu fayilinin icindeki cagirilan funksiyadir,
                                              mes.: categoriya.php->categoriyalariGetir()
echo $url[3]."<br>"; controller qovlugunun icindeki konturulcu fayilinin icindeki cagirilan
        funksiyaya verilen deyerdir. mes.: categoriya.php->categoriyaGuncelle($id)

        */

        if (@$url[1]) :

            $dosyaadi = 'app/controllers/' . $url[0] . '/' . $url[1] . '.php';

            if (file_exists($dosyaadi)) :
                include $dosyaadi;
                $anacontrolcum = new $url[1];

                if (isset($url[3])) :
                    $methodisim = $url[2];
                    $anacontrolcum->$methodisim($url[3]);
                else:
                    if (isset($url[2])) :
                        $methodisim = $url[2];
                        $anacontrolcum->$methodisim();

                    endif;
                endif;
            else:

                include 'app/controllers/admin/home.php';
                $anacontrolcum = new home();
                $anacontrolcum->homepage();
            endif;
        else:

            include 'app/controllers/admin/home.php';
            $anacontrolcum = new home();
            $anacontrolcum->homepage();
        endif;
    }
}

?>