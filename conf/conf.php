<?php


/**
 * Настройки 
 */
/**
 * Подключение к БД
 */
$conn = new mysqli('localhost', 'root', 'myneW123!','mini_blog');

    if ($conn == false){
        die('ERROR: Could not connect. '.mysqli_connect_error());
};


 // константы для контроллеров
define("PathPrefix", '../controllers/');
define("PathPostfix", 'Con.php');
define('ShowAllArticles', 'SELECT * FROM posts');

?>