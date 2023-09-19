<?php 
    class App {
        protected $controller = 'home';
        protected $action = 'index';
        protected $params = [];

        public function __construct()
        {
            $arrayUrl = $this->urlProcess();
            // Check exist value
            if($arrayUrl != NULL) 
            {
                if(file_exists("./mvc/controllers/". ucfirst($arrayUrl[0]) .".php"))
                {
                    $this->controller = $arrayUrl[0];
                    unset($arrayUrl[0]);
                    // If exists ArrayUrl[0] Assign this->controller
                } else 
                {
                    echo 0;
                }
            }
            require_once ("./mvc/controllers/". $this->controller .".php");
            $this->controller = new $this->controller;
            
            if(isset($arrayUrl[1])) 
            {
                // Check exist acction 
                if(method_exists($this->controller, $arrayUrl[1]))
                {
                    $this->action = $arrayUrl[1];
                    unset($arrayUrl[1]);
                }
            }
            if(!empty($this->params))
            {
                $this->params = $arrayUrl ? array_values($this->params) : array();
            } 
                $this->params = call_user_func_array([$this->controller, $this->action], $this->params);
        }

        public function urlProcess() 
        {
            if(isset($_GET['url']))
            {
                return explode("/", filter_var(trim($_GET['url'], '/')));
            }
        }

    }
?>