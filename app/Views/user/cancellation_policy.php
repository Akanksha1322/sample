<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<style>
    .footer {
        /*background-color: #9e9508 !important;*/
        /*color: yellow;*/
        justify-content: space-around;
        display: flex;
        padding: 20px;
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
    
    
    
    .main-section{
        background-color:#e1e7e0;
    }
    
    .title-txt{
        /*background-color:#ffffff;*/
        text-align:center;
        border-radius:5px;
        /*font-size: 25px;*/
        text-transform: uppercase;
    }
    .title-color{
        color:#616b37 !important;
        
    }
    h1{
        font-size:30px !important;
    }
    .chief{
        background-color:#ffffff;
        border-radius:5px;
    }
    
    .container-padding{
        padding:0 2rem;
    }
    
    .team-background{
        background-color:#ffffff;
        border-radius:5px;
    }
    
    .acco-body{
        margin:0 !important;
    }
    .acco-item{
        padding:0 !important;
    }
    
    .about-container{
        width:88%;
    }
    
    a:hover{
        color:black !important;
    }
    
    @media (min-width: 360px) and (max-width: 600px)
    {
        .wid {
            width: 65% !important;
        }
        
        h1,h2,h3,h4,h5,h6{
            color:#616b37 !important;
        }
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
                                <h4 style="color:white !important;">Cancellations and refund policy</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">About Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    	<div class="container ">
        
            <div class="row">
            <div class="col">
            <ol>
                <li>1. Any cancellations to the order shall be made before 48 hours of the actual time of delivery to claim
               refund of the paid amount. No refund shall be made once the 48hr delivery window starts. In case of
               Courier Products cancellation is not possible if the product is dispatched and Personalised Products once
               placed cannot be cancelled.</li>
               </ol>
        </div>
        
    </div>
    </div>

</section>  
<?= $this->endSection() ?>