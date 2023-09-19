<?php 
    class Product extends Controller {
        
        public $MyModels;

        public function __construct()
        {
            $this->MyModels = $this->models(('MyModels'));
        }

        public function product() 
        {
            $query = $this->MyModels->getRaw('SELECT * FROM users');

            $this->view('masterlayout', [
                'page' => 'users/index',
                'resources' => [
                    'title' => 'Usego Chia sẽ các mẫu thiết kế - PowerPoint Miễn Phí',
                    'css' => 'home',
                    'js' => 'home',
                ],
                'database' => $query, 
            ]);

        }

    }
?>