<?php
  require_once '../model/BookData.php';
  require_once '../model/StatusData.php';
  include ('../../../controller/Database.php');
  require_once '../../../controller/Executor.php';
  require_once '../model/DevolucionData.php';
  require_once '../../../controller/Model.php';
  
  class DevolucionesPhpUnit extends PHPUnit_Framework_TestCase {
    public $test;
    public $idBook = 1;
    
    public function setUp(){
      $this->test = new DevolucionData();
      
    }
    public function testGetBook(){
      $this->test->book_id = "1";
      $bookDev = $this->test->getBook();
      $this->assertTrue($bookDev->id == '1');
    }
    
    public function testGetStatus(){
      $this->test->status_id = '1';
      $status = $this->test->getStatus();
      $this->assertTrue($status == 'pendiente');
    }
    /*
    public function testGetById(){
      $idB = $this->test->getById(1);
      $this->assertTrue($idB == $idBook);
    }
    */
    
  }


?>