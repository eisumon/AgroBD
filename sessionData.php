<?php
session_start();

if(isset($_GET['view'])){
    $_SESSION['production_id'] = $_GET['view'];
   // echo $_SESSION['production_id'];exit;
    header('Location:fields');
}

?>