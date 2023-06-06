<?php
if(ISSET($_POST['insert'])){
 
 if(file_exists("events.xml")){
     $events = simplexml_load_file('events.xml');
     $event = $events->addChild('event');
     $event->addChild('title', $_POST['title']);
     $event->addChild('location', $_POST['location']);
     $event->addChild('date', $_POST['date']);
     $event->addChild('image', $_POST['image']);
     $event->addChild('details', $_POST['details']);
     file_put_contents('events.xml', $events->asXML());

     header('location:Admin.php');
 }
}

//Upload Images to directory and XML

$uploadDirectory = __DIR__ . "/IMAGES/";
if (!is_dir($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}
$image = $_FILES["image"];
$filename = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
$destination = $uploadDirectory . $filename;
move_uploaded_file($image["tmp_name"], $destination);

$xmlFile = 'events.xml';
?>