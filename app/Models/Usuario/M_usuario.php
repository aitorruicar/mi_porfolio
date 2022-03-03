<?php

namespace App\Models\Usuario;

use CodeIgniter\Model;

class M_usuario extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';  

    protected $returnType = "array";
    protected $useSoftDeleted = true; 

    protected $allowedFields = 
    [
        "name", "username", "password", "role", "last_login"
    ];
}

?>