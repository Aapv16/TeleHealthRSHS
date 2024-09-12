<?php

// dibawah ini untuk panggil function
require "functions.php";

// kita cek apakah tombol submit/login sudah ditekan atau belum
if (isset($_POST["login"])) {


  $username = $_POST["username"];
  $password = $_POST["password"];

// selanjutnya kita mau cek satu-satu adakah passwod dan username yang sama di dalam data base
// caranya seperti berikut :


  $result = mysqli_query($conn, "SELECT * FROM user WHERE username ='$user'");

  // cek username

  // kenapa row? karena untuk cek seberapa banyak baris yang dikembalikan dari fungsi select diatas, jika ketemu maka hasilnya 1
  if( mysqli_num_rows($result) ===1 ) {
    // jika ada maka lanjut ke password
    // cara ceknya seperti berikut:
    $row = mysqli_fetch_assoc($result);
  if (password_verify($password, $row["password"]) ){

    header("Location: tell.html")

   }

  }





}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- logo title -->
    <link rel="stylesheet" href="Logo Icon.png" type="image/x-icon" />

    <!--Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- bootstrap logo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!---Fon-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,600&display=swap" rel="stylesheet" />

    <!-- Feater-icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Feater-icon -->

    <!-- style css -->
    <link rel="stylesheet" href="style.css"></a>


    <title>login</title>
  </head>
  <h1>Halaman Login</h1>

  <form action="" method="post" >
    <ul>
      <li>
        <label for="username">username : </label>
        <input type="text" name="username" id="username" >
      </li>
      <li>
        <label for="username">password : </label>
        <input type="password" name="password" id="password" >
      </li>
      <li>
        <button type="submit" > login </button>
      </li>
    </ul>
  </form>

<body >
    








</body>

  <!-- feater icon -->
  <script>
    feather.replace();
  </script>
  <!-- feater icon -->
   <script src="at.js">
    
   </script>

<!-- <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwlvPb-7JftbnWap3iGyG1QWi0Djyvqmn6vonIC1AhBlNFCjoRrqIjOBZSk5JNRQuju3g/exec';
  const form = document.forms['siloam-at-home'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert')

  form.addEventListener('submit',(e) => {
    e.preventDefault();
    // ketika tombol submit dikirim
    // tampilkan tombol loading dan hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');


    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response) => {
      // tampilkan tombol kirim dan hilangkan tombol loading
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      // tampilkan alert
      myAlert.classList.toggle('d-none');
      // reset formnya
      form.reset();
      console.log('Success!', response);
        
      })
      .catch((error) => console.error('Error!', error.message));
      
      });
      
</script> -->

</html>
