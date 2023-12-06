<?php
    // Membuat Multidimensi Array
    $kendaraan = [
        "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
        "mobil" => ["merk" => "Toyota", "type" => "Vios", "Year" => 2016],
        "motor" => ["Honda", "Yamaha", "Suzuki"]
    ];

    // Menampilkan Output
    echo "Ini Array Kendaraan <br><br>";
    echo implode (", ",$kendaraan["transportasi"]),"<br>";
    echo "============================<br>";

    echo "Ini Array Mobil<br><br>";
    echo $kendaraan["mobil"]["merk"].", ".$kendaraan["mobil"]["type"].", ".$kendaraan["mobil"]["Year"],"<br>";
    echo "============================<br>";

    echo "Ini Array Motor<br><br>";
    echo implode (", ",$kendaraan["motor"]),"<br>";

     // Loop Array Multidimensi
//     $ar_jus = [
//         ["buah"=>"Mangga", "Harga"=>8000],
//         ["buah"=>"Alpukat", "Harga"=>10000],
//         ["buah"=>"Durian", "Harga"=>14000]
//     ];

//     foreach($ar_jus as $jus){
//         echo "Jus ".$jus["buah"]." harganya : ".$jus["Harga"]."<br>";
//     }
// ?>
