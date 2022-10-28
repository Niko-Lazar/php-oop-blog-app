<?php

namespace Models;

use \Helpers\Model;

class User extends Model
{
    public string $id = '';
    public string $name = '';
    public string $lastName = '';
    public string $date = '';
    public string $token = '';

    public function __construct(string $token)
    {
        $this->tableName = 'users';

        $data = self::readRow('token', $token, 's');
        
        $this->id = $data->id;
        $this->name = $data->name;
        $this->lastName = $data->lastName;
        $this->date = $data->date;
        $this->$token = $data->token;
    }
}