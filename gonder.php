<?php

if(!$_POST){
    echo "Yanlış Sayfaya Geldiniz";
}
else{
    $isim_soyisim = $_POST["isim_soyisim"];
    $email = $_POST["e_posta"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    $ip = $_SERVER["REMOTE_ADDR"];
    if(empty($isim_soyisim) || empty($email) || empty($konu) || empty($mesaj)){
        echo "Lütfen Tüm Alanları Doldurun";
    }
    else{
      echo("<b> İsim Soyisim: </b>" . $isim_soyisim . "<br>");
      echo("<b> Email: </b>" . $email . "<br>");
      echo("<b> Konu: </b>" . $konu . "<br>");
      echo("<b> Mesaj: </b>" . $mesaj . "<br>");
      echo("<b> IP Adresi: </b>" . $ip . "<br>");
    }

} 





















?>