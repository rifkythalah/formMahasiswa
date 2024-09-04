<?php
$koneksi = mysqli_connect("localhost", "root", "", "form");

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$saran = $_POST['saran'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$submit = $_POST['submit'];

$query = "INSERT INTO form VALUES('$nama', '$nim', '$kelas', '$email', '$saran', '$jenis_kelamin', '$submit')";

mysqli_query($koneksi, $query);
?>

<html>
<head>
    <title>Data Akun</title>
    <link rel="stylesheet" type="text/css" href="proses.css">
</head>
<body>
    <div class="container">
        <h2>Data Akun Mahasiswa</h2>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $nim; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: <?php echo $kelas; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Saran</td>
                <td>: <?php echo $saran; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?php echo $jenis_kelamin; ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" onclick="window.location.href='index.php'">Kembali</button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
