<?php

namespace App\Models\Ogadan;

use CodeIgniter\Model;

class BeneficiaryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'beneficiaries';
    protected $primaryKey       = 'beneficiaryID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'beneficiaryID',
        'beneficiary_userid',
        'beneficiary_company',
        'beneficiary_type',
        'beneficiary_item',
        'beneficiary_status',
        'beneficiary_date',
        'beneficiary_name'
    ];

    public function getMyBeneficiaries($company)
    {
        $this->where(['beneficiary_userid' => session()->get('userID'),'beneficiary_company'=> $company,'beneficiary_status'=>1]);
        $query = $this->get();
        if ($query->getNumRows() > 0) {
            foreach ($query->getResult() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

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
}
