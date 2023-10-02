<?php
require_once "db_conn/db_conn.php";

class Login extends Database {
    function login_check($user,$pass){ 
      try{
        $user=trim($user);
        $password=trim($pass);
        $sql = mysqli_prepare($this->conn, "SELECT `id`, `user_name`, `password`, `name` FROM `users` WHERE `user_name`= ?");
        mysqli_stmt_bind_param($sql, "s", $user);
        if(mysqli_stmt_execute($sql)){
            mysqli_stmt_store_result($sql);
            if(mysqli_stmt_num_rows($sql) == 1){ 
                mysqli_stmt_bind_result($sql, $id, $user_name, $hashed_password,$name);
                if(mysqli_stmt_fetch($sql))
                {
                  if(password_verify($password, $hashed_password))
                  {
                    session_start();
                    $_SESSION["user_name"] = $user_name;
                    $_SESSION["user_id"] = $id;
                    $_SESSION["name"] = $name;
                    header('Location: welcome.php');
                  }
                }
            }
        }
    }catch(Exception $e){
      echo "Error: $e";
    }
  }
}
$obj=new Login();
if(!$obj->conn){
    echo "Database Not Set!!!";
    exit;
}
?>