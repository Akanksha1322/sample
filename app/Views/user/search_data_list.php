<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>

    .resp_img{
        height:190px !important;
    }
    @media (max-width: 768px) {
        .resp_img{
        height:160px !important;
    }
    }

    :root {

        --surface-color: #fff;

        --curve: 40;

    }



    * {

        box-sizing: border-box;

    }

    body{

        font-family: Roboto, sans-serif;

        background-color:#f0f0ed;

    }



    /* Styles for layout */

    .custom-container {

        margin-top: 20px;

        display: flex;

        justify-content: space-evenly;

        align-items: flex-start;

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

    .filters {

        /* margin-left: -1px; */

        width: 100%;

        height: 100%;

        display: flex;

        box-shadow: 0px 3px 6px 0 rgb(212 212 212 / 35%);

        border-radius: 4px;

        flex-direction: column;

        background-color: #ffffff;

        flex-direction: column;

    }

    .product-listing {

        list-style-type: none;

        /*width: 75%;*/

        /*display: flex;*/

        /*justify-content: space-evenly;*/

        /*flex-wrap: wrap;*/

        box-shadow: 0px 3px 6px 0 rgb(212 212 212 / 35%);

        border-radius: 4px;

        background-color: #ffffff;

    }

    

    .menu-details{

        display:contents;

    }

    .filter-section {

        margin-left: 18px;

        margin-right:18px;

        /* margin-bottom: 20px; */

        padding: 10px;

        border-top: 1px solid;

        /*margin-left: -18px;*/

    }

    .sub-menu-item {

        cursor: pointer; /* Change cursor to pointer */

    }

    .product {

        border: 1px solid #ddd;

        padding: 10px;

        margin-bottom: 10px;

    }

    .checkbox-item {

        display: flex;

        align-items: baseline;

    }



    .listing {

        margin-top: 33px;

        margin-bottom: 15px;

    }

    .footer {

        background-color: #616b37 !important;

        color: yellow;

        justify-content: space-around;

        display: flex;

        padding: 20px;

        margin-top: 10px;

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

    

    

    /*Filter style start*/

    .main-label{

        display: flex;

        justify-content: space-between;

    }

    

    .sub-details{

        display:flex;

        flex-direction: column;

        display:none;

    }

    .filter-heading,.plus,.minus{

        color:#616b37 !important;

        cursor:pointer;

    }

    /*Filter style end*/



    .card-img{

        border-radius:5px !important;

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

    

    .card-img:hover{

        /*opacity:1;*/

        background: linear-gradient(to top, rgba(0, 0, 0, -0.1) 0%, rgba(0, 0, 0, 0) 100%);

        color:black;

         box-shadow: 0px 0px 7px #616b37;

    }

    

    .card-img:hover .under_card {

        overflow:inherit;

       bottom: 10px;

    }

    

    .under_card{

         height:80px !important;

         position:relative;

         bottom: 0;

        transition: bottom 2s;

         width:100%;

    }

    .under_card:hover {

        overflow:inherit;

       bottom: 10px;

      

    }

    

        /*product style end*/

        

        

        /*product try start*/

        .product-card_card-container__1oJLc .product-card_product-info-holder__3TUe8 {

        max-height: 97px;

        color: #ffffff;

    }

    .product-card_card-container__1oJLc .product-card_product-info-holder__3TUe8:hover{

        color:black !important;

    }

    

    .product-card_product-title__32LFp {

        font-size: 12px;

        background: transparent;

        text-transform:capitalize;

        padding-top: 1rem;

        padding-bottom: .5rem;

        padding-left:10px;

        /*white-space: nowrap;*/

        overflow: hidden;

        text-overflow: ellipsis;

        line-height: 1;

        white-space: normal;

    }

    .product-card_product-title__32LFp:hover{

        color:black !important;

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

        font-weight: 500;

       

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

    

    label{

        text-transform: capitalize;

    }


    /*product try end*/

    

    @media(max-width:767px){

        .product-item{

            width:auto;

        }

        

        .product-list{

            display:flex;

            flex-direction:column !important;

        }

        .pro-list{

            margin-top:2%;

        }

        

        .pro-list{

            width:100%;

        }

        .product-item{

            margin:auto;

        }

        .filters{

            width:23rem;

        }

    }

    

    @media(min-width:768px) and (max-width:920px){

        .filters{

            width:191px;

        }

    }

     

    @media (max-width:400px){

        .filters{

            width:22rem !important;

        }

    }

    
    /* @media(max-width:416px){

        .filters{

            width:23.1rem ;

        }

    } */

    /*@media(max-width:435px){*/

    /*    .filters{*/

    /*        width:25.3rem;*/

    /*    }*/

    /*}*/

    @media (min-width: 360px) and (max-width: 600px)

    {

        .wid {

            width: 65% !important;

        }

    }

    @media(min-width:1800px){
        .product-item{
            width: 16.66666667%;
        }
    }

    .image{

       height:15px;

       width:22px !important;

    }

    a:hover{
        color:black;
    }
    #no_data_found{
        display : none;
    }

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
                                
                                <h4 style="color:white !important;">You searched for <?= $search ?></h4>

                                <div class="breadcrumb_area" style="display: flex; justify-content:center">

                                    <h5 style="margin: 0; display: inline;">

                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>

                                    </h5>

                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>

                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">You searched for <?= $search ?></span>

                                </div>

                            </div>

                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="container-fluid py-3">


        <div class="col-12 pro-list">
            <div class="product-listing p-4" id="product-listing">
                <div class="row">
                    
                <?php if (empty($product)) : ?>
                
                <div class="col-md-12" ><h3 style="text-align: center;">No Data Found...</h3></div>
                <?php else : ?>

                    <?php 
                    foreach($product as $key => $value){ 
                    // print_r($value);
                    ?>

                        <div class="col-6 col-md-2" data-price="<?= $value->price ?>" data-weight="<?= $value->kg ?>">

                            <!--<div class="img-box">-->

                                <a href="<?php echo base_url(); ?>viewdetails/<?php echo $value->product_id; ?>" class="card card-img" style="max-width:105% !important;">

                                    <img src="<?= base_url() ?>public/admin/assets/uploads/product/<?= $value->image_name; ?>" class="card__image resp_img" alt="" style=""/>

                                    <div class="menu-details">

                                        <div class="name-job under_card">

                                            <!--<h4 class="name text-color">< ?= $value['category_name']; ?></h4>-->

                                            <div class="product-card_product-info-holder__3TUe8">

                                                <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">

                                                    <meta itemprop="availability" content="https://schema.org/InStock">
                                                        <!--NILESH TECHFLUX 24/6/2024 -->
                                                        <?php
                                                    $product_name = $value->product_name;
                                                    $truncated_name = $product_name;
                                                    if (strlen($product_name) > 30) {
                                                        $truncated_name = substr($product_name, 0, 30) . '...';
                                                    }
                                                ?>
                                                    <div class="product-card_product-title__32LFp px-2" itemprop="name">

                                                         <img class="image pe-2" src="<?= base_url('public/images/veg.jpg') ?>">

                                                        <!--<?= $value->product_name .' - '. getCategoryName($value->category_id); ?>-->
                                                        <!--htmlspecialchars($truncated_name) . ' - ' . getCategoryName($value->category_id)-->
                                                          <?= htmlspecialchars($truncated_name) ?>
                                                    </div>

                                                    <div class="product-card_product-desc-tile__10UVW px-2">

                                                        <meta itemprop="priceCurrency" content="INR">

                                                        <span class="product-card_product-price-info-container__E9rQf">

                                                            <span class="product-card_product-price-info__17tj7" data-testid="currency">

                                                            ₹&nbsp;<span itemprop="price" data-testid="price"><?= $value->price; ?></span>

                                                            </span>

                                                        </span>

                                                        <span class="product-card_product-weight-info-container__E9rQf" hidden>

                                                            <span class="product-card_product-price-info__17tj7" data-testid="">

                                                            ₹&nbsp;<span itemprop="weight" data-testid="weight"><?= $value->kg; ?></span>

                                                            </span>

                                                        </span>

                                                        <span class="product-card_rating-sec__34VZH"><?= number_format(floatval($value->average_rating), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            <!--</div>-->

                        </div>

                    <?php }?>

                <?php endif; ?>

            </div>

            </div>
        </div>

    <!--</div>-->

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?= $this->endSection() ?>

