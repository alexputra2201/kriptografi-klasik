<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kriptography</title>
  </head>
  <body>
    <div class="container"> -->

<?php
include '../layout/header.php';
include '../layout/sidebar.php';
?>
<link rel="stylesheet" href="style.css" />

<main id="main" class="main">
  <h1 class="text-center">Caesar Cipher</h1>

  <!-- <div class="py-3">
    <h3>LANGKAH-LANGKAH
      BAGAIMANA MEMBENTUK CIPHERTEKS DENGAN CAESAR CIPHER</h3>
    <p>- Menentukan besarnya pergeseran karakter
      yang digunakan dalam membentuk cipherteks ke plainteks</p>
    <p>- Menukarkan karakter pada plainteks menjadi cipherteks
      dengan berdasarkan pergeseran yang telah ditentukan sebelumnya
      Menukarkan karakter pada plainteks menjadi cipherteks</p>
    <br>
    Contoh pergeseran 2 karakter :
    <img src="1.png" alt="1">
    <img src="2.png" alt="1">
  </div> -->

  <h2 class="subheader color-red">Encoding</h2>
  <p>Enter a phrase and a key between 0-25 to cipher your message.</p>
  <input id="userEncodeInput" class="user-input" type="text" />
  <input id="cipherEncodeKey" type="number" min="0" max="25" value="0" />
  <h1 class="cipher-output color-red" id="cipherEncodeOutput"></h1>
  <hr />
  <h2 class="subheader color-blue">Decoding</h2>
  <p>Enter an encoded phrase and the key used to decipher your message.</p>
  <input id="userDecodeInput" class="user-input" type="text" />
  <input id="cipherDecodeKey" type="number" min="0" max="25" value="0" />
  <h1 class="cipher-output color-blue" id="cipherDecodeOutput"></h1>
  </div>

</main>

<script src="caesar.js"></script>



<?php
include '../layout/footer.php';
?>