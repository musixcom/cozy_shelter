<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "abc@123abc";
$dbname = "cozyshelter";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

if (isset($_POST['submit'])) {
    if (empty($_POST['uname']) || empty($_POST['email']) || empty($_POST['pwd']) || empty($_POST['pwdcon'])) {
    echo "your form is not  complete!";
    }
    else {

        $name=$_POST['uname'];
        $email=md5($_POST['email']);
        $pwd=$_POST['pwd'];

        $query1 = "SELECT email FROM user WHERE email='$email'";

        $result = mysqli_query($conn,$query1);
        $count = mysqli_num_rows($result);

        if ($count==0) {

          $sql = "INSERT INTO user VALUES ('$name','$email','$pwd')";

          if (mysqli_query($conn,$sql)) {
            $_SESSION['message'] = "Your data submited sucessfuly!";
          }
          else{
            $_SESSION['message'] = "couldn't submit data, try again..";
          }

        }
        else{
          $_SESSION['message'] = "This email is alread registerd try another Email";
        }

         if (isset($_SESSION['message'])) {
           echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");
                window.location.href="index.php";
                </script>';
            unset($_SESSION['message']);


      }
    }

}
mysqli_close($conn);
}



?>
