<?php

function getUsers()
{//json_decode Store JSON data in a PHP variable, and then decode it into a PHP object
//__DIR__to get your current script's directory.//
    return json_decode(file_get_contents(filename:__DIR__.'resources\employees.json'), associative: true);
    
}
function getUserById($id)
{

}
function createUser($data)
{

}
function updateUser($data, $id)
{

}

function deleteUser ($id)
{

}
?>