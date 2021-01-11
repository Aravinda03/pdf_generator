<?php namespace App\Models;

use CodeIgniter\Model;

class PdfModel extends Model
{
    protected $table      = 'tbl_test';
    protected $primaryKey = 'id';

//    protected $returnType     = 'array';
//    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email', 'contact', 'image'];

//    protected $useTimestamps = false;
//    protected $createdField  = 'created_at';
//    protected $updatedField  = 'updated_at';
//    protected $deletedField  = 'deleted_at';

//    protected $validationRules    = [];
//    protected $validationMessages = [];
//    protected $skipValidation     = false;
}