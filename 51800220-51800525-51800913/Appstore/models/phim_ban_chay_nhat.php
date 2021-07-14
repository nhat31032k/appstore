<?php
	
	class phim_ban_chay_nhat{
		public $id;
		public $name;
		public $images;
		public $link_info;
		public $type;
		public $price;
		public function __construct($id,$name,$images,$link_info,$type,$price){
			$this->id=$id;
			$this->name=$name;
			$this->images=$images;
			$this->link_info=$link_info;
			$this->type=$type;
			$this->price=$price;
		}
		public static function getAll($limit=''){
			if(!empty($limit)){
					$sql="select * from phim_ban_chay_nhat limit $limit";
				}
			else{
					$sql="select * from phim_ban_chay_nhat";
				}
			
			$db=DB::getDB();
			$stm=$db->query($sql);
			$list=array();
			foreach($stm->fetchAll(PDO::FETCH_ASSOC)as $item){
				$list[]=new phim_ban_chay_nhat($item['id_PBCN'],$item['name'],$item['images'],$item['link_info'],$item['type'],$item['price']);
			}
			return $list;
		}
	}
?>