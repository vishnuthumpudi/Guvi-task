<?php
function storejson(){
$sql="select * from users";
$result=query($sql);




$data_array = array();
while($rows =mysqli_fetch_assoc($result)) {
   $data_array[] = $rows;
   $fp = fopen('C:/xampp/htdocs/login/functions/myjson.json', 'w');

   if(!fwrite($fp, json_encode($data_array)."\r\n")) {
     die('Error : File Not Opened. ' . mysql_error());
    }
  }



   fclose($fp);
//
// while($row = mysqli_fetch_array($result)){
// // $array=$row->fetch_assoc();
//
// //Now encode PHP array in JSON string
// $json=json_encode($row,true);
//
// //test the json string
// var_dump($json);
//
// //create file if not exists
// $fo=fopen("C:/xampp/htdocs/login/functions/myjson.json","w");
//
// //write the json string in file
// $fr=fwrite($fo,$json);
//
// }
}

// function storejson(){
// //select all data from json table
// $query="select * from users ";
// $result=query($query);
//
// //fetech all data from json table in associative array format and store in $result variable
// $array=fetch_array($result);
//
// //Now encode PHP array in JSON string
// $json=json_encode($array,true);
//
// //test the json string
// //var_dump($json);
//
// //create file if not exists
// $fo=fopen("myjson.json","w");
//
// //write the json string in file
// $fr=fwrite($fo,$json);
// }
?>