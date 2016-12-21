<?php

    include("../model/SolicitudData.php");
    require_once '../model/BookData.php';
  require_once '../model/StatusData.php';
  include ('../../../controller/Database.php');
  require_once '../../../controller/Executor.php';
  require_once '../model/DevolucionData.php';
  require_once '../../../controller/Model.php';

    class SolicitudPhpUnit extends PHPUnit_Framework_TestCase{

        // Funcion para testing de la funcion getAll()
        public function testGetAll(){
            
            $SolicitudData = new SolicitudData();

            $expected = $SolicitudData->getTest();

            $this->assertEquals($expected, $SolicitudData->getAll());

        }


        public function testUpdate(){
            
            $SolicitudData = new SolicitudData();

            $expected = $SolicitudData->getTest();

            $this->assertEquals($expected, $SolicitudData->update());

        }


        public function testGetById(){
            
            $SolicitudData = new SolicitudData();

            $id = '1';

            $expected = $SolicitudData->getTest();

            $this->assertEquals($expected, $SolicitudData->getById($id));
        }

        
        public function testGetEvery(){
            
            $SolicitudData = new SolicitudData();

            $expected = $SolicitudData->getTest();

            $this->assertEquals($expected, $SolicitudData->getEvery());

        }
    }
?>