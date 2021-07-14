<?php  
	require_once('models/nguoi_khac_choi_gi.php');
	require_once('models/phim_ban_chay_nhat.php');
	require_once('base_controller.php');
	class EntertainmentController extends BaseController{
		function __construct(){
			$this->name='entertainment';
		}
		public function index(){
			$people_players=nguoi_khac_choi_gi::getAll(6);
			$hot_films=phim_ban_chay_nhat::getAll(5);
			$this->render('index',array('people_players'=>$people_players,'hot_films'=>$hot_films));
			
		}
		public function view(){
			echo "view page of entertainment";
		}
	}

?>