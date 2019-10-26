<?php 
function kembalian($harga, $bayar){

    $uang = $bayar - $harga;
    $cashback = $harga*0.1;
    

    if ($harga >=200000){
        echo "anda mendapatkan cashback sebanyak ".$cashback."\n";
        $uang = $uang + $cashback;
        echo "Total kembalian anda menjadi ".$uang."\n";
    }



    $u50 = intdiv($uang, 50000);
    $uang = $uang%50000;
    $u20 = intdiv($uang, 20000);
    $uang = $uang%20000;
    $u10 = intdiv($uang, 10000);
    $uang = $uang%10000;
    $u5 = intdiv($uang, 5000);
    $uang = $uang%5000;


    if ($u50 != 0){echo $u50."x 50.000 \n";}
    if ($u20 != 0){echo $u20."x 20.000 \n";}
    if ($u10 != 0){echo $u10."x 10.000 \n";}
    if ($u5 != 0){echo $u5."x 5.000 \n";}
    if ($uang<5000 && $uang != 0){echo $uang." Disumbangkan karena tidak ada pecahan dibawah 5000 \n";}


}


echo kembalian(200000, 285200);
?>
