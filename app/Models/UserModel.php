<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'userID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_ref',
        'user_branchid',
        'user_emp_id',
        'user_code',
        'user_fullname',
        'user_phone',
        'user_email',
        'user_password',
        'user_sex',
        'user_dob',
        'user_country',
        'user_state',
        'user_lga',
        'user_town',
        'user_address',
        'user_tpin',
        'user_recap',
        'user_gids_path',
        'user_passport_path',
        'user_role',
        'user_gids',
        'user_passport',
        'user_created_at',
        'user_token_link',
        'user_token',
        'user_otp',
        'user_activation',
        'stage_mode',
        'user_status'
    ];


    public function getUser()
    {
        $this->where(['userID' => session()->get('userID')]);
        $this->join('wallets', 'wallets.wallet_userid = users.userID', "right");
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

   

    public function getUsers()
    {
        $this->where(['user_role !=' => 'user']);
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

    public function getAllSystemUsers()
    {
        $this->where(['user_role !=' => 'superadmin']);
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

    public function UpDateUserBio($data, $uid)
    {
        $this->find($uid);
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Profile updated successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to update profile"));
        }
    }

    public function liveApi($uid,$data)
    {
        $this->find($uid);
        $this->update($uid, $data);
        $response = "Live API Response";
        print json_encode(array("status" => "success",  "message" => $response));
    
    }

    public function demoApi($uid,$data)
    {
        $this->find($uid);
        $this->update($uid, $data);
        $response = "Demo API Response";
        print json_encode(array("status" => "success",  "message" => $response));
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
