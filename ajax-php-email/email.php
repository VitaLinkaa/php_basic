<?php 
  $connection = mysqli_connect("localhost","email","email","email");

if(isset($_POST['email']) && $_POST['email'] != ''){
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($connection,$email);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'invalid';
  }else{
    $sql = "SELECT id FROM email WHERE email='$email'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) == 1){
      echo 'invalid';
    }else{
      echo 'valid';
    }
  }
}

if(isset($_POST['add_email']) && $_POST['add_email'] != ''){
  $email = mysqli_real_escape_string($connection,$_POST['add_email']);
  $sql = "INSERT INTO email(email) VALUES('$email')";

  if(mysqli_query($connection,$sql)){
    echo <font color="green">Success</font>';
  }else{
    echo '<font color="red">Error</font>';
  }
}
  ?>