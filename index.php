<?php
$url = file_get_contents('https://laslucas.com/');
 
 
//creamos nuevo DOMDocument y cargamos la url
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
//obtenemos todos los div de la url
$divs = $dom->getElementsByTagName( 'div' );
 
//recorremos los divs
foreach( $divs as $div ){
    //si encentramos la clase mc-title nos quedamos con el titulo
    if( $div->getAttribute( 'class' ) === 'price' ){
        $title = $div->nodeValue;
    }
    //si encentramos la clase mr-rating nos quedamos con la puntuacion
    if( $div->getAttribute( 'class' ) === 'price' ){
        $rating = $div->nodeValue;
        break;
    }
  }
 
  //pintamos el resultado
  echo 'Titulo: '. $title;
  echo '<br>';
  echo 'Puntuación:' . $rating;
 ?>