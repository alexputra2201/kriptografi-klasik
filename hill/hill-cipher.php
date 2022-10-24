<!-- <!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Hill Cipher</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0;">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body> -->

<?php
include '../layout/header.php';
include '../layout/sidebar.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">

<main id="main" class="main">
  <h1>Hill Cipher</h1>
  <!-- <div class="inSec">
    <p>Hill Cipher merupakan salah satu algoritma kriptografi kunci simetris yang memiliki beberapa kelebihan dalam enkripsi data. Algoritma Hill Cipher menggunakan matriks berukuran m x m sebagai kunci untuk melakukan enkripsi dan dekripsi. Dasar teori matriks yang digunakan dalam Hill Cipher antara lain adalah perkalian antar matriks dan melakukan invers pada matriks.</p>
    <img src="1.png" alt="">
  </div> -->
  <div id="inSec">
    <p id="inputTM">Choose Key Matrix </p><br>
    <div id="EDMenu">
      <button id="enhButton0" type="button">Encrypt</button>
      <button id="dehButton0" type="button">Decrypt</button>
    </div>


    <select id="choice">
      <option value="m22">2 X 2 Matrix</option>
      <option value="m33">3 X 3 Matrix</option>
    </select>

    <form id="m22">
      <input id="tw0" type="number" name="index" min="0" max="25">
      <input id="tw1" type="number" name="index" min="0" max="25"> <br />
      <input id="tw2" type="number" name="index" min="0" max="25">
      <input id="tw3" type="number" name="index" min="0" max="25">
    </form>


    <form id="m33">
      <input id="tr0" type="number" name="index" min="0" max="25">
      <input id="tr1" type="number" name="index" min="0" max="25">
      <input id="tr2" type="number" name="index" min="0" max="25">
      <input id="tr3" type="number" name="index" min="0" max="25">
      <input id="tr4" type="number" name="index" min="0" max="25">
      <input id="tr5" type="number" name="index" min="0" max="25">
      <input id="tr6" type="number" name="index" min="0" max="25">
      <input id="tr7" type="number" name="index" min="0" max="25">
      <input id="tr8" type="number" name="index" min="0" max="25">
    </form>

    <button id="subButtonH" type="button">Submit</button><br>

  </div>
</main>

<!-- need to use "strip" function in encrypt.js -->
<script src="scripts/util.js"></script>
<script src="scripts/storage.js"></script>
<script src="scripts/index.js"></script>


<?php
include '../layout/footer.php';
?>