
<?php 
if (isset($_POST['InputNama'])){ 
    $nama = $_POST['nama']; 
    echo "Nama Anda: <b>$nama</b><br>";
}
?>

<?php
if (isset($_POST['InputTeman'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];
    echo "<b>Nama Teman-temanku Belajar PHP: </b><br>";
    echo "1. $nama1 <br>";
    echo "2. $nama2 <br>";
    echo "3. $nama3 <br>";
    echo "4. $nama4 <br>";
}
?>

<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "rizzan" && $pass == "rizzan") {
        echo "<h2>Login berhasil, selamat</h2>";
    } else {
        echo "<h2>Login Gagal, maaf ulang lagi</h2>";
    }
}
?>

<?php
if (isset($_POST['PilihProdi'])){
    $programstudi = $_POST['prodi'];
    echo "Program studi yang saudara pilih adalah: <b><font color='red'>$programstudi</font></b><br>";
}
?>

<?php
if (isset($_POST['PilihBand'])){
    echo "Band favorit saudara adalah: <br>";
    if (isset($_POST['band'])){
        foreach ($_POST['band'] as $band){
            echo "+ $band <br>";
        }
    }
}
?>

<?php
if (isset($_POST['PilihAnime'])){
    $film = $_POST['anime'];
    echo "Film Anime Favorit Saudara adalah: <font color=blue><b>$film</b></font><br>";
}
?>

<?php
if (isset($_POST['PilihListAnime'])){
    $film = $_POST['listanime'];
    echo "Film Anime Favorit Saudara adalah: <font color=blue><b>$film</b></font><br>";
}
?>

<?php
if (isset($_POST['ProsesSaran'])){
    $saran = nl2br($_POST['saran']);
    echo "Kritik/Saran Saudara adalah: <br>";
    echo "<font color=blue><b>$saran</b></font><br>";
}
?>

</body>
</html>
