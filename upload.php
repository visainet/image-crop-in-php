<?php
/*
Developed by Ashutosh with Vinod @VISANET Software Pvt.Ltd.
28-11-2020 
Method : AJAX adn javascript with Upload Img in Database records.

*/
require_once('index.php');  
       $filename = 'pic_'.date('YmdHis') . '.jpeg';
       $url = '';

        if(move_uploaded_file($_FILES['avatar']['tmp_name'],'uploads/'.$filename) ){
      	$url = 'uploads/' . $filename;
        }
?>