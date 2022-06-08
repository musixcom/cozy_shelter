 <?php  
 include_once ('../connect.php');
header( "Location:../ourpets.php" );
$id = $_GET['id'];
 mysqli_query($conn,"UPDATE shelter_form set petname='" . $_POST['petname'] . "', age='" . $_POST['age'] . "', pets='" . $_POST['pets'] . "' 

            , breed='" . $_POST['breed'] . "', image='" . $_POST['image'] . "', location='" . $_POST['location'] . "' ,no='" . $_POST['no'] . "',note='" .  $_POST['note'] . "'");

?>