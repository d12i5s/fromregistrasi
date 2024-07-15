<?php
//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbregistrasimhsw";
$koneksi = mysqli_connect($server, $user, $pass, $database);

//koneksi tombol simpan
if (isset($_POST['bregister'])) {
  $simpan = mysqli_query($koneksi, "INSERT INTO tb_registrasi (nama_mhsw, nim_mhsw, jurusan, email, password)
        VALUES ('$_POST[nama]',
                '$_POST[nim]',
                '$_POST[jurusan]',
                '$_POST[email]',
                '$_POST[password] ')
    ");
  if ($simpan) {
    echo "<script>
        alert ('Simpan Data Sukses');
        document.location='index.php';
        </script>";
  } else {
    echo "<script>
        alert ('Simpan Data Gagal'); 
        document.location ='index.php';
        </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
  <title>Form Registrasi UNCP</title>
</head>
<body>
  <div class="container">
    <div class="animasi-uncp">
      <img src="image/animasiuncp.png" alt="" />
    </div>
    <form action="" method="post" class="form">
      <div>
        <h1>Form Registrasi Mahasiswa</h1>
      </div>

      <div class="form-style">
        <input type="text" name="nama" placeholder="Nama Lengkap" />
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>

      <div class="form-style">
        <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" />
        <i class="fa-solid fa-address-card"></i>
      </div>

      <div class="form-style">
        <i class="fa-solid fa-graduation-cap"></i>
        <select name="jurusan" id="">
          <option>Jurusan</option>
          <optgroup label="Fakultas Teknik Komputer">
            <option value="FTKOM-Informatika">S1 Informatika (Akreditasi B)</option>
          </optgroup>

          <optgroup label="Fakultas Keguruan dan Ilmu Pendidikan">
            <option value="FKIP-PPKN">S1 Pendidikan Pancasila dan Kewarganegaraan (Akreditasi B)</option>
            <option value="FKIP-PBINDO">S1 Pendidikan Bahasa Indonesia (Akreditasi Baik Sekali)</option>
            <option value="FKIP-PBINGG">S1 Pendidikan Bahasa Inggris (Akreditasi B)</option>
            <option value="FKIP-PMTK">S1 Pendidikan Matematika (Akreditasi Baik Sekali)</option>
            <option value="FKIP-PBIO">S1 Pendidikan Biologi (Akreditasi Baik Sekali)</option>
            <option value="FKIP-PGSD">S1 Pendidikan Guru Sekolah Dasar (Akreditasi Baik Sekali)</option>
            <option value="FKIP-S2PMTK">S2 Pendidikan Matematika (Akreditasi Baik Sekali)</option>
          </optgroup>

          <optgroup label="Fakultas Pertanian">
            <option value="FAPERTA-AGROTEKNOLOGI">S1 Agroteknologi (Akreditasi B)</option>
            <option value="FAPERTA-AGRIBISNIS">S1 Agribisnis (Akreditasi B)</option>
          </optgroup>
          <optgroup label="Fakultas Sains">
            <option value="FSAINS-MATEMATIKA">S1 Matematika (Akreditasi B)</option>
            <option value="FSAINS-FISIKA">S1 Fisika (Akreditasi Baik Sekali)</option>
            <option value="FSAINS-KIMIA">S1 Kimia (Akreditasi B)</option>
            <option value="FSAINS-BIOLOGI">S1 Biologi (Akreditasi B)</option>
          </optgroup>
        </select>
      </div>

      <div class="form-style">
        <input type="email" name="email" placeholder="Email" />
        <i class="fa fa-envelope" aria-hidden="true"></i>
      </div>

      <div class="form-style">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="text" name="password" id="passwordInput" placeholder="Kata Sandi" />
        <i id="eyeIcon" class="fa fa-eye" aria-hidden="true"></i>
      </div>
      <div class="form-style">
        <button type="submit" name="bregister">Register</button>
      </div>
    </form>
  </div>
  <script>
    eyeIcon.addEventListener("click", function () {
      if (passwordInput.getAttribute("type") == "password") {
        passwordInput.setAttribute("type", "text");
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.setAttribute("type", "password");
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    });
  </script>
</body>
</html>