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
                <div class="col-md-6 col-sm-6 wid">
                <div class="breadcume_banner">
                        <div class="container_course my-5">
                            <div class=" breadcume_content" style="margin-left: 50px;">
                                <h4 style="color:white !important;">Cancellations and refund policy</h4>
                                <div class="breadcrumb_area">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Cancellations and refund policy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-section ">
    	<div class="container ">
        	<div class="row  title-txt my-4 p-2"><h1 class="text-color">Cancellations and refund policy</h1></div>
        </div>
    	<div class="container">
    		<div class="row chief mb-4 p-4" style="text-align: justify;">
    			<p>1. Any cancellations to the order shall be made before 48 hours of the actual time of delivery to claim
                refund of the paid amount. No refund shall be made once the 48hr delivery window starts. In case of
                Courier Products cancellation is not possible if the product is dispatched and Personalised Products once
                placed cannot be cancelled.</p>
                <p>2. Cancellation of order shall be made with mail with Subject: <b>"Cancellation Request"</b> and sent to
                info@birthdaynbox.com.</p>
                <p style="font-weight:600">Mail shall contain following details :</p>
                <p>a. Order ID:<br>
                b. Cancellation Reason:<br>
                c. Refund Account Details:</p>
                <p>3. Cancellation shall be initiated after formal order cancellation request is received at
                info@birthdaynbox.com.</p>
                <p>4. Refund shall be made under following conditions</p>
                <p>a. Order was cancelled.<br>
                b. Order was not delivered to the recipient. (This does not include the case for unfounded recipient)<br>
                c. If there is any complain regarding the quality of the product being delivered, we will inquire about the
                same and if it is found to be true, the customer will get a full refund or the product will be replaced.</p>
                <p>5. A refund can only be requested in case of service failure, our team will evaluate if an order qualifies
                for a refund and the decision of our management will be final. The refund amount in no circumstances
                can exceed the amount paid by customer, we are not liable for any loss or claim beyond the amount
                actually paid by customer.</p>
                <p>6. In case of Cancellation, 5% charge will be applicable.</p>
                <p>7. Any discounted or exempted amount cannot be claimed for refund.</p>
                <p>8. Any extra amount credited to Birthday n Box account may be considered for order enhancement but
                will not be refundable.</p>
                <p>9. In all matters concerning Cancellation and refund Birthday n Box shall have the deciding hand.</p>
                <p>10. Birthday n Box may amend its Cancellation and Refund Policy from time to time. If we make any
                substantial changes in the way we use your personal information we will notify you by email or an
                announcement on the website.</p>
                <p>11. In case of Cash on Delivery (COD), you will be refunded only in your Birthday n Box wallet as points,
                refund can be full or partial depending on the situation. You will get a refund if and only if the order is
                canceled after its delivery and cash is received against it by us.</p>
                <p>12. If you have any questions/comments about our Cancellation and Refund Policy, please email us at
                info@birthdaynbox.com.</p>
    		</div>
    	</div>
</section>  
<?= $this->endSection() ?>