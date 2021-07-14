<?php
	class BaseController{
		protected $name;

		public function render($view, $data=array(),$template='index'){
			ob_start();
			extract($data);
			require_once('Doan/content/' .$this->name. '/' .$view.'.php');
			$content= ob_get_clean();
			require_once('Doan/'.$template.'.php');
		}
	}
?>