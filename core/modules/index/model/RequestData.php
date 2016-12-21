<?php
class RequestData {
	public static $tablename = "solicitud";

	public function RequestData(){
		$this->id = "";
		$this->fech_sol = "";
		$this->fech_ent = "";
		$this->user_id = "";
		$this->book_id = "";
		$this->status_id = "";
		$this->cui = "";
		$this->dni = "";
		$this->tipo_prestamo = "";
		//$this->created_at = "NOW()";
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename."  order by created_at desc";
		echo $sql;
		$query = Executor::doit($sql);
		echo $query;
		return Model::many($query[0],new RequestData());
	}


}

?>