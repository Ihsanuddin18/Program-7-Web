<?php
class person {
    var $name;

    function __construct($persons_name) {
        echo "<p>initialize class</p>";
        $this->name = $persons_name; // Menginisialisasi variabel $name
    }

    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }

    function __destruct() {
        echo "<p>end class</p>";
    }
}

// Membuat objek dari kelas Person dan mengirimkan nama sebagai parameter konstruktor
$stefan = new person("Stefan Mischook");
$jimmy = new person("Nick Waddles");

// Menggunakan metode get_name untuk mendapatkan nama dan mencetaknya
echo "Stefan's full name: " . $stefan->get_name() . "<br>";
echo "Nick's full name: " . $jimmy->get_name(); 
?>
