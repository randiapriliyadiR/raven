<?php 
// tempat menambahkan router
class Router{
    function routing($router){
        $router->get('/', function() {
            include_once 'tampilan/utama.php';
        });
        // Router Dinamis: /hai/nama
        $router->get('/hai/(\w+)', function ($name) {
            echo 'Hai ' . htmlentities($name);
        });
        // jika halaman tidak ada maka akan dialihkan ke halaman error 404
        $router->set404(function() {
            header('HTTP/1.1 404 Not Found');
            echo "Halaman Tidak Tersedia Error:404";
        });
    }
}
// Petunjuk PCRE-based untuk router dinamis
// \d+ = Satu atau lebih digit (0-9)
// \w+ = Satu atau lebih karakter kata (a-z 0-9 _)
// [a-z0-9_-]+ = Satu atau lebih karakter kata (a-z 0-9 _) dan tanda hubung (-)
// .* = Karakter apa pun (termasuk /), nol atau lebih
// [^/]+ = Semua karakter kecuali /, satu atau lebih
// penjelasan lengkapnya ada pada https://packagist.org/packages/bramus/router
?>