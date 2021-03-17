<?php
error_reporting(E_ALL);
include "config.php";
// REGISTER USER

echo "yea <br/>"; 
//$ProMail = "liiiit@me.com";
$ProUserName= "lele";
$ProPicture="00110";
$ProSavedTrees="4";
$ProDonated="5.5";
$ProPassword="ililil";

error_log("bellaa\n",3,"/var/www/i-kf.ch/SaveATree/logs/myphp.log");

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    error_log("ifklappt\n",3,"/var/www/i-kf.ch/SaveATree/logs/myphp.log");
    error_log($_POST['ProMail'],3,"/var/www/i-kf.ch/SaveATree/logs/myphp.log");


    if (!isset($_POST['ProMail']/*, $_POST['ProUserName'], $_POST['ProPicture'], $_POST['ProSavedTrees'], $_POST['ProDonated'], $_POST['ProPassword']*/)) {

        die ('Benutzen sie nur Formulare von der Homepage.');
    }
   if (('' == $ProMail = $_POST['ProMail']) /* or 
           ('' == $ProUserName = $_POST['ProUserName']) or
           ('' == $ProPicture = ($_POST['ProPicture']) or
           ('' == $ProSavedTrees = $_POST['ProSavedTrees']) or
           ('' == $ProDonated = $_POST['ProDonated']) or
           ('' == $ProPassword = $_POST['ProPassword']) 
           )*/) {
        error_log("ProMail ist leer",3,"/var/www/i-kf.ch/SaveATree/logs/myphp.log");
   }
    $obj = json_decode($ProMail);
    error_log("ProMail: ".$obj,3,"/var/www/i-kf.ch/SaveATree/logs/myphp.log");
    $sql = "INSERT INTO TProfile (ProMail,ProUserName, ProPicture, ProSavedTrees, ProDonated, ProPassword)
              VALUES(?,?,?,?,?,?)"; //,ProPicture,ProSavedTrees,ProDonated,ProPassword $ProUserName,$ProPicture,$ProSavedTrees,$ProDonated,$ProPassword')";
    $stmt = $db->prepare($sql);
   // $stmt->execute(array($ProMail,$ProUserName));
   $stmt-> bind_param("ssssss",/*$ProMail,*/ $obj, $ProUserName, $ProPicture, $ProSavedTrees, $ProDonated, $ProPassword);
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