<?php include '../layout/header.php';
include '../layout/sidebar.php';
?>
<main id="main" class="main">

    <h2>Zig Zag Cipher</h2>
    <!-- <p>
        Zig Zag Cipher adalah algoritma kriptografi klasik dengan teknik transposisi kolom dan baris. Teknik transposisi ini menggunakan mutasi karakter pesan asli tidak dapat dibaca tanpa memiliki kunci untuk mengembalikan pesan tersebut ke bentuk semula.</p>
    <img src="1.png" alt="1"><br><br> -->
    <h4>Plaintext</h4>
    <BR>
    <TEXTAREA id="p" name="p" rows="4" cols="50"></TEXTAREA>
    <br><br>
    <P>line =
        <INPUT id="key" name="key" size="5" value=" " type="text">
    </P>
    <P>
        <INPUT name="btnEn" value="Encrypt" onclick="Encrypt()" type="button" class="btn btn-primary">
        <INPUT name="btnDe" value="Decrypt" onclick="Decrypt(this.form)" type="button" class="btn btn-danger">
    </P>
    <P>
    <h4>Ciphertext</h4>
    <BR>
    <TEXTAREA id="c" name="c" rows="4" cols="50"></TEXTAREA>
    </P>
</main>

<script type="text/javascript">
    function Encrypt() {
        plaintext = document.getElementById("p").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
        if (plaintext.length < 1) {
            alert("please enter some plaintext");
            return;
        }
        var key = parseInt(document.getElementById("key").value);
        if (key > Math.floor(2 * (plaintext.length - 1))) {
            alert("key is too large for the plaintext length.");
            return;
        }
        ciphertext = "";
        for (line = 0; line < key - 1; line++) {
            skip = 2 * (key - line - 1);
            j = 0;
            for (i = line; i < plaintext.length;) {
                ciphertext += plaintext.charAt(i);
                if ((line == 0) || (j % 2 == 0)) i += skip;
                else i += 2 * (key - 1) - skip;
                j++;
            }
        }
        for (i = line; i < plaintext.length; i += 2 * (key - 1)) ciphertext += plaintext.charAt(i);
        document.getElementById("c").value = ciphertext;
    }

    function Decrypt(f) {
        ciphertext = document.getElementById("c").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
        if (ciphertext.length < 1) {
            alert("please enter some ciphertext (letters only)");
            return;
        }
        var key = parseInt(document.getElementById("key").value);
        if (key > Math.floor(2 * (ciphertext.length - 1))) {
            alert("please enter 1 - 22.");
            return;
        }
        pt = new Array(ciphertext.length);
        k = 0;
        for (line = 0; line < key - 1; line++) {
            skip = 2 * (key - line - 1);
            j = 0;
            for (i = line; i < ciphertext.length;) {
                pt[i] = ciphertext.charAt(k++);
                if ((line == 0) || (j % 2 == 0)) i += skip;
                else i += 2 * (key - 1) - skip;
                j++;
            }
        }
        for (i = line; i < ciphertext.length; i += 2 * (key - 1)) pt[i] = ciphertext.charAt(k++);
        document.getElementById("p").value = pt.join("");
    }
</script>


<?php include '../layout/footer.php';
?>