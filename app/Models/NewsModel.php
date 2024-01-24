<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'news';
    protected $primaryKey       = 'newsID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'news_title',
        'news_slug',
        'news_tag',
        'news_file_type',
        'news_keywords',
        'news_author',
        'news_catid',
        'news_file',
        'news_body',
        'news_status',
        'news_date',
        'news_publish_datetime',
        'news_day',
        'news_month',
        'news_mime',
        'news_year'
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

    public function doAddPost($data)
    {
        if ($this->save($data)) {
            echo json_encode(array("status" => "success",  "message" => "News created successfully"));
        } else {
            echo json_encode(array("status" => "error",  "message" => "Unable to create  news"));
        }
    }
 
    public function getNews()
    {
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'DESC')->limit(12);
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
    public function banNews($uid){
        $this->find($uid); 
        $data = [
            'news_status'=>0,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }
    public function activateNews($uid){
        $this->find($uid); 
        $data = [
            'news_status'=>1,
        ];      
        if ($this->update($uid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }
    public function getSiteNews()
    {
        $this->where('news_status', 1);
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'DESC')->limit(12);
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

    public function getSiteNewsHome()
    {
        $this->where('news_status', 1);
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'RANDOM')->limit(3);
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

    public function getSiteNews2()
    {
        $this->where('news_status', 1);
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'DESC');
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


    public function getThisNews($newsid)
    {
        $this->where(['news_status'=>1,'newsID'=>$newsid])->limit(1);
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'DESC');
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

    public function doEditPost($nid,$data){
        $this->find($nid);    
        if ($this->update($nid, $data)) {
            print json_encode(array("status" => "success",  "message" => "Action was successfully"));
        } else {
            print json_encode(array("status" => "error",  "message" => "Unable to execute action"));
        }
    }

    public function  getNewsByCategory($nid)
    {
        $this->where(['news_status'=>1,'news_catid'=>$nid]);
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'DESC');
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

    public function  searchNews($rule)
    {
        $this->like(['news_title'=>$rule]);
        $this->orLike(['news_body'=>$rule]);
        $this->orLike(['news_slug'=>$rule]);
        $this->orLike(['news_tag'=>$rule]);
        $this->orLike(['news_keywords'=>$rule]);
        $this->join('categories', 'categories.categoryID = news.news_catid', "left");
        $this->join('authors', 'authors.authorID = news.news_author', "left");
        $this->orderBy('newsID', 'DESC');
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

}
