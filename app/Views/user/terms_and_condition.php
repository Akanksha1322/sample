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
                                <h4 style="color:white !important;">Terms and Conditions</h4>
                                <div class="breadcrumb_area">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Terms and Conditions</span>
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
        	<div class="row  title-txt my-4 p-2"><h1 class="text-color">Terms and Conditions</h1></div>
        </div>
    	<div class="container">
    		<div class="row chief mb-4 p-4" style="text-align: justify;">
    			<p>Please read the following terms and conditions very carefully as your use of service is subject to your
                acceptance of and compliance with the following terms and conditions <b>("Terms")</b>.</p>
                
                <p>By subscribing to or using any of our services you agree that you have read, understood and are bound
                by the Terms, regardless of how you subscribe to or use the services. If you do not want to be bound by
                the Terms, you must not subscribe to or use our services.</p>
                
                <p>Your use of the Website, services and tools are governed by the following terms and conditions <b>("Terms
                of Use")</b> as applicable to the Website, including the applicable policies which are incorporated herein by
                way of reference. If you transact on the Website, you shall be subject to the policies that are applicable
                to the Website for such transaction. By mere use of the Website, you shall be contracting with Birthday n
                Box and these terms and conditions including the policies constitute Your binding obligations, with us.</p>
                
                <p>By impliedly or expressly accepting these Terms of Use, you also accept and agree to be bound by the
                Birthday n Box Privacy Policy.</p>
                
                <p>For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any
                natural or legal person who has agreed to become a member of the Website by providing Registration
                Data while registering on the Website as Registered User using the computer systems. The terms "we",
                "us", "our" shall mean Birthday n Box.</p>
                
                <p>When You use any of the services provided by us through the Website, including but not limited to, (e.g.
                Customer Reviews), You will be subjected to the rules, guidelines, policies, terms, and conditions
                applicable to such service, and they shall be deemed to be incorporated into this Terms of Use and shall
                be considered as part and parcel of this Terms of Use. We reserve the right, at our sole discretion, to
                change, modify, add or remove portions of these Terms of Use, at any time without any prior written
                notice to you. It is your responsibility to review these Terms of Use periodically for updates / changes.
                Your continued use of the Website following the posting of changes will mean that you accept and agree
                to the revisions. As long as You comply with these Terms of Use, we grant You a personal, non-exclusive,
                non-transferable, limited privilege to enter and use the Website.</p>
                
                <p style="font-weight:600">ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE
                TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY
                BEFORE PROCEEDING.</p>
    		</div>
    	</div>
</section>  
<?= $this->endSection() ?>