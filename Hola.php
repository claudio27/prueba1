<?php

class Persona{

public function saludo(){

print "Hola mundo \n";


}

public function ver(){

	print "También se puede ver BitBucket";

}


}

$claudio = new Persona();
$otro = new Persona();
$any = new Persona();


$claudio->saludo();
$otro->saludo();
$any->ver();
// otro objeto mas


?>
