<?php
$get = $_GET["id"];
$url = file_get_contents("https://uk19freenew.listen2myradio.com/live.mp3?typeportmount=s1_26271_stream_956793823");
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