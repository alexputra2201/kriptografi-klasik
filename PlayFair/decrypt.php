<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Decryption Service</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body> -->
<?php include '../layout/header.php';
include '../layout/sidebar.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<main id="main" class="main">
  <p id="encryptLink"><a href="encrypt.php">Encrypt</a></p>
  <h1>Playfair Cipher</h1>


  <div id="inSec">
    <div id="decForm">
      <p id="inputC">Ciphertext</p><br>
      <textarea id="textC" name="cipherM"></textarea>
      <button id="decButton" type="button">Decrypt</button>
    </div>
  </div>
  <pre id="decT"></pre>
</main>

<script src="scripts/decrypt.js"></script>
<script src="scripts/encrypt.js"></script>
</body>

</html>