<?php
	
	class cong_cu_va_tien_ich{
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
					$sql="select * from cong_cu_va_tien_ich limit $limit";
				}
			else{
					$sql="select * from cong_cu_va_tien_ich";
				}
			
			$db=DB::getDB();
			$stm=$db->query($sql);
			$list=array();
			foreach($stm->fetchAll(PDO::FETCH_ASSOC)as $item){
				$list[]=new cong_cu_va_tien_ich($item['id_CCVTI'],$item['name'],$item['images'],$item['link_info'],$item['manufacture']);
			}
			return $list;
		}
	}
?>