<?php
extract($_POST);



$server_name="sql100.epizy.com";
$user_name="epiz_34223289";
$password1="ufpTwqF3Eykd";
$db_name="epiz_34223289_my_data";
$con=mysqli_connect($server_name ,$user_name,$password1,$db_name);
if (!$con){
    die(mysqli_error($con));
}




if($email !="admin"){
$sql = "SELECT * FROM ParticipantUserName WHERE email='".$email."'";
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    if ($row["email"] == $email && $row["password"] == $password) {
        header("Location: remo.html"); 
        exit();
    } else {
        header("Location: index.html"); // Replace "login.php" with the login page URL
        exit();
    }
} else {
    header("Location: index.html"); // Replace "login.php" with the login page URL
    exit();
}
}

else{

$sql1 = "SELECT * FROM Admin WHERE Auname='".$email."'";
$result1 = mysqli_query($con, $sql1);

if ($row1 = mysqli_fetch_assoc($result1)) {
    if ($row1["Auname"] == $email && $row1["Apassword"] == $password) {
        header("Location: admin.html"); 
        exit();
    } else {
        header("Location: index.html"); // Replace "login.php" with the login page URL
        exit();
    }
} else {
    header("Location: index.html"); // Replace "login.php" with the login page URL
    exit();
}


}






?>