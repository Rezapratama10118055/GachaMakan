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

     <link rel="stylesheet" type="text/css" href="/css/style.css">
    

    <title><?= $title ?></title>
</head>
<body>
<div class="container mt-5">
    <h1 ><?= $title ?></h1>
    <hr>
    <div class="row">
        <?php foreach ($items as $item): ?>
    <div class="col-sm-3">
        <div class="card <?= strtolower($item['rarity']) ?>-item">
            <?php $img_path = ''; /* inisialisasi variabel img_path */ ?>
            <?php switch ($item['rarity']) {
                case 'Common':
                    $img_path = 'https://img.freepik.com/free-photo/delicious-food-table-view_23-2149139520.jpg?w=740&t=st=1682735512~exp=1682736112~hmac=070742f5f7ca3f83eb7ae31b0b65420312d2bcea00236a11a5f99ce2d3fcea30';
                    break;
                case 'Rare':
                    $img_path = 'https://img.freepik.com/free-photo/top-view-banquet-with-lots-food_52683-101175.jpg?w=740&t=st=1682735558~exp=1682736158~hmac=5920806ce8d35eddc9485e366434c2d4f800d8bf65b23a57ce142806306d2b57';
                    break;
                case 'Epic':
                    $img_path = 'https://img.freepik.com/free-photo/flat-lay-table-full-delicious-food-composition_23-2149141360.jpg?w=740&t=st=1682735607~exp=1682736207~hmac=2e0853661869b3fc4a1a7f1705b7fb6d9ad3cb3f0e9d3632d539a75b43fa2839';
                    break;
                case 'Legendary':
                    $img_path = 'https://img.freepik.com/free-photo/top-view-table-full-delicious-food-assortment_23-2149141340.jpg?w=740&t=st=1682735703~exp=1682736303~hmac=f5c77670345af1fb2fda5174e570572583fb796a7d962ad035b2e855d868e349';
                    break;
            } ?>
            <img class="card-img-top" src="<?= $img_path ?>" alt="<?= $item['rarity'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $item['name'] ?></h5>
                <p class="card-text"><?= $item['rarity'] ?></p>
                <p class="card-text highlight">Selamat Anda Mendapatkan  <?= $item['name'] ?> dan Berhak Memilih Satu Item Yang Ada Pada Paket Tersebut</p>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    </div>
     <hr>
    <!-- //nav -->
    <div class="card text-center">
  <div class="card-header">
   <b>Lihat Daftar Menu Paket Sesuai Hasil Gacha</b>
  </div>
  <div class="card-body">
   
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
          <b>Item F</b>
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
          <b>Item E</b>
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
</div>

<!-- Optional JavaScript; choose one of the two! -->

<script type="text/javascript">
// Mencegah resubmit saat pengguna merefresh halaman
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

// Mendapatkan form
var form = document.getElementById('myForm');

// Menangani pengiriman data form
form.addEventListener('submit', function(e) {
  // Mencegah resubmit
  e.preventDefault();

  // Menjalankan aksi yang sesuai dengan form (misalnya, mengirimkan data ke server melalui Ajax)
  // ...

  // Melakukan redirect setelah pengiriman data
  window.location.href = 'gacha/'; // Ganti dengan URL halaman "terima kasih" yang sesuai
});

</script>






<!-- Option 1: Bootstrap Bundle with Popper -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
