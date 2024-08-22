<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<style>

.product-details{
    background-color:#ffffff !important;
    width:95%;
}

.product-description{
    background-color:#ffffff !important;
    width:95%;
}

.cart-button{
    background-color:#616b37 !important;
    border-radius:5px;
    width: 25%;
    padding: 6px;
    border: none;
    color:#ffffff;
}

@media(max-width:600px){
    .cart-button{
         width:40% !important;
    }
}
/*.cart-button:hover{*/
/*    background-color: #c2b709 !important;*/
    
/*}*/
.main-1 {
        list-style-type: none;
        display: flex;
        justify-content: space-evenly;
        /* width: 15vw; */
    }
    .footer-logo {
        /*margin-top: 37px;*/
        width: 150px;
        height: auto;
        padding: initial;
    }
    .footer-links {
        display: flex;
    }
    .footer-contact {
        display: flex;
        /*justify-content: space-evenly;*/
    }

    .main-1 {
        margin-top: 22px;
        list-style-type: none;
        display: flex;
        justify-content: space-evenly;
        width: 56vw;
    }
    
    a:hover{
        color:black !important;
    }
    /*slider try start*/

.swiper-navBtn-prev,.swiper-navBtn-nxt{
    /*margin:-23px;*/
    color: #616b37;
}
.swiper-button-prev:after,.swiper-rtl .swiper-button-next:after {
            content: 'prev';
            font-size: 30px;
            background: white;
            padding: 16px;
            border-radius: 10px;
            font-weight: bolder;
            opacity: 0.6;
        }
        .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
            content: 'next';
            font-size: 30px;
            background: white;
            padding: 16px;
            border-radius: 10px;
            font-weight: bolder;
            opacity: 0.6;
        }
.card-img{
    display: flex;
    flex-direction: column;
    align-content: flex-end;
    align-items: center;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    transition-property: all;
     transition-duration: 0.5s;
    background-color: #616b37;
    color:#ffffff;
    /*max-width:95%;*/
     
}

@media (min-width:360px) and (max-width:600px)
{
    .wid{
        width:65% !important;
    }
}

.card-img:hover{
    /*opacity:1;*/
    background: linear-gradient(to top, rgba(0, 0, 0, -0.1) 0%, rgba(0, 0, 0, 0) 100%);
    color:black;
     box-shadow: 0px 0px 5px #616b37;
}

.card-img:hover .under_cart {
    overflow:inherit;
   bottom: 10px;
}

.card-img:hover .product-card_product-price-info__17tj7{
    color:black;
}
.product-card_card-container__1oJLc .product-card_product-info-holder__3TUe8 {
    max-height: 110px;
    color: #ffffff;
}
.product-card_card-container__1oJLc .product-card_product-info-holder__3TUe8:hover{
    color:black;
}

.product-card_product-title__32LFp {
    font-size: 14px;
    background: transparent;
    text-transform:capitalize;
    padding-top: 1rem;
    /*padding-bottom: .5rem;*/
    /*white-space: nowrap;*/
    overflow: hidden;
    text-overflow: ellipsis !important;
    line-height: 1;
    white-space: normal;
}

.product-card_product-desc-tile__10UVW {
    -moz-box-align: center;
    align-items: center;
}

.product-card_product-desc-tile__10UVW{
    display: -moz-box;
    display: flex;
    -moz-box-pack: justify;
    justify-content: space-between;
}

.product-card_rating-sec__34VZH {
    background: #008539;
    padding: 0 3px 0 5px;
    color: #fff;
    display: -moz-inline-box;
    display: inline-flex;
    -moz-box-align: center;
    align-items: center;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.5;
    width: 45px;
    padding-right: 18px;
}


.product-card_product-price-info__17tj7 {
    font-size: 12px;
    /*color: #222;*/
    /*font-weight: 500;*/
}

.product-card_rating-sec__34VZH i {
    font-size: 15px;
    padding: 0 0 1px 3px;
}

.product-card_product-desc-tile__10UVW{
    display: flex;
    justify-content: space-between;
}

.earliest-delivery_earliest-del__23XZW {
    text-align: left;
    font-size: 12px;
    color: #555;
    text-overflow: ellipsis;
    margin-bottom: 8px;
    margin-top: 8px;
    overflow: hidden;
    padding-right:18px;
}

.product-card_product-review-info__2-RtV {
    color:#4f4848;
    font-size: 12px;
}

