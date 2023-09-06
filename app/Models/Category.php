<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    protected $dbRead;
    protected $affectedRows;
    protected $message;


        public function dbRead($keyVariable = NULL, $keyValue = NULL)
        {
            try {
                if ($keyVariable !== NULL && $keyValue !== NULL) {
                    $this->dbRead->distinct('name,slug');
                    $this->dbRead = $this->where($keyVariable, $keyValue);
                } elseif ($keyVariable !== NULL && $keyValue == NULL) {
                    $this->dbRead->distinct('name,slug');
                    // $this->dbRead = $this->select([
                    //     'name',
                    //     'slug'
                    // ]);
                } else {
                    $this->dbRead->distinct('name,slug');
                    // $this->dbRead = $this->select([
                    //     'name',
                    //     'slug'
                    // ]);
                    $this->affectedRows = $this->db->affectedRows();
                }
            } catch (\Throwable $th) {
                $this->message['message']['danger'] = array(
                    $th->getMessage(),
                );
                session()->set('message',  $this->message);
                session()->markAsTempdata('message', 5);
            }
            return $this;
        }
}
