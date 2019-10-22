<?php
require_once 'Vertex.class.php';
require_once 'Vector.class.php';
require_once 'Matrix.class.php';


Matrix::$verbose = True;
//Vertex::$verbose = True;
Vector::$verbose = True;

//print( 'Let\'s start with an harmless identity matrix :' . PHP_EOL );
//$I = new Matrix( array( 'preset' => Matrix::IDENTITY ) );
//print( $I . PHP_EOL . PHP_EOL );

print( 'So far, so good. Let\'s create a translation matrix now.' . PHP_EOL );
$vtx = new Vertex( array( 'x' => 20.0, 'y' => 20.0, 'z' => 0.0 ) );
$vtc = new Vector( array( 'dest' => $vtx ) );
$T  = new Matrix( array( 'preset' => Matrix::TRANSLATION, 'vtc' => $vtc ) );
print( $T . PHP_EOL . PHP_EOL );

print( 'A scale matrix is no big deal.' . PHP_EOL );
$S  = new Matrix( array( 'preset' => Matrix::SCALE, 'scale' => 10.0 ) );
print( $S . PHP_EOL . PHP_EOL );
?>
