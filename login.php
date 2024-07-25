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

if(isset($_POST['submitl']))
{
    $uemail = validate($_POST['uemail']);
    $upass = validate($_POST['upass']);

    $upass = sha1($upass);
    $sql = "select * from users where email='$uemail' and pass='$upass'";
    $res = $mysqli->query($sql);

    if ($res)
    {
        if ($res->num_rows > 0)
        {
            $row = $res->fetch_assoc();

            if ($row['type'] == 1) {

                $_SESSION['name'] = $row['name'];
                $_SESSION['user'] = $uemail;
                $_SESSION['admin'] = "true";
                header('Location: dashboard.php');
            } 
            else {
                $_SESSION['name'] = $row['name'];
                $_SESSION['user'] = $uemail;
                $_SESSION['admin'] = "false";
                header('Location: cart.html');
            }
        }
        else {
            $err = true;
        }
    }
    else {
        $err = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <?php if($err) echo '<h1 style="color:red;font-size:14px">Invalid Email or PassWord</h1>' ?>
      <form method="post">
        <div class="txt_field">
          <input name="uemail" type="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input name="upass" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" name="submitl" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
