<?php
include '../layout/header.php';
include '../layout/sidebar.php';
?>

<main id="main" class="main">
    <h1>Caesar Cipher Box</h1>
    <form>
        <h4>Plaintext</h4><br>
        <textarea name="p" rows="4" cols="50" wrap="soft" placeholder="Plaintext" id="ui"></textarea><br><br>
        <p>a =
            <select name="mult" size="1" id="width">
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
        <p><input name="btnEn" value="Encrypt" onclick="encrypt()" type="button" class="btn btn-primary">
        </p>
        <p>
        <h4>Ciphertext</h4><br>
        <textarea name="c" rows="4" cols="50" wrap="soft" placeholder="Ciphertext" id="encT"></textarea>
        </p>
        <input name="btnDe" value="Decrypt" onclick="decrypt()" type="button" class="btn btn-danger">

        <p>
        <h4>Plaintext hasil decrypt</h4><br>
        <textarea name="c" rows="4" cols="50" wrap="soft" placeholder="plaintext" id="decT"></textarea>
        </p>
    </form>
</main>

<script type="text/javascript">
    function encrypt() {
        let plaintext = document.getElementById("ui").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
        if (plaintext.length < 1) {
            alert("please enter some plaintext");
            return;
        }
        var row = parseInt(document.getElementById("width").value);
        console.log(plaintext);
        console.log(row);
        console.log(plaintext.length);
        let col = 0;
        if ((plaintext.length) % row == 0) {
            col = (plaintext.length) / row;
        } else {
            col = ((plaintext.length) / row) + 1;
        }
        var tempString = "";
        let k = 0;
        for (var i = 0; i < col; i++, k++) {
            k = i;
            for (var j = 0; j < row; j++) {
                if (plaintext[k] != '') {
                    tempString += plaintext[k];
                    k += col;
                } else {
                    break;
                }
            }
        }
        document.getElementById("encT").innerHTML = tempString;
    }

    function decrypt() {
        let cipherText = document.getElementById("encT").value.toLowerCase().replace(/[^-a-z0-9]/g, "");
        if (cipherText.length < 1) {
            alert("please enter some ciphertext");
            return;
        }
        var row = parseInt(document.getElementById("width").value);
        let col = (cipherText.length) / row;
        console.log(cipherText);
        var tempString = "";
        let k = 0;
        for (var i = 0; i < col; i++, k++) {
            k = i;
            for (var j = 0; j < row; j++) {
                if (cipherText[k] != '') {
                    tempString += cipherText[k];
                    k += col;
                } else {
                    break;
                }
            }
        }
        document.getElementById("decT").innerHTML = tempString;
    }
</script>

<?php
include '../layout/footer.php';
?>