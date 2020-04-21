<?php

include_once ROOT. '/components/Db.php';

class News{
    
    
    //Возвращает одну новость определенную id
    public static function getNewsItemById($id){
        $id = intval($id);
        
        if ($id){
       
        $db = Db::getConnection(); //получаем объект PDO из файла Db.php   
        
               
        $result = $db->query('SELECT * from news WHERE id=' . $id);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);//индексы при выводе в виде назв
        //аний колонок
        
        $newsItem = $result->fetch();
        
        return $newsItem;
        }
    }
    
    public static function getNewsList(){
        
        $db = Db::getConnection();//получаем объект PDO из файла Db.php
        
        $newsList = array();//пустой массив для результатов
        
        $result = $db->query('SELECT id, title, date, short_content FROM news '
                . 'ORDER BY date DESC LIMIT 10');//выбираем 10 последних новост
                //ей из таблицы news
              
              
            $i = 0;
            
        while($row =$result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
           }
           return $newsList;
    }
}

