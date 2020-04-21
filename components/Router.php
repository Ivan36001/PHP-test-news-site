<?php

class Router
{
    private $routes;//массив с маршрутами
    
    public function __construct() {
        $routesPath=ROOT.'/config/routes.php';//указываем путь к routes
        $this->routes = include($routesPath);//присваиваем свойству routes масс-
        //ив который хранится в файле routes при помощи include
        
    } 
    //Возвращаем строку запроса
    private function getURI(){
     if(!empty($_SERVER['REQUEST_URI'])){//используем суперглобальный массив
            //$_SERVER и по ключу REQUEST_URI получаем строку запроса
            return trim($_SERVER ['REQUEST_URI'],'/');   
    }
    }

    public function run()//принимает управление от FRONT CONTROLLER
    {
        //Получаем строку запроса
        $uri= $this->getURI();
              
        //Проверяем наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern=> $path){//для каждого маршрута 
         //находящегося в массиве routes мы помещаем в переменную $uriPattern
         //строку запроса из routes.php, а в переменную $path мы помещаем путь 
         //до обработчика
         
            
        //Сравниваем строку запроса в массиве routes ($uriPattern) и $uri (факт-
        //ический запрос)
        if (preg_match("~$uriPattern~", $uri)){ //в строке $uri ищем $uriPattern
             //определяем какой контроллер и action обрабатывают запрос
                     
           $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
           
          
            $segments = explode('/', $internalRoute);//разделяем строку на части 
            //и получаем массив  $segments
            
        
            
            //Удалем из массива первые 2 элемента:
            unset($segments[0]);
            unset($segments[1]);
                                 
                                
           $controllerName = array_shift($segments).'Controller';//получаем пер-
           //вый элемент из массива и удаляем его и к этому значению прибавляем
           //слово Controller
           $controllerName = ucfirst($controllerName);//делаем первую букву стро
           //ки заглавной
           
           $actionName = 'action'.ucfirst(array_shift($segments));
                     
           $parameters = $segments;//называем оставшийся массив с параметрами
         
          
                      
          //Подключаем файл класса контроллера
           $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
           
           if(file_exists($controllerFile)){//если файл существует
               include_once ($controllerFile);//подключаем файл
           }
           
           //Создаем объект класса контроллера и вызываем его метод (action)
          $controllerObject = new $controllerName;//создаем объект
          $result = call_user_func_array(array($controllerObject, $actionName),
          $parameters);//функция вызывает $actionName у объекта $controllerObject
          //передавая массив с параметрами $parameters
          if ($result !=null){
              break;//обрываем цикл который ищет совпадения маршрутов
          }
        }
            
            
        }
   
        
    }
    }
     

