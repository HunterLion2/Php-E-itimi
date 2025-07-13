<?php 

/* Switch case modeli (if else'i bildiğim için atladım) */

// Switch case özellikle sabit değer karşılaştırmalarında kullanılır.(if else yerine).

/* switch(ifade) {
    case deger1:
        // deger1 ile eşleşirse çalışıcak kod budur.
        break; // Bu değer de çalıştıktan sonra çıkış yapılmasını sağlar.
    case deger2:
        // deger2 ile eşleşirse çalıştırılacal kod
        break
    default: 
        // Hiçbir koşuş sağlanmazsa çalıştırılacak kod bloğudur.
} 
*/

$gun = "Perşembe";

switch ($gun) {
    case "Cumartesi":
        echo "Bugün Cumartesi";
        break;
    case "Pazartesi":
        echo "Bugün Pazartesi";
    default:
        echo "Günler eşleşmedi";
}

?>