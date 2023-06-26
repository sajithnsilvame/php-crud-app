<?php 
session_start();
require 'dbConn.php';

// update data
if (isset($_POST['update_student'])) {

  $student_id = $_POST['student_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";

  $result = mysqli_query($con, $query);

  if ($result) {
    $_SESSION['message'] = "student updated";
    header("Location: index.php");
    exit(0);
  } else {
    $_SESSION['message'] = "student not updated";
    header("Location: index.php");
    exit(0);
  }
}

// create data
if(isset($_POST['save_student'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  $query = "INSERT INTO students (name,email,phone,course) VALUES('{$name}','{$email}','{$phone}','{$course}')";

  $result = mysqli_query($con, $query);
  if($result){
    $_SESSION['message'] = "student created";
    header("Location: create-student.php");
    exit(0);
  }
  else{
    $_SESSION['message'] = "student not created";
    header("Location: create-student.php");
    exit(0);
  }

}

// delete data
if(isset($_POST['delete_student'])){

  $student_id = $_POST['delete_student'];
  $query = "DELETE FROM students WHERE id='$student_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run){
    $_SESSION['message'] = "student deleted";
    header("Location: index.php");
    exit(0);
  }
  else{
    $_SESSION['message'] = "student not deleted";
    header("Location: index.php");
    exit(0);
  }
}










?>