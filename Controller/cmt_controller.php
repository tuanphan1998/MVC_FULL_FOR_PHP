<?php
	class cmt_controller
	{
		private $cmtModel = NULL;
		public function __construct()
		{
			include 'Model/DBconn.php';
			$this->cmtModel = new DBconn();
		}
		public function hienthidulieu()
		{
			$result = $this->cmtModel->Showdata();
			if($result)
			{
				$_SESSION['list'] = $result;
			}
		}
		public function Themmoi($data)
		{
			if(empty($data['ma']) || empty($data['ten']) || empty($data['ngay']))
			{
				echo "<p>Theu thong tin<p>";
				echo "<a  class='button' href='index.php?task=add'>them moi</a>";
				echo "<a  class='button' href='index.php'>trang chu</a>";
				return;
			}
			$cmt = new Object_hang(0,$data['ma'],$data['ten'],$data['ngay']);
			$result = $this->cmtModel->InsertData($cmt);
			if($result)
			{
				header('location: index.php');
			}
		}

		public function TSuadou($data)
		{
			if(empty($data['id'] || $data['ma']) || empty($data['ten']) || empty($data['ngay']))
			{
				echo "<p>Theu thong tin<p>";
				echo "<a  class='button' href='index.php?task=add'>them moi</a>";
				echo "<a  class='button' href='index.php'>trang chu</a>";
				return;
			}
			$cmt = new Object_hang($data['id'],$data['ma'],$data['ten'],$data['ngay']);
			$result = $this->cmtModel->UpdatreData($cmt);
			if($result)
			{
				header('location: index.php');
			}
			else
			{
				echo "loi them moi";
			}
		}
		public function laydulieu()
		{
			if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				$result = $this->cmtModel->Showdatabyid($id);
				if($result)
				{
					$_SESSION['list2'] = $result;
				}
			}
		}


			public function timkiem()
		{
			if(isset($_GET['tukhoa']))
			{
				$id = $_GET['tukhoa'];
				$result = $this->cmtModel->Search($id);
				if($result)
				{
					$_SESSION['list3'] = $result;
				}
				else
				{
					echo "Khong tin thay du lieu";
					error_reporting(0);
				}
			}
		}



		public function sx()
		{
			if(isset($_GET['kieu']))
			{
				$id = $_GET['kieu'];
				$result = $this->cmtModel->sapx($id);
				if($result)
				{
					$_SESSION['list4'] = $result;
				}
			}
		}



			public function xoadulieu()
		{
			if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				$result = $this->cmtModel->delteDate($id);
				if($result)
				{
					header('location: index.php');
				}
			}
		}
	}
?>