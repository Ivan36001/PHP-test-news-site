<?php
//тут описываем: строка запроса->путь к action (название контроллера без слова 
//controller/название action без слова action
return array(//возвращаем в файле массив
'news/([0-9]+)' => 'news/view/$1',//actionView  в NewsController (новость по id)
'news'=> 'news/index',//actionIndex в NewsController (для массива)
    
    
    
    
  
);

