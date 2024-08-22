<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    .newcard {
        justify-content: center;
        gap: 20px;
        list-style: none;
        display: flex;
    }
    
    body{
        background-color:#e1e7e0;
    }
    .banner-container {
        position: relative;
    }

    .banner1 {
        width: 100%;
        height: auto;
        display: block;
    }

    .maintxt {
        position: absolute;
        top: 50%;
        width:0% !important;
        transform: translateY(-50%);
        text-align: left;
        color: #fff; 
    }
    .brand-Img{
        height: 80px;
    }

    @media(max-width:750px){
        #heading{
            font-size:18px !important;
            position:relative !important;
            left:76px !important;
        }
    }
   
    #spare-time {
        font-size: 18px; 
    }
    
    .controls {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .footer {
        background-color: #616b37 !important;
        /*color: yellow;*/
        justify-content: space-around;
        display: flex;
        padding: 20px;
    }
    
    b{
        color:black !important;
    }
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
    
    /*courosel cake category start*/

    .cake-category {
      align-items: center;
    }
    .couro-slide {
      margin: 0 30px;
      overflow: hidden;
    }
    .card {
      background: #fff;
      border-radius: 8px;
      /*width:257px !important;*/
    }
    .card .image-box {
      height: 200px;
    }
    .card .image-box img {
      width: 100%;
      height: 100%;
      border-radius: 8px 8px 0 0;
    }
    .card .profile-details {
      display: flex;
      align-items: center;
      column-gap: 12px;
      padding: 15px;
    }
    .card .profile-details img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
    }
    .profile-details .name {
      font-size: 15px;
      font-weight: 500;
    }
    .profile-details .job {
      font-size: 12px;
      font-weight: 500;
      color: #4d4d4d;
    }
    .swiper-navBtn {
      color: #000;
      height: 40px;
      width: 0px;
    }
    .swiper-navBtn::before,
    .swiper-navBtn::after {
      font-size: 30px;
    }
    .swiper-pagination-bullet {
      background-color: #000;
    }
    
    a:hover{
        color:black !important;
    }
    .text-color{
        color:#616b37 !important;
    }


    #carouselExample{
        padding:0;
    }
        
    .carousel-item img{
        height:560px;
    }
        
    .association-with.bg-prim.padding-small{
        padding-bottom:0;
    }
        
    .category-card{
        border-radius:50%;
    }
        /*courosel cake category end*/
        /*courosel try start----*/
        
    .body{
        min-height:100vh;
        display:grid;
        justify-content:center;
        background-color:white;
    }
    .carousel-container{
        height:350px;
        margin:auto;
        position:relative;
        width:90%;
        display:grid;
        place-items:center;
        overflow:hidden;
    }
        
        .carousel-slider{
            display:flex;
            width:calc(350px*5);
            height:300px;
            /*animation:scroll 20s linear infinite;*/
            
           
        }
        
        .head-line{
             margin-bottom: 0px; 
            text-align: center !important;
        }
        
        @keyframes scroll{
            0%{
                transform:translateX(0);
            }
            100%{
                transform:translateX(calc(-350px * 5));
            }
        }
        
        /*courosel try END*/
        
        /*slider try start*/
        
        .fluid-container{
            background-color:white; 
            width:96% !important;
        }
        .card-name{
            height:85px;
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
        /*.swiper-button-next:after,.swiper-rtl .swiper-button-prev:after {*/
        /*    content: 'next';*/
        /*    font-size: 30px;*/
        /*}*/
        .swiper-navBtn-prev,.swiper-navBtn-nxt{
            margin:-23px;
            /*color: white;*/
            background:white;
        }
        
        .nxt,.prev{
            color: #616b37 !important;
            font-size: 30px;
        }
        
        .flower-img{
            width:287px;
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
            background-color: #616b37 ;
            color:#ffffff;
            max-width:100% ;
             /*transition: transform 0.25s ease-in-out; */
            /*width:300px;*/
             /*min-width:300px;*/
        }
        /*.card-img:hover {*/
            /*transform: scale(1.0); */
        /*}*/
        .card-img:hover{
            opacity:1;
            background: linear-gradient(to top, rgba(0, 0, 0, -0.1) 0%, rgba(0, 0, 0, 0) 100%);
            color:black !important;
            box-shadow: 0px 0px 10px #616b37;
            /*transform: scale(1.1);*/
        }
        
        .card-img:hover .under_cart {
            overflow:inherit;
           bottom: 10px;
           color:black;
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
            text-transform: capitalize !important;
            padding-top: 1rem;
            padding-bottom: .5rem;
            white-space: nowrap;
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
            transition: color 2s;
            /*color: #222;*/
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
        
        .card__image{
            border-radius:5px;
            height:265px;
            transition: transform 0.25s ease-in-out; 
            /*width:300px;*/
        }
        .card__image:hover {
            transform: scale(0.9);
            /*transform: scale(1);*/
        }
        .cake-card{
            padding:15px !important;
            font-size:18px !important;
            white-space: normal !important;
            color:black !important;
            text-align: center;
        }
        
        .under_cart{
             height:85px;
             position:relative;
             bottom: 0;
            transition: bottom 0.5s;
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
    
        .swiper-slide-try {
            text-align: center;
        }
    
        /* Optional: Adjust pagination and navigation buttons for better responsiveness */
        .swiper-pagination {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            margin: auto;
            width: fit-content;
        }
            
        .box-img{
            width:200px;
        }

    /* Media query for smaller screens */
    @media screen and (max-width: 768px) {
        .swiper-slide {
            font-size: 14px;
        }
        
        .swiper-pagination {
            bottom: 5px;
        }
        .swiper-button-prev:after,.swiper-rtl .swiper-button-next:after{
        visibility:hidden;
        }
    
        .swiper-button-next:after,.swiper-rtl .swiper-button-prev:after {
            visibility:hidden;
        }
        
        .header-text{
            font-size:25px;
        }
        
         .category-container{
                position:relative;
                bottom:15px;
            }
    
        /* Default styles */
        .mySwiper {
            width: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .swiper-img {
            /*max-width: 100%; */
            height: auto;
            height:20px;
        }
        
        .cake-card{
            font-size:14px !important;
        }
        
        .card-image,.insta-image{
            height:140px !important;
        }
        .insta-video{
            height:133px !important;
        }
        
        .image-card{
            height:98px !important;
            width:98px !important;
        }
        .product-card_product-title__32LFp {
            font-size: 12px !important;
        }
        
        .product-card_product-price-info__17tj7 {
            font-size: 11px !important;
        }
        
          .newcard {
            flex-direction: column; 
        }
          .swiper-navBtn {
            display: none;
         }
          .swiper-button-next {
            position: relative;
            left: 1076px;
            /* bottom: 122px; */
            top: -113px;
         }
          .carousel-slider-img img{
              height:230px !important;
         }
         .swiper-img, .swiper-video {
            min-width:100%;
            max-width: 100%; 
            height: 150px; 
            object-fit: cover; 
        }
        .box-img{
            width:120px;
        }
        .slider-container{
            margin-top:2% !important;
        }
    }
    @media(min-width:768px){
            .swiper-img, .swiper-video {
                width: 100%; 
                height: 500px !important; 
                object-fit: cover; 
            }
            
            .swiper-try{
                height:500px !important;
            }
            
           
           
        } 

        .swiper-button-next, .swiper-button-prev {
            /*position: absolute;*/
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            /*color: #ffffff;*/
            padding: 5px;
            border-radius: 50%;
        }
        /*.nxt, .prev {*/
        /*     color: #ffffff;*/
        /*}*/
        .swiper-button-next {
            right: 10px;
        }
        
        .swiper-button-prev {
            left: 10px;
        }

        .image{
            height:15px !important;
        }  

    /*}*/
</style>
<body>

<!---Bhagyashri Swiperstart>-->
    <div class="swiper mySwiper swiper-try swiper-height" >
        <div class="swiper-wrapper" >
            <?php foreach($slider as $key => $value): ?>
                <div class="swiper-slide swiper-slide-img">
                    <?php
                        $sliderImagePath = base_url() . 'public/admin/assets/uploads/slider/' . $value['slider_image'];
                        $fileExtension = strtolower(pathinfo($value['slider_image'], PATHINFO_EXTENSION));
                        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'];
                        if (in_array($fileExtension, $imageExtensions)) {
                            echo '<img class="swiper-img" src="' . $sliderImagePath . '">';
                        } elseif (in_array($fileExtension, ['mp4', 'mov', 'avi'])) {
                            echo '<video class="swiper-img" src="' . $sliderImagePath . '" autoplay muted loop></video>';
                        }
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next nxt"></div>
        <div class="swiper-button-prev prev"></div>
        <div class="swiper-pagination"></div>
    </div>
<!-- Bhagyashri Swiper end> -->

<!-- Swiper -->
  <!--<div class="swiper categorySwiper">-->
  <!--  <div class="swiper-wrapper">-->
  <!--    <div class="category-swiper-slide">Slide 1</div>-->
  <!--    <div class="category-swiper-slide">Slide 2</div>-->
  <!--    <div class="category-swiper-slide">Slide 3</div>-->
  <!--    <div class="category-swiper-slide">Slide 4</div>-->
  <!--    <div class="category-swiper-slide">Slide 5</div>-->
  <!--    <div class="category-swiper-slide">Slide 6</div>-->
  <!--    <div class="category-swiper-slide">Slide 7</div>-->
  <!--    <div class="category-swiper-slide">Slide 8</div>-->
  <!--    <div class="category-swiper-slide">Slide 9</div>-->
  <!--  </div>-->
  <!--  <div class="swiper-pagination"></div>-->
  <!--</div>-->
  
<section class="slider-container mt-3 category-container">
    <div class="container-fluid fluid-container" >
        <h2 class="categories__title header-text py-3 mb-0 text-color">Category</h2>
            <div class="swiper category-swiper">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < count($category); $i++){ ?>
                    <!--< ?php foreach($category as $key => $value){ ?> -->
                    <div class="swiper-slide d-flex justify-content-center mb-4">
                        <div class="img-box box-img">
                            <a href="<?= base_url() ?>cakeprodlist/<?php echo $category[$i]['id']; ?>" class="category-image">
                                <img src="<?= base_url() ?>public/admin/assets/uploads/category/<?= $category[$i]['category_image']; ?>" class="category-card image-card" style="height:200px;"/>
                                <div class="name-job">
                                    <div class="cake-card" itemprop="name"><?= $category[$i]['category_name']; ?></div>
                                </div>
                            </a>
                        </div>    
                    </div>   
                    <?php }?>
                </div>
                <div class="swiper-button-next swiper-navBtn nxt"></div>
                <div class="swiper-button-prev swiper-navBtn prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
</section>

<!--<section class="slider-container mt-3">-->
<!--    <div class="container-fluid fluid-container" >-->
<!--        <h2 class="categories__title header-text py-3 mb-0 text-color">New Arrival</h2>-->
<!--            <div class="swiper new-arrival-swiper">-->
<!--                <div class="swiper-wrapper">-->
<!--                    < ?php for($i = 0; $i < count($category); $i++){ ?>-->
<!--                        <div class="swiper-slide mb-4">-->
<!--                            <div class="img-box box-img">-->
<!--                                <a href="< ?= base_url() ?>cakeprodlist/< ?php echo $category[$i]['id']; ?>" class="category-image">-->
<!--                                    <img src="< ?= base_url() ?>public/admin/assets/uploads/category/< ?= $category[$i]['category_image']; ?>" class="category-card image-card" style="height:120px;"/>-->
<!--                                    <div class="name-job">-->
<!--                                        <div class="cake-card" itemprop="name">< ?= $category[$i]['category_name']; ?></div>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>    -->
<!--                        </div>   -->
<!--                    < ?php }?>-->
<!--                </div>-->
<!--                <div class="swiper-button-next swiper-navBtn "></div>-->
<!--                <div class="swiper-button-prev swiper-navBtn "></div>-->
<!--            </div>-->
<!--        </div>-->
<!--</section>-->

<!--<section class="slider-container mt-3">-->
<!--    <div class="container-fluid fluid-container" >-->
<!--        <h2 class="categories__title header-text py-3 mb-0 text-color">New Arrival</h2>-->
<!--            <div class="swiper card-swiper">-->
<!--                <div class="swiper-wrapper">-->
<!--                    < ?php for($i = 0; $i < count($bestseller); $i++){ ?>  -->
<!--                        <div class="swiper-slide mb-4">-->
<!--                            <div class="img-box under_card">-->
<!--                                <a href="< ?php echo base_url(); ?>viewdetails/< ?= $bestseller[$i]['product_id']; ?>" class="card-img">-->
<!--                                    <img src="< ?= base_url() ?>public/admin/assets/uploads/product/< ?= $bestseller[$i]['image_name']; ?>" class="card__image card-image" style="height:260px;" />-->
<!--                                    <div class="name-job under_cart">-->
<!--                                        <div class="product-card_product-info-holder__3TUe8">-->
<!--                                            <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">-->
<!--                                                <meta itemprop="availability" content="https://schema.org/InStock">-->
<!--                                                <div class="product-card_product-title__32LFp" itemprop="name">-->
<!--                                                    < ?php if (isset($bestseller[$i]['category_name']) && $bestseller[$i]['category_name'] !== 'Flowers'): ?>-->
<!--                                                        <img class="image pe-2" style="height:15px;" src="< ?= base_url('public/images/veg.jpg'); ?>">-->
<!--                                                    < ?php endif; ?>-->
                                                     <!--<img class="image pe-2" src="< ?= base_url('public/images/veg.jpg') ?>">-->
<!--                                                    < ?= $bestseller[$i]['product_name']; ?>-->
<!--                                                </div>-->
<!--                                                <div class="product-card_product-desc-tile__10UVW  mt-2">-->
<!--                                                    <meta itemprop="priceCurrency" content="INR">-->
<!--                                                    <span class="product-card_product-price-info-container__E9rQf">-->
<!--                                                        <span class="product-card_product-price-info__17tj7" data-testid="currency">-->
<!--                                                            ₹&nbsp;-->
<!--                                                            < ?php if (isset($bestseller[$i]['category_name']) && $bestseller[$i]['category_name'] !== 'Flowers'): ?>-->
<!--                                                                <span itemprop="price" data-testid="price">< ?= $bestseller[$i]['price'] . ' / ' . $bestseller[$i]['kg']; ?></span>-->
<!--                                                            < ?php else: ?>-->
<!--                                                                <span itemprop="price" data-testid="price">< ?= $bestseller[$i]['price'] ?></span>-->
<!--                                                            < ?php endif; ?>-->
                                                                
<!--                                                        </span>-->
<!--                                                    </span>-->
<!--                                                    <span class="product-card_rating-sec__34VZH">< ?= number_format(floatval($bestseller[$i]['average_rating']), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>-->
<!--                                                </div>-->
                                                <!--<div class="product-card_product-desc-tile__10UVW ">-->
                                                <!--    <div class="earliest-delivery_earliest-del__23XZW">-->
                                                <!--        Earliest Delivery:-->
                                                <!--        <span class="earliest-delivery_earliest-del-val__hWvLQ">-->
                                                <!--            &nbsp;Today-->
                                                <!--        </span>-->
                                                <!--    </div>-->
                                                <!--    <span class="product-card_product-review-info__2-RtV">-->
                                                <!--        4021 &nbsp; Reviews-->
                                                <!--    </span>-->
                                                <!--</div>-->
<!--                                                <div class="attribute-sec">-->
<!--                                                    <div data-test="desc-container"></div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>    -->
<!--                        </div>   -->
<!--                    < ?php } ?>-->
<!--                </div>-->
<!--                <div class="swiper-button-next swiper-navBtn "></div>-->
<!--                <div class="swiper-button-prev swiper-navBtn " ></div>-->
<!--            </div>-->
<!--        </div>-->
<!--</section>-->

<!-- NILESH 26/4/2024 -->
<section class="slider-container mt-3">
    <div class="container-fluid fluid-container" >
        <h2 class="categories__title header-text py-3 mb-0 text-color">Instagram Post</h2>
            <!--<div class="row">-->
            <div class="swiper card-swiper">
                <div class="swiper-wrapper">
                    <?php foreach($instagramData as $item): ?>
                        <!--<div class="col-md-4">-->
                            <div class="swiper-slide mb-4">
                                <div class="img-box under_card card-img">
                                    <?php
                                        if ($item->media_type == 'IMAGE' || $item->media_type == 'CAROUSEL_ALBUM') {
                                            echo '<div class="swiper-slide">';
                                            echo '<img class=" card__image insta-image" src="' . $item->media_url . '" alt="" style="height:260px;">';
                                            echo '<div class="card-name">';
                                            echo '<div class="product-card_product-title__32LFp mx-2">' . htmlspecialchars($item->caption, ENT_QUOTES) . '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        } elseif ($item->media_type == 'VIDEO') {
                                            echo '<div class="swiper-slide">';
                                            echo '<video class=" card__image insta-video" src="' . $item->media_url . '" style="height:253px; object-fit:cover" autoplay muted loop></video>';
                                            echo '<div class="card-name">';
                                            echo '<div class="product-card_product-title__32LFp mx-2">' . htmlspecialchars($item->caption, ENT_QUOTES) . '</div>'; 
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    ?>
                                </div>    
                            </div>
                        <!--</div>-->
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-next swiper-navBtn "></div>
                <div class="swiper-button-prev swiper-navBtn " ></div>
                <div class="swiper-pagination"></div>
            </div>
            <!--</div>-->
    </div>
</section>


<section class="slider-container mt-3">
    <div class="container-fluid fluid-container" >
        <h2 class="categories__title header-text py-3 mb-0 text-color">Our Best Seller</h2>
            <div class="swiper card-swiper">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < count($bestseller); $i++){ ?>  
                        <div class="swiper-slide mb-4">
                            <div class="img-box under_card">
                                <a href="<?php echo base_url(); ?>viewdetails/<?= $bestseller[$i]['product_id']; ?>" class="card-img">
                                    <img src="<?= base_url() ?>public/admin/assets/uploads/product/<?= $bestseller[$i]['image_name']; ?>" class="card__image card-image" style="height:260px;" />
                                    <div class="name-job under_cart">
                                        <div class="product-card_product-info-holder__3TUe8">
                                            <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">
                                                <meta itemprop="availability" content="https://schema.org/InStock">
                                                <!--NILESH TECHFLUX 24/6/2024 -->
                                                <?php
                                                    $product_name = $bestseller[$i]['product_name'];
                                                    $truncated_name = $product_name;
                                                    if (strlen($product_name) > 25) {
                                                        $truncated_name = substr($product_name, 0, 25) . '...';
                                                    }
                                                ?>
                                                <div class="product-card_product-title__32LFp" itemprop="name">
                                                <img class="image pe-2 " style="height:15px;" src="<?= base_url('public/images/veg.jpg') ?>">
                                                    <?php echo htmlspecialchars($truncated_name); ?>
                                                </div>
                                                <!--<div class="product-card_product-title__32LFp" itemprop="name">-->
                                                <!--    < ?php if (isset($bestseller[$i]['category_name']) && $bestseller[$i]['category_name'] !== 'Flowers'): ?>-->
                                                <!--        <img class="image pe-2" style="height:15px;" src="< ?= base_url('public/images/veg.jpg'); ?>">-->
                                                <!--    < ?php endif; ?>-->
                                                     <!--<img class="image pe-2" src="< ?= base_url('public/images/veg.jpg') ?>">-->
                                                <!--    < ?= $bestseller[$i]['product_name']; ?>-->
                                                <!--</div>-->
                                                <!--NILESH TECHFLUX 24/6/2024 -->
                                                <div class="product-card_product-desc-tile__10UVW  mt-2">
                                                    <meta itemprop="priceCurrency" content="INR">
                                                    <span class="product-card_product-price-info-container__E9rQf">
                                                        <span class="product-card_product-price-info__17tj7" data-testid="currency">
                                                            ₹&nbsp;
                                                                <span itemprop="price" data-testid="price"><?= $bestseller[$i]['price'] ?></span>
                                                                
                                                        </span>
                                                    </span>
                                                    <span class="product-card_rating-sec__34VZH"><?= number_format(floatval($bestseller[$i]['average_rating']), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                                </div>
                                                <!--<div class="product-card_product-desc-tile__10UVW ">-->
                                                <!--    <div class="earliest-delivery_earliest-del__23XZW">-->
                                                <!--        Earliest Delivery:-->
                                                <!--        <span class="earliest-delivery_earliest-del-val__hWvLQ">-->
                                                <!--            &nbsp;Today-->
                                                <!--        </span>-->
                                                <!--    </div>-->
                                                <!--    <span class="product-card_product-review-info__2-RtV">-->
                                                <!--        4021 &nbsp; Reviews-->
                                                <!--    </span>-->
                                                <!--</div>-->
                                                <div class="attribute-sec">
                                                    <div data-test="desc-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        </div>   
                    <?php } ?>
                </div>
                <div class="swiper-button-next swiper-navBtn "></div>
                <div class="swiper-button-prev swiper-navBtn " ></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
</section>



<!-- NILESH 26/4/2024 -->
<section class="slider-container mt-3">
    <div class="container-fluid fluid-container" >
        <h2 class="categories__title header-text py-3 mb-0 text-color">Cakes</h2>
            <div class="swiper card-swiper">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < count($cakeproduct); $i++){ ?>  
                        <div class="swiper-slide mb-4">
                            <div class="img-box under_card">
                                <a href="<?php echo base_url(); ?>viewdetails/<?= $cakeproduct[$i]['product_id']; ?>" class="card-img">
                                    <img src="<?= base_url() ?>public/admin/assets/uploads/product/<?= $cakeproduct[$i]['image_name']; ?>" class="card__image card-image" style="height:260px;"/>
                                    <div class="name-job under_cart">
                                        <div class="product-card_product-info-holder__3TUe8">
                                            <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">
                                                <meta itemprop="availability" content="https://schema.org/InStock">
                                                <!-- NILESH TECHFLUX 24/6/2024 -->
                                                <?php
                                                    $product_name = $cakeproduct[$i]['product_name'];
                                                    $truncated_name = $product_name;
                                                    if (strlen($product_name) > 25) {
                                                        $truncated_name = substr($product_name, 0, 25) . '...';
                                                    }
                                                ?>
                                                <div class="product-card_product-title__32LFp" itemprop="name">
                                                <img class="image pe-2 " style="height:15px;" src="<?= base_url('public/images/veg.jpg') ?>">
                                                    <?php echo htmlspecialchars($truncated_name); ?>
                                                </div>
                                                
                                                <!--<div class="product-card_product-title__32LFp" itemprop="name">-->
                                                <!--    <img class="image pe-2 " style="height:15px;" src="< ?= base_url('public/images/veg.jpg') ?>">-->
                                                <!--    < ?= $cakeproduct[$i]['product_name']; ?>-->
                                                <!--</div>-->
                                                <!-- NILESH TECHFLUX 24/6/2024 -->
                                                <div class="product-card_product-desc-tile__10UVW  my-2">
                                                    <meta itemprop="priceCurrency" content="INR">
                                                    <span class="product-card_product-price-info-container__E9rQf">
                                                        <span class="product-card_product-price-info__17tj7" data-testid="currency">
                                                            ₹&nbsp;
                                                            <span itemprop="price" data-testid="price"><?= $cakeproduct[$i]['price'] ?></span>
                                                        </span>
                                                    </span>
                                                    <span class="product-card_rating-sec__34VZH"><?= number_format(floatval($cakeproduct[$i]['average_rating']), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                                </div>
                                                <div class="attribute-sec">
                                                    <div data-test="desc-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        </div>   
                    <?php } ?>
                </div>
                <div class="swiper-button-next swiper-navBtn "></div>
                <div class="swiper-button-prev swiper-navBtn " ></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
</section>

<section class="slider-container my-3">
    <div class="container-fluid fluid-container" >
        <h2 class="categories__title header-text py-3 mb-0 text-color">Flower Products</h2>
            <div class="swiper flower-category">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < count($flvproduct); $i++){ ?>
                    <div class="swiper-slide mb-4">
                        <div class="img-box">
                            <a href="<?php echo base_url(); ?>viewdetails/<?= $flvproduct[$i]['product_id']; ?>" class="card-img flower-img">
                            <!--<a href="< ?php echo base_url(); ?>viewdetails/< ?= $value['product_id']; ?>" class="card-img">-->
                                <!--<div class="">-->
                                <!--<div class="menu-details">-->
                                    <img src="<?= base_url() ?>public/admin/assets/uploads/product/<?= $flvproduct[$i]['image_name']; ?>" class="card__image card-image" style="height:260px;" />
                                    <div class="name-job under_cart ">
                                        <!--<h4 class="name text-color">< ?= $value['product_name']; ?></h4>-->
                                        <div class="product-card_product-info-holder__3TUe8">
                                            <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">
                                                <meta itemprop="availability" content="https://schema.org/InStock">
                                                <!-- nilesh techflux 24/6/2024 -->
                                                <?php
                                                    $product_name = $flvproduct[$i]['product_name'];
                                                    $truncated_name = $product_name;
                                                    if (strlen($product_name) > 25) {
                                                        $truncated_name = substr($product_name, 0, 25) . '...';
                                                    }
                                                ?>
                                                <div class="product-card_product-title__32LFp" itemprop="name" title="<?php echo htmlspecialchars($product_name); ?>">
                                                    <?php echo htmlspecialchars($truncated_name); ?>
                                                </div>
                                                <!--<div class="product-card_product-title__32LFp " itemprop="name">-->
                                                <!--    < ?= $flvproduct[$i]['product_name']; ?>-->
                                                <!--</div>-->
                                                <!-- nilesh techflux 24/6/2024 -->
                                                <div class="product-card_product-desc-tile__10UVW my-2">
                                                    <meta itemprop="priceCurrency" content="INR">
                                                        <span class="product-card_product-price-info-container__E9rQf">
                                                            <span class="product-card_product-price-info__17tj7" data-testid="currency">
                                                                ₹&nbsp;
                                                                <span itemprop="price" data-testid="price"><?= $flvproduct[$i]['price'] ?></span>
                                                            </span>
                                                        </span>
                                                        <span class="product-card_rating-sec__34VZH"><?= number_format(floatval($flvproduct[$i]['average_rating']), 1) ?><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                                </div>
                                                <!--<div class="product-card_product-desc-tile__10UVW ">-->
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
                                                <div class="attribute-sec">
                                                    <div data-test="desc-container">
                                                        
                                                    </div>
                                                </div>
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
               <div class="swiper-button-next swiper-navBtn "></div>
                <div class="swiper-button-prev swiper-navBtn " ></div>
            </div>
        </div>
</section>



        <!--<section class="carousel">-->
        <!--    <div class="cake-category bg-white">-->
        <!--        <div> -->
        <!--            <h2 class="categories__title py-3 mb-0 text-color">Flower Products</h2>-->
        <!--            <div class="container-fluid swiper">-->
        <!--              <div class="slide-container couro-slide">-->
                        <!--<div class="card-wrapper swiper-wrapper">-->
        <!--                    <div class="row">-->
        <!--                         < ?php foreach($flvproduct as $key => $value){?>   -->
        <!--                                <div class="col-md-3  d-flex justify-content-center">-->
        <!--                                    <a href="< ?php echo base_url(); ?>viewdetails/< ?= $value['product_id']; ?>" class="card">-->
        <!--                                        <div class="image-box">-->
        <!--                                            <img src="< ?= base_url() ?>public/admin/assets/uploads/product/< ?= $value['product_image']; ?>" class="card__image"/>-->
                                    
        <!--                                         </div>-->
                                                <!--<img src="<= base_url() ?>public/admin/assets/uploads/category/<= $value['category_image']; ?>" class="card__image" alt="" style="height:300px;"/>-->
        <!--                                        <div class="">-->
                                                    <!--<div class="card__header">-->
                                                    <!--    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>-->
                                                    <!--    <img class="card__thumb" src="<= base_url() ?>public/admin/assets/uploads/category/<= $value['category_image']; ?>" alt="" />-->
                                                    <!--    <div class="card__header-text"><h3 class="card__title"><= $value['category_name']; ?></h3></div>-->
                                                    <!--</div>-->
        <!--                                            <div class="profile-details">-->
        <!--                                               <img src="< ?= base_url() ?>public/admin/assets/uploads/product/< ?= $value['product_image']; ?>" alt=""-->
        <!--                                                class="card__image" alt=""/>-->
        <!--                                                <div class="name-job">-->
        <!--                                                   <h3 class="name text-color">< ?= $value['product_name']; ?></h3>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </a>-->
        <!--                                </div>-->
        <!--                            < ?php }?>-->
        <!--                        </div>-->
        <!--                    </div>-->
                      <!--</div>-->
        <!--              <div class="swiper-button-next swiper-navBtn"></div>-->
        <!--              <div class="swiper-button-prev swiper-navBtn"></div>-->
        <!--              <div class="swiper-pagination"></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
    </div>
    <!--<section class="association-with bg-prim ">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-12">-->
    <!--                    <ul class="d-flex list-unstyled justify-content-between flex-wrap">-->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="public/images/baker.svg" class="brand-Img" /></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="public/images/bakery.svg" class="brand-Img" /></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="public/images/thebakery.svg" class="brand-Img" /></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="public/images/breadcookies.svg" class="brand-Img" /></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="#"><img src="public/images/bakery.svg" class="brand-Img" /></a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
</section>


<!--<script>-->
<!--        document.addEventListener('DOMContentLoaded', function () {-->
             <!--Initialize Swiper-->
<!--            var swiper = new Swiper('.swiper-carousal_container', {-->
<!--                loop: true,-->
<!--                navigation: {-->
<!--                    nextEl: '.swiper-button-next',-->
<!--                    prevEl: '.swiper-button-prev',-->
<!--                },-->
<!--                slidesPerView: 3,-->
<!--                spaceBetween: 20,-->
<!--                breakpoints: {-->
<!--                    1920: {-->
<!--                        slidesPerView: 5,-->
<!--                        spaceBetween: 30-->
<!--                    },-->
<!--                    1028: {-->
<!--                        slidesPerView: 4,-->
<!--                        spaceBetween: 30-->
<!--                    },-->
<!--                    800: {-->
<!--                        slidesPerView: 3,-->
<!--                        spaceBetween: 10-->
<!--                    },-->
<!--                    480: {-->
<!--                        slidesPerView: 2,-->
<!--                        spaceBetween: 10-->
<!--                    },-->
<!--                    320: {-->
<!--                        slidesPerView: 1,-->
<!--                        spaceBetween: 10-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--        });-->
        

<!--    </script>-->

<!-- Swiper CSS -->
<!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">-->

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!--Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--Initialize Swiper -->
  <script>
//   console.log("hello");
    var swiper = new Swiper(".card-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   mousewheel: true,
      keyboard: true,
             breakpoints: {
        0: {
           slidesPerView: 2,
           navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        },
         520: {
          slidesPerView: 3,
        },
         768: {
           slidesPerView: 4,
        },
         1000: {
           slidesPerView: 4,
         },
          1500: {
           slidesPerView: 5,
         },
         2000: {
           slidesPerView: 7,
         },
         2500:{
            slidesPerView: 8,
         },
         3000:{
             slidesPerView: 9,
         },
         
      },
    });
  </script>
  
  
    <script>
//   console.log("hello");
    var swiper = new Swiper(".flower-category", {
      slidesPerView: 4,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   mousewheel: true,
      keyboard: true,
             breakpoints: {
        0: {
           slidesPerView: 2,
           navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        },
         520: {
        //   slidesPerView: 4,
        slidesPerView: 3,
        },
         768: {
        //   slidesPerView: 5,
        slidesPerView: 4,
        },
         1000: {
        //   slidesPerView: 5,
            slidesPerView: 4,
         },
          1500: {
        //   slidesPerView: 6,
            slidesPerView: 5,
         },
         2000: {
           slidesPerView: 7,
         },
         2500:{
            slidesPerView: 8,
         },
         3000:{
             slidesPerView: 9,
         },
         
      },
    });
  </script>

<!-- Swiper JS -->
 

  <!-- Initialize Swiper -->
  
  <script>
    var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    freeMode: true,
    autoplay: {
      delay: 7000,
      // disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    loop: true, // set loop to true for continuous loop
  });
  </script>
  
   <!-- Initialize Swiper -->
 <script>
//   console.log("hello");
    var swiper = new Swiper(".card-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   mousewheel: true,
      keyboard: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
        },         
        320: {
           slidesPerView: 2,
           navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        },
         520: {
          slidesPerView: 3,
        },
         768: {
           slidesPerView: 4,
        },
         1000: {
           slidesPerView: 4,
         },
          1500: {
           slidesPerView: 5,
         },
         2000: {
           slidesPerView: 7,
         },
         2500:{
            slidesPerView: 8,
         },
         3000:{
             slidesPerView: 9,
         },
         
      },
    });
  </script>
  

<!-- Swiper JS -->
 <script>
  console.log("hello");
    var swiper = new Swiper(".category-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   mousewheel: true,
      keyboard: true,
      
        breakpoints: {
        0:{
            slidesPerView:1,
        },
        
        235: {
           slidesPerView: 2,
           navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        },
        
        320:{
            slidesPerView:3,
        },
         520: {
          slidesPerView: 4,
        },
         768: {
           slidesPerView: 5,
        },
         1000: {
           slidesPerView: 5,
         },
          1500: {
           slidesPerView: 5,
         },
         2000: {
           slidesPerView: 6,
         },
         2500:{
            slidesPerView: 7,
         },
         3000:{
             slidesPerView: 8,
         },
         
      },
    });
  </script>
  

<!-- Swiper JS -->
 
<!-- Swiper JS -->
 <script>
//   console.log("hello");
    var swiper = new Swiper(".new-arrival-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
       navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   mousewheel: true,
      keyboard: true,
      
        breakpoints: {
        0:{
            slidesPerView:1,
        },
        
        235: {
          slidesPerView: 2,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        },
        
        320:{
            slidesPerView:3,
        },
         520: {
          slidesPerView: 4,
        },
         768: {
          slidesPerView: 5,
        },
         1000: {
          slidesPerView: 6,
         },
          1500: {
          slidesPerView: 7,
         },
         2000: {
          slidesPerView: 9,
         },
         2500:{
            slidesPerView: 11,
         },
         3000:{
             slidesPerView: 12,
         },
         
      },
    });
  </script>
  

<!-- Swiper JS -->
</body>
<?= $this->endSection() ?>
