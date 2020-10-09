<?php
$produk = [
    ["Makanan", "Slai-Olai", 10000,"1.jpg"],
    ["Minuman", "Tah Pucuk", 4500,"2.jpg"],
    ["Makanan", "Kacang Dua Kelinci", 12000,"3.jpg"],
    ["Minuman", "Frestea", 7500,"4.jpg"],
    ["Obat", "Nagatal", 45000,"14.jpg"],
    ["Makanan", "Silver Queen", 21000,"5.jpg"],
    ["Minuman", "Nutri Sari", 9500,"6.jpg"],
    ["Minuman", "mangga", 12500,"7.jpg"],
    ["Makanan", "mie instan", 2500,"8.jpg"],
    ["Minuman", "nutri sari", 8000,"9.jpg"],
    ["Minuman", "sari kurma", 23000,"10.jpg"],
    ["Minuman", "madu tj", 21000,"11.jpg"],
    ["Gandum", "quaker", 30000,"12.jpg"],
    ["Obat", "Omepros", 50000,"13.jpg"]
];
$temp_arr=[];
foreach($produk as $key){
    $temp_arr[]=$key[0];
}
$filter=array_unique($temp_arr);

foreach($filter as $value){
    echo $value.PHP_EOL;
}



// foreach($produk as $key){
//     echo $key[0],$key[1],$key[2].PHP_EOL;
// }
