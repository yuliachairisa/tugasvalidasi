<html>
    <body>
<?php
    $nama = $NIM = "";
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
            $nama = $_POST["nama"];
            $NIM = $_POST["NIM"];
    }
?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br>
        NIM: <input type="number" name="NIM" maxlength="10"><br>
        <input type="submit">
    </form>
<?php
        if(!empty($nama) && !empty($NIM) ){
            echo "<h2>Selamat Datang</h2>";
            echo $nama . "<br>" . $NIM;
        }
?>
    </body>
</html>