<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM list_pinjam_buku";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function addTask(){
		
		if (isset($_POST['submit'])){
			$tNama = $_POST['tNama'];
			$tJudul = $_POST['tJudul'];
			$tGenre = $_POST['tGenre'];
			$tCategory = $_POST['tCategory'];
			$twaktupinjam = $_POST['twaktupinjam'];
			$twaktukembali = NULL;
			$tstatus = "Belum";
			
			$query = "INSERT INTO list_pinjam_buku".
			"(Nama,Judul,Genre,Category,waktu_pinjam,waktu_kembali,status) VALUES".
			"('$tNama','$tJudul','$tGenre','$tCategory','$twaktupinjam','$twaktukembali','$tstatus')";

	
			return $this->execute($query);
		}
	}
	
	function delTask($id){
	
		$query = "DELETE FROM list_pinjam_buku WHERE id='$id'";
		return $this->execute($query);
	}
	
	Function setdone($id){
		
		$status = "Sudah";
		$query = "UPDATE list_pinjam_buku SET status = '$status' WHERE id = '$id'";
		return $this->execute($query);
	}
	
	Function setdate($id){
		
		$query = "UPDATE list_pinjam_buku SET waktu_kembali = current_date() WHERE id = '$id'";
		return $this->execute($query);
	}
}



?>
