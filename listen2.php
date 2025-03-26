<?php
$get = $_GET["id"];
$url = file_get_contents("https://$get.radio12345.com");
//creamos nuevo DOMDocument y cargamos la url
$dom = new DOMDocument();
@$dom->loadHTML($url);
//obtenemos todos los div de la url
$divs = $dom->getElementsByTagName( 'div' );

//recorremos los divs
foreach( $divs as $div ){
//si encentramos el id "urladdress" nos quedamos con el titulo
if( $div->getAttribute( 'id' ) === 'urladdress' ){
$title = $div->nodeValue;
}
}
$ur   = trim ($title);
?>