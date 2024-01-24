<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'comments';
    protected $primaryKey       = 'commentID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'comment_newsid',
        'comment_name',
        'comment_email',
        'comment_phone',
        'comment_message',
        'comment_status',
        'comment_date',
        'comment_time',
        'comment_day',
        'comment_month',
        'comment_year'
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

    public function addComment($data){
        if($this->save($data)) {
            print json_encode(array("status" => "success",  "message" => "Your comment is under review by our admin"));
        } else {
            print json_encode(array("status" => "error", "message" => 'Error postinf comment'));
        
        }
    }
    public function getComments(){
        $this->join('news', 'news.newsID = comments.comment_newsid', "left");
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

    public function banComment($uid){
        $this->find($uid); 
        $data = [
            'comment_status'=>0,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }
    public function activateComment($uid){
        $this->find($uid); 
        $data = [
            'comment_status'=>1,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }




}
