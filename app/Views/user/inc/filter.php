<div class="offcanvas offcanvas-start suha-filter-offcanvas-wrap" tabindex="-1" id="suhaFilterOffcanvas"
        aria-labelledby="suhaFilterOffcanvasLabel">
        <!-- Close button-->
        <button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <!-- Offcanvas body-->
        <div class="offcanvas-body py-5">
            <div class="container">
                <div class="row">
                    <form action="/user/dashboard/product/filter" method="POST">
                    <div class="col-12">
                        <!-- Catagory-->
                        <div class="widget catagory mb-4">
                            <h6 class="widget-title mb-2">Category</h6>
                            <div class="widget-desc">
                                <!-- Single Checkbox-->
                                <?php

                                    use App\Models\BusinessCategoriesModel;
                                    use App\Models\ProductsModel;

                                    $cat = new BusinessCategoriesModel();

                                    $cat->where('businesscategory_status',1);
                                    $cat->orderBy('businesscategory_name','ASC');
                                    $query = $cat->get();

                                    if ($query->getNumRows() > 0) {
                                        foreach ($query->getResult() as $row) {?>
                                            <div class="form-check">
                                                <input class="form-check-input" name="category[]" id="<?=$row->businesscategory_name?>" value="<?=$row->businesscategoryID?>" type="checkbox">
                                                <label class="form-check-label" for="<?=$row->businesscategory_name?>"><?=$row->businesscategory_name?></label>
                                            </div>
                                    <?php }} ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Color-->
                        <div class="widget color mb-4">
                            <h6 class="widget-title mb-2">Brand</h6>
                            <div class="widget-desc">
                                <!-- Single Checkbox-->
                                <?php    
                                $prods = new ProductsModel() ;                                         
                                    $prods->groupBy(['product_brand']);
                                    $query = $prods->get();
                                    if ($query->getNumRows() > 0) {
                                        foreach ($query->getResult() as $row){ ?>
                                        <div class="form-check">
                                            <input class="form-check-input" name="brand[]" id="<?=$row->product_brand?>" value="<?=$row->product_brand?>" type="checkbox">
                                            <label class="form-check-label" for="<?=$row->product_brand?>"><?=$row->product_brand?></label>
                                        </div>
                                <?php  }
                                }
                                    											
                                    ?>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-12">
                        <!-- Price Range-->
                        <div class="widget price-range mb-4">
                            <h6 class="widget-title mb-2">Price Range</h6>
                            <div class="widget-desc">
                                <!-- Min Value-->
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="minprice" id="floatingInput" type="text" placeholder="1">
                                            <label for="floatingInput">Min</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="maxprice" id="floatingInput" type="text" placeholder="1000" >
                                            <label for="floatingInput">Max</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Apply Filter-->
                        <div class="apply-filter-btn">
                            <button type="submit" class="btn btn-lg btn-success w-100">Apply Filter</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>