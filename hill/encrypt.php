<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Encryption Service</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body> -->

<?php include '../layout/header.php';
include '../layout/sidebar.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<main id="main" class="main">
  <p id="Decrypt"><a href="decrypt.php">Decrypt</a></p>
  <h1>Hill Cipher</h1>

  <div id="inSec">
    <div id="encForm">
      <p id="inputP">Plaintext </p><br>
      <textarea id="textP" name="plainM"></textarea>
      <button id="encButton" type="button">Encrypt</button>
    </div>
  </div>
  <pre id="encT"></pre>
</main>

<script src="scripts/util.js"></script>
<script src="scripts/encrypt.js"></script>
<script src="scripts/storage.js"></script>
</body>

</html>