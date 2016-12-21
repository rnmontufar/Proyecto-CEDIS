<?php
class SolicitudData {
	public static $tablename = "solicitud";

	public function SolicitudData(){
	}
	
	public function getBook(){ return $this->book_id!=null? BookData::getById($this->book_id) : null ; }
	public function getStatus(){ return StatusData::getById($this->status_id); }

	public static function getAll(){
		$sql = "select * from ".self::$tablename."  where status_id=5";
		$query = Executor::doit($sql);
		return Model::many($query[0],new SolicitudData());
	}

	public function update(){
		$sql = "update ".self::$tablename." set status_id=$this->status_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new SolicitudData());
	}

	public static function getEvery(){
		$sql = "select *,date_add( concat(concat(date_at,\"T\"), time_at),interval duration minute) as time_end  from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new SolicitudData());
	}

}

?>