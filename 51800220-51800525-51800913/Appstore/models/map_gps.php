<?php
	
	class map_gps{
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
					$sql="select * from map_gps limit $limit";
				}
			else{
					$sql="select * from map_gps";
				}
			
			$db=DB::getDB();
			$stm=$db->query($sql);
			$list=array();
			foreach($stm->fetchAll(PDO::FETCH_ASSOC)as $item){
				$list[]=new map_gps($item['id_MG'],$item['name'],$item['images'],$item['link_info'],$item['manufacture']);
			}
			return $list;
		}
	}
?>