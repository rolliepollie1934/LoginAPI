<?php
/*
License: This file can only be stored on servers belonging to PraxisBIT
File Name : api/logincheck.php
File Description : Login API for granting the tenants access to their dashboard
Author : Nikhil Jain & Amit Nikam
Creation Date : 10 February 2018
*/
include 'dbconfig.php';
if(isset($_POST['emailBtn']))
{
  $email="";
  $email=$_POST['lemail'];
  $sql = "SELECT * FROM user_login WHERE user_email='$email'";
  $result = mysqli_query($link, $sql);
  if(mysqli_num_rows($result)>0)
  {
    $row = mysqli_fetch_assoc($result);
    $name=$row['first_name'];
    echo "
      <script>
        localStorage.setItem('email', '".$email."');
        document.getElementById('passwordBtn').style.display = 'block';
        document.getElementById('lpassword').style.display = 'block';
        document.getElementById('forgotpwrd').style.display = 'block';
        document.getElementById('passwordlabel').style.display = 'block';
        document.getElementById('emailBtn').style.display = 'none';
        document.getElementById('lemail').style.display = 'none';
        document.getElementById('emaillabel').style.display = 'none';
        document.getElementById('newuser').style.display = 'none';
        document.getElementById('error_msg').style.display = 'none';
        document.getElementById('welcome_msg').innerHTML='Hello ".$name."!';
      </script>
    ";
  }
  else
  {
    echo "
      <script>
        document.getElementById('error_msg').innerHTML='Invalid Email';
      </script>
    ";
  }
}
else if(isset($_POST['passwordBtn']))
{
  $email = "";
  $email = $_POST['lemail'];
  $password = "";
  $password = md5($_POST['lpassword']);
  $sql = "SELECT * FROM user_login WHERE user_email='$email'";
  $result = mysqli_query($link, $sql);
  if(mysqli_num_rows($result)>0)
  {
    $row = mysqli_fetch_assoc($result);
    if($row['password']==$password)
    {
      session_start();
      $_SESSION['sid']=$row['user_id'];
      $_SESSION['user']=$row['user_email'];
      echo "
        <script>
          localStorage.removeItem('email');
          window.location='dashboard.php';
        </script>
      ";
    }
    else
    {
      echo "
        <script>
          document.getElementById('error_msg2').innerHTML='Invalid Password';
        </script>
      ";
    }
  }
  else
  {
    echo "
      <script>
        document.getElementById('error_msg2').innerHTML='Invalid Password';
      </script>
    ";
  }
}
?>
