<?php 
	//koneksi database
	$konek = mysqli_connect("localhost", "root", "", "sensor_data");

	//baca data yang dikirim dari esp32
	$suhu = $_GET['suhu'];
	//simpan ke table sensor_data

	//auto increment = 1
	mysqli_query($konek, "ALTER TABLE sensor_readings AUTO_INCREMENT=1");
	//simpan data sensor ke table sensor_data
	$simpan = mysqli_query($konek, "insert into sensor_readings(SUHU)values('$suhu')");
	//uji simpan untuk memberikan respon
	if($simpan)
		echo "Berhasil dikirim" ;
	else
		echo "Gagal terkirim"

 ?>