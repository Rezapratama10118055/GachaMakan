<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

           <link rel="stylesheet" type="text/css" href="/css/styleawal.css">

    <title><?= $title ?> BASINGLAH</title>
</head>
<body>
<div class="container mt-5">
   <h1 style="font-family: 'Segoe UI', sans-serif; font-weight: bold; color: #333;"> <?= $title ?> BASINGLAH</h1>
    <hr>
   <div class="card mt-3" style="background-image: url('https://img.freepik.com/free-photo/colorful-painting-with-black-circle-middle_1340-27685.jpg'); background-size: cover; background-position: center;">
  <div class="card-body">
    <h5 class="card-title" style="color: white; font-family: 'Arial', sans-serif;">Visi</h5>
    <p class="card-text" style="color: white; font-family: 'Arial', sans-serif;">Membantu pasangan dalam menentukan pilihan makanan yang tepat dan tidak melontarkan kata seperti berikut contoh <b>BASINGLAH, BEBAS, TERSERAH.</b></p>
  </div>
</div>



<div class="card mt-3 mb-3" style="background-image: url('https://img.freepik.com/premium-photo/digital-painting-geometric-design-with-words-word-it_867452-1194.jpg'); background-size: cover; background-position: center;">
  <div class="card-body">
    <h5 class="card-title" style="color: white; font-family: 'Arial', sans-serif;">Misi</h5>
    <ul style="color: white; font-family: 'Arial', sans-serif;">
        <li>Menyediakan informasi lengkap tentang menu </li>
        <li>Memberikan rekomendasi makanan yang sesuai dengan preferensi dan kebutuhan nutrisi pasangan.</li>
        <li>Memudahkan pasangan dalam memesan makanan yang di inginkan </li>
        <li>Memberikan pengalaman makan yang menyenangkan dan berkesan bagi pasangan.</li>
    </ul>
  </div>
</div>

<div class="card mt-3 mb-3" style="background-image: url('https://img.freepik.com/free-photo/psychedelic-paper-shapes-with-clouds-sun_23-2149378272.jpg'); background-size: cover; background-position: center;">
  <div class="card-body" style="color: white; font-family: 'Arial', sans-serif;">
    <h5 class="card-title" >Cara Memainkan Gacha</h5>
    <ol>
      <li>Lakukan klik pada tombol gacha yang terletak di paling bawah website</li>
      <li>Maka akan ke halaman hasil, lihat hasil yang ada dapatkan dan pilih 1 menu yang anda inginkan</li>
      <li><b>Minta menu tersebut kepada pasangan anda atau beli sendiri di lokasi terdekat</b></li>
      <li>Sekian dan terimakasih</li>
    </ol>
  </div>
</div>


    <!-- //nav -->
    <div class="card text-center">
  <div class="card-header">
   <b>Daftar Menu Paket</b>
  </div>
  <div class="card-body">
    <h5 class="card-title">Dapatkan Paket Yang Anda Mau</h5>

    <!-- //awalMakananPaket -->
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/free-photo/delicious-food-table-view_23-2149139520.jpg?w=740&t=st=1682735512~exp=1682736112~hmac=070742f5f7ca3f83eb7ae31b0b65420312d2bcea00236a11a5f99ce2d3fcea30" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pilih Makan Common</h5>
        <!-- //listmakan -->
         <ol class="list-group list-group-numbered">
         <b>Item C</b>
         <li class="list-group-item">Mie Instan</li>
         <li class="list-group-item">Telor Dadar</li>
         <li class="list-group-item">Telor Rebus</li>
         <li class="list-group-item">Telor Matasapi</li>
         </ol>
          <b>Item D</b>
          <ol class="list-group list-group-numbered">
         <li class="list-group-item">Mie Ayam</li>
         <li class="list-group-item">Bakso</li>
         <li class="list-group-item">Siomay</li>
         <li class="list-group-item">Nasi Goreng Polos</li>
         <li class="list-group-item">Kwetiau</li>
         <li class="list-group-item">Kentucky Ayam</li>
        </ol>
        <!-- //akhirlistmakan -->
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/free-photo/top-view-banquet-with-lots-food_52683-101175.jpg?w=740&t=st=1682735558~exp=1682736158~hmac=5920806ce8d35eddc9485e366434c2d4f800d8bf65b23a57ce142806306d2b57" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pilih Makan Rare</h5>
        <!-- //listmakan -->
         <ol class="list-group list-group-numbered">
         <b>Item A</b>
         <li class="list-group-item">Nasi Putih + Ayam Goreng</li>
         <li class="list-group-item">Mie Instan + Telor</li>
         <li class="list-group-item">Nasi Putih + Ayam Geprek</li>
        </ol>
        <b>Item B</b>
        <ol class="list-group list-group-numbered">
         <li class="list-group-item">Mie Ayam Spesial</li>
         <li class="list-group-item">Bakso Merapi</li>
         <li class="list-group-item">Sablak</li>
         <li class="list-group-item">Nasi Goreng Spesial</li>
         <li class="list-group-item">Kwetiau Spesial</li>
         <li class="list-group-item">Kentucky Spesial</li>
        </ol>
        <!-- //akhirlistmakan -->
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/free-photo/flat-lay-table-full-delicious-food-composition_23-2149141360.jpg?w=740&t=st=1682735607~exp=1682736207~hmac=2e0853661869b3fc4a1a7f1705b7fb6d9ad3cb3f0e9d3632d539a75b43fa2839" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pilih Makan Epic</h5>
        <!-- //listmakan -->
         <ol class="list-group list-group-numbered">
         <li class="list-group-item">Nasi Padang</li>
         <li class="list-group-item">Ayam KFC</li>
         <li class="list-group-item">Going TO Lamongan</li>
         <li class="list-group-item">Ayam AW</li>
        </ol>
        <!-- //akhirlistmakan -->
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://img.freepik.com/free-photo/top-view-table-full-delicious-food-assortment_23-2149141340.jpg?w=740&t=st=1682735703~exp=1682736303~hmac=f5c77670345af1fb2fda5174e570572583fb796a7d962ad035b2e855d868e349" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class="card-title">Pilih Makan Legendary</h5>
        <!-- //listmakan -->
         <ol class="list-group list-group-numbered">
         <li class="list-group-item">Spesial Bebas Memilih Satu Makanan dan Minuman</li>
        </ol>
        <!-- //akhirlistmakan -->
      </div>
    </div>
  </div>
</div>
<!-- //akhir card paket -->

  </div>
  <div class="card-footer text-muted">
    Lakukan Gacha Untuk Menentukan Pilihan Anda
  </div>
</div>
<!-- //akhir -->
<!-- //gacha -->
<div class="modal" tabindex="-1" role="dialog" id="loading-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body d-flex justify-content-center align-items-center">
        <div class="spinner-border" role="status">
          <span class="sr-only"></span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-center">
  <form action="/gacha/roll" method="post" class="m-4" id="gacha-form">
    <button type="submit" class="btn btn-primary" id="gacha-button">Gacha!</button>
  </form>
</div>



</div>

<!-- Optional JavaScript; choose one of the two! -->
<script>
  var form = document.getElementById("gacha-form");
  var button = document.getElementById("gacha-button");
  var modal = document.getElementById("loading-modal");

  form.addEventListener("submit", function(event) {
    event.preventDefault();
    button.disabled = true;
    modal.style.display = "block";
    setTimeout(function() {
      form.submit();
    }, 2000); // contoh delay 2 detik
  });
</script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>