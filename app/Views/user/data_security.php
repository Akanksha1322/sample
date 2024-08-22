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
                                <h4 style="color:white !important;">Data Security</h4>
                                <div class="breadcrumb_area">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Data Security</span>
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
        	<div class="row  title-txt my-4 p-2"><h1 class="text-color">Data Security</h1></div>
        </div>
    	<div class="container">
    		<div class="row chief mb-4 p-4" style="text-align: justify;">
    			<p>We are committed to safeguarding your personal and order-related information. We've consistently take
                utmost care to ensure that your privacy and safety is our top priority. We urge you to take a moment out
                to read about our data security practices and request your support for the same.</p>
                
                <p style="font-weight:600">How does Birthday n Box protect your information?</p>
                <p>All communication between your browser and our servers is encrypted (TLS 1.3 compliant).</p>
                <p>We employ the latest security protocols.</p>
                <p>We use a DMZ (DeMilitarized Zone) on computer networks.</p>
                <p>We have a Digital Certificate from AO Kaspersky Lab.</p>
                <p>Our Payment Partners are PCI DSS Compliant.</p>
                <p>We have tie-ups with secured, trustworthy Payment Gateways only.</p>
                <p>We have listed some good to know tips to keep you safe online.</p>
                <p>Please ensure that your account is secured with a strong password.</p>
                
                <p>Make sure your computer has the latest version of anti-virus software. Download the updates of this
                software on a regular basis to protect your computer against new viruses.</p>
                <p>Check for the lock icon or 'https://' at the beginning of the URL on the address bar. This confirms that the
                Birthday n Box page/site is genuine and secure.</p>
                <p>If you are using a shared computer, you should clear your browser's cache and history after each session
                so that your account information is removed.</p>
                <p>Do not share any personal information like bank details, date of birth, anniversary date. Birthday n Box
                never saves these details, and we don't ask for such details via e-mails, calls or SMS.</p>
                <p>Do not trust any scheme offers received via calls, SMS or e-mails, which do not reflect on the official
                website.</p>
                <p>Do check the writing style in e-mails or SMS you receive. Poor spelling and grammar are an indication
                that the e-mail/SMS you've received may not be from a credible source.</p>
                <p>Never get lured into offers of big amounts or gift items, in exchange of a small amount to be deposited in
                some bank account. Genuine websites like Birthday n Box never indulge in such unusual schemes.</p>
                <p>Birthday n Box never asks their customers to deposit amounts into any bank account for any such gifts or
                schemes.</p>
                <p>For any doubts or concerns regarding any communication you receive from Birthday n Box.</p>
    		</div>
    	</div>
</section>  
<?= $this->endSection() ?>