<?php
class CategoryData {
	public static $tablename = "category";


	public function CategoryData(){
	}
    
    public function getStatus(){ return StatusData::getById($this->status_id); }

	public function add(){
		$sql = "insert into category (name,description,book_counter,status_id)";
		$sql .= "value (\"$this->name\",\"$this->descripcion\",\"$this->book_counter\",\"$this->status_id\")";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto CategoryData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\", description=\"$this->descripcion\", book_counter=\"$this->book_counter\", status_id=\"$this->status_id\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CategoryData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new CategoryData());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CategoryData());
	}


}

?>