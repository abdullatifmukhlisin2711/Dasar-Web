<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Eveniet fugiat, reprehenderit voluptas a nobis repudiandae nulla praesentium esse voluptatibus,
            quaerat consequatur at placeat ratione qui pariatur.
            Minus, suscipit? Perspiciatis, fugit!";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ". strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum). "<br>";
echo "<p>". strtoupper($loremIpsum). "</p>";
echo "<p>". strtolower($loremIpsum). "</p>";
?>