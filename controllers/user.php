<?php
require_once "db_conn/db_conn.php";

class Submit extends Database {
  
    public function Save($a){
        try{
            if($a['name'] && $a['password']){
                // echo"ok";exit;
                $sql=mysqli_prepare($this->conn,"SELECT id FROM users WHERE `user_name` = ?");
                if($sql){
                   $name=trim($a['name']);
                    mysqli_stmt_bind_param($sql,'s',$name);
                    mysqli_stmt_execute($sql);
                    mysqli_stmt_store_result($sql);
                    if(mysqli_stmt_num_rows($sql)>0){
                        echo "<script>alert('Duplicate Entery!!');</script>";
                        // exit;
                    }else{
                        $date=date('Y-m-d H:i:s');
                        if(trim($a['password'])==trim($a['confirm_password'])){
                            $param_password = password_hash(trim($a['password']), PASSWORD_DEFAULT);
                            $insert=mysqli_prepare($this->conn,"INSERT INTO users (`user_name`, `password`,`datetime`) VALUES (?, ?,?)");
                            mysqli_stmt_bind_param($insert,"sss",$name,$param_password,$date);
                            // Try to execute the query
                            $exe=mysqli_stmt_execute($insert);
                        }else{
                            echo "Password does not Match";
                        }
                    }
                }
            }
            if(@$exe){
                self::display();
            }else{
                self::error_occer();
            }
        }catch(Exception $e){
            echo "Error: $e";
        }
    }
    function display(){
        header('Location: login.php');
        echo "Data Save Successfully!!";
    }
    function error_occer(){
        header('Location: register.php');
        echo "Error:110, ".mysqli_error($this->conn);
    }
    function Show($id=NULL){
        try{
            $datas=array();
            $TableQ=mysqli_query($this->conn,"SELECT id,`name`,`email`,`mobile` FROM `tbl_student`");
            while($data=mysqli_fetch_assoc($TableQ)){
                $datas[]=$data;
            }
           return json_encode($datas);
        }catch(Exception $e){
            echo "Error: $e";
        }
    }
    function id_search($id){
        try{
            $data=array();
            $TableList=mysqli_fetch_assoc(mysqli_query($this->conn,"SELECT id,`name`,`email`,`mobile` FROM `tbl_student` where id='$id'"));
            $data=$TableList;
           return $data;
        }catch(Exception $e){
            echo "Error: $e";
        }
    }
}
$obj=new Submit();
if(!$obj->conn){
    echo "Database Not Set!!!";
    exit;
}