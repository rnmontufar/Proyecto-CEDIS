<?php
class RequestData {
	public static $tablename = "user";

	public function RequestData(){
		$this->name = "";
		$this->lastname = "";
		$this->username = "";
		$this->password = "";
		$this->is_active = "0";
		$this->created_at = "NOW()";
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new RequestData());
	}


}

?>