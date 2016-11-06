<?php

    require_once("../database.php");
    require_once("../models/articles.php");
    
    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else 
        $action = "";
    
    if ($action == "add"){
        if (!empty($_POST)){
            article_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        include("../view/article_add.php");
    } else {
        $articles = articles_all($link);

        include("../view/articles_admin.php");
    }

?>