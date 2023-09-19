<?php 
    class Controller {
        public function view($view, $data = [])
        {
            if(file_exists("./mvc/views/cpanel/". $view .".php"))
            {
                require_once ("./mvc/views/cpanel/". $view .".php");
            } 
        }

        public function models($models)
        {
            if(file_exists("./mvc/models/". $models .".php"))
            {
                require_once ("./mvc/models/". $models .".php");
                return new $models;
            } 
        }

        // Load resources of views 
        public function resources($layoutName, $dataResources = [])
        {
            if(file_exists("./mvc/views/cpanel/templates/". $layoutName .".php"))
            {
                require_once "./mvc/views/cpanel/templates/". $layoutName .".php";
            }
        }
    }
?>