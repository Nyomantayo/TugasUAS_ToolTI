<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "dbUdayana"); // nama host, username, pass (xampp biasanya kosong), nama database

    // ambil data dari tabel
    $result = mysqli_query($conn, "SELECT * FROM tbDosen");
    if(!$result){
        echo mysqli_error($conn);
    }

    if( isset($_POST["submit"]) ){
        $namaDosen = htmlspecialchars($_POST["namaDosen"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $noTlp = htmlspecialchars($_POST["noTlp"]);
        $mataKuliah = htmlspecialchars($_POST["mataKuliah"]);

        // query insert data
        $query = "INSERT INTO tbDosen (namaDosen, alamat, noTlp, mataKuliah) VALUES
                    ('$namaDosen' , '$alamat' , '$noTlp' , '$mataKuliah')
                 ";
        mysqli_query($conn, $query);

        // cek apakah quey berhasil atau tidak
        if(mysqli_affected_rows($conn) > 0){
            echo "
            <script> 
                alert('Data Dosen Berhasil Ditambahkan!');
                document.location.href = 'informasiDosen.php';
            </script>
            ";
        } else{
            echo "
            <script> 
                alert('Data Dosen Gagal Ditambahkan!');
                document.location.href = 'informasiDosen.php';
            </script>
            ";
        }
    }

    if(isset($_POST["cari"])){
        $keywordCari = $_POST["keyword"];
        $query = "SELECT * FROM tbDosen WHERE
            namaDosen LIKE '%$keywordCari%' OR
            alamat LIKE '%$keywordCari%' OR
            noTlp LIKE '%$keywordCari%' OR
            mataKuliah LIKE '%$keywordCari%'
        ";
        $result = mysqli_query($conn, $query);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pusat Informasi Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS_File/style.css">
    </head>

    <body>
        <nav class="navbar navbar-expand bg-dark navbar-dark fixed-top py-3">
            <div class="container">
                <a href="index.html" class="navbar-brand">Pusat<br><span class="kata-kedua">Informasi</span></a>
                <div id="navmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwal.html" class="nav-link">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a href="informasiDosen.php" class="nav-link">Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a href="tentang.html" class="nav-link">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-main">
            <div class="judul-utama">
                <div class="judul">
                    <h1>Informasi Dosen Teknologi Informasi</h1>
                </div>
            </div>

            <div class="pencarian">
                <table class="bukan-tabel">
                    <tr>
                        <td>
                            <form action="" method="post">
                                <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian...">
                                <button type="submit" name="cari">Search</button>
                            </form>
                        </td>
                    </tr>
                    
                </table>
                
            </div>

            <div class="content">
                <table border="1" cellspacing="0" cellpadding="10" class="tabel-utama">
                    <tr>
                        <th>No. </th>
                        <th>Nama Dosen</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Mata Kuliah</th>
                        <th>Aksi </th>
                    </tr>

                    <?php $i=0 ?>
                    <?php while( $row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <?php $i++ ?>
                        <td> <?php echo $i ?> </td>
                        <td> <?php echo $row["namaDosen"]; ?> </td>
                        <td> <?php echo $row["alamat"]; ?> </td>
                        <td> <?php echo $row["noTlp"]; ?> </td>
                        <td> <?php echo $row["mataKuliah"]; ?> </td>
                        <td>
                            <a href="PHP_File/ubah.php?id= <?php echo $row["idDosen"];?>">Ubah</a> |
                            <a href="PHP_File/hapus.php?id= <?php echo $row["idDosen"]; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>

            <div class="sectionTambahDosen">
                <div class="judul">
                    <h3>Tambah Data Dosen</h1>
                </div>
                <form action="" method="post">
                    <table border="0" cellspacing="0" cellpadding="10" class="bukan-tabel">
                        <tr>
                            <td>
                               <label for="namaDosen">Nama Dosen: </label> 
                            </td>
                            <td>
                                <input type="text" name="namaDosen" id="namaDosen" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label for="alamat">Alamat Dosen: </label> 
                            </td>
                            <td>
                                <input type="text" name="alamat" id="alamat" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label for="noTlp">Nomor Telepon Dosen: </label> 
                            </td>
                            <td>
                                <input type="text" name="noTlp" id="noTlp" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label for="mataKuliah">Mata Kuliah: </label> 
                            </td>
                            <td>
                                <input type="text" name="mataKuliah" id="mataKuliah" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="submit">Tambah Data Dosen!</button>
                            </td>
                        </tr>
                        
                    </table>
                </form>
            </div>

            <div class="footer">
                <p class="copyright">Copyright 2023. Nyoman Wiprayanka</p>
            </div>
        </div>
    </body>
</html>