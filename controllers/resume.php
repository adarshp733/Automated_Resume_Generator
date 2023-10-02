<?php
require_once "db_conn/db_conn.php";

class Submit extends Database {
  
    public function Save($a,$b){
        try{
            $name=trim($a['name']);
            $sem_branch=trim($a['sem_branch']);
            $address=trim($a['address']);
            $mobile=trim($a['mobile']);
            $email=trim($a['email']);
            $objective=trim($a['objective']);
            $work_experience=trim($a['work_experience']);
            $technical_skill=trim($a['technical_skill']);
            $course=trim($a['course']);
            $father=trim($a['father']);
            $mother=trim($a['mother']);
            $dob=trim($a['dob']);
            $gender=trim($a['gender']);
            $marital_status=trim($a['marital_status']);
            $nationality=trim($a['nationality']);
            $language=trim($a['language']);
            $hobbies=trim($a['hobbies']);
            $declaration=trim($a['declaration']);
            $date=date('Y-m-d H:i:s');
            $user_id=$_SESSION['user_id'];
            //--------------------------------------------photo----------------------------------------
            $target_dir = "photo/";
            $target_file = $target_dir .rand(1000,99999). basename($b["photo"]["name"]);
            if (move_uploaded_file($b["photo"]["tmp_name"], $target_file)) {

            $insert=mysqli_prepare($this->conn,"INSERT INTO `user_parent`(`user_id`,`name`, `sem_branch`, `address`, `mobile`, `email`, `objective`, `work_experience`, `technical_skill`, `course`, `father`, `mother`, `dob`, `gender`, `marital_status`, `nationality`, `language`, `hobbies`, `declaration`,photo)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            mysqli_stmt_bind_param($insert,"isssisssssssssssssss",$user_id,$name,$sem_branch,$address,$mobile,$email,$objective,$work_experience,$technical_skill,$course,$father,$mother,$dob,$gender,$marital_status,$nationality,$language,$hobbies,$declaration,$photo);
            // Try to execute the query
            $exe=mysqli_stmt_execute($insert);
            $id=mysqli_stmt_insert_id($insert);

            foreach($a['degree'] as $key =>$value){
                $degree=$a['degree'][$key];
                $school=$a['school'][$key];
                $board=$a['board'][$key];
                $pass=$a['pass'][$key];
                $cgpa=$a['cgpa'][$key];
                $dob=$a['dob'][$key];
                if($degree){
                    $child=mysqli_prepare($this->conn,"INSERT INTO `user_child`( `user_parent_id`, `degree`, `school`, `board`, `pass`, `cgpa`) VALUES (?,?,?,?,?,?)");
                    mysqli_stmt_bind_param($child,"ssssss",$id,$degree,$school,$board,$pass,$cgpa);
                    // Try to execute the query
                    $exe1=mysqli_stmt_execute($child);
                }
            }
        }
            if($exe && $exe1){
                self::display();
            }else{
                self::error_occer();
            }
        }catch(Exception $e){
            echo "Error: $e";
        }
    }
    function display(){
        header('Location: welcome.php');
        echo "Data Save Successfully!!";
    }
    function error_occer(){
        header('Location: resume.php');
        echo "Error:110, ".mysqli_error($this->conn);
    }
    function Show($id){
        try{
        $data=array();
        $parentList=mysqli_fetch_assoc(mysqli_query($this->conn,"SELECT * FROM `user_parent` WHERE `id`='$id'"));
        
        $childQ=mysqli_query($this->conn,"SELECT * FROM `user_child` WHERE `user_parent_id`='".$parentList['id']."'");
        while($child_List=mysqli_fetch_assoc($childQ)){
            $data[]=$child_List;
        }
        $parentList['child']=$data;
        return $parentList;
    }catch(Exception $e){
        return "Error:$e";
    }
    }
    function AllShow(){
        try{
        $data=array();
        $user_id=$_SESSION['user_id'];
        $parentQ=mysqli_query($this->conn,"SELECT `id`,`name`,`mobile`,`sem_branch`,`email` FROM `user_parent` WHERE `user_id`='$user_id'");
        while($parentList=mysqli_fetch_assoc($parentQ)){
            $data[]=$parentList;
        }
        return $data;
    }catch(Exception $e){
        return "Error:$e";
    }
    }
    function Edit($a,$b){
       
        try{
            $p_id=$a['parent_id'];
            $name=trim($a['name']);
            $sem_branch=trim($a['sem_branch']);
            $address=trim($a['address']);
            $mobile=trim($a['mobile']);
            $email=trim($a['email']);
            $objective=trim($a['objective']);
            $work_experience=trim($a['work_experience']);
            $technical_skill=trim($a['technical_skill']);
            $course=trim($a['course']);
            $father=trim($a['father']);
            $mother=trim($a['mother']);
            $dob=trim($a['dob']);
            $gender=trim($a['gender']);
            $marital_status=trim($a['marital_status']);
            $nationality=trim($a['nationality']);
            $language=trim($a['language']);
            $hobbies=trim($a['hobbies']);
            $declaration=trim($a['declaration']);
            $date=date('Y-m-d H:i:s');
            //--------------------------------------------photo----------------------------------------
            $x=$y=$z='';
            if($b){
                $target_dir = "photo/";
                $target_file = $target_dir .rand(1000,99999). basename($b["photo"]["name"]);
                move_uploaded_file($b["photo"]["tmp_name"], $target_file);
               
                $insert=mysqli_prepare($this->conn,"UPDATE `user_parent` SET `name`=?, `sem_branch`=?, `address`=?, `mobile`=?, `email`=?, `objective`=?, `work_experience`=?, `technical_skill`=?, `course`=?, `father`=?, `mother`=?, `dob`=?, `gender`=?, `marital_status`=?, `nationality`=?, `language`=?, `hobbies`=?, `declaration`=?,photo=? WHERE id=?");
                mysqli_stmt_bind_param($insert,"sssssssssssssssssssi",$name,$sem_branch,$address,$mobile,$email,$objective,$work_experience,$technical_skill,$course,$father,$mother,$dob,$gender,$marital_status,$nationality,$language,$hobbies,$declaration,$target_file,$p_id);
            }else{
                $insert=mysqli_prepare($this->conn,"UPDATE `user_parent` SET `name`=?, `sem_branch`=?, `address`=?, `mobile`=?, `email`=?, `objective`=?, `work_experience`=?, `technical_skill`=?, `course`=?, `father`=?, `mother`=?, `dob`=?, `gender`=?, `marital_status`=?, `nationality`=?, `language`=?, `hobbies`=?, `declaration`=? WHERE id=?");
                mysqli_stmt_bind_param($insert,"ssssssssssssssssssi",$name,$sem_branch,$address,$mobile,$email,$objective,$work_experience,$technical_skill,$course,$father,$mother,$dob,$gender,$marital_status,$nationality,$language,$hobbies,$declaration,$p_id);
            }
            // Try to execute the query
            $exe=mysqli_stmt_execute($insert);

            foreach($a['degree'] as $key =>$value){
                $id=$a['child_id'][$key];
                $degree=$a['degree'][$key];
                $school=$a['school'][$key];
                $board=$a['board'][$key];
                $pass=$a['pass'][$key];
                $cgpa=$a['cgpa'][$key];
                $dob=$a['dob'][$key];
                if($degree){
                    $child=mysqli_prepare($this->conn,"UPDATE `user_child` SET `degree`=?,`school`=?,`board`=?,`pass`=?,`cgpa`=? WHERE `id`=?");
                    mysqli_stmt_bind_param($child,"sssssi",$degree,$school,$board,$pass,$cgpa,$id);
                    // Try to execute the query
                    $exe1=mysqli_stmt_execute($child);
                }
            }
        
            if($exe && $exe1){
                self::display();
            }else{
                header('Location: resume_edit.php?id='.$p_id);
                echo "Error:110, ".mysqli_error($this->conn);
            }
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
?>