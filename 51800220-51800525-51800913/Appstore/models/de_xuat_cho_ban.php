<?php
	
	class de_xuat_cho_ban{
		public $id;
		public $name;
		public $images;
		public $link_info;
		public $manufacture;
		public function __construct($id,$name,$images,$link_info,$manufacture){
			$this->id=$id;
			$this->name=$name;
			$this->images=$images;
			$this->link_info=$link_info;
			$this->manufacture=$manufacture;
		}
		public static function getAll($limit=''){
			if(!empty($limit)){
					$sql="select * from de_xuat_cho_ban limit $limit";
				}
			else{
					$sql="select * from de_xuat_cho_ban";
				}
			
			$db=DB::getDB();
			$stm=$db->query($sql);
			$list=array();
			foreach($stm->fetchAll(PDO::FETCH_ASSOC)as $item){
				$list[]=new de_xuat_cho_ban($item['id_DXCB'],$item['name'],$item['images'],$item['link_info'],$item['manufacture']);
			}
			return $list;
		}
	}
?>