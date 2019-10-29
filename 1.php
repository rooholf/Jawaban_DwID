<?php
    function ganjilGenap($angka){
        if ($angka%2 == 0 ){
            echo "genap \n";
            if($angka%4 == 0){
                echo "ini angka kelipatan 4 genap \n";
            }
        }else{
            echo "ganjil \n";
        }
    }
    echo ganjilGenap(10);
?>