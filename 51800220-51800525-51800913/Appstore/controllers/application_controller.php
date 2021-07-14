<?php
	require_once('models/game_moi_cap_nhat.php');
	require_once('models/de_xuat_cho_ban.php');
	require_once('models/vua_cap_nhat.php');
	require_once('models/ung_dung_moi.php');
	require_once('models/nang_suat.php');
	require_once('models/ung_dung_pho_bien.php');
	require_once('models/map_gps.php');
	require_once('models/cong_cu_va_tien_ich.php');
	require_once('base_controller.php');
	class ApplicationController extends BaseController{
		function __construct(){
			$this->name='application';
		}
		public function index(){
			$new_game_update=game_moi_cap_nhat::getAll(6);
			$intro_for_you=de_xuat_cho_ban::getAll(6);
			$new_update_app=vua_cap_nhat::getAll(6);
			$new_app=ung_dung_moi::getAll(3);
			$capacity=nang_suat::getAll(3);
			$popular_app=ung_dung_pho_bien::getAll(6);
			$map=map_gps::getAll(3);
			$benaficial_tool=cong_cu_va_tien_ich::getAll(6);
			$this->render('index',array('new_game_update'=>$new_game_update,'intro_for_you'=>$intro_for_you,'new_update_app'=>$new_update_app,'new_app'=>$new_app,'capacity'=>$capacity,'popular_app'=>$popular_app,'map'=>$map,'benaficial_tool'=>$benaficial_tool),'application');
			
		}
		public function view(){
			echo "view page of application";
		}
	}
?>