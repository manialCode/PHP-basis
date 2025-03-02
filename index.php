<?php 
#Inicializar una nueva sesión de cURL;
const API_URL = "https://www.whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);#ch = Curl Handler
// Indicar que quiero recibir la res de la petición pero no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición y guardarlo */
$res = curl_exec($ch);
$data = json_decode($res, true);//Convierte el json en un array

curl_close($ch);
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Próximos estrenos MCU</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>

<h1>Próximos estrenos de Marvel</h1>
<main>
    <h2>Es: ...</h2>
    <section>
        <img src="<?= $data["poster_url"]; ?>" alt="Poster de la película <?= $data["title"];?>" width="300" style="border-radius: 10px">
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"] ?> días </h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?> </p>
        <p>Siguiente Estreno: <?= $data["following_production"]["title"]; ?> </p>
    </hgroup>
</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    section{
        display: grid;
        place-content: center;
    }

</style>