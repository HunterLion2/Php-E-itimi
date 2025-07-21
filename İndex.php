<?php 

require __DIR__ . '/vendor/autoload.php'; 

/* Yukarıdaki Değeri Kullanma Sebebimiz Aşşağıdakilerdir

✅ Composer paketlerini otomatik yükler
✅ PSR-4 autoloading standardını aktifleştirir
✅ Manuel require yazmayı önler
✅ Modern PHP geliştirme için zorunludur
✅ Güvenli mutlak yol kullanır

*/


use PhpNet\ComposerExample\Vehicles\Car; // NameSpace'leri bu şekilde use kullanarak çağırırız.

$car = new Car();
$car->drive();




?>