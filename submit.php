


 <?php


 $con = mysqli_connect("localhost", "root", "","pb")
    or die("Could not connect to the server.<br>" .mysqli_connect_error());
    echo "Connected to the server.<br>";
    $dbR = mysqli_select_db($con, "pb")
    or die("Could not select the DB.<br>" .mysqli_error($con));
    echo "Connected to the DB<br>";

  
 extract ($_POST);
 if(isset($submit)){
   
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 
 $dbI = mysqli_query ($con, "INSERT into contact values ('$name', '$phone', '$email','$message')")
 or die("Could not insert into table. " .mysqli_error($con));
 echo "".mysqli_affected_rows($con)." record(s) added.";
  
 }
 mysqli_close($con);
 ?>
 