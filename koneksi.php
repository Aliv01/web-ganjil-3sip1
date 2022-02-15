<!-- DIMOHON UNTUK TIDAK MENGUBAH HALAMAN INI TANPA IZIN -->

<?php 
$conn = mysqli_connect("localhost","root","","data_3sip1");
// tambahkan user baru ke database
function registrasi($data){
    global $conn;

    $username   = strtolower(stripslashes($data["username"]));
    $password   = mysqli_real_escape_string($conn, $data["pass"]);
    $password2  = mysqli_real_escape_string($conn, $data["pass2"]);
    $name       = mysqli_real_escape_string($conn, $data["name"]);
    $alamat     = mysqli_real_escape_string($conn, $data["place"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ){
        echo "<script>
                alert ('Username Sudah terdaftar')
            </script>";
        return false;
    }

    // Cek konfirmasi password Password 
    if ($password !== $password2){
        echo "<script>
            alert('Konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    //password di Enkripsi
   $password = password_hash($password, PASSWORD_DEFAULT);
   //var_dump(($password)); die; 

   // tambahkan user baru ke database
mysqli_query($conn, "INSERT INTO users VALUES ('NULL', '$username', '$password', '$name', '$alamat')");

return mysqli_affected_rows($conn);
    }
?>