<?php
/*
error_reporting(E_ALL);
include "config.php";
// REGISTER USER

  echo "yea <br/>"; 
$ProMail = "ggjlfhgg@me.com";
$ProUserName= "lele";
$ProPicture="00110";
$ProSavedTrees="4";
$ProDonated="5.5";
$ProPassword="ililil";

error_log("saluuuut",3,"/var/www/i-kf.ch/SaveATree/lib/php.log");
echo(heyyyy);
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    echo(haha);
    if (!isset($_POST['ProMail'], $_POST['ProUserName'], $_POST['ProPicture'], $_POST['ProSavedTrees'], $_POST['ProDonated'], $_POST['ProPassword'])) {
        die ('Benutzen sie nur Formulare von der Homepage.');
    }
    if (('' == $ProMail = $_POST['ProMail']) or 
           ('' == $ProUserName = $_POST['ProUserName']) or
           ('' == $ProPicture = ($_POST['ProPicture']) or
           ('' == $ProSavedTrees = $_POST['ProSavedTrees']) or
           ('' == $ProDonated = $_POST['ProDonated']) or
           ('' == $ProPassword = $_POST['ProPassword']) 
           )) {
       die ('Bitte füllen sie das Formular vollständig aus.');
   }
    $sql = "INSERT INTO TProfile (ProMail,ProUserName, ProPicture, ProSavedTrees, ProDonated, ProPassword)
  			  VALUES(?,?,?,?,?,?)"; //,ProPicture,ProSavedTrees,ProDonated,ProPassword $ProUserName,$ProPicture,$ProSavedTrees,$ProDonated,$ProPassword')";
       echo(eeeee);         
    $stmt = $db->prepare($sql);
   // $stmt->execute(array($ProMail,$ProUserName));
   $stmt-> bind_param("ssssss",$ProMail, $ProUserName, $ProPicture, $ProSavedTrees, $ProDonated, $ProPassword);
    if(!$stmt) {
        die('error');
    } 
    if(!$stmt->execute()) {
        printf("Error: %s.\n", $stmt->error);
        die('error 1');
    }  
    
     echo "hallo";
    
}*/

error_reporting(E_ALL);
include "config.php";
// REGISTER USER

  echo "yea <br/>"; 
$ProMail = "liiiit@me.com";
$ProUserName= "lele";
$ProPicture="00110";
$ProSavedTrees="4";
$ProDonated="5.5";
$ProPassword="ililil";

error_log("saluuuut",3,"/var/www/i-kf.ch/SaveATree/lib/php.log");

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    echo(ifklappt);
    if (!isset($_POST['ProMail'], $_POST['ProUserName'], $_POST['ProPicture'], $_POST['ProSavedTrees'], $_POST['ProDonated'], $_POST['ProPassword'])) {
        die ('Benutzen sie nur Formulare von der Homepage.');
    }
    if (('' == $ProMail = $_POST['ProMail']) or 
           ('' == $ProUserName = $_POST['ProUserName']) or
           ('' == $ProPicture = ($_POST['ProPicture']) or
           ('' == $ProSavedTrees = $_POST['ProSavedTrees']) or
           ('' == $ProDonated = $_POST['ProDonated']) or
           ('' == $ProPassword = $_POST['ProPassword']) 
           )) {
       die ('Bitte füllen sie das Formular vollständig aus.');
   }
    $sql = "INSERT INTO TProfile (ProMail,ProUserName, ProPicture, ProSavedTrees, ProDonated, ProPassword)
              VALUES(?,?,?,?,?,?)"; //,ProPicture,ProSavedTrees,ProDonated,ProPassword $ProUserName,$ProPicture,$ProSavedTrees,$ProDonated,$ProPassword')";
    $stmt = $db->prepare($sql);
   // $stmt->execute(array($ProMail,$ProUserName));
   $stmt-> bind_param("ssssss",$ProMail, $ProUserName, $ProPicture, $ProSavedTrees, $ProDonated, $ProPassword);
    if(!$stmt) {
        die('error');
    } 
    if(!$stmt->execute()) {
        printf("Error: %s.\n", $stmt->error);
        die('error 1');
    }  
    
     echo "hallo";
    
}

    
    
    ?>


<?php
error_reporting(E_ALL);
echo "guguselii <br/>";
$host="127.0.0.1";
$username="satree_user"; 
$password="Uk$12?HB7"; 
$db_name="Save_A_Tree"; 

$db = @new mysqli($host,$username,$password,$db_name);
if (mysqli_connect_errno()){
    die('Keine Verbindung; '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}


echo "judihui";



    
    
    ?>