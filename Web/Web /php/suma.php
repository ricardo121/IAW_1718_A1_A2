<!DOCTYPE html>
<html lang=" ">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIRONMENT INFO</title>
  </head>
  <body>
    <?php
      echo "<b>Hello Word!!</b>";
	$name="ricardo";
	echo "<br>hello $name</br>"; 

	$n1=12;
	$n2=13;
	echo "<p>La Suma es:" .($n1+$n2). "</p>";
 	echo "<p>La Resta es:" .($n1-$n2). "</p>";
	echo "<p>La Multiplicacion es:" .($n1*$n2). "</p>";
	echo "<p>La division es:" .(round($n1/$n2)). "</p>";

	$va1=2;
	$va2=6;


	if($va2>$va1){
	echo $va2."Es Mayor que".$va1;



	echo rand(0,100);

	
}


   ?>

  </body>
</html>

