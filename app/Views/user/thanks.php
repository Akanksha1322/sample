<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
       
    }
    
    body{
        background-color:#e1e7e0 ;
       
    }
    
    h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    font-weight: 600;
    line-height: 1.2;
    color: #616b37 !important;
    }
    
    h1{
        
        margin-top:-103px !important;
        padding-top:10px;
        padding-bottom:10px;
        font-size:30px;
     }
     
     h2{
         font-size:25px !important;
     }
     
     h3{
         font-size:20px !important;
     }
    
    a:hover{
        color:black !important;
    }
    .divcolor{
         background-color:white;
    }
    
    .mt-3 {
    margin-top: -9rem!important;
    }
    
    .contact-detail.d-flex.flex-wrap.mt-4 {
    display: flex;
    flex-direction: column;
`   }
F
    .mb-4 {
    display: flex;
    /* justify-content: space-between; */
    flex-direction: column;
    }
    
    .mb-4 {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    
    }
    
    @media (min-width: 1200px)
    .container, .container-lg, .container-md, .container-sm, .container-xl {
     max-width: 1227px;

    }
    
    .padd{
        padding:10px;
    }

    .contact-form input, .contact-form textarea {
   
    border-radius: 5px !important;
    background-color:white !important;
     border:1px solid  #646464 !important;
    }

    .contact-form button{
        border-radius: 5px !important;
    }
    
    .mt-3 {
    margin-top: -12.3rem!important;
    }

@media screen and(max-width:280) and (min-width:540){
    
   .minw{
     max-width:50%;  
   }
}

a{
    text-decoration:none;
}

.social-links a:hover{
    color: #9e9508 !important;

}

button.w-100[name="submit"]:hover{
    backgroud-color:#c2b709!important;
}

.container h2{
    text-align:center;
}

.contact-detail .d-flex {
    
    border: 1px solid #646464;
    border-radius: 5px ;
    
    /*box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);*/
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.txtcolor{
   color: #9e9508;
}

/* Define a custom border color for the focus state */
    .form-input  {
     
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-clip: padding-box;
    border: var(--bs-border-width) solid var(--bs-border-color);
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

    }
    
    .form-input:focus {
        box-shadow: 0 0 0 2px #ccc; /* Light gray stroke */
    }


    .container-fluid.w-100{
        width:90% !important;
    }
/*.contact-detail .detail li{*/
/*    border: 1px solid #646464;*/
/*    border-radius: 5px ;*/
/*}*/
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
  
  /*my css start*/
  .title{
      text-align:center;
  }
  .main-block{
      background-color:#ffffff;
      border-radius:5px;
  }
  @media(max-width: 600px){
      .submit{
           margin-top:8px;
      }
  }
   @media (min-width: 360px) and (max-width: 600px)
    {
        .wid {
            width: 65% !important;
        }
    }
  /*my css end*/
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
                                <h4 style="color:white !important;">Thank You</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Thank You</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="single-product  my-3 ">
    <div class="container main-block">
        
        <div class="row my-3">
            <div class="invoice mb-3">
                <div class="d-flex flex-column align-items-center">
                 <div><i class="fa-solid fa-circle-check fa-bounce fa-lg" style="color: #616b37 !important;"></i></i></div>
                 <h5 class="title">Your order Confirmed!</h5>
                </div>
                <div style="text-align:center">
                    <p><strong>Dear <?= $username ?>,</strong></p>
                    <p>We are delighted to inform you that your order with ID <strong><?= $orderId ?></strong> has been successfully confirmed!</p>
                    <p>Your items are now being processed and will be prepared for shipment.</p>
                    <p>An email confirmation with detailed information about your shipment will be sent to: <strong><?= $email ?></strong></p>
                    <p>If you have any questions or need further assistance, feel free to contact us.</p>
                </div>
            </div>
            <div class=" row my-3 flex-column align-items-center">
                <div class="col-6 justify-content-center" style="text-align:center;">
                    <h6 class="font-weight-bold mb-0">Thanks for shopping with us!</h6>
                    <span style="color: #616b37 !important; ">Cake Team</span>
                </div>
                <div class="col-6 my-2 "style="text-align:center;">
                   <a href="<?= base_url("/") ?>"> <button type="submit" name="submit" class="" style="background-color: #616b37 !important; border-radius: 5px; padding: 5px;border: none;color: #ffffff;">Continue to shopping</button></a>
                    <a href="<?= base_url('order_orders') ?>"> <button type="submit" name="submit" class="submit" style="background-color: #616b37 !important; border-radius: 5px; padding: 5px;border: none;color: #ffffff;">View Your Order</button></a>
                </div>
                
                <!--<div class="col-6 my-2 "style="text-align:center;">-->
                   
                <!--</div>-->
            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>
