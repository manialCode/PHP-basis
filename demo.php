<?php 
// Creación de variables $ + nombre = valor;
$nombre = 'Carlos';
$isDev = true;
$edad = 15;
//tipado débil, dinámico y gradual
var_dump($edad);
is_bool($isDev);

// comillas dobles permiten interpolación de cadenas
$output = "Saludos desde una variable, soy \"$nombre\"";
$output .=" y tengo $edad años";
//!comillas simples no permiten interpolación

// Variables globales
define("Picture", "https://avatars.githubusercontent.com/u/100158273?v=4");
// ! Aunque se repita en algún lugar del código, el proyecto no peta, si no que tira un warning. Una practica que se recomienda es que se tengan las constantes globales en un solo fichero.

// Constantes locales
const email = "falso@gmail.com";
// No funcionan en runtime, solo en tiempo de compilación
// Son variables estáticas, no se pueden modificar
// Se recomienda usarlas en clases, para definir constantes de clase
 $isOld = $edad > 40;
 $outputAge = match(true){
     $edad < 10,=> "sos un pibe todavía",
     $edad < 16, => "Falta todavía, falta",
     $edad < 24,=> "Ya estás grande",
    default => "Ya estás viejo"
 };


$bestLanguages = ["php", 1, "js", "python", "ruby", "java", 3, 4, 5];
//  !siempre separar la lógica de la vista
$output .= " y me gustan los lenguajes de programación: $bestLanguages[0]";
?>

<?php

// Array con key personalizados
$person = [
    'name' => 'Carlos',
    'age' => 15,
    'hobbies' => ['programar', 'leer', 'jugar'],
    'languages' => ['php', 'js', 'python', 'ruby', 'java']
];
 ?>

<!-- Estructura de plantilla condicional -->
<?php if($isDev) : ?>
    <h2>Eres un dev</h2>
<?php elseif(!$isOld) : ?>
    <!-- no se puede separar el else/if -->
    <h2>No eres viejo</h2>
<?php else : ?>
    <h2>Eres viejo</h2>
<?php endif; ?>

<p> ACA <?=$outputAge?> </p>
<img src="<?= Picture ?>" alt="Carlos" width="100" height="100">
<h1>
    <?=$output;//salida que considere el archivo?>
</h1>

<ul>
    <?php foreach ($bestLanguages as  $lang) : ?>
        <li><?= $lang ?></li>
        <?php endforeach; ?>
</ul>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>