.card__image{
            border-radius:5px;
            height:265px;
             transition: transform 0.25s ease-in-out; 
            /*width:300px;*/
        }
        .card__image:hover {
            transform: scale(0.9);
        }
.cake-card{
    padding:15px !important;
    font-size:18px !important;
    white-space: normal !important;
}

.under_cart{
     height:80px;
     position:relative;
     bottom: 0;
    transition: bottom 2s;
    width:95%;
}


.under_cart:hover {
    overflow:inherit;
   bottom: 10px;
  
}

.product-card_product-price-info-container__E9rQf{
    color:#ffffff;
}
/*slider try end*/

.price-content {
    display: flex;
    align-items: center;
    width: 100%;
    /*margin-top: 40px;*/
}

.weight-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /*font-family: Poppins, sans-serif;*/
    font-size: 16px;
    font-weight: 500;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.71;
    letter-spacing: normal;
    text-align: left;
    color: #251d34;
    width: 486px;
    margin-top: 30px;
}

.product-listprice {
    text-decoration: line-through;
    /*font-family: Poppins, sans-serif;*/
    margin-right: 10px;
    color: #888;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.product-link{
    color:black;
    /*background-color: #fff;*/
}
.product-price {
    color: #312b40;
    /*font-family: Poppins;*/
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-right: 10px;
}

.discount-detail {
    font-size: 18px;
    font-weight: 500;
    color: #1c9550;
}

.gst-content {
    color: #292640;
    /*font-family: Poppins, sans-serif;*/
    font-size: 10px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    letter-spacing: -.1px;
    background: rgba(229, 231, 235, .75);
    padding: 2px 4px;
    border-radius: 2px;
    margin-left: 13px;
}

.product__review-cnt {
    border-radius: 4px;
    color: #000;
    margin-top: 3px;
    padding: 0 0 35px;
    width: 486px;
    border-bottom: 1px dotted gray;
}

@media(max-width:390px)
{
    .product__review-cnt {
         width:225px;
    }
}

@media(min-width:400px) and (max-width:600px){
    .product__review-cnt {
         width:300px;
    }
}

@media(max-width:768px){
    .img-large{
        max-width:300px !important;
        max-height: 300px !important; 
    }
    .img-main{
       display:flex !important; 
    }
    .img-thmb{
        height: 45px !important;
    }
}

/*.weightContainerBox:after{*/
/*    color:#ffffff !important;*/
/*}*/

.image{
    height:15px;
}
.text-color{
    text-transform:capitalize;
}
.product-container {
    width: 90%; /* Set the fixed width as per your requirement */
    word-wrap: break-word; /* Ensures that the text will break and wrap within the container */
    overflow-wrap: break-word; /* Ensures that the text will break and wrap within the container */
}



.img-large{
    display: inline-block; 
    border: 0; 
    max-width: 100%; 
    height: 430px; 
    vertical-align: middle;"
}

.img-thumb{
    width: 100% !important;
    /*height: 100%; */
    height:70px !important;
    cursor:pointer;
}
.flower_var{
    vertical-align: top;
    border: 1px solid #ccc !important;
    border-radius: 1px;
    display: inline-block;
    width: 120px;
}
/*#product_description > * {*/
    
/*}*/
</style>
<section class="">
    <!--<div class="breadcrumbs" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU'); background-size: cover; background-position: center; min-height: 250px;">-->
       <div class="breadcrumbs" style="background-image: url(<?= base_url('public/images/Untitled design (1).png'); ?>); background-size: cover; background-position: center; min-height: 250px;">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-md-3 col-sm-6 wid">
                <div class="breadcume_banner">
                        <div class="container_course my-5">
                            <div class=" breadcume_content" style="text-align:center;">
                                <h4 style="color:white !important;">Product Details</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title " style="display: inline; text-decoration: none; color: #000;">Product Details</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if(empty($product)){ ?>

<section class="slider-container my-3">
    <div class="container-fluid all-products" style="width:95% !important; background-color:white" >
