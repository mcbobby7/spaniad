<?php
$search_value=$_POST["search"];
$con=new mysqli($servername,$username,$password,$project);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from smat where reg_num like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'First_name:  '.$row["reg_num"];


            }       

        }
?>
