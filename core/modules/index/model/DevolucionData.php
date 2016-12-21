<?php
class DevolucionData {
	public static $tablename = "solicitud";


	public function DevolucionData(){
	}

	public function getBook(){ return $this->book_id!=null? BookData::getById($this->book_id) : null ; }
	public function getStatus(){ return StatusData::getById($this->status_id); }


// partiendo de que ya tenemos creado un objecto DevolucionData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set status_id=$this->status_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DevolucionData());
	}

	public static function getEvery(){
		$sql = "select *,date_add( concat(concat(date_at,\"T\"), time_at),interval duration minute) as time_end  from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DevolucionData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DevolucionData());
	}

}

?>