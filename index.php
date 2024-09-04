<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action="proses.php" method="POST">
            <fieldset>
                <legend>FORM MAHASISWA</legend>
                <p>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama lengkap..." required />
                </p>
                <p>
                    <label for="nim">Nim</label>
                    <input type="text" id="nim" name="nim" placeholder="Nim..." required />
                </p>
                <p>
                    <label for="kelas">Kelas</label>
                    <select id="kelas" name="kelas" required>
                        <option value="T3A">T3A</option>
                        <option value="T3B">T3B</option>
                        <option value="T3C">T3C</option>
                        <option value="T3D">T3D</option>
                        <option value="T3E">T3E</option>
                    </select>
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email..." required />
                </p>
                <p>
                    <label for="saran">Saran</label>
                    <textarea id="saran" name="saran" placeholder="Masukkan saran..."></textarea>
                </p>
                <p class="gender">
                    <label>Jenis Kelamin</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" required /> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" required /> Perempuan</label>
                </p>
                <p>
                    <label>Hobi</label>
                    <label><input type="checkbox" name="hobi" value="bola">bola</label>
                    <label><input type="checkbox" name="hobi" value="basket">basket</label>
                    <label><input type="checkbox" name="hobi" value="renang">renang</label>
                </p> 
                <p class="submit">
                    <input type="submit" name="submit" value="Daftar" />
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
