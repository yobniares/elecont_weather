<?php

class RenderClass
{
    /**
     * @param $templateName
     * @param $vars
     * @return false|string|void
     */
    public function renderTemplate($templateName, $vars = [])
    {
        try {
            if (file_exists('templates/'.$templateName.'.tmpl.php')) {
                ob_start();
                extract($vars);
                require 'templates/'.$templateName.'.tmpl.php';
                return ob_get_clean();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}
