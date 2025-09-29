<?php

class Store {
    var $name;
    var $location;
    var $number_of_stores = 1;

    function __construct ( $name, $location, $number_of_stores){
        $this->name = $name;
        $this->location = $location;
        $this->number_of_stores = $number_of_stores;
    }

    public function get_store(){
        echo "Store name: " . $this->name . "\nLocations: " . $this->location . "\nNumber of stores: " . $this->number_of_stores;
    }

    public function get_store_type(){
        if ($this->number_of_stores < 5){
            echo "This is a small scale store with less than 5 locations";
        } else {
            echo "This must be a supermarket with more than 5 locations";
        }
    }
}

$kiosk = new Store('kiosk', 1, 1);
$walmart = new Store('Walmart', 6, 6);

echo "\n";

$kiosk->get_store();
echo "\n";

$kiosk->get_store_type();
echo "\n";


echo "\n";
$walmart->get_store();
echo "\n";
$walmart->get_store_type();

echo "\n";
echo "\n";
