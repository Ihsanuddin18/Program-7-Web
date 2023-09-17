<?php
class Person {
    var $name;

    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }
}

// Membuat objek dari kelas Person
$person = new Person();

// Mengatur nama menjadi "mohammad ihsanuddin"
$person->set_name("mohammad ihsanuddin");

// Mendapatkan nama dan mencetaknya
echo "Nama: " . $person->get_name();
?>
