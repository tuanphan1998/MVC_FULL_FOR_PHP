<?php
	session_start();
	include 'Controller/cmt_controller.php';
	$cmtCOntroller = new cmt_controller();
	$task = "default";
	if(isset($_GET['task']))
	{
		$task = $_GET['task'];
	}
	switch ($task) 
	{
		case 'default':
			$cmtCOntroller->hienthidulieu();
			$vas = $_SESSION['list'];
			include 'View/main.php';
			# code...
			break;

		case 'add':
			include 'View/add.php';
			# code...
			break;

		case 'insert':
			$cmtCOntroller->Themmoi($_POST);
			# code...
			break;

		case 'edit':
			$cmtCOntroller->laydulieu();
			$vas = $_SESSION['list2'];
			include 'View/edit.php';
			# code...
			break;

		case 'update':
			$cmtCOntroller->TSuadou($_POST);
			# code...
			break;

		case 'delete':
			$cmtCOntroller->xoadulieu();
			# code...
			break;

		case 'search':
			$cmtCOntroller->timkiem();
			$vas = $_SESSION['list3'];
			include 'View/main.php';
			# code...
			break;

		case 'sapxep':
			$cmtCOntroller->sx();
			$vas = $_SESSION['list4'];
			include 'View/main.php';
			# code...
			break;
		
		default:
			$cmtCOntroller->hienthidulieu();
			$vas = $_SESSION['list'];
			include 'View/main.php';
			# code...
			break;
	}
?>