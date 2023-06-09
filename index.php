<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la densidad de la Tierra</h2>
  <p>Descripción:</p>
  <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
a) ¿Cuál es la densidad promedio de la Tierra?<br>
b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, cuál serı́a su densidad?<br>
c) Si el radio de la Tierra y su masa se redujera a una
tercera parte, ¿su densidad serı́a la misma? ¿por qué?</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Densidad = Masa/Volumen<br>
    Volumen=(4/3)pi*r*r*r
</section>
<section class="datos">
<h2>Datos:</h2>
   m= 5.97E24 Kg. <br>
   r= 6378 Km.
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a) La densidad de la Tierra es:<br>
    densidad = 5.97E24 Kg/volumen (m) <br>
    volumen= (4/3)*pi*(6378000)*(6378000)*(6378000)</p>

   <p>b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiara:</p>
   <p>La nueva densidad sería:</p>
   <p>densidad = 5.97E24 Kg / volumen_b</p>
   <p>volumen_b = (4/3) * pi * (6378000/3) * (6378000/3) * (6378000/3)</p>

   <p>c) Si el radio de la Tierra y su masa se redujeran a una tercera parte:</p>
   <p>La nueva densidad sería:</p>
   <p>densidad = masa_c / volumen_c</p>
   <p>volumen_c = (4/3) * pi * (6378000/3) * (6378000/3) * (6378000/3)</p>
</section>
<?php
     function calcula_densidad(){
        $PI=3.141592;
        $masa= 5.97E24;
        $radio= 6378e3;
        $volumen= (4/3)*$PI*$radio*$radio*$radio;
        $densidad= $masa/$volumen;
        return $densidad;
     }

     function calcula_densidad_b(){
        $PI=3.141592;
        $masa= 5.97E24;
        $radio_b= 6378e3/3;
        $volumen_b= (4/3)*$PI*$radio_b*$radio_b*$radio_b;
        $densidad_b= $masa/$volumen_b;
        return $densidad_b;
     }

     function calcula_densidad_c(){
        $PI=3.141592;
        $masa_c= 5.97E24/3;
        $radio_c= 6378e3/3;
        $volumen_c= (4/3)*$PI*$radio_c*$radio_c*$radio_c;
        $densidad_c= $masa_c/$volumen_c;
        return $densidad_c;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> a) resultado: densidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
?>

<p>b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiara:</p>
<div id="resultadoB"></div>


<p>c) Si el radio de la Tierra y su masa se redujeran a una tercera parte:</p>
<div id="resultadoC"></div>

</section>
    <footer class="pie">
     Gabriel Luna Bueno 20091122
    </footer>
   </section>
</body>
</html>
