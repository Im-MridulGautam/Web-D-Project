if(isset($_POST['submit']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{

$email=$_SESSION['email'];
header( "Location: change.php" );
}
else{
   $message = "<label>Invalid OTP</labe>";
}
}