<!-- <! DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <title>Playfair Cipher</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0;" />
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body> -->
<?php include '../layout/header.php';
include '../layout/sidebar.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<main id="main" class="main">
  <h1>Playfair Cipher</h1>

  <!-- <p> Playfair Cipher mengenkripsi pasangan huruf (digram atau digraf), bukan huruf tunggal seperti pada cipher klasik / tradisional lainnya. Tujuannya untuk membuat analisis frekuensi menjadi sulit sebab frekuensi kemunculan huruf di dalam cipherteks akan menjadi datar.</p>
  <!-- <div id="inSec">
    1. <img src="1.png" alt="1"><br><br>
    2. <img src="2.png" alt="2"><br><br>
    3. <img src="3.png" alt="3"><br><br>
    4. <img src="4.png" alt="4">
  </div> -->
  <div id="inSec">
    <p id="inputT">Keyword:</p>
    <input id="intext" type="text" name="keyword" />
    <button id="subButton" type="button">Submit</button><br />
    <div id="EDMenu">
      <p id="inputT">Select Operation To Proceed:</p>
      <button id="encButton0" type="button">Encrypt</button>
      <button id="decButton0" type="button">Decrypt</button>
    </div>
  </div>
</main>

<!-- need to use "strip" function in encrypt.js -->
<script src="scripts/encrypt.js"></script>
<script src="scripts/index.js"></script>