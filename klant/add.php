<?php 

// Include required files
include($_SERVER['DOCUMENT_ROOT'] . '/_sys/includes/config.inc.php');
include(PATH_TEMPLATES . '/klant/header.php');
include(PATH_TEMPLATES . '/klant/klant.add.formulier.php');
include(PATH_CONTROLLERS . '/ClientController.php');

// Set up the class
$clientClass = new Client(DB_HOST, DB_DATABASE, DB_USER, DB_PASS);

if(isset($_POST['submit']))
{

    $addClient = $clientClass->addClient($_POST);
    if($addClient == "Success")
    {
        echo "<script>alert('Success')</script>";
    }
    elseif($addClient == "Failed")
    {
        echo "<script>alert('Failed')</script>";
    }

    print_r($addClient);

}

?>