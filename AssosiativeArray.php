<?php
    // Membuat Assosiative Array
    $login = [
        "id" => 786,
        "pass" => 123,
        "role" => "admin",
        "active" => 1,
        "level" => 1
    ];

    // Menampilkan Output
    echo "id :". $login["id"],"<br>";
    echo "Password :".$login["pass"],"<br>";
    echo "Role :".$login["role"],"<br>";
    echo "Status :".$login["active"],"<br>";
    echo "Level :".$login["level"],"<br><br>";

    // Loop Assosiative Array
    foreach($login as $key => $val){
    echo "Key : " .$key. ", Value ".$val;
    echo "<br>";
    }


?>