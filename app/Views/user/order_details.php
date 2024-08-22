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

    a:hover{
        color:black;
    }
     .icon-envelope-o{
        margin:0 !important;
    }
    /*mycss*/
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #8C9EFF;
        background-repeat: no-repeat;
    }
    .stars i {
      color: #e6e6e6;
      /*font-size: 35px;*/
      cursor: pointer;
      transition: color 0.2s ease;
    }
    .stars i.active {
      color: #ff9c1a;
    }

    .card {
        z-index: 0;
        /*background-color: #ECEFF1;*/
        padding-bottom: 20px;
        margin-top: 2%;
        margin-bottom: 2%;
        border-radius: 10px;
        width:100%;
    }
    
    .top {
        padding-top: 40px;
        padding-left: 13% !important;
        padding-right: 13% !important;
    }
    
    #cart-count {
         left: -13px;
    }
    .order-details{
        display:block;
    }
    .details-responsive{
            display:none;
    }
    
    /*Icon progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: #455A64;
        padding-left: 0px;
        margin-top: 30px;
    } 
    
    #progressbar li {
        list-style-type: none;
        font-size: 13px;
        width: 20%;
        float: left;
        position: relative;
        font-weight: 400;
    }
    
    #progressbar .step0:before {
        font-family: FontAwesome;
        content: "\f10c";
        color: #fff;
    }
    
    #progressbar li:before {
        width: 40px;
        height: 40px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        background: #C5CAE9;
        border-radius: 50%;
        margin: auto;
        padding: 0px;
    }
    
    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 12px;
        background: #C5CAE9;
        position: absolute;
        left: 0;
        top: 16px;
        z-index: -1;
    }
    
    #progressbar li:last-child:after {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        position: absolute;
        left: -50%;
    }
    
    #progressbar li:nth-child(2):after, #progressbar li:nth-child(3):after {
        left: -50%;
    }
    
    #progressbar li:first-child:after {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        position: absolute;
        left: 50%;
    }
    
    #progressbar li:last-child:after {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    
    #progressbar li:first-child:after {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    
    /*Color number of the step and the connector before it*/
    #progressbar li.active:before, #progressbar li.active:after {
        background: #651FFF;
    }
    
    #progressbar li.active:before {
        font-family: FontAwesome;
        content: "\f00c";
    }
    
    #progressbar li:after {
        content: '';
        height: 12px;
        background: #C5CAE9;
        position: absolute;
        top: 16px;
        z-index: -1;
    }
    
    #progressbar li:last-child:after {
        right: 0;
        /*left: -50%;*/
    }

    #progressbar li:nth-child(2):after, #progressbar li:nth-child(3):after {
        left: -25%;
        right: -25%;
    }
    
    
    #progressbar li:nth-child(3):after, #progressbar li:nth-child(4):after {
        left: -25%;
        right: -25%;
    }
    .icon {
        width: 30px;
        height: 30px;
        margin-right: 15px;
    }
    
    .icon-content { 
        padding-bottom: 20px;
    }
    
    .inline-list{
        cursor:pointer;
    }
    
    @media screen and (max-width: 992px) {
        .icon-content {
            width: 50%;
        }
        
        .header .mobile-menu-trigger {
             margin-left: 0px; 
        }
    }
    
   
    
    @media(max-width:600px){
        .order-details{
            /*display:none;*/
            display:block;
        }
        .details-responsive{
            display:block !important;
        }
    }
    
    .inline-date {
        white-space: nowrap;
    }

</style>
<section class="">
    <!--<div class="breadcrumbs" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU'); background-size: cover; background-position: center; min-height: 300px;">-->
        <div class="breadcrumbs" style="background-image: url(<?= base_url('public/images/Untitled design (1).png'); ?>); background-size: cover; background-position: center; min-height: 250px;">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-md-3 col-sm-6 wid">
                <div class="breadcume_banner">
                        <div class="container_course my-5">
                            <div class=" breadcume_content" style="text-align:center;">
                                <h4 style="color:white !important;">Order Details</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Order Details</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<div class="container-fluid px-1 px-md-4 mx-auto order-details">
    <h4 class="text-center pt-3">View Your Order</h4>
    <div class="">
        <!--bhagyashri code start-->
        <!--<p class="px-4 my-3 flex-grow-1">Order Id : <span class="text-primary font-weight-bold">< ?= $order['odrtrackid'] ?></span></p>-->
         <div class="container card">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="table-responsive pt-3">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($statustrack as $order): ?>
                                    <tr>
                                        <td><?= $order['odrtrackid'] ?></td>
                                        <td class="inline-date">
                                            <?php $date = new DateTime($order['odate']); echo $date->format('d-m-Y'); ?>
                                        </td>
                                        <td><?= $order['totalamount'] ?></td>
                                        <td>
                                            <a href="<?= base_url('my_details/' . $order['order_id']); ?>"><i class="fa fa-eye" style="color:black;"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--bhagyashri code start-->
    </div>
</div>

<?= $this->endSection() ?>