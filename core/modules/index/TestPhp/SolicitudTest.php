<?php

    //Configuracion de Assert BAIL, el programa terminara de ejecutarse
    //si se produce error.
	assert_options(ASSERT_BAIL, 1);


    //Test de recuperacion total de base de datos ordenados a apartir
    //del orden de creacion.
    assert("getAll()","Assertion failed");

    assert("getAll()","Assertion failed");
    
    assert("getAll()","Assertion failed");


    //Test de actualizacion de registro.
    assert("update()","Assertion failed");

    assert("update()","Assertion failed");

    assert("update()","Assertion failed");


    //Test obtener un registro mediante ID.

    //Test 1
    $id = '1';
    assert("getById($id)","Assertion failed");

    //Test 2
    $id = '0';
    assert("getById($id)","Assertion failed");

    //Test 3
    $id = '4';
    assert("getById($id)","Assertion failed");

    //Test 4
    $id = '1000';
    assert("getById($id)","Assertion failed");

    //Test 5
    $id = '10';
    assert("getById($id)","Assertion failed");


    //Test de recuperacion de registros mediante fechas.
    assert("getEvery()","Assertion failed");

    assert("getEvery()","Assertion failed");
    
    assert("getEvery()","Assertion failed");
?>