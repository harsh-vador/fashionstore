<?php   

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirm password']
echo $name,"<br>".$email."<br>".$password."<br>".$password"<br>";

$con = mysqli_connect("localhost","id11836391_user_login","123456","id11836391_login");
if(!$con)
{
    die("Connection Failed");
}
mysql_select_db("id11836391_login",$con);
$sql = "INSERT INTO users VALUES('$name','$email','$password')";
$data = mysqli_query($sql);

if($data["email"]===$email && $data["password"]===$password)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>