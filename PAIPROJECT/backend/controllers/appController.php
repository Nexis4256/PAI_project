<?php declare(strict_types=1);

class appController {
    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }
    public function clear_request(){
        $this->request=null;
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $template = null, array $variables = [])
    {
        $templatePath= $template ? dirname(__DIR__).'\..\frontend\views\\'.get_class($this).'\\'. $template.'.php' : '';
            $output = 'File not found';


            if(file_exists($templatePath))
            {
                extract($variables);

                ob_start(); //


                include $templatePath;

            $output = ob_get_clean();
        }
        print $output;
    }
}
