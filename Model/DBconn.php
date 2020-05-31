<?php
	include 'Object_hang.php';
	class DBconn
	{
		private $conn;
		public function __construct()
		{
			$this->conn();
		}
		public function conn()
		{
			$this->conn = new mysqli('localhost','root','','lienket_1_bang');
			if(!$this->conn)
			{
				die('loi ket noi csdl');
			}
		}
		public function Showdata()
		{
			$sql = "SELECT * FROM banhang";
			$result = $this->conn->query($sql);
			$data = array();
			while ($dates = $result->fetch_assoc()) 
			{
				# code...
				array_push($data, new Object_hang($dates['id'] , $dates['ma'] ,  $dates['ten'] ,  $dates['ngay']));
			}
			return $data;
		}


			public function sapx($kieu)
		{
			$sql = "SELECT * FROM banhang ORDER BY ten  ".$kieu;
			$result = $this->conn->query($sql);
			$data = array();
			while ($dates = $result->fetch_assoc()) 
			{
				# code...
				array_push($data, new Object_hang($dates['id'] , $dates['ma'] ,  $dates['ten'] ,  $dates['ngay']));
			}
			return $data;
		}


		public function Showdatabyid($id)
		{
			$sql = "SELECT * FROM banhang WHERE id = ".$id;
			$result = $this->conn->query($sql);
			$data = array();
			while ($dates = $result->fetch_assoc()) 
			{
				# code...
				array_push($data, new Object_hang($dates['id'] , $dates['ma'] ,  $dates['ten'] ,  $dates['ngay']));
			}
			return $data;
		}



		public function Search($key)
		{
			$sql = "SELECT * FROM banhang WHERE ten REGEXP '$key' ORDER BY id DESC";
			$result = $this->conn->query($sql);
			$data = array();
			while ($dates = $result->fetch_assoc()) 
			{
				# code...
				array_push($data, new Object_hang($dates['id'] , $dates['ma'] ,  $dates['ten'] ,  $dates['ngay']));
			}
			return $data;
		}
		public function InsertData($cmt)
		{	
			$id = $cmt->getID();
				$ma = $cmt->getMa();
					$ten = $cmt->getTen();
						$ngay = $cmt->getNgay();
			$sql = "INSERT INTO banhang VALUES(0,'$ma','$ten','$ngay')";
			$result = $this->conn->query($sql);
			return $result;
		}
			public function UpdatreData($cmt)
		{	
			$id = $cmt->getID();
				$ma = $cmt->getMa();
					$ten = $cmt->getTen();
						$ngay = $cmt->getNgay();
			$sql = "UPDATE banhang SET ma='$ma' , ten='$ten' , ngay='$ngay' WHERE id = '".$id."'";
			$result = $this->conn->query($sql);
			return $result;
		}
		public function delteDate($id)
		{	
			$sql = "DELETE FROM banhang WHERE id = ".$id;
			$result = $this->conn->query($sql);
			return $result;
		}
	}
?>