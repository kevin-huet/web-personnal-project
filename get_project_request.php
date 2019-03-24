<?php
   if(isset($_FILES['image'])){
      session_start();
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $expensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$expensions) === false){
         $errors="extension not allowed, please choose a JPEG or PNG file.";
      }      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"users/".$_SESSION['name']."/avatar.jpg");
         header('Location: profile');
      }else{
         print_r($errors);
      }
   }
?>