<?php 
session_start();
if(isset($_SESSION['user']))
{
  if(($row['type'] == 0)) {
    header('Location: cart.html');
  }
}
$mysqli = new mysqli("localhost","root","","test");
$err = false;
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


function validate($str)
{
    $mysqli = new mysqli("localhost","root","","test");
    $str =  trim($str);
    $str = htmlspecialchars($str);
    $str = $mysqli->real_escape_string($str);
    return $str;
}

if(isset($_POST['submit']))
{
    $uname = validate($_POST['uname']);
    $upass = validate($_POST['upass']);
    $uemail = validate($_POST['uemail']);
    $uage = $_POST['uage'];
    $uphone = validate($_POST['uphone']);
    $ucity = validate($_POST['ucity']);
    $repass = validate($_POST['repass']);
    $type = "0";
    if(isset($_POST['isadmin']) && $_POST['isadmin'] == '1')
    {
        $type = "1";
    }

    if($upass != $repass)
    {
       $err = true;
    }
    else{
        $upass = sha1($upass);
        $sql = "insert into users (name,age,phone,city,pass,email,type) values ('$uname','$uage','$uphone','$ucity','$upass','$uemail','$type')";
        $res = $mysqli->query($sql);
        if ($res)
        {
            $_SESSION['user'] = $uemail;
            $_SESSION['name'] = $uname;
            if ($row['type'] == 1) {
              header('Location: dashboard.php');
          } 
          else {
              header('Location: cart.html');
          }
        }
        else{
            $err = true;
        }

    }

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>SignUp</h1>
      <?php if($err) echo '<h1 style="color:red;font-size:12px">Please fill the details correctly(pass and re-enter pass should match)</h1>' ?>
      <form action="#" method="post">
        <div class="txt_field">
          <input name="uname" type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input name="uemail" type="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input name="uage" type="number" required>
          <span></span>
          <label>Age</label>
        </div>
        <div class="txt_field">
          <input name="uphone" type="text" pattern="[6,7,8,9][0-9]{9}" required>
          <span></span>
          <label>Phone No.</label>
        </div>
        <div class="txt_field">
          <input name="ucity" type="text"  required>
          <span></span>
          <label>City</label>
        </div>
        <div class="txt_field">
          <input name="upass" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input name="repass" type="password" required>
          <span></span>
          <label>re-Enter Password</label>
        </div>
        <input type="checkbox" name="isadmin" value="1"> <span style="font-size: 14px;color:grey;">is Admin?</span>
        <input type="submit" name="submit" value="SignUp">
        <div class="signup_link">
          Already a Member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
