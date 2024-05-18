<?php

require("car.php");

class Electric extends car{
    public $bahanbakar = "Listrik";

    public function jalan ($jarak){
        return "Mobil Berjalan Sejauh $jarak Km";
    }
}


?>