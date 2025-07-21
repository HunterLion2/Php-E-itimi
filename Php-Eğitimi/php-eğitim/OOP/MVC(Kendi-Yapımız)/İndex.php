<?php 

error_reporting(0);

// spl_autoload_register() biz bu fonksüyonu her sınıf için ayrı ayrı require yazmak zorunda kalmamak için yaparız.
// Bu sayede herhangi bir değeri çağırmak istediğimiz zaman o değer otomatik gelir.

spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/classes/' . $class_name . '.php';

    if(file_exists($file)) {
        require $file;
    }

});


/* 

Autoloading Nedir?

Autoloading, PHP'nin gerekli sınıf dosyalarını otomatik yüklemesini sağlayan bir mekanizmadır.

*/

$car = new Car();
$car->drive();

$bike = new Bike();
$bike->ride();

?>