#!/usr/bin/php
<?php

if (!file_exists("./products"))
    mkdir("./products");

if (file_exists("./products/passwd"))
    $big_arr = unserialize(file_get_contents("./products/products_list"));
else
    $big_arr = array();

$item = array('id'=>1, 'name'=>"Lebron XV", 'price'=>219.87);
$item['categories'] = array('Basketball', 'Shoes');
$big_arr[] = $item;

$item = array('id'=>2, 'name'=>"ASICS Men's Matflex 5", 'price'=>44.00);
$item['categories'] = array('Boxing', 'Shoes');
$big_arr[] = $item;

$item = array('id'=>3, 'name'=>"Nike Boy's Dry Elite Striped Shorts", 'price'=>19.99);
$item['categories'] = array('Basketball', 'Shorts');
$big_arr[] = $item;

$item = array('id'=>4, 'name'=>"Everlast MMA Gloves", 'price'=>23.96);
$item['categories'] = array('Boxing', 'Gloves');
$big_arr[] = $item;

$item = array('id'=>5, 'name'=>"Everlast New Pro Style Elite Training Gloves", 'price'=>40.39);
$item['categories'] = array('Boxing', 'Gloves');
$big_arr[] = $item;

$big_arr_text = serialize($big_arr);
file_put_contents("./products/products_list", $big_arr_text);

echo file_get_contents("./products/products_list");
?>