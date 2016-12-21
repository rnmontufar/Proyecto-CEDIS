<?php
    // test  de asserciones para

    // Devoluciones

    //Configuracion de Assert , el programa terminara de ejecutarse
    //si se produce error.
	assert_options(ASSERT_BAIL, 1);


    //Test de recuperacion total de base de datos ordenados a apartir
    //del orden de creacion.

    // todos los objetos para la vista Devoluciones
    assert("getAll()","Assertion failed");


    //Test de actualizacion de registro. dado
    assert("update()","Assertion failed");


    //Test obtener un registro mediante ID.

    //Test : 1
    $id = '2';
    assert("getById($id)","Assertion failed");

    //Test 2
    $id = '1';
    assert("getById($id)","Assertion failed");

    // test obtener un Objeto

    // test 3
    assert("getEvery()","Assertion failed");
?>