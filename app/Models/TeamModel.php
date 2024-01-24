<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'teams';
    protected $primaryKey       = 'teamID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'team_empid',
        'team_category',
        'team_position',
        'team_date',
        'team_status',
        'team_facebook',
        'team_twitter',
        'team_instagram',
        'team_linkedin',
    ];

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

    public function doSaveTeam($data){
        if ($this->save($data)) {
            echo json_encode(array("status" => "success",  "message" => "Team created successfully"));
        } else {
            echo json_encode(array("status" => "error",  "message" => "Unable to create  team"));
        }
    }
    public function getTeams(){
        $this->where(['team_status'=>1]);
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
    public function getAllTeam(){
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
    public function banTeam($uid){
        $this->find($uid); 
        $data = [
            'team_status'=>0,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }
    public function activateTeam($uid){
        $this->find($uid); 
        $data = [
            'team_status'=>1,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }


}
