<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$subject="";
	$grade="";
	$strand="";
	$section="";
	$teacher="";
	$room="";
	$day="";
	$stime="";

	if(isset($_POST['add'])){
		$subject=$_POST['subject'];
		$grade=$_POST['grade'];
		$strand=$_POST['strand'];
		$section=$_POST['section'];
		$teacher=$_POST['teacher'];
		$room=$_POST['room'];
		$day=$_POST['day'];
		$stime=$_POST['stime'];

		$query="INSERT INTO subject(subject,grade,strand,section,teacher,room,day,stime)VALUES(?,?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sisissss",$subject,$grade,$strand,$section,$teacher,$room,$day,$stime);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$query="DELETE FROM subject WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM subject WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$subject=$row['subject'];
		$grade=$row['grade'];
		$strand=$row['strand'];
		$section=$row['section'];
		$teacher=$row['teacher'];
		$room=$row['room'];
		$day=$row['day'];
		$stime=$row['stime'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$subject=$_POST['subject'];
		$grade=$_POST['grade'];
		$strand=$_POST['strand'];
		$section=$_POST['section'];
		$teacher=$_POST['teacher'];
		$room=$_POST['room'];
		$day=$_POST['day'];
		$stime=$_POST['stime'];

		$query="UPDATE subject SET subject=?,grade=?,strand=?,section=?,teacher=?,room=?,day=?,stime=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sisissssi",$subject,$grade,$strand,$section,$teacher,$room,$day,$stime,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM subject WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vsubject=$row['subject'];
		$vgrade=$row['grade'];
		$vstrand=$row['strand'];
		$vsection=$row['section'];
		$vteacher=$row['teacher'];
		$vroom=$row['room'];
		$vday=$row['day'];
		$vstime=$row['stime'];
	}
?>