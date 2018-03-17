<?php
require "./libs/rb.php";

//echo "test";
//echo "<br>";
//echo "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

function dump ($what){
    echo"<pre>";
    print_r($what);
    echo"</pre>";
}

R::setup( 'mysql:host=127.0.0.1;dbname=tiktak','root', '' );
//запомня връзката само и прави вкл само при необходимост
//R::setup('mysql:127.0.0.1; dbname=tiktak;charset=utf8', 'root', '');

// докато разработвам сайт, а в режим production TRUE
//R::freeze(false);

if (!R::testConnection()){
    echo "Няма връзка с базата данни";
}


//READ - зареждаме запис от таблица като bean (tablename, id)
$product = R::load('product', 1);
//dump($product);
$product ->foryou = "Mitko";
echo "Цената на продукт " . $product ->title . "с id 1 e ". $product-> old_price;
echo "<br>";




//UPDATE
$pr = R::load("product", 1);
$pr ->old_price =155;
R::store($pr);
echo "Промоция на продукт " . $product ->title . "с id 1 e ". $product-> price;
echo "<br>";

//dump($p) ;

$user = R::dispense("user");
$user ->foryou = "Mitko";
R::store($user);

