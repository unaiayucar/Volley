<?php
    ob_start();
    if (isset($_POST['uname'])){
        if ($_POST['uname'] == "unai" ){
            if (isset($_POST['psw'])){
                if ($_POST['psw'] == "unai" ){
                    $link='main_unai/main.html';
                    header('location: '.$link); 
                    exit;
                } else {
                    $link='index.html';
                    header('location: '.$link); 
                    exit;
                }
            } else {
                $link='index.html';
                header('location: '.$link); 
                exit;
            }
        } else {
            $link='index.html';
            header('location: '.$link); 
            exit;
        }
    } else {
        $link='index.html';
        header('location: '.$link); 
        exit;
    }
?>