<?php

function hitungVoucher($voucher, $bayar){
    switch ($voucher) {
        case "DumbWaysAsik":
            $uang = $bayar;
            if ($uang >= 20000){
                $potongan = $uang*0.5;
                if ($potongan > 20000){
                    $potongan = 20000;
                }
                $uang = $uang - $potongan;
               echo "Uang yang harus di bayar : ".$uang."\n";
               echo "Diskon : ".$potongan."\n";
                $kembalian = $bayar - $uang;
               echo "Kembalian : ".$kembalian."\n";
            }else {
                echo "Nominal tidak cukup, minimal 20000 \n";
                echo "Uang yang harus di bayar : ".$uang."\n";
            }
            break;
        case "DumbWaysMantap":
            $uang = $bayar;
            if ($uang >= 50000){
                $potongan = $uang*0.3;
                if ($potongan > 40000){
                    $potongan = 40000;
                }
                $uang = $uang - $potongan;
               echo "Uang yang harus di bayar : ".$uang."\n";
               echo "Diskon : ".$potongan."\n";
               $kembalian = $bayar-$uang;
               echo "Kembalian : ".$kembalian."\n";
            }else {
                echo "Nominal tidak cukup, minimal 50000 \n";
                echo "Uang yang harus di bayar : ".$uang."\n";
            }
        break;
        default:
            echo "Voucher tidak ada";

    }

}

echo hitungVoucher("DumbWaysMantap", 200000);


?>