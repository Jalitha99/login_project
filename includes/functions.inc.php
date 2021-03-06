<?php

require_once 'dbh.inc.php';

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        return true;
    }
    else{
        return false;
    }
}
function invalidUid($username){

    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        return true;
    }
    else{
        return false;
    }
}
function invalidEmail($email){

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
function pwdMatch($pwd,$pwdRepeat){

    if ($pwd!==$pwdRepeat){
        return true;
    }
    else{
        return false;
    }
}
function uidExists($conn,$username,$email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row= mysqli_fetch_assoc($resultdata)){
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn,$name,$email,$username,$pwd){
    $sql = "INSERT INTO users (userName,userEmail,usersUid,usersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedPwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}
function emptyInputLogin($username,$pwd){

    if (empty($username) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}
function loginUser($conn,$username,$pwd){
     $uidExists = uidExists($conn,$username,$username);

     if ($uidExists === false){
         header("location: ../login.php?error=wronglogin");
         exit();
     }
     $pwdHashed =$uidExists['usersPwd'];
     $checkedPwd = password_verify($pwd,$pwdHashed);

     if ($checkedPwd === false){
         header("location: ../login.php?error=wronglogin");
         exit();
     }
     else if($checkedPwd === true){
         session_start();
         $_SESSION["userid"] = $uidExists["usersId"];
         $_SESSION["useruid"] = $uidExists["usersUid"];
         echo '<h1>login complete</h1>';
         header("location: ../index.php");
         exit();
     }
}



