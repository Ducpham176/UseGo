<?php 
class Layout extends controller {
    protected $dataResources;
    
    public function loadLayout($data, $layoutType) 
    {
        $this->dataResources = $data['resources'];
        $this->resources($layoutType, $this->dataResources);
    }

    public function render()
    {
        return $this->dataResources;
    }
}

$layout = new Layout();

// Load Header
$layout->loadLayout($data, 'layouts/header');
$layout->render();

// Main page
require_once "./mvc/views/cpanel/" . $data['page'] . ".php";

// Load Footer
$layout->loadLayout($data, 'layouts/footer');
$layout->render();

