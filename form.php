<?php 

   $name = $_POST["name"];
   $email = $_POST["email"];
   $mobile = $_POST["mobile"];
   $message = $_POST["message"];

   //create database//

   $connect = mysqli_connect('localhost','root','','ruralaccess');
   if($connect->connect_error){
      die(" Your connection is failed :" .$connect->connect_error);
   }else{
      $data = $connect->prepare("insert into contactfrom(Name,Email,Mobile,Message) values(?,?,?,?)");
      $data->bind_param('ssis',$name,$email,$mobile,$message);
      $data->execute();
      echo "Thanks for connecting with RuralAccess";
      $data->close();
      $connect->close();

   }




?>


