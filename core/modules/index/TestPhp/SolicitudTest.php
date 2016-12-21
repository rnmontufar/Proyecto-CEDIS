<?php

	assert_options(ASSERT_BAIL, 1);

    $id = '1';

    assert("getAll()","Assertion failed");
    assert("update()","Assertion failed");
    assert("getById($id)","Assertion failed");
    assert("getEvery()","Assertion failed");
?>