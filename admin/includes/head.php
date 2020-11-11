<?php session_start();?>
<!DOCTYPE html>
<html class="bg-black">

<head>
    <title>AdminLTE</title>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <!--Sweet Alert -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

    <!-- Alert Script -->
    <script>
        function myAlert(msg, type, redirectTo) {
            swal({
                title: msg,
                type: type,
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false,
                closeOnClickOutside: false,
            }, function () {
                window.location.href = redirectTo;
            });
        }
    </script>

    <style>
        .error {
            color: RED;
            font-weight: bold;
        }
    </style>