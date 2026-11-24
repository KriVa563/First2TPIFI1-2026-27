<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css?<?= time(); ?>">
    <title>Registration</title>
</head>
<body>
    <?php
    include_once("commonCode.php");
    navigationBar("Registration",$lang);
    if (isset($_POST["username"],$_POST["emailAddresss"],$_POST["fullName"],$_POST["age"],$_POST["homeAddress"],$_POST["psw"],$_POST["pswAgain"])){
        
    print ("We are processing your request");
    $userisOkToBeCreated= true;
    $fileUser=fopen("User.csv","r");
       
        while(!feof($fileUsers)){
            $anotherUser=fgets($fileUsers);
            $userDataArray = explode(";",$anotherUser);
            
            if(count($userDataArray)== 6){
                print($userDataArray[0] . "<br>");
                if ($_POST["username"]== $userDataArray[0]){
                    $userisOkToBeCreated = false;
                    break;
                }
            }
        }
        if($userisOkToBeCreated){
        $fileUser=fopen("User.csv","a");
        $newUserData = $_POST["username"].";".$_POST["psw"].";".$_POST["emailAddress"].";".$_POST["fullName"].";".$_POST["age"].";".$_POST["homeAddress"]."\n";
        fputs($fileUser,$newUserData);
        print("Done.We saved your data");
        }else{
            print("Sorry.Username is already taken");
        }
    }
 else{

?>
<h1>Registration form</h1>
<form method="POST" id="registrationForm">
    <div>Username:<input type="text" name="username"></div>
    <div>Password:<input type="password" name="psw"></div> 
    <div>Password again:<input type="password" name="pswAgain"></div> 
    <div>Your email address:<input type="text" name="emailAddress"></div>
    <div>Your fullname:<input type="text" name="fullName"></div>
    <div>Your age:<input type="text" name="age"></div>
    <div>Your hoem address:<input type="text" name="homeAddress"></div>
<button type="submit">Register</button>
</form>
<?php
}
?>
</body>
</html>