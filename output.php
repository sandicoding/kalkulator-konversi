<?php 
/* 
  @author Sandi Pratama
  UTS Pemrograman WEB 2
  repositori https://github.com/sandicoding/kalkulator-konversi
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Kalukator Konversi Bilangan</title>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Codekita</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-link"><a class="link" href="output.php">Output</a></li>
      </ul>
    </div>
  </nav>
  <div class="container mt-10">
    <div class="d-flex justify-content-center align-item-center">
      <div class="card w-80">
        <div class="card-body">
          <h1 class="p-10 center">Hasil Konversi Bilangan</h1>
          <table width="100%" border="1">
            <thead>
              <tr>
                <th>Data Awal</th>
                <th>Type Konversi</th>
                <th>Hasil Konversi</th>
                <th>Waktu Konversi</th>
              </tr>
            </thead>
            <tbody>
              
              <?php 
                $hasilKonversi = fopen("output.txt", "rb");

                while (!feof($hasilKonversi) ) { 
                  $baris = fgets($hasilKonversi);
                  $pecah = explode('|', $baris); 
                  ?>
                    <tr>
                      <td><?php echo isset($pecah[0]) ? $pecah[0] : '' ?></td>
                      <td><?php echo isset($pecah[1]) ? $pecah[1] : '' ?></td>
                      <td><?php echo isset($pecah[2]) ? $pecah[2] : '' ?></td>
                      <td><?php echo isset($pecah[3]) ? $pecah[3] : '' ?></td>
                    </tr>
              <?php }
                fclose($hasilKonversi);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>