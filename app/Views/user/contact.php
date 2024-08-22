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
    color:#616b37 !important;;
    }
    
    h1{
        
        margin-top:-103px !important;
        /*padding-top:10px;*/
        padding-bottom:10px;
        font-size:30px;
     }
     
     h2{
         font-size:25px !important;
     }
     
     h3{
         font-size:20px !important;
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
    color: #616b37 !important;

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
   color: #616b37 !important;
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
  a:hover{
        color:black !important;
    }
    
     @media (min-width: 360px) and (max-width: 600px)
    {
        .wid {
            width: 65% !important;
        }
    }
    
</style>

<!--<body>-->
<!--    <div>-->
<!--         <h1 class="txtcolor" style="margin-top:-119px !important">Contact Us</h1>-->
<!--    </div>-->
    
<!--    <div class="minw">-->
<section class="">
    <!--<div class="breadcrumbs" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU'); background-size: cover; background-position: center; min-height: 250px;">-->
        <div class="breadcrumbs" style="background-image: url(<?= base_url('public/images/Untitled design (1).png'); ?>); background-size: cover; background-position: center; min-height: 250px;">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-md-3 col-sm-6 wid">
                <div class="breadcume_banner">
                        <div class="container_course my-5">
                            <div class=" breadcume_content" style="text-align:center;">
                                <h4 style="color:white !important;">Contact Us</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Contact Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-8">-->
                <!--        <div class="page-header float-right">-->
                <!--            <div class="page-title">-->
                <!--                <ol class="breadcrumb text-right">-->
                <!--                    <li ><a href="#">Home</a></li>-->
                <!--                    <li class="active">Basic table</li>-->
                <!--                </ol>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section> 

    <div class="site-banner">
    	<div class="banner-content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">			
    					<div class="text-content mt-0">
    						<h1 class="txtcolor" style="margin-top:-119px !important">Contact Us</h1>
    					
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div><!--site-banner-->

<section class="contact-information  mt-3 mb-4">
	<div class="container-fluid w-100">
		<div class="row divcolor"style=" width: 100%;margin-left: 1px; border-radius:5px !important;">
			<div class="contact-detail col-md-6 p-0 mb-3 ">
				<div class="container">
				    <h2 class="mt-5 txtcolor">Get In Touch</h2>
				    <div class="contact-detail d-flex flex-wrap mt-4 ps-3 pt-4 pb-5">
					<div class="detail me-6 ">
						<!-- class="txtcolor">-->
						<ul class="list-unstyled ">
						    <li><h3	<i class="fa-solid fa-phone me-3 pt-4 justify-content-center"></h3></i> + <?= isset($contact[0]['phone']) ? $contact[0]['phone'] : ''; ?></li>
						</ul>
					</div><!--detail-->
    				<div class="detail">
    					<ul class="list-unstyled">
    						<li><i class="fa-solid fa-envelope txtcolor me-3 pt-4"></i>
    						    <a href="<?= isset($contact[0]['email']) ? "mailto:" . $contact[0]['email'] : "#"; ?>" style="color:#484848;"><?= isset($contact[0]['email']) ? $contact[0]['email'] : ''; ?></a>
                            </li>
    					</ul>
    				</div><!--detail-->
    				<div class="address detail ">
    					<ul class="list-unstyled">
    						<li><i class="fa-solid fa-location-dot txtcolor me-4 pt-4"></i><?= isset($contact[0]['address']) ? $contact[0]['address'] : ''; ?></li>
    					</ul>
    				</div><!--detail-->					
    				<div class="detail pt-4">
    						<!--<h3 class="txtcolor pt-4">Social Links</h3>-->
    						<div class="social-links flex-container">
    							<a href="#" class="icon icon-facebook me-1" style="color:#646464; "></a>
    							<a href="#" class="icon icon-twitter me-1" style="color:#646464;"></a>
    							<a href="#" class="icon icon-pinterest-p me-1" style="color:#646464; "></a>
    							<a href="#" class="icon icon-youtube me-1" style="color:#646464; "></a>
    							<a href="#" class="icon icon-linkedin me-1 " style="color:#646464;"></a>
    						</div><!--social-links-->
    				</div><!--detail-->
				</div><!--contact-detail-->
			    </div>
			</div><!--col-md-6-->
			<div class="col-md-6 p-0">
				<div class="container">
					<div class="row">
						<div class="contact-information col-md-12">
						<h2 class="mt-5 txtcolor">Send A Message</h2>
							<form name="contactform" action="<?= base_url('storecontact'); ?>" method="POST" enctype="multipart/form-data" class="contact-form form-group mt-4">
								<div class="text-input flex-container">
								    <input type="text" name="name" placeholder="Name" class=" form-input name me-3 mb-3 padd" required>
								    <input type="email" name="email" placeholder="E-mail" class="form-input mb-3 padd" required>
								</div><!--text-input-->
								<textarea name="message" placeholder="Message" style="height: 150px;" class="w-100 mb-3" required></textarea>
								<button type="submit" name="submit" class="w-100 mb-3 p-3" style="background-color:#616b37 !important; color:#ffffff; border:none;">Submit</button>
							</form>
						</div><!--contact-information-->
					</div>
				</div>
			</div><!--col-md-6-->
		</div>
	</div>
</section>

<section class="google-map mb-4 container-fluid w-100 h-25">
	<div class="mapouter">
	    <div class="gmap_canvas">
	        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net/">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
	   </div>
     </div>
</section>

<!--</div>-->

<!--</body>-->

<?= $this->endSection() ?>
