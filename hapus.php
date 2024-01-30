<?php 
  require_once("database.php");
  $no = $_GET['id'];
  if(hapus($no) > 0) {
    header("location:list_notes.php");
  }
 
?>
