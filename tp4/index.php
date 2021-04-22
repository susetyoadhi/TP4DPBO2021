<?php

/******************************************
PRAKTIKUM RPL
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Memanggil method getTask di kelas Task
$otask->getTask();

// Proses mengisi tabel dengan data
$data = null;
$no = 1;
//memanggil method addTask
if (isset($_POST['submit'])){
	$otask->addTask();
	header("location:index.php");
}

//mengambil method del
if (isset($_GET['id_hapus'])){
	$id = $_GET['id_hapus'];
	$otask->delTask($id);
	header("location:index.php");
}

//mengambil method del
if (isset($_GET['id_status'])){
	$id = $_GET['id_status'];
	$otask->setdone($id);//untuk set status menjadi sudah
	$otask->setdate($id);//untuk merubah tanggal menjadi tanggal pengembalian
	header("location:index.php");
}

while (list($id, $tNama, $tJudul, $tGenre, $tCategory, $twaktupinjam, $twaktukembali, $tstatus) = $otask->getResult()) {
	// Tampilan jika status task nya sudah dikembalikan
	if($tstatus == "Sudah"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tNama . "</td>
		<td>" . $tJudul . "</td>
		<td>" . $tGenre . "</td>
		<td>" . $tCategory . "</td>
		<td>" . $twaktupinjam . "</td>
		<td>" . $twaktukembali . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}

	// Tampilan jika status buku nya belum dikembalikan
	else{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tNama . "</td>
		<td>" . $tJudul . "</td>
		<td>" . $tGenre . "</td>
		<td>" . $tCategory . "</td>
		<td>" . $twaktupinjam . "</td>
		<td>" . $twaktukembali . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$no++;
	}
}

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();