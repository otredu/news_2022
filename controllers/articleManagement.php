<?php
require_once "database/models/article.php";
require_once 'libraries/cleaners.php';

/*
function viewArticlesController(){
    $allnews = getAllArticles();
    require "views/articles.view.php";    
}
*/
function getNewsJson(){
    $allnews = getAllArticles();
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    echo json_encode($allnews);
    exit();
}

function postNewsJson(){
    // Takes raw data from the request
    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json);
    $time = new DateTime();
    $removetime = new DateTime();   
    $userid = 1;
    $new_id = addArticle($data->title, $data->text, $time->format(DateTime::ATOM), $removetime->format(DateTime::ATOM), $userid);
    
    $article = getArticleById($new_id);

    //send as json
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    echo json_encode($article);
    exit();
}

/*
function addArticleController(){
    if(isset($_POST['newstitle'], $_POST['newstext'], $_POST['newstime'], $_POST['removedate'])){
        $title = cleanUpInput($_POST['newstitle']);
        $text = cleanUpInput($_POST['newstext']);
        $time = cleanUpInput($_POST['newstime']);
        $removetime = cleanUpInput($_POST['removedate']);   
        $userid = $_SESSION["userid"];
        addArticle($title, $text, $time, $removetime, $userid);
        exit();
        //header("Location: /");    
    } else {
        echo "ei tallentunut";
        //require "views/newArticle.view.php";
    }
}

function editArticleController(){
    try {
        if(isset($_GET["id"])){
            $id = cleanUpInput($_GET["id"]);
            $news = getArticleById($id);
        } else {
            echo "Virhe: id puuttuu ";    
        }
    } catch (PDOException $e){
        echo "Virhe uutista haettaessa: " . $e->getMessage();
    }
    
    if($news){
        $id = $news['articleid'];
        $title = $news['title'];
        $text = $news['text'];
        $dbtime = $news['created'];
        $time = implode("T", explode(" ",$dbtime));
        $removetime = $news['expirydate'];
        $id = $news['articleid'];
    
        require "views/updateArticle.view.php";
    } else {
        header("Location: /");
        exit;
    }
}

function updateArticleController(){
    if(isset($_POST['newstitle'], $_POST['newstext'], $_POST['newstime'], $_POST['removedate'], $_POST["id"])){
        $title = cleanUpInput($_POST['newstitle']);
        $text = cleanUpInput($_POST['newstext']);
        $time = cleanUpInput($_POST['newstime']);
        $removetime = cleanUpInput($_POST['removedate']);
        $id = cleanUpInput($_POST["id"]);

        try{
            updateArticle($title, $text, $time, $removetime, $id);
            header("Location: /");    
        } catch (PDOException $e){
                echo "Virhe uutista päivitettäessä: " . $e->getMessage();
        }
    } else {
        header("Location: /");
        exit;
    }
}

function deleteArticleController(){
    try {
        if(isset($_GET["id"])){
            $id = cleanUpInput($_GET["id"]);
            deleteArticle($id);
        } else {
            echo "Virhe: id puuttuu ";    
        }
    } catch (PDOException $e){
        echo "Virhe uutista poistettaessa: " . $e->getMessage();
    }

    $allnews = getAllArticles();

    header("Location: /");
    exit;
}
*/




