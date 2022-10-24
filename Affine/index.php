<?php
include '../layout/header.php';
include '../layout/sidebar.php';
?>


<script type="text/javascript">
    function Encrypt(f) {
        var word, newword, code, newcode, newletter
        var addkey, multkey
        word = f.p.value
        word = word.toLowerCase()
        word = word.replace(/\W/g, "")
        addkey = 0

        for (i = 0; i < f.add.options.length; i++) {
            addkey = addkey + (f.add.options[i].text) * (f.add.options[i].selected)
        }

        multkey = 0

        for (i = 0; i < f.mult.options.length; i++) {
            multkey = multkey + (f.mult.options[i].text) * (f.mult.options[i].selected)
        }

        newword = ""

        for (i = 0; i < word.length; i++) {
            code = word.charCodeAt(i) - 97
            newcode = ((multkey * code + addkey) % 26) + 97
            newletter = String.fromCharCode(newcode)
            newword = newword + newletter
        }

        f.c.value = newword + " "
    }

    function Decrypt(f) {
        var word, newword, code, newcode, newletter
        var addkey, multkey, multinverse

        word = f.c.value
        word = word.toLowerCase()
        word = word.replace(/\W/g, "")
        addkey = 0

        for (i = 0; i < f.add.options.length; i++) {
            addkey = addkey + (f.add.options[i].text) * (f.add.options[i].selected)
        }

        multkey = 0

        for (i = 0; i < f.mult.options.length; i++) {
            multkey = multkey + (f.mult.options[i].text) * (f.mult.options[i].selected)
            //if (i==3) alert(multkey +" + "+f.mult.options[i].text + " * " + f.mult.options[i].selected+" = "+(f.mult.options[i].text) * ( f.mult.options[i].selected));
        }

        multinverse = 1

        for (i = 1; i <= 25; i = i + 2) {
            if ((multkey * i) % 26 == 1) {
                multinverse = i
            }
        }

        newword = ""

        for (i = 0; i < word.length; i++) {
            code = word.charCodeAt(i) - 97
            newcode = ((multinverse * (code + 26 - addkey)) % 26) + 97
            newletter = String.fromCharCode(newcode)
            newword = newword + newletter
        }

        f.p.value = newword.toLowerCase()
    }
</script>

<main id="main" class="main">
    <h1>Affine Cipher</h1>
    <!-- <p>Affine Cipher
        Affine Cipher adalah algoritma kriptografi yang dikembangkan dari metode Caesar Cipher. Algoritma ini merupakan contoh dari kriptografi pertukaran monoalfabet. Affine Cipher melakukan proses enkripsi dengan cara pergeseran karakter dengan substansial matematis. Perbedaan yang mendasar dari algoritma ini adalah pergeseran dilakukan dengan cara melakukan perkalian terhadap suatu bilangan yang relatif prima dengan bilangan yang digunakan pada saat proses dekripsi.</p>
    <img src="1.png" alt=""> -->
    <form>
        <h2>Plaintext</h2><br>
        <textarea name="p" rows="4" cols="50" wrap="soft" placeholder="Plaintext"></textarea><br><br>
        <p>a =
            <select name="mult" size="1">
                <option>1</option>
                <option>3</option>
                <option>5</option>
                <option>7</option>
                <option>9</option>
                <option>11</option>
                <option>15</option>
                <option>17</option>
                <option>19</option>
                <option>21</option>
                <option>23</option>
                <option>25</option>
            </select>
            b =
            <select name="add" size="1">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
            </select>
        </p>
        <p><input name="btnEn" value="Encrypt" onclick="Encrypt(this.form)" type="button" class="btn btn-primary">
            <input name="btnDe" value="Decrypt" onclick="Decrypt(this.form)" type="button" class="btn btn-danger">
        </p>
        <p>
        <h2>Ciphertext</h2><br>
        <textarea name="c" rows="4" cols="50" wrap="soft" placeholder="Ciphertext"></textarea>
        </p>
    </form>
</main>

<?php
include '../layout/footer.php';
?>