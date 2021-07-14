<?php  
	
	require_once('base_controller.php');
	class MovieController extends BaseController {
		function __construct(){
			$this->name='movie';
		}
		public function index(){
			echo "index page of movie";
		}
		public function view(){
			echo "view page of movie";
		}
	}
?>