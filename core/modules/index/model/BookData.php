<?php
class BookData {
	public static $tablename = "book";


	public function BookData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function getCategory(){ return $this->category_id!=null? CategoryData::getById($this->category_id) : null ; }
	public function getStatus(){ return StatusData::getById($this->status_id); }

	public function add(){
		$sql = "insert into book (title,author,edition,observations, category_id, has_cd, status_id) ";
		$sql .= "value (\"$this->title\",\"$this->author\",\"$this->edition\",\"$this->observations\",\"$this->category_id\",\"$this->has_cd\",$this->status_id)";
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

// partiendo de que ya tenemos creado un objecto BookData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set title=\"$this->title\",author=\"$this->author\",edition=\"$this->edition\",observations=\"$this->observations\",category_id=$this->category_id,has_cd=$this->has_cd,status_id=$this->status_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new BookData());
	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where mail=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new BookData());
	}

	public static function getEvery(){
		$sql = "select *,date_add( concat(concat(date_at,\"T\"), time_at),interval duration minute) as time_end  from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new BookData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new BookData());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where isbn like '%$q%' or title like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new BookData());
	}


}

?>