<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products';
    protected $primaryKey       = 'productID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'product_name',
        'product_code',
        'product_image',
        'product_current_price',
        'product_old_price',
        'product_categoryid',
        'product_brand',
        'product_featured',
        'product_description',
        'product_isflash',
        'product_tag',
        'product_date',
        'product_status',
        'product_posterid'
    ];

    public function getProducts(){        
        $this->orderBy('productID', 'DESC');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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
    public function getProductList(){   
        $this->where(['product_status'=>1,]);       
        $this->orderBy('productID', 'DESC');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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
    public function getItemByCategory($cid,$key){  
        $this->where(['product_categoryid'=>$cid,'product_status'=>1,]);    
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

      public function getTopProducts(){      
        $this->where(['product_status'=>1,'product_featured'=>'Top Products']);  
        $this->orderBy('productID', 'RANDOM')->limit(6);
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

    public function getAllTopProducts(){      
        $this->where(['product_status'=>1,'product_featured'=>'Top Products']);  
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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
    
    public function getProductsByBrand($brand){      
        $this->where(['product_status'=>1,'product_brand'=>$brand]);  
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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


    public function getWeeklyProducts(){        
         $this->where(['product_status'=>1,'product_featured'=>'Weekly Best Sellers']);  
         $this->orderBy('productID', 'RANDOM')->limit(4);
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

    public function getAllWeeklyProducts(){        
        $this->where(['product_status'=>1,'product_featured'=>'Weekly Best Sellers']);  
        $this->orderBy('productID', 'RANDOM');
       $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

    public function getFeaturedProducts(){   
        $this->where(['product_status'=>1,'product_featured'=>'Featured Products']);       
        $this->orderBy('productID', 'RANDOM')->limit(6);
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

    public function getAllFeaturedProducts(){   
        $this->where(['product_status'=>1,'product_featured'=>'Featured Products']);       
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

    public function buyProduct($pid){   
        $this->where(['product_status'=>1,'productID'=>$pid]);       
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

   public function searchProduct($search){   
        $this->where(['product_status'=>1]);  
        $this->like(['product_name'=>'%'.$search.'%']);  
        $this->orLike(['product_code'=>'%'.$search.'%']); 
        $this->orLike(['product_current_price'=>'%'.$search.'%']);    
        $this->orLike(['product_old_price'=>'%'.$search.'%']); 
        $this->orLike(['product_brand'=>'%'.$search.'%']); 
        $this->orLike(['product_featured'=>'%'.$search.'%']); 
        $this->orLike(['product_description'=>'%'.$search.'%']);
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "left");
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

    

    public function productFilter($cat,$brand,$minprice,$maxprice){ 

       

        if(isset($cat) && !empty($cat))
            {
                $cat_filter = implode("','", $cat);
                $this->where("product_categoryid IN ('".$cat_filter."')");
            }

        if(isset($brand) && !empty($brand))
            {
                $brand_filter = implode("','", $brand);
                $this->where("product_brand IN ('".$brand_filter."')");
            }  

        if(isset($minprice, $maxprice) && !empty($minprice) &&  !empty($maxprice))
            {
                $this->where("product_current_price BETWEEN $minprice AND $maxprice", NULL, FALSE);

                
            }
           
     
        $this->where(['product_status'=>1]);
        $this->orderBy('productID', 'RANDOM');
        $this->join('businesscategories', 'businesscategories.businesscategoryID = products.product_categoryid', "right");

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