<h2 class="categories__title py-3 mb-0 text-color">No Product Found</h2>
</div>
</section>
<?php } else { ?>
<section class="single-product my-3">
    <div class="container-fluid product-details">
        <div class="row g-5 mt-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row flex-column-reverse flex-lg-row mx-3">
                            <!--<div class="col-md-12 col-lg-2 my-3">-->
                                <!-- product-thumbnail-slider -->
                            <!--    <div class="swiper product-thumbnail-slider">-->
                            <!--        <div class="swiper-wrapper">-->
                            <!--            < ?php if (!empty($prodimg)) : ?>-->
                            <!--                < ?php foreach ($prodimg as $index => $prod) : ?>-->
                            <!--                    < ?php if (!empty($prod['image_name'])) : ?>-->
                            <!--                        <div class="swiper-slide">-->
                            <!--                            <img src="< ?= base_url() ?>public/admin/assets/uploads/product/< ?= $prod['image_name']; ?>"-->
                            <!--                                data-large-src="< ?= base_url() ?>public/admin/assets/uploads/product/< ?= $prod['image_name']; ?>"-->
                            <!--                                alt="< ?= htmlspecialchars($prod['product_name']); ?>"-->
                            <!--                                class="thumb-image img-thumb" onclick="updateMainImage(this);">-->
                            <!--                        </div>-->
                            <!--                    < ?php endif; ?>-->
                            <!--                < ?php endforeach; ?>-->
                            <!--            < ?php endif; ?>-->
                            <!--        </div>-->
                            <!--    </div>-->
                                <!-- / product-thumbnail-slider -->
                            <!--</div>-->
                            <div class="col-md-12 col-lg-2 my-3">
                                <!-- product-thumbnail-slider -->
                                <div class="swiper product-thumbnail-slider">
                                    <div class="swiper-wrapper">
                                        
                                        <?php if (!empty($prodimg)) : ?>
                                            <?php foreach ($prodimg as $index => $prod) : ?>
                                                <?php if (!empty($prod['image_name'])) : ?>
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url('public/admin/assets/uploads/product/' . $prod['image_name']); ?>"
                                                             data-large-src="<?= base_url('public/admin/assets/uploads/product/' . $prod['image_name']); ?>"
                                                             alt="<?= htmlspecialchars($prod['product_name']); ?>"
                                                             class="thumb-image img-thumb" onclick="updateMainImage(this);"> 
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- / product-thumbnail-slider -->
                            </div>

                            <div class="col-md-12 col-lg-10 my-3 img-main">
                                <!-- product-large-slider -->
                                <div class="swiper product-large-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" >
                                            <!--< ?php if (!empty($product) && isset($product[0]->product_image)) : ?>-->
                                            <!--    <div class="image-zoom" data-scale="2.5">-->
                                            <!--        <img src="< ?= base_url() ?>public/admin/assets/uploads/product/< ?= $product[0]->product_image; ?>" alt="product-large" class="large_img" id="main-img" style="display: inline-block;border: 0;max-width: 100%;height: 430px;vertical-align: middle;"/>-->
                                            <!--    </div>-->
                                            <!--< ?php endif; ?>-->
                                             <?php if (!empty($prodimg) && !empty($prodimg[0]['image_name'])) : ?>
                                                <div class="swiper-slide">
                                                    <div class="image-zoom" data-scale="2.5">
                                                        <img src="<?= base_url() ?>public/admin/assets/uploads/product/<?= htmlspecialchars($prodimg[0]['image_name']); ?>" 
                                                            alt="<?= isset($prodimg[0]['product_name']) ? htmlspecialchars($prodimg[0]['product_name']) : 'Product Image'; ?>" 
                                                            class="large_img img-large" id="main-img">
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!--<div class="swiper-button-next swiper-navBtn swiper-navBtn-nxt"></div>-->
                                    <!-- <div class="swiper-button-prev swiper-navBtn swiper-navBtn-prev"></div>-->
                                </div>
                                <!-- / product-large-slider -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-info mx-2 mb-2">
                            <div class="element-header my-3">
                                <?php if (!empty($product) && isset($product[0]->product_name)) : ?>
                                    <i class="fa-regular fa-square-ring"></i>
                                    <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');"></div>
                                    <div class="d-flex">
                                        <div pt-2>
                                            <?php if (isset($product[0]->category_name) && $product[0]->category_name !== 'Flowers'): ?>
                                                <img class="image pe-2" src="<?= base_url('public/images/veg.jpg'); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <!-- 21/6/2024 -->
                                        <!--<div class="product-container">-->
                                        <!--    <h5 class="text-color">< ?php echo $product[0]->product_name . " - " . getCategoryName($product[0]->category_id); ?></h5>-->
                                        <!--</div>-->
                                        <div class="product-container" id="productname">
                                            <!--<img class="image pe-2" src="< ?= base_url('public/images/veg.jpg') ?>">-->
                                            <!--<h5 class="text-color">< ?php echo $product[0]->product_name . " - " . getCategoryName($product[0]->category_id); ?></h5>-->
                                            <h5 class="text-color"><?php echo $product[0]->product_name; ?></h5>
                                        </div>

                                        <!-- 21/6/2024 -->
                                    </div>
                                    
                                    <div class="product__review-cnt no-review grid-view-rating" style="height: 20px;">
                                        <span class="product-card_rating-sec__34VZH"><?= number_format(floatval($product[0]->average_rating), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                        <!--<span class="listing-reviews">(2255 Reviews)</span>-->
                                    </div>
                                <?php endif; ?>                           
                            </div>
                            
                            <!--< ?php print_r($product);exit; ?>-->
                        <!--Bhgyashri Code start-->
                            <div class="cart-wrap">
                                <div class="price-content">
                                    <span id="currentPrice" itemprop="price" class="currentPrice product-price">₹ 000</span>
                                    <span class="gst-content">(Inclusive of GST)</span>
                                </div>
                                <?php if (!empty($product) && isset($product[0]->product_name)) : ?>
                                    <!--< ?php if (isset($product[0]->category_name) && $product[0]->category_name !== 'Flowers'): ?>-->
                                    <!--    <div class="weight-heading weight">Select Weight</div>-->
                                    <!--< ?php else: ?>-->
                                    <!--    <div class="weight-heading weight">Select Quantity</div>-->
                                    <!--< ?php endif; ?>-->
                                    <?php if (isset($product[0]->category_id) && $product[0]->category_id == 4 || $product[0]->category_id == 31) : ?>
                                        <div class="weight-heading weight" style="display:none;">Select Quantity</div>
                                    <?php else : ?>
                                        <div class="weight-heading weight">Select Weight</div>
                                    <?php endif; ?>
                                <?php endif; ?>                           
                                <!--< ?php foreach ($proddata as $key => $value): ?>-->
                                <!--    <div class="weightContainerBox" style="min-width: 75px; border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; transition: background-color 0.3s; cursor: pointer;" -->
                                <!--        onclick="last_id_product(< ?= $value->id; ?>); updatePriceAndProduct(< ?= $value->price; ?>, '< ?= $value->kg; ?>', < ?= $value->id; ?>)">-->
                                <!--        < ?= $value->kg; ?> <br>-->
                                <!--    </div>-->
                                <!--< ?php endforeach; ?>-->
                                
                                <!--06/06/2024-->
                                <?php if (isset($product[0]->category_id) && ($product[0]->category_id == 4 || $product[0]->category_id == 31)) : ?>
                                    
                                        <div class="weightContainerBox" style="min-width: 75px; margin-bottom: 10px; cursor: pointer; border:none !important;">
                                            <!-- Anchor tag wrapping product image with data attributes -->
                                            <?php 
                                            $displayed_product_ids = array();
                                            // $proddata = $proddata[0];
                                            // print_r($proddata);exit;
                                                // foreach ($proddata as $key => $value):
                                                // if (in_array($value->product_id, $displayed_product_ids)) {
                                                //     continue; 
                                                // }
                                                // $displayed_product_ids[] = $value->product_id; 
                                            ?>
                                            <a href="#" class="product-link" data-product-id="<?= $flower_data->product_id; ?>" data-product-price="<?= $flower_data->price; ?>" data-product-kg="<?= $flower_data->kg?>">
                                                <!-- Display main product image -->
                                                <?php if(!empty($flower_data->image_name)): ?>
                                                <div class="flower_varient flower_var px-2 py-2" onclick="flower_varient_id(<?= $flower_data->id; ?>); updatePriceAndProduct(<?= $flower_data->price; ?>, '<?= $flower_data->kg; ?>', <?= $flower_data->product_id; ?>)">
                                                            
                                                            <img class="image" src="<?= base_url() ?><?= htmlspecialchars($flower_data->full_path); ?>/<?= htmlspecialchars($flower_data->image_name); ?>" style="width: 100px; height: 100px;">
                                                            <!--<div style="width:100px; white-space:normal;">-->
                                                                <?php
                                                                    $product_name = $flower_data->product_name;
                                                                    $truncated_name = $product_name;
                                                                    if (strlen($product_name) > 15) {
                                                                    $truncated_name = substr($product_name, 0, 15) . '...';
                                                                    }
                                                                ?>
                                                                <p  id="nav-color" style="text-transform: capitalize; white-space: nowrap;">
                                                                    <?= $truncated_name; ?>
                                                                        <span class="show-more" style="color: blue; cursor: pointer;" onclick="showMore(this)"></span>
                                                                        <span class="full-text product-link"  style="display: none;"><?php echo $product_name; ?></span>
                                                                </p>
                                                                <P>
                                                                    ₹ <?= ($flower_data->price); ?>
                                                                </P>
                                                   
                                                </div>
                                                 <?php endif; ?>
                                            </a>
                                            <?php  ?>
    
                                            <!-- Display variant images -->
                                            <?php  if(!empty($variant_images)): ?>
                                                <?php $displayed_product_ids = array();
                                                    foreach ($variant_images as $variant_image): 
                                                    // if (in_array($variant_image->product_id, $displayed_product_ids)) {
                                                    //     continue; 
                                                    // }
                                                    // $displayed_product_ids[] = $variant_image->product_id; 
                                                ?>

                                                    <!--< ?php foreach ($variant_images as $variant_image): ?>-->
                                                        
                                                <div class="flower_varient flower_var product-link  px-2 py-2" data-product-id="<?= $variant_image['product_id']; ?>" data-product-price="<?= $variant_image['price']; ?>" data-product-kg="<?= $variant_image['kg']; ?>" onclick="flower_varient_id(<?= $variant_image['id']; ?>); updatePriceAndProduct(<?= $variant_image['price']; ?>, '<?= $variant_image['kg']; ?>', <?= $variant_image['product_id']; ?>)" >
                                                            <!--<div  class="image-container px-2 py-2" >-->
                                                                <img class="image" src="<?= base_url() ?><?= htmlspecialchars($variant_image['full_path']); ?>/<?= htmlspecialchars($variant_image['image_name']); ?>" style="width: 100px; height: 100px;">
                                                                
                                                                    <?php
                                                                        $product_name = $variant_image['product_name'];
                                                                        $truncated_name = $product_name;
                                                                        if (strlen($product_name) > 10) {
                                                                            $truncated_name = substr($product_name, 0, 10) . '...';
                                                                        }
                                                                    ?>
                                                                    <p id="nav-color" style="text-transform: capitalize; white-space: nowrap;">
                                                                        <?= $truncated_name; ?>
                                                                            <span class="show-more" style="color: blue; cursor: pointer;" onclick="showMore(this)"></span>
                                                                            <span class="full-text" style="display: none;"><?php echo $product_name; ?></span>
                                                                        
                                                                    </p>
                                                                    <P>
                                                                        ₹ <?= ($variant_image['price']); ?>
                                                                    </P>
                                                            <!--</div>-->
                                                        <!--</a>-->
                                                        </div>
                                                    <?php endforeach; ?>
                                                
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                <?php else: ?>
                                    <!--nilesh techflux 13/6/2024-->
                                    <div>
                                        <?php 
                                       
                                        $displayed_kgs = []; foreach ($proddata as $key => $value): 
                                            //  print_r($value);exit;
                                            if (!in_array($value->kg, $displayed_kgs)): $displayed_kgs[] = $value->kg; ?>
                                                <div class="weightContainerBox productweight" style="min-width: 75px;  cursor: pointer;" 
                                                    onclick="last_id_product(<?= $value->id; ?>); updatePriceAndProduct(<?= $value->price; ?>, '<?= $value->kg; ?>', <?= $value->id; ?>)">
                                                <?= $value->kg; ?> <br>
                                                </div>
                                            <?php endif; 
                                        endforeach; ?>
                                    </div>
                                        
                                    <!--nilesh techflux 13/6/2024-->
                                <?php endif; ?>

                                <!-- NILESH 06/06/24 -->
                            </div>
                        <!--Bhgyashri Code end-->  
                            <?php if (isset($product[0]->category_id) && ($product[0]->category_id == 4 || $product[0]->category_id == 31)) : ?>
                                <div class="col-md-12" style="margin-top: 10px; display: none;" id="message_id">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="2" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12" style="margin-top: 10px;" id="message_id">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="2" placeholder="Please enter here message"></textarea>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!--<div class="col-md-12" style="margin-top: 10px;">-->
                            <!--    <div class="form-group">-->
                            <!--        <label for="message" class="form-label">Message</label>-->
                            <!--        <textarea type="text" class="form-control" id="message" name="message" rows="2" maxlength="30" placeholder="Message"></textarea>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="product-quantity">
                                <div class="row">
                                    <div class="col">
                                        <div class="stock-button-wrap">
                                            <!--<input type="text" id="usernameTest">-->
                                            <div class="qty-button  flex-wrap mt-3" style="justify-content: center;">
                                                <span id="pleasewait "></span>
                                                <?php $user_id = __get__session("id"); ?>
                                                <?php if(isset($user_id)){ ?>
                                                    <a href="#" onclick="if(validateSelection()) { addToCart(<?= $product[0]->id; ?>); } return false;">
                                                        <button class="cart-button "><span class="add-to-cart">Add to cart</span></button>
                                                    </a>
                                                <?php } else { ?>
                                                    <?php $current_url = current_url(); session()->set('redirect_url', $current_url); ?>
                                                    <a href="<?= base_url('user_login') ?>">
                                                        <button class="cart-button"><span class="add-to-cart">Add to cart</span></button>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(empty($product[0]->product_description)) : ?>
                                <div class="product-quantity mt-2" style="display:none;"></div>
                            <?php else : ?>
                            <div class="product-quantity mt-2">
                                <p><strong>Product Description :</strong></p>
                                <div id="productDescription">
                                    <?php if (!empty($product) && isset($product[0]->product_description)) : ?>
                                        <p><?php echo $product[0]->product_description; ?></p>
                                    <?php endif; ?>
                                </div>                          
                            </div>
                            <?php endif ?>

                            <!--<div class="product-quantity mt-2">-->
                            <!--    <p><strong>Product Description :</strong></p>-->
                            <!--    < ?php if (!empty($product) && isset($product[0]->product_description)) : ?>-->
                            <!--        <p>< ?php echo $product[0]->product_description; ?></p>-->
                            <!--    < ?php endif; ?>                           -->
                            <!--</div>   -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (empty($product[0]->delivery_info || $product[0]->care_instruction)) : ?>
<section class="product-info-tabs" style="display:none;">
</section>
<?php else: ?>
<section class="product-info-tabs">
    <div class="container-fluid product-description">
        <div class="row">
            <div class="tabs-listing px-5">
                <nav>
                    <div class="nav nav-tabs d-flex flex-wrap justify-content-center" id="nav-tab" role="tablist">
                        <h3 class="text-color m-3">Description</h3>
                        <!--<h4 class="nav-link active fs-5 text-color" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</h4>-->
                        <!--<button class="nav-link text-dark fs-5" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>-->
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active padding-small" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="contentScroller" style="height: auto;">
                            <p><strong>Delivery Information:</strong></p>
                            <div id="deliveryInfo">
                                <?php if (isset($product[0]->delivery_info)) : ?>
                                    <ul dir="ltr" class="mb-2">
                                        <li><?php echo $product[0]->delivery_info; ?></li>
                                    </ul>
                                <?php endif; ?>  
                            </div>
                            <p dir="ltr"><strong>Care Instructions:</strong></p>
                            <div id="careInstruction">
                                <?php if (isset($product[0]->care_instruction)) : ?>
                                    <ul dir="ltr" class="mb-2">
                                        <li><?php echo $product[0]->care_instruction; ?></li>
                                    </ul>
                                <?php endif; ?> 
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php } ?>
<section class="slider-container my-3">
    <div class="container-fluid all-products" style="width:95% !important; background-color:white" >
        <h2 class="categories__title py-3 mb-0 text-color">All Products</h2>
            <div class="swiper card-swiper">
                <div class="swiper-wrapper">
                    <?php foreach($cakeproduct as $key => $value){ ?>  
                    <div class="swiper-slide mb-4">
                        <div class="img-box">
                            <a href="<?php echo base_url(); ?>viewdetails/<?= $value['product_id']; ?>" class="card-img">
                                <!--<div class="">-->
                                <!--<div class="menu-details">-->
                                    <img src="<?= base_url() ?>public/admin/assets/uploads/product/<?= $value['image_name']; ?>" class="card__image" style="height:265px !important; "//>
                                    <div class="name-job under_cart">
                                        <!--<h4 class="name text-color">< ?= $value['product_name']; ?></h4>-->
                                        <div class="product-card_product-info-holder__3TUe8">
                                        <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">
                                            <meta itemprop="availability" content="https://schema.org/InStock">
                                                <div class="d-flex">
                                                    <div class="pt-2">
                                                        <?php if (isset($value['category_name']) && $value['category_name'] !== 'Flowers'): ?>
                                                            <img class="image pe-2" src="<?= base_url('public/images/veg.jpg'); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="product-card_product-title__32LFp" itemprop="name">
                                                        <?= $value['product_name']; ?>
                                                    </div>
                                                </div>
                                                <div class="product-card_product-desc-tile__10UVW mt-2">
                                                    <meta itemprop="priceCurrency" content="INR">
                                                        <span class="product-card_product-price-info-container__E9rQf">
                                                            <span class="product-card_product-price-info__17tj7" data-testid="currency">
                                                                ₹&nbsp;
                                                                <!--< ?php if (isset($value['category_name']) && $value['category_name'] !== 'Flowers'): ?>-->
                                                                <!--    <span itemprop="price" data-testid="price">< ?= $value['price'] . ' / ' . $value['kg']; ?></span>-->
                                                                <!-- < ?php endif; ?>-->
                                                                <span itemprop="price" data-testid="price"><?= $value['price'] ?></span>
                                                                
                                                                 
                                                            </span>
                                                        </span>
                                                        <span class="product-card_rating-sec__34VZH"><?= number_format(floatval($value['average_rating']), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                                </div>
                                                <!--<div class="product-card_product-desc-tile__10UVW">-->
                                                <!--    <div class="earliest-delivery_earliest-del__23XZW">-->
                                                <!--        Earliest Delivery:-->
                                                <!--        <span class="earliest-delivery_earliest-del-val__hWvLQ">-->
                                                <!--            &nbsp;Today-->
                                                <!--        </span>-->
                                                <!--    </div>-->
                                                <!--    <span class="product-card_product-review-info__2-RtV">-->
                                                        <!--4021&nbsp; Reviews-->
                                                <!--    </span>-->
                                                <!--</div>-->
                                                <div class="attribute-sec"><div data-test="desc-container"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                 <!--</div>-->
                            <!--</div>-->
                            </a>
                        </div>    
                    </div>   
                    <?php }?>
                </div>
                <div class="swiper-button-next swiper-navBtn swiper-navBtn-nxt"></div>
                <div class="swiper-button-prev swiper-navBtn swiper-navBtn-prev" ></div>
            </div>
        </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- NILESH 4/1/2024 -->
<script>
var base_url = '<?= base_url() ?>';
$(document).ready(function() {
    $('.product-link').click(function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        var productPrice = $(this).data('product-price');
        var productKg = $(this).data('product-kg');
        updatePriceAndProduct(productPrice, productKg, productId);
        fetchProductDescription(productId);
        var newUrl = base_url + 'viewdetails/' + productId;
        history.pushState({}, '', newUrl);
    });

    function updatePriceAndProduct(price, weight, productId) {
        $('#currentPrice').text('₹ ' + price);
        $('.product-link[data-product-id="' + productId + '"] .image-container').css('background-color', '#616b37').css('color', 'white');
    }

    function fetchProductDescription(productId) {
        $.ajax({
            url: base_url + '/getProductDescription/' + productId,
            method: 'GET',
            success: function(response) {
                if (response.error) {
                    $('#productname').html('<h5>Product Name not found.</h5>');
                    $('#productDescription').html('<p>Product description not found.</p>');
                    $('#deliveryInfo').html('<p>Delivery information not found.</p>');
                    $('#careInstruction').html('<p>Care instructions not found.</p>');
                    $('#main-img').attr('src', '');
                    $('#main-img').attr('alt', 'Image not found');
                } else {
                    $('#productname').html('<h5 class="text-color">' + response.product.product_name + '</h5>');
                    $('#productDescription').html('<p>' + response.product.product_description + '</p>');
                    $('#deliveryInfo').html('<ul><li>' + response.product.delivery_info + '</li></ul>');
                    $('#careInstruction').html('<ul><li>' + response.product.care_instruction + '</li></ul>');
                    if (response.images.length > 0) {
                        // Update the main image
                        $('#main-img').attr('src', base_url + response.images[0].full_path + '/' + response.images[0].image_name);
                        $('#main-img').attr('alt', response.product.product_name || 'Product Image');
            
                        // Update the thumbnails
                        var thumbnailsHtml = '';
                        response.images.forEach(function(image) {
                            thumbnailsHtml += '<div class="swiper-slide">';
                            thumbnailsHtml += '<img src="' + base_url + image.full_path + '/' + image.image_name + '" ';
                            thumbnailsHtml += 'data-large-src="' + base_url + image.full_path + '/' + image.image_name + '" ';
                            thumbnailsHtml += 'class="thumbnail-image" ';
                            thumbnailsHtml += 'style="margin-bottom: 20px;" ';
                            thumbnailsHtml += 'alt="' + (response.product.product_name || 'Product Image') + '">';
                            thumbnailsHtml += '</div>';
                        });
                        $('.product-thumbnail-slider .swiper-wrapper').html(thumbnailsHtml);
                    } else {
                        $('#main-img').attr('src', '');
                        $('#main-img').attr('alt', 'Image not found');
                    }
                }
            },
            error: function() {
                $('#productname').html('<h5>Sorry, the product name could not be loaded at this time.</h5>');
                $('#productDescription').html('<p>Sorry, the product details could not be loaded at this time.</p>');
                $('#deliveryInfo').html('<p>Sorry, the delivery information could not be loaded at this time.</p>');
                $('#careInstruction').html('<p>Sorry, the care instructions could not be loaded at this time.</p>');
                $('#main-img').attr('src', '');
                $('#main-img').attr('alt', 'Image not found');
            }
        });
    }
});

// Event delegation for dynamically added elements
$(document).on('click', '.thumbnail-image', function() {
    updateMainImage(this);
});

function updateMainImage(element) {
    var largeImageSrc = $(element).attr('data-large-src');
    var altText = $(element).attr('alt');

    $('#main-img').attr('src', largeImageSrc);
    $('#main-img').attr('alt', altText);
}

</script>
<?php if(!empty($proddata) ){
    $pr_flvr_id = $flower_data->flavour_id;
    $pr_id = $flower_data->id;
    $pr_kg= $flower_data->kg;
    $pr_price = $flower_data->price;
}else{
    $pr_flvr_id = "0";
    $pr_id ="0";
    $pr_kg = "0";
    $pr_price = "0";
}
?>
<script>
    var cake_flavor = <?= $pr_flvr_id ?>;
    
    var firstWeightContainer = document.querySelector('.weightContainerBox');
    firstWeightContainer.style.backgroundColor = 'white';
    firstWeightContainer.style.color = 'black';
    
    var firstPrice = <?= $pr_price ?>;
    updatePriceAndProduct(firstPrice, '<?= $pr_kg; ?>', <?= $pr_id; ?>);
    
    function updatePriceAndProduct(price, weight, productId) {
        document.getElementById('currentPrice').textContent = '₹ ' + price;
        document.querySelectorAll('.weightContainerBox').forEach(el => {
            
            // if (el.textContent.includes(weight)) {
            if (cake_flavor != 0) {
                // el.style.backgroundColor = '#616b37';
                // // el.style.backgroundColor = '#ffffff';
                // el.style.color = 'white'; 
            }
           
            else {
                el.style.backgroundColor = 'white';
                el.style.color = 'black';
            }
        });
    }
</script>

<!-- check before add to cart opetion selected or not (start) -->
<!-- NILESH 4/1/2024 -->
<script>
    const cartButtons = document.querySelectorAll('.cart-button');
    cartButtons.forEach(button => {
    	button.addEventListener('click', cartClick);
    });

    function cartClick() {
    	let button = this;
    	button.classList.add('clicked');
    }
</script>
<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--Initialize Swiper -->
  <script>
    var swiper = new Swiper(".card-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      keyboard: true,
             breakpoints: {
        0: {
           slidesPerView: 1,
           navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        },
         520: {
          slidesPerView: 2,
        },
         768: {
           slidesPerView: 3,
        },
         1000: {
           slidesPerView: 4,
         },
          1500: {
           slidesPerView: 5,
         },
         2000: {
           slidesPerView: 6,
         },
         2500:{
            slidesPerView: 6,
         },
         3000:{
             slidesPerView: 8,
         },
      },
    });
</script>

<?= $this->endSection() ?>
