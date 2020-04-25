<?php 
	session_start();

	include_once('proses.php'); 
  	$hasilKonversi = $hasil == 'batch' ? '' : file_get_contents('hasil.txt');
	//MAAP ARRAY NYA GK DI LANJUTIN TERKENDALA MASALAH KERJAAN MOHON MAAAF PENGERJAAN DEADLINE
	//SEKALI LAGI MAAF KALU TIDAK SAMA PERSIS YANG DI SOAL 
	$kon = [
		[
			"name" => "Biner Ke Desimal",
			"val" => "bd"
		],
		[
			"name" => "Desimal Ke Biner",
			"val" => "db"
		],
		[
			"name" => "Binner Ke Oktal",
			"val" => "bo"
		],
		[
			"name" => "Oktal Ke Binner",
			"val" => "ob"
		],
		[
			"name" => "Binner Ke Hexadesimal",
			"val" => "bh"
		],
		[
			"name" => "Hexadesimal Ke Biner",
			"val" => "hb"
		]
	];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Welcome 😽</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Codekita</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-link"><a class="link" href="output.php">Output</a></li>
	    </ul>
	  </div>
	</nav>

	<!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Welcome, <?php echo $_SESSION['user']; ?></h1>
	    <p class="lead">Aplikasi ini adalah aplikasi Kakulator Konversi yang mempunyai fitur</p>
	    <br>
		<ul class="list-group">
		  <li class="list-group-item">Bilangan biner ke desimal dan sebaliknya</li>
		  <li class="list-group-item">Bilangan biner ke oktal dan sebaliknya</li>
		  <li class="list-group-item">Bilangan biner ke hexadesimal dan sebaliknya</li>
		  <li class="list-group-item">Bilangan oktal ke desimal dan sebaliknya</li>
		  <li class="list-group-item">Bilangan oktal ke hexadesimal dan sebaliknya</li>
		  <li class="list-group-item">Bilangan desimal ke hexadesimal dan sebaliknya</li>
		</ul>
	  </div>
	</div>

	

	<div class="container mt-10">
    <div class="d-flex justify-content-center align-item-center">
      <div class="card w-30">
        <div class="card-body">
          <h1 class="p-10 center">Konversi Bilangan 😽🎉🎉</h1>
          <form action="home.php" name="calculator" class="form-input mt-10" method="POST">
            <select name="menu" id="menu" class="form-control shadow" style="font-size: 20px;">
              <option value="d2b">Desimal Ke Binner</option>
              <option value="d2o">Desimal Ke Octal</option>
              <option value="d2h">Desimal Ke Hexadesimal</option>
              <option value="b2d">Binner Ke Desimal</option>
              <option value="b2o">Biner Ke Octal</option>
              <option value="b2h">Biner Ke Hexadesimal</option>
              <option value="o2d">Octal Ke Desimal</option>
              <option value="o2b">Octal Ke Biner</option>
              <option value="o2h">Octal Ke Hexadesimal</option>
              <option value="h2d">Hexadesimal Ke Desimal</option>
              <option value="h2b">Hexadesimal Ke Biner</option>
              <option value="h2o">Hexadesimal Ke Octal</option>
            </select>
            <input type="text" name="display" value="<?php echo $hasilKonversi ?>" placeholder="masukkan bilangan" class="form-control shadow mt-10" readonly>
            <div class="d-flex justify-content-between mt-10">
              <input type="button" value="1" class="btn w-100 shadow m-5" onclick="calculator.display.value += '1'">
              <input type="button" value="2" class="btn w-100 shadow m-5" onclick="calculator.display.value += '2'">
              <input type="button" value="3" class="btn w-100 shadow m-5" onclick="calculator.display.value += '3'">
              <input type="button" value="4" class="btn w-100 shadow m-5" onclick="calculator.display.value += '4'">
              <input type="button" value="A" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'A'">
              <input type="button" value="B" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'B'">
              <input type="button" value="C" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'C'">
            </div>
            <div class="d-flex justify-content-between">
              <input type="button" value="5" class="btn w-100 shadow m-5" onclick="calculator.display.value += '5'">
              <input type="button" value="6" class="btn w-100 shadow m-5" onclick="calculator.display.value += '6'">
              <input type="button" value="7" class="btn w-100 shadow m-5" onclick="calculator.display.value += '7'">
              <input type="button" value="8" class="btn w-100 shadow m-5" onclick="calculator.display.value += '8'">
              <input type="button" value="D" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'D'">
              <input type="button" value="E" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'E'">
              <input type="button" value="F" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'F'">
            </div>
            <div class="d-flex justify-content-between">
              <input type="button" value="9" class="btn w-100 shadow m-5" onclick="calculator.display.value += '9'">
              <input type="button" value="0" class="btn w-100 shadow m-5" onclick="calculator.display.value += '0'">
              <input type="button" value="Reset" class="btn w-100 shadow m-5" onclick="calculator.display.value = ''">
              <input type="button" value="Space" class="btn w-100 shadow m-5" onclick="calculator.display.value += ' '">
              <input type="submit" value="Hitung" class="btn w-100 shadow m-5 w-100">
            </div>
          </form>
          <p><b>Note: </b> Untuk conversi secara batch pisahkan dengan spasi contoh desimal ke binner 613 414 567 dst.</p>
        </div>
      </div>
    </div>
  </div>
	





	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>