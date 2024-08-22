<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<style>
    .custom-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .custom-row {
        display: flex;
      
        justify-content: center; /* Center the items horizontally */
        margin-bottom: 15px;
    }

    .custom-form,
    .custom-filters {
        flex: 1; /* Use flex: 1 to allow the forms to share the available space equally */
        display: flex;
        justify-content: center; /* Center the items horizontally */
        align-items: center; /* Center the items vertically */
    }

    .custom-form-group {
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .custom-form-control,
    .custom-filter {
        max-width: 200px;
       
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px;
    }

    .custom-btn {
        margin-top: 2px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
 .banner-image {
    width: 100%;
    height: 95vh; /* Set your desired percentage of the viewport height */
    object-fit: cover;
}





</style>

 <img src="https://img.freepik.com/premium-photo/layered-cake-with-colorful-sprinkles_724548-7697.jpg?w=740" alt="Banner Image" class="banner-image">

<section>
    <div class="custom-container text-center">
        <div class="custom-row" id="search-filter-container" style="display: flex; align-items: center;">
            <form class="custom-filters">
                <div class="custom-form-group">
                    <select data-filter="make" class="custom-filter custom-make custom-form-control">
                        <option value="">In kg</option>
                        <option value="">Show All</option>
                    </select>
                </div>
                <div class="custom-form-group">
                    <select data-filter="model" class="custom-filter custom-model custom-form-control">
                        <option value="">Best Seller</option>
                        <option value="">Show All</option>
                    </select>
                </div>
                <div class="custom-form-group">
                    <select data-filter="type" class="custom-filter custom-type custom-form-control">
                        <option value="">Category</option>
                        <option value="">Show All</option>
                    </select>
                </div>
                <div class="custom-form-group">
                    <select data-filter="price" class="custom-filter custom-price custom-form-control">
                        <option value="">Select Price Range</option>
                        <option value="">Show All</option>
                    </select>
                </div>
            </form>

            <form class="custom-form">
                <div class="custom-form-group">
                    <input class="custom-form-control" type="text" placeholder="Search" />
                </div>
                <div class="custom-form-group">
                    <button type="submit" class="custom-btn">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>




<section>
    <div class="container-fluid position-relative" style="z-index: 99999;">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <!--<div class="row" style="justify-content: space-between;text-align: center;">-->
      
                    <!--    <div class="col-md-6" >-->
                    <!--        <h2>Cake Category</h2>-->
                    <!--        <button class="btn btn-primary glow-on-hover" onclick="showAllProducts()">All Products</button>-->
                    <!--        <button class="btn btn-primary glow-on-hover" onclick="showCategory('vanilla')">Vanilla</button>-->
                    <!--        <button class="btn btn-primary glow-on-hover" onclick="showCategory('chocolate')">Chocolate</button>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="row">
                        <div>
                            <div class="row" id="allProductsCategory">
                                <!-- ... All products go here ... -->
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/butterscotch.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Butterscotch</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/3tiercake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">3 Tier cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/anniversary cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Anniversary Cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-md-4 mb-4">
                                   <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/black forest.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Black forest</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                   
                                      <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/belgium cakee.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Belgium cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/black.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Black forest</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/blueberry.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Blueberry</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/fruite cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">fruite cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/kajumalai cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">kaju malai cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/lichi.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Lychee cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/mango.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Mango Cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/rasmalai cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Rasmalai Cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/pineapple cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">pineapple</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/red valvet.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Red valvet</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/anniversary cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Anniversary cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/strwaberry cake.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Strwaberry cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>
                                
                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vanilla cakes go here -->
                            <div class="row" id="vanillaCategory" style="display: none;">
                                <!-- ... Vanilla cakes go here ... -->
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/red valvet.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Strwaberry cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>

                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/red valvet.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Strwaberry cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>

                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/red valvet.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Strwaberry cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>

                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Chocolate cakes go here -->
                            <div class="row" id="chocolateCategory" style="display: none;">
                                <!-- ... Chocolate cakes go here ... -->
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/red valvet.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Strwaberry cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>

                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card m-auto">
                                        <img class="card-img-top" src="public/images/cakeimg/red valvet.jpg" alt="" />
                                     <div>
                                            <div class="text-comtent text-center text-hover">
                                                <h5 class="pt-4"><a href="<?= base_url('single-product'); ?>">Strwaberry cake</a></h5>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">
                                                    <p class="h5 m-0">₹782.00</p>
                                                </button>

                                                <button type="button" class="btn btn-light">
                                                    <i class="fas fa-cart-plus"></i>
                                                    <span>Add Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>
