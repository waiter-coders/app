<?php
namespace tools;

class View
{
    private $template = '';
    private $config = [];
    private $params = [];

    public function __construct($viewFile, $viewParams = [])
    {
        $this->template = $viewFile;
        $this->params = $viewParams;
        $this->config = get('config.view');
    }

    public function fetch($template, $params = [])
    {
        $view = new \Smarty();
        $view->left_delimiter = isset($this->config['left']) ? $this->config['left'] : "{{";
        $view->right_delimiter = isset($this->config['right']) ? $this->config['right'] : "}}";
        $view->compile_check = true;
        $view->caching = false;
        $view->template_dir = isset($this->config['template']) ? $this->config['template'] : realpath(__DIR__ .'/../template/');
        $view->compile_dir = isset($this->config['compile']) ? $this->config['compile'] : realpath(__DIR__ .'/../storage/template/');
        return $view->fetch($template, $params);
    }
}


