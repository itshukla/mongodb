<?php
  require 'vendor/autoload.php';
// connect to atlas server 
  $server = "mongodb+srv://mrshuklaaa:Shukla1234@mrshuklaaa.yeoelzd.mongodb.net/";
// conect to atlas server 
  $c = new MongoDB\Client($server) ;
 // connect to databse 
  $db = $c->Shukla;
// connect to collection
$collection = $db->pravesh;
if($_POST){
$insert = array(
'name' => $_POST['name'],
'email' => $_POST['email'],
'age' => $_POST['age']
);
if($collection->insertOne($insert)){
  echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success!</strong>Your data has been submitted successfully.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
}
else{
  echo "some issue";
}
}
 



?>