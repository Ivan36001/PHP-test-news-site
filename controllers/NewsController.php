<?php

include_once ROOT. '/models/News.php';

class NewsController {
    
    public function actionIndex() {
       $newsList = array();
       $newsList = News::getNewsList();
       
       require_once (ROOT.'/views/news/index.php');//подключаем view
       
       return true;
    }
    
      public function actionView($id) {
       if ($id){
           $newsItem =News::getNewsItemById($id);
           /*
           echo '<pre>';
           print_r($newsItem);
           echo '</pre>';
           
           echo 'actionView';
           */
           require_once (ROOT.'/views/news/view.php');//подключаем view
       }
        
       return true;
        
    }
    
}
