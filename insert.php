<?php

include "db.php";

// print_r($_POST);

if(isset($_POST["name"])){

    extract($_POST);
    if(!empty($name) && !empty($mail) && !empty($phone) && !empty($ntv)){
        if(preg_match('/^[0-9]{10}+$/', $phone) ){
            extract($_POST);
       
            $sql="INSERT INTO `std_info` (name,email,phone,native) VALUES ('$name','$mail','$phone','$ntv')";
            $result=$db->query($sql);
       
           if($result){
            echo 1;
           }else{
            echo 0;
           }
       
       }
    }else{
        echo 0;
    }


}
