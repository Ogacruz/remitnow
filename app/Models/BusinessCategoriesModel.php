<?php

namespace App\Models;

use CodeIgniter\Model;

class BusinessCategoriesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'businesscategories';
    protected $primaryKey       = 'businesscategoryID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields    = [
        'businesscategory_name',
        'businesscategory_image',
        'businesscategory_image_path',
        'businesscategory_status',
        'businesscategory_date',
    ];

    public function getBizGroup(){
        // $this->where('businesscategory_status',1);
        $this->orderBy('businesscategory_name','ASC');
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
    
    public function getActiveBizGroup(){
        $this->where('businesscategory_status',1);
        $this->orderBy('businesscategory_name','RANDOM')->limit(8);
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
    
    public function getAllActiveBizGroup(){
        $this->where('businesscategory_status',1);
        $this->orderBy('businesscategory_name','ASC');
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


public function checkBusinessGroup($title){
    $this->where('businesscategory_name',$title);
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
    
public function doChangeBusinessGroupName($uid,$title){
    $this->find($uid); 
    $data = [
        'businesscategory_name'=>$title,
    ];      
    if ($this->update($uid, $data)) {
        print json_encode(array("status" => "success",  "message" => "Group name changed was successfully"));
    } else {
        print json_encode(array("status" => "error",  "message" => "Unable to update the group name"));
    }
}



public function banBusinessGroup($uid){
    $this->find($uid); 
    $data = [
        'businesscategory_status'=>0,
    ];      
    if ($this->update($uid, $data)) {
        print json_encode(array("status" => "success",  "message" => "Action was successfully"));
    } else {
        print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
    }
}

public function activateBusinessGroup($uid){
    $this->find($uid); 
    $data = [
        'businesscategory_status'=>1,
    ];      
    if ($this->update($uid, $data)) {
        print json_encode(array("status" => "success",  "message" => "Action was successfully"));
    } else {
        print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
    }
}

public function  doSaveBusinessGroup($data){
    if ($this->save($data)) {
        echo json_encode(array("status" => "success",  "message" => "Business group created successfully"));
    } else {
        echo json_encode(array("status" => "error",  "message" => "Unable to create business group"));
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
