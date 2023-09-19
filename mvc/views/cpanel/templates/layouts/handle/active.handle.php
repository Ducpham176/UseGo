<?php
define('_Home', 'home');


class Active {
    public $page = 'home';
    public $arrayPage;

    public function __construct()
    {
        if (!empty($_GET['url'])) 
        {
            $this->arrayPage = $_GET['url'][0];
        } 
        else 
        {
            $this->arrayPage = $this->page;
        }
        $this->setActive();
    }

    public function setActive() 
    {
        return $this->arrayPage;
    }
}

$active = new Active();
?>
