<?php

namespace App\Models;

use CodeIgniter\Model;

class CvModel extends Model
{
    protected $table = 'cv';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'address', 'experience', 'education', 'skills'];
}
