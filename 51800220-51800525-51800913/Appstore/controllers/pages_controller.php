<?php
    class PagesController {
        public function error() {

            ob_start();
            $message = "URL Not Found !";
            require_once('Doan/content/pages/error.php');
            $content = ob_get_clean();
        	// $content="<b>This is an error message</b>";
            require_once('Doan/template.php');
        }
    }
?>