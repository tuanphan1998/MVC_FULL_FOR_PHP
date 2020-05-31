<?php
	class Object_hang
	{
		private $id , $ma , $ten , $ngay;
		public function __construct($id , $ma , $ten , $ngay)
		{
			$this->id = $id;
			$this->ma = $ma;
			$this->ten = $ten;
			$this->ngay = $ngay;
		}
		public function getID()
		{
			return($this->id);
		}
		public function getMa()
		{
			return($this->ma);
		}
		public function getTen()
		{
			return($this->ten);
		}
		public function getNgay()
		{
			return($this->ngay);
		}
	}
?>