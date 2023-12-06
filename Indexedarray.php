<?php
    // Membuat Indexed Array
    $kendaraan = ["Mobil", "Sepeda", "Truk", "Motor", "Bus"];
    // Menapilkan Output 
    echo $kendaraan[0],"<br>";
    echo $kendaraan[1],"<br>";
    echo $kendaraan[2],"<br>";
    echo $kendaraan[3],"<br>";
    echo $kendaraan[4],"<br><br>";

    // Pengulangan/Loop Indexed Array
    $_fruits = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    $jml_data = count($_fruits);

    for($i = 0;$i<$jml_data;$i++){
        echo "Buah - ". "adalah ".$_fruits[$i],"<br>";
        echo "<br>";
    }

    

?>