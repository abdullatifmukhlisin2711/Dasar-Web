<?php
$menu =[
[
    "nama" => "Beranda"
],
[
    "nama" => "Berita",
    "subMenu" =>[
        [
            "nama" => "Wisata",
            "subMenu" => [
                [
                    "nama" => "Pantai"
                ],
                [
                    "nama" => "Gunung"
                ]
            ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
    ]
                ],
                [
                    "nama" => "Tentang"
                ],
                [
                    "nama" => "Kontak"
                ],
            ];
            function tampilkanMenuBertingkat(array $menu){
                echo "<ul>";
                foreach($menu as $key => $item){
                    echo "<li>";
                    echo $item['nama'];
                    if(isset($item['submenu'])) {
                        echo "<ul>";
                        tampilkanMenuBertingkat($item['submenu']);
                        echo "</ul>";
                    }
                    echo"</li>";
                }
                echo "</ul>";
            }
            tampilkanMenuBertingkat($menu);
            ?>