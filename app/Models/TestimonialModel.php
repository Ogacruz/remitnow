<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'testimonials';
    protected $primaryKey       = 'testimonialID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'testimonial_membershipid',
        'testimonial_msg',
        'testimonial_date',
        'testimonial_status'
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
    public function getTestimonials(){
        $this->where(['testimonial_status'=>1]);
        $this->join('memberships', 'memberships.membershipID = testimonials.testimonial_membershipid', "left");
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

    public function getAllTestimonials(){
        
        $this->join('memberships', 'memberships.membershipID = testimonials.testimonial_membershipid', "left");
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

    public function getTestimonialsHome(){
        $this->where(['testimonial_status'=>1]);
        $this->orderBy('testimonialID',"DESC")->limit(3);
        $this->join('memberships', 'memberships.membershipID = testimonials.testimonial_membershipid', "left");
        
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
    
    public function banTestimonial($uid){
        $this->find($uid); 
        $data = [
            'testimonial_status'=>0,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }
    public function activateTestimonial($uid){
        $this->find($uid); 
        $data = [
            'testimonial_status'=>1,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }

}
