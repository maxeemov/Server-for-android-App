<?php


class Router{
   protected $controller = 'main';      //controller
   protected $method = 'index';         //method
   protected $params = [];              //params

   public function __construct()
   {
      $url = $this->parser_Url();                                        //assign to variable disassembled variable
      if(file_exists('controllers/'. $url[0] . '.php')){        //identify variable of controller

                $this->controller = $url[0];

      }
       unset($url[0]);
      require_once 'controllers/'. $this->controller . '.php';
       $this->controller = new $this->controller;       //create object of controller class

        if(isset ($url[1])){         //identify variable of method of controller
            if(method_exists($this->controller,$url[1])){       //test exist of method

                $this->method = $url[1];


            }
            unset ($url[1]);
        }
        $this->params =$url ? array_values($url) : []; //appropriate params
        call_user_func_array([$this->controller, $this->method], $this->params);//here call method with giving to him params

   }


    public function parser_Url(){        //method for pars url string
       if(isset($_GET['url'])){

            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
       }

   }

}

?>