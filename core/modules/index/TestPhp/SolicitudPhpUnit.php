<?php

    include("phpunit-5.7.4.phar");
    include("../model/SolicitudData.php");
    class SolicitudPhpUnit extends PHPUnit_Framework_TestCase{

        // Funcion para testing de la funcion getAll()
        public function testGetAll(){
            
            $SolicitudData = new SolicitudData();

            $expected = ;

            $this->assertEquals($expected, $SolicitudData->getAll());

        }


        public function testUpdate(){
            
            $SolicitudData = new SolicitudData();

            $expected = ;

            $this->assertEquals($expected, $SolicitudData->update());

        }


        public function testGetById(){
            
            $SolicitudData = new SolicitudData();

            $id = '1';

            $expected = ;

            $this->assertEquals($expected, $SolicitudData->getById($id));
        }

        
        public function testGetEvery(){
            
            $SolicitudData = new SolicitudData();

            $expected = ;

            $this->assertEquals($expected, $SolicitudData->getEvery());

        }
    }
?>