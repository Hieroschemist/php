<?php

function indexAction(){
    echo "IndexController.php > testAction";
    
};

function mainAction(){
    echo "IndexController.php > testAction";

};
/**
 * просмотр статьи
 */
function showAction() {   
    echo 'Выведены все статьи';  
};
/**
 * создание статей
 */
function createAction() {   
    echo 'Выведены все статьи';  
};

/**
 *  удаление статьи
 */
function deleteAction() {   
    echo 'Выведена статья'; 
};
/**
 *  изменение статьи
 */
function changeAction() {   
    echo 'Выведена статья'; 
};
?>