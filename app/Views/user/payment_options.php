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
                                <h4 style="color:white !important;">Payment Options</h4>
                                <div class="breadcrumb_area">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Payment Options</span>
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
        	<div class="row  title-txt my-4 p-2"><h1 class="text-color">Payment Options</h1></div>
        </div>
    	<div class="container">
    		<div class="row chief mb-4 p-4" style="text-align: justify;">
    			<p  style="font-weight:600">1. How to pay for shopping on Birthday n Box?</p>
                <p>Birthday n Box offers you multiple payment methods. Whatever your online mode of payment, you can
                rest assured that Birthday n Box trusted payment gateway partners use secure encryption technology to
                keep your transaction details confidential at all times. You can use Internet Banking and Wallets like
                PayTM, Mobikwik to make your purchase.</p>
                <p>Birthday n Box also accepts payments made using Visa, MasterCard, Maestro and American Express
                credit/debit cards in India and many other countries.</p>
                <p style="font-weight:600">2. Do you accept international credit cards on Birthday n Box?</p>
                <p>Yes, we do support international credit, debit cards issued in many countries. Along with it, we provide
                option to pay through PayPal which helps you to pay through non-Indian cards.
                <p style="font-weight:600">3. How do I pay using a credit/debit card?</p>
                <p>We accept payments made by credit/debit cards issued in India and many other countries.</p>
                
                <p style="font-weight:600">Credit cards</p>
                
                <p>We accept payments made using Visa, MasterCard and American Express credit cards. To pay using your
                credit card at checkout, you will need your card number, expiry date, three-digit CVV number (found on
                the backside of your card). After entering these details, you will be redirected to the bank's page for
                entering the online 3D Secure password.</p>
                
                <p style="font-weight:600">Debit cards</p>
                <p>We accept payments made using Visa, MasterCard and Maestro debit cards. To pay using your debit card
                at checkout, you will need your card number, expiry date (optional for Maestro cards), three-digit CVV
                number (optional for Maestro cards). You will then be redirected to your bank's secure page for entering
                your online password (issued by your bank) to complete the payment.</p>
                <p style="font-weight:600">4. Is it safe to use my credit/debit card on Birthday n Box?</p>
                <p>Your online transaction on Birthday n Box is secure with the highest levels of transaction security
                currently available on the Internet. We use 256-bit encryption technology to protect your card
                information while securely transmitting it to the respective banks for payment processing.</p>
                
                <p>All credit card and debit card payments on Birthday n Box are processed through secure and trusted
                payment gateways managed by leading banks. Banks now use the 3D Secure password service for online
                transactions, providing an additional layer of security through identity verification.</p>
                <p style="font-weight:600">5. What is a 3D Secure password?</p>
                <p>The 3D Secure password is implemented by VISA and MasterCard in partnership with card issuing banks
                under the "Verified by VISA" and "Mastercard SecureCode" services, respectively.</p>
                
                <p>The 3D Secure password adds an additional layer of security through identity verification for your online
                credit/debit card transactions. This password, which is created by you, is known only to you. This ensures
                that only you can use your card for online purchases.</p>
                <p style="font-weight:600">6. How can I get the 3D Secure password for my credit/debit card?</p>
                <p>You can register for the 3D Secure password for your credit/debit card by visiting your bank's website.
                The registration links for some of the banks have been provided below for easy reference.</p>
    		</div>
    	</div>
</section>  
<?= $this->endSection() ?>