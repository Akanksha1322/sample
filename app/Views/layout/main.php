<!DOCTYPE html>
<html>
    <head>
        <title>Birthday n Box</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="author" content="TemplatesJungle" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        
        <meta name="description" content="Cake Shop" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/fonts/icomoon/icomoon.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/vendor.css') ?>" />

        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <!--<link rel="stylesheet" type="text/css" href="<= base_url('public/css/bootstrap.min.css') ?>" />-->

        <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/style_old.css') ?>" />

        <!--cdn font awesome-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

         <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        
        <!--link slink css-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="icon" href="<?= base_url('public/images/main-logo.jpg') ?>" type="image/x-icon">
        
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-TKDjnvJ3eb1t6pvy/Ba0PM1TI3cx55C/eZB3XtR9Z2/q/9Rp00r+twJu5X6x9a7nVlU8UvGPc4V0wX2fsdglfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->

<style>
    :root {
     --surface-color: #fff;
      --curve: 40;
    }

    * {
        box-sizing: border-box;
        font-family:arial;
    }
    
    h1,h2,h3,h4,h5,h6,p{
        font-family:arial;
    }
     .my-auto{
         color:black;
         font-size:12px;
     }
    .my-auto:hover{
        color:#616b37;
    }
            
     div#\ head-line {
    --bs-gutter-x: 0rem!important;
    }
    .bg-black {
       
        padding-bottom: 5px !important;
        padding-top: 5px !important;
    }
    
    @media (min-width:400px) and (max-width:768px){
        .span-email{
            margin-left:10px;
        }
    }
    @media only screen and (max-width: 390px) {
        .bg-black {
        padding-left: 76vw !important;
        }
        .v-center {
        padding-bottom: 9% !important;
       
        }
        
        .content{
            font-size:8px;
        }
        
        #content-phone{
            padding-left:25px;
        }
        #content-email{
            font-size:12px;
        }
    }
    @media only screen and (max-width: 600px) {
        .bg-black {
            padding:5px 71px 29px 15px !important;
        }
    }

    @media only screen and (min-width: 1300px) {
        .bg-black {
            padding:6px 21px 6px 15px !important;
            /*display:flex;*/
            justify-content: flex-end !important;
        }
        
        .sub-title {
            font-size: 18px !important;
        }
        
        .title {
            font-size: 23px !important;
        }
        /*.header .menu > ul > li > a {*/
        /*    font-size: 20px !important;*/
        /*}*/
    }
    @media only screen and (min-width: 1133px) {
        .menu-main{
            display:flex;
            justify-content:center;
        }
    }

    @media screen and (min-width: 600px) and (max-width: 1545px) {
        .bg-black {
            padding:6px 21px 6px 15px !important;
            /*display:flex;*/
            justify-content: flex-end;
        }
    }

    @media screen and (min-width: 1180) {
        .bg-black {
            padding-bottom:360px !important;
            
        }
    }

    @media screen and (max-width: 500px) {
      body {
        overflow-x: hidden !important;
      }
    }
     .fa-solid,.fas {
        font-size: 21px;
        /*font-family: "Font Awesome 6 Free";*/
        font-weight: 900;
    }

    .search-container {
        margin-right: 15px;
        display: flex;
        /* justify-content: center; */
    }

    .search-bar {
        z-index:0;
        margin-bottom: 2px;
        padding: 8px;
        border-radius: 5px;
        border: none;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        width: 233px;
        font-size: 10px;
    }
           

    .nav-item.dropdown.show {
        margin-left: auto; /* Pushes the profile dropdown to the right */
    }
           
    .action-menu {
        /*display: flex;*/
        /*align-items: center;*/
        /*justify-content: space-between;*/
        display:contents;
    }

    .search-bar {
        flex: 1;
        margin-right: 10px; /* Adjust margin as needed */
    }
    
    .dropdown {
        position: relative;
    }
    
    .dropdown-menu {
        position: absolute;
        top: 100%;
        right: 0;
        z-index: 1;
    }
    
    .shopping-cart {
        margin-left: 10px; /* Adjust margin as needed */
    }
    
    .footer {
        background-color: #616b37 !important;
        display: flex;
        padding: 20px;
        justify-content: space-evenly !important; 
        align-items: center;
    }
    
    .line-footer{
        background-color:#333333 !important;
        
    }
    
     .widt12 {
        display: flex;
        align-items: center;
     }
    
    .copyright{
        color:white;
        font-size: 12px;
        white-space: nowrap;
    }
    
    .footer-contact.me-2{
            margin-right: 3.5rem !important;
    }
    
    #phone,#email{
        /*margin-right: 35px;*/
        color: black !important;
    }
    #phone:hover{
       cursor:pointer;
    }
    .headline{
        background-color:#ffffff !important;
    }


    .block{
        display:block;
    }
    
    .res-block{
        display:none;
    }
    
    @media (max-width:1360px){
        .header .menu > ul > li .sub-menu.mega-menu-column-4 {
            width: 140% !important;
        }
        
        .header .menu > ul > li.menu-item-has-children:hover .sub-menu {
            margin-left: 70px;
        }
    }
    
    @media only screen and (max-width:315px){
         .header .mobile-menu-trigger{
             position:absolute;
             right:0;
         }
         .cart{
             padding-right: 28px;
         }
         .logo-img {
            position: absolute;
            top: 19px;
        }
    }

    @media only screen and (max-width:280px){
        .payment-icon {
             
             left:54px !important;
         }
    }

    @media only screen and (min-width:540px){
         .payment-icon {
             
             left:176px !important;
         }
    }
    @media only screen and (max-width: 756px){}

    /*@media only screen and (min-width: 601px) and (max-width: 850px) {*/
    /*   #footer-links{*/
            
    /*        white-space:nowrap;*/
    /*        display:flex !important;*/
    /*        align-items: flex-start;*/
    /*   } */
    /*    .logo-img {*/
    /*   #footer-links{*/
    /*        display:block !important;*/
    /*        padding-left:85px;*/
    /*        white-space:nowrap;*/
    /*    }*/
    /*    #widt12 {*/
    /*        flex: 0 0 auto;*/
            /*width: 50.333333% !important;*/
            /*padding-left:36px;*/
    /*        text-align:center;*/
        
    /*    }*/
    /*    .footer-logo{*/
    /*        display:block;*/
    /*    }*/
        
    /*    .justify-content-end{*/
    /*        padding-right:65px;*/
    /*    }*/
        
    /*    .policy{*/
            /*padding-left:40px !important;*/
    /*        white-space: normal;*/
    /*    }*/
        
    /*    .need-help{*/
    /*        padding-right:25px !important;*/
    /*    }*/
      
    /*    .block{*/
    /*        display:none;*/
    /*    }*/
    /*    .res-block{*/
    /*        display:block;*/
    /*    }*/
    /*     .payment-icon {*/
    /*         line-height:2 !important;*/
    /*         position:relative;*/
    /*         left:101px;*/
    /*     }*/
         
    /*     .copyright{*/
             
    /*    white-space: nowrap;*/
    
    /*     }*/
    
    /*        width:9% !important;*/
    /*    }*/
      
        /*#widt12 {*/
        /*flex: 0 0 auto;*/
        /*width: 90.333333% !important;*/
        /*padding-left:36px;*/
        /*text-align:center;*/
        /*}*/
        /*.footer-logo{*/
        /*    display:block;*/
        /*}*/
        
        /*.justify-content-end{*/
        /*    padding-right:65px;*/
        /*}*/
        
    /*    .policy{*/
            /*padding-left:40px !important;*/
            /*padding-right: 100px !important;*/
    /*    }*/
        
    /*    .need-help{*/
            /*padding-right:50px !important;*/
            /*padding-right: 50px !important;*/
    /*    }*/
    /*    #company{*/
            /*padding-right: 150px !important;*/
    /*    }*/
    /*    #need-help{*/
            /*padding-left:50px !important;*/
    /*    }*/
        
    /*}*/

    .footer-logo{
        display:flex;
    }
    .title{
        font-size: 15px;
    }
    
    .sub-title{
        font-size:13px;
        text-transform:capitalize;
    }
    
    #head-line{
        display:block;
    }
    #head-line-responsive{
        display:none;
    }
    
    /*.footer {*/
    /*    display: flex;*/
    /*    flex-wrap: wrap;*/
    /*    justify-content: space-between;*/
    /*    align-items: center;*/
    /*}*/
    
    .footer-logo {
        flex: 1;
    }
    
    .footer-links {
        flex: 3;
        display: flex;
        justify-content: space-between;
        /*flex-direction:column;*/
    }
    
    .footer-contact {
        flex-grow: 1;
    }
    
    @media only screen and (min-width:276px) and (max-width: 768px) {
        .footer-links {
            /*flex-direction: column;*/
            align-items: flex-start;
            position: relative;
            right: 47px;
        }
        .footer{
            flex-direction:column;
        }
        
        .bold{
            white-space:nowrap;
        }
        /*.ftr-img{*/
        /*    display:flex;*/
        /*    justify-content:center;*/
        /*}*/
    }
    
    @media (max-width:275px)
    {
        #footer-links
        {
            display:block;
        }
        .footer
        {
            flex-direction:column;
        }
        #content-email 
        {
            font-size: 11px;
        }
        .content 
        {
            font-size: 5px !important;
        }
        
        .fa-user:before
        {
            content: "\f007";
            position: relative;
            right: 53px;
            bottom: 1px;
        }
    
        .fa-solid {
            font-size: 15px;
        }
        .action-menu .icon
        {
            font-size: 15px;
        }
         .cart {
            position: absolute !important;
            right: 9px !important;
            top: 11px !important;
        }
        .logo-img {
        position: absolute !important;
        left: 11px !important;
        top: 15px !important;
        max-width: 26% !important;
    }
        
    }
    
    @media(max-width:320px){
        .bold{
            white-space:normal !important;
        }
    }
      
    /*Nav*/
    /*@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');*/
    
    body{
    	line-height: 1.5;
    	/*font-family: 'Poppins', sans-serif;*/
    	font-weight: 400;
    	overflow-x: hidden;
    	background-color:#e1e7e0 !important;
    }
    *{
    	margin:0;
    	box-sizing: border-box;
    }
    :before,:after{
    	box-sizing: border-box;
    }
    .container{
    	max-width: 1200px;
    	margin:auto;
    }
    .row{
    	display: flex;
    	flex-wrap: wrap;
    }
    .v-center{
    	align-items: center;
    }
    ul{
    	list-style: none;
    	margin:0;
    	padding:0;
    }
    a{
    	text-decoration: none;
    }
    /* header */
    .plus-icon{
        visibility:hidden;
    }
    .form-inline{
        display:none;
    }
    .header{
    	display: block;
    	width: 100%;
    	position: relative;
    	z-index: 99;
    	 /*padding-bottom:15px; */
    	background-color:#616b37 !important;
    }
    .header .item-left{
    	flex:0 0 17%;
    }
    .header .logo a{
    	font-size: 30px;
    	color:#000000;
    	font-weight: 700;
    	text-decoration: none;
    }
    .header .item-center{
    	flex:0 0 66%;
    }
    .header .item-right{
    	flex:0 0 17%;
    	display: flex;
    	justify-content: flex-end;
    }
    .header .item-right a{ 
         text-decoration: none;
         font-size: 16px;
         color:#555555;
         display: inline-block;
         margin-left: 10px;
         transition: color 0.3s ease;
    }
    
    .header .item-right a:hover{
        background-color:#616b37 !important;
            color:white;
    }
    .header .menu > ul > li{
    	display: inline-block;
    	line-height: 50px;
    	margin-left: 25px;
    }
    .header .menu > ul > li > a{
    	font-size: 16px;
    	/*font-family:Poppins,sans-serif;*/
    	font-weight: 600;
    	color:#ffffff ;
    	position: relative;
    	text-transform: capitalize;
    	transition: color 0.3s ease;
    }
    .header .menu > ul > li .sub-menu{
    	position: absolute;
    	z-index: 500;
    	background-color:#ffffff;
    	box-shadow: -2px 2px 70px -25px rgba(0,0,0,0.3); 
    	padding: 20px 30px;
    	transition: all 0.5s ease;
    	margin-top:25px;
    	opacity:0;
    	visibility: hidden;
    }
    @media(min-width: 992px){
    .header .menu > ul > li.menu-item-has-children:hover .sub-menu{
    	margin-top: 0;
    	/*margin-left:0;*/
    	visibility: visible;
    	opacity: 1;
    	/*background-color:#616b37 !important;*/
    }
    }
    .header .menu > ul > li .sub-menu > ul > li{
    	line-height: 1;
    }
    .header .menu > ul > li .sub-menu > ul > li > a{
    	display: inline-block;
    	padding: 10px 0;
    	font-size: 15px;
    	color: #555555;
    	transition: color 0.3s ease;
    	text-decoration: none;
    	text-transform: capitalize;
    }
    .header .menu > ul > li .single-column-menu{
    	min-width: 280px;
    	max-width: 350px;
    }
    .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li{
       line-height: 1;
       display: block; 
    }
    .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a {
    	padding:10px 0;
    	display: inline-block;
    	font-size: 15px;
    	color:#555555;
    	transition: color 0.3s ease;
    }
    .header .menu > ul > li .sub-menu.mega-menu{ 
        left: 50%;
        transform: translateX(-50%);	
    }
    
    .header .menu > ul > li .sub-menu.mega-menu-column-4{
      /*max-width: 1100px;*/
      width: 105%; 	
      display: flex;
      flex-wrap: wrap;
      padding:20px 15px;
    }
    .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item{
      /*flex:0 0 20%;*/
      padding:0 15px;
    }
    .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item .title{
    	font-size: 16px;
    	color:#ea4636;
    	font-weight: 500;
    	line-height: 1;
    	padding:10px 0;
    }
    .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center .title{
    	text-align: center;
    }
    .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img{
    	max-width: 100%;
    	width: 100%;
    	vertical-align: middle;
    	margin-top: 10px;
    }
    .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a:hover,
    .header .menu > ul > li .sub-menu > ul > li > a:hover,
    .header .item-right a:hover,
    .header .menu > ul > li:hover > a{
    	/*color:#ea4636;*/
    }
    /* banner section */
    .banner-section{
      background-image: url('../img/banner.jpg');
      background-size: cover;
      background-position: center;
      height: 700px;
      width: 100%;
      display: block;
    }
    .mobile-menu-head,
    .mobile-menu-trigger{
    	display: none;
    }
    
    /*responsive*/

    @media only screen and (min-width: 1024px) {
       .search-bar {
            margin-left: -112px !important;
        }
        .item-center{
            position: relative !important;
            left: -64px !important;
        }
        
    }
    @media only screen and (min-width: 768px) and (max-width: 1023px) {
        .header .menu > ul > li > a {
            font-size: 15px;
            font-weight:600;
            color: #000000;
            position: relative !important;
            left: -30px !important;
            text-transform: capitalize;
            transition: color 0.3s ease;
        }
     .search-bar {
           
            margin-left: -229px !important;
        }
    }

    @media only screen and (max-width: 768px) {
        .search-bar {
            margin-bottom: 2px;
            padding: 7px;
            border-radius: 5px;
            border: none;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-left:-190px !important;
            font-size: 10px;
        }
        .logo-img{
            position:absolute;
            left:10px;
            max-width:11% !important;
        }
        
        #head-line{
        display:none;
        }
        #head-line-responsive{
            display:block;
            visibility: visible;
            background-color:#ffffff !important;
            color:black !important;
        }
        
      
        .header .menu > ul > li.menu-item-has-children:hover .sub-menu {
            margin-left: 0px;
        }
    }
    @media(max-width:600px){
     .logo-img{
            position:absolute;
            left:10px;
            top: 9px;
            max-width: 25% !important;
        }
        .form-inline{
            display:block;
        }
         .header{
    	 padding-bottom:15px; 
        }
        .plus-icon{
            visibility:visible !important;
            color:#616b37 !important;
            /*background:#616b37;*/
        }
    }
    @media(max-width:380px){
        .search-bar{
          margin-left: 0px !important;
        }
    }

    @media(max-width: 991px){
        .mobile-menu-trigger span {
        color: white;
    }

	.header-center{
		order:3;
		flex:0 0 100%;
	}
	.header .item-left,
	.header .item-right{
		flex:0 0 auto;
	}
	.v-center{
		justify-content: space-between;
	}
	.header .mobile-menu-trigger{
		display: flex;
		height: 30px;
		width: 30px;
		margin-left: 15px;
		cursor: pointer;
		align-items: center;
		justify-content: center;
	}
	.header .mobile-menu-trigger span{
		display: block;
		height: 2px;
		background-color: #ffffff;
		width: 24px;
		position: relative;
	}
	.header .mobile-menu-trigger span:before,
	.header .mobile-menu-trigger span:after{
		content: '';
		position: absolute;
		left:0;
		width: 100%;
		height: 100%;
		background-color: #ffffff;
	}
	.header .mobile-menu-trigger span:before{
		top:-6px;
	}
	.header .mobile-menu-trigger span:after{
		top:6px;
	}
	.header .item-right{
		align-items: center;
	}

	.header .menu{
		position: fixed;
		width: 250px;
		background-color:#ffffff;
		left:0;
		top:0;
		height: 100%;
		overflow: hidden;
		transform: translate(-100%);
		transition: all 0.5s ease;
		z-index: 1099;
	}
	.header .menu.active{
	   transform: translate(0%);	
	}
	.header .menu > ul > li{
		line-height: 1;
		margin:0;
		display: block;
	}
	.header .menu > ul > li > a{
	    color:#616b37 !important;;
		line-height: 50px;
		height: 50px;
		padding:0 50px 0 15px;
		display: block;
		border-bottom: 1px solid rgba(0,0,0,0.1);
	}
	.header .menu > ul > li > a i{
		position: absolute;
		height: 50px;
		width: 50px;
		top:0;
		right: 0;
		text-align: center;
		line-height: 50px;
		transform: rotate(-90deg);
	}
	.header .menu .mobile-menu-head{
		display: flex;
		height: 50px;
		border-bottom: 1px solid rgba(0,0,0,0.1);
		justify-content: space-between;
		align-items: center;
		position: relative;
		z-index: 501;
		position: sticky;
		background-color: #ffffff;
		top:0;
	}
	.header .menu .mobile-menu-head .go-back{
		height: 50px;
		width: 50px;
		border-right: 1px solid rgba(0,0,0,0.1);
		cursor: pointer;
		line-height: 50px;
		text-align: center;
		color:#000000;
		font-size: 16px;
		display: none;
	}
	.header .menu .mobile-menu-head.active .go-back{
		display: block;
	}
	.header .menu .mobile-menu-head .current-menu-title{
		font-size: 15px;
		font-weight: 500;
		color:#000000;
	}
	.header .menu .mobile-menu-head .mobile-menu-close{
	    height: 50px;
		width: 50px;
		border-left: 1px solid rgba(0,0,0,0.1);
		cursor: pointer;
		line-height: 50px;
		text-align: center;
		color:#000000;	
		font-size: 25px;
	}
	.header .menu .menu-main{
		height: 100%;
		overflow-x: hidden;
		overflow-y: auto;
	}
	.header .menu > ul > li .sub-menu.mega-menu,
	.header .menu > ul > li .sub-menu{
		visibility: visible;
		opacity: 1;
		position: absolute;
		box-shadow: none;
		margin:0;
		padding:15px;
		top:0;
		left:0;
		width: 100%;
		height: 100%;
		padding-top: 65px;
		max-width: none;
		min-width: auto;
		display: none;
		transform: translateX(0%);
		overflow-y: auto;
	}
    .header .menu > ul > li .sub-menu.active{
    	display: block;
    }

    @keyframes slideLeft{
    	0%{
    		opacity:0;
    		transform: translateX(100%);
    	}
    	100%{
    	    opacity:1;
    		transform: translateX(0%);	
    	}
    }
    @keyframes slideRight{
    	0%{
    		opacity:1;
    		transform: translateX(0%);
    	}
    	100%{
    	    opacity:0;
    		transform: translateX(100%);	
    	}
    }
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img{
		margin-top:0;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center .title{
		margin-bottom: 20px;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center:last-child .title{
		margin-bottom:0px;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item{
		flex: 0 0 100%;
        padding: 0px;
	}
	.header .menu > ul > li .sub-menu > ul > li > a,
	.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a{
		display: block;
	}
	.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul {
		margin-bottom: 15px;
	}
	.menu-overlay{
		position: fixed;
		background-color: rgba(0,0,0,0.5);
		left:0;
		top:0;
		width: 100%;
		height: 100%;
		z-index: 1098;
		visibility: hidden;
		opacity:0;
		transition: all 0.5s ease;
	}
	.menu-overlay.active{
	  visibility: visible;
	  opacity:1;	
	}
	
    /*a.nav-link{*/
    /*    color:black;*/
    /*    text-decoration:underline;*/
    /*}*/
    
    
}

    /*.a-nav{*/
    /*    margin-bottom:10px;*/
    /*}*/
    .a-nav:hover{
        /*opacity:1 !important;*/
        /*color:gray !important;*/
        /*border-bottom:5px solid #ffffff;*/
        /*background-color:#7d8035;*/
    }
    .user,.shopping{
        color:#ffffff;
    }
    .user:hover{
        color:black !important;
    }
    
    .shopping:hover{
        color:black !important;
    }
    .a-m{
    
        width: 0% !important;
    }
    .text-color{
        color:#616b37 !important;
        
    }
    
    .text-size{
        font-size:15px;
    }
    
    .user{
        position:relative;
        /*top:6px;*/
    }
    .logo{
        text-align:center;
    }
    .logo-img{
       
        width: 55% ;
    }
    #phone:hover{
        color:#616b37 !important;
    }
    #email:hover{
        color:#616b37 !important;
    }
    #cart-count{
       color :#ffffff !important;
        position:relative;
        top:-10px;
        /*left:-13px;*/
    }
    .main-row{
            background-color:#616b37 !important;
        }
    .cart{
        display: flex;
        align-content: stretch;
         position: relative;
        top: 2px;
       align-items: center;
      
    }

    @media (min-width: 768px) and (max-width: 990px) {
        .logo-img {
            width: 9% !important;
            position: absolute;
            left: 16px;
        }
        
        .main-row{
            padding:25px 0 !important;
           
        }
        .header .menu > ul > li > a {
        padding: 0 50px 0 50px;
        }
    }

    @media(max-width:600px){
         .v-center {
        padding-left: 5% !important;
        padding-right: 5% !important;
         padding-top: 5% !important;
          padding-bottom: 0% !important;
        }
        .search-form {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            /* background-clip: padding-box; */
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        
        .search-bar {
            position: relative;
            top: 40px;
            left: 55px;
            margin-right: -14px;
            visibility:hidden;
        }
        
        #content-phone{
            /*font-size:12px;*/
            padding-left:25px;
        }
        .content{
            font-size:12px;
        }
        
        #nav-color:hover{
            
        }
    }
    
    
    @media(max-width:375px){
        
    }
    .dropdown-item.active, .dropdown-item:active {
        text-decoration: none;
        background-color: #616b37;
        color:#ffffff;
    }
    
    .search_mob {
        display: none; 
    }

    @media (max-width: 768px) {
        .search_mob {
            display: block; 
        }
        #hover_text:hover{
            color:#616b37 !important;
            text-decoration:underline;
        }
    }
    @media (min-width: 768px) {
        #hover_text:hover{
            color:#fff !important;
            text-decoration:underline;
        }
    }
/*Nav*/
    </style>
    </head>

    <body>
        <div  id="head-line">
            <div class="bg-black headline">
                <div class="contact-block">
                    <div class="maindiv" style="display: flex;justify-content: space-between;">
                        <div class="textdiv">
                            <span id="phone" class="me-3">Cake Delivered Only For Nashik City</span>
                        </div>
                        <div class="infodiv">
                            <span id="phone" class="me-3"><i class="icon icon-phone pe-2" style="color:black;"></i><a href="tel:8208813941" class="text-decoration-none"style="color:black;">8208813941</a></span>
                            <span class="color-secondary me-3" id="email"><i class="icon icon-envelope-o pe-2" style="color:black;"></i><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxwCmwtRfxRXptHhlGgjFCZPntJLjpFgsjwXXKVJskPztLXrzTDCgkwQGKvkvKxlTqcKTg" class="text-decoration-none"style="color:black;">contact@yourcompany.com</a></span>
                            <span class="">
                                <a href="https://www.facebook.com/" ><i class="fa fa-facebook pe-1"style="color:black;"></i></a>
                                <a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram  "style="color:black;"></i></a>
                            </span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
         <div  id="head-line-responsive">
            <div class="row p-1">
                <div class="col-12" style="text-align:center; font-size:12px;">Cake Delivered Only For Nashik City</div>
                <div class="col-10 content " id="content-phone">
                    <span id="phone">
                        <i class="icon icon-phone me-2" style="color:black;"></i><a href="tel:8208813941" style="color:black;">8208813941</a>
                        <span class="color-secondary span-email" id="email"><i class="icon icon-envelope-o pe-2" style="color:black;"></i><a href="https://mail.google.com/mail" class="text-decoration-none"style="color:black;">contact@yourcompany.com</a></span>
                    </span>
                </div>
                <div class="col-2 content" id="content-email">
                    <span class="">
                        <!--<span class="color-secondary me-3" id="email"><i class="icon icon-envelope-o pe-2" style="color:black;"></i><a href="#" class="text-decoration-none"style="color:black;">contact@yourcompany.com</a></span>-->
                        <a href="https://www.facebook.com/" ><i class="fa fa-facebook pe-1" style="color:black;"></i></a>
                        <a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram " style="color:black;" ></i></a>
                    </span>
                </div>
            </div>
        </div>
        
        <!-- header start -->
        <header class="header">
         	<div class="container-fluid">
         		<div class="row v-center main-row">
         			<div class="header-item item-left">
         				<div class="logo"><a href="<?= base_url('/'); ?>"><img class="logo-img" src="<?= base_url('public/images/main-logo.jpg') ?>" alt="logo" /></a></div>
         			</div>
         			<!-- menu start here -->
         			<div class="header-item item-center">
         				<div class="menu-overlay"></div>
         				<nav class="menu">
         					<div class="mobile-menu-head">
         						<div class="go-back"><i class="fa fa-angle-left"></i></div>
         						<div class="current-menu-title"></div>
         						<div class="mobile-menu-close">&times;</div>
         					</div>
         					<ul class="menu-main ">
         						<li class="nav-item text-hover active"><a href="<?= base_url('/'); ?>" class="nav-link a-nav" data-effect="Home">Home</a></li>
         						<li class="menu-item-has-children">
         							<a href="#"   class="nav-link a-nav">Cake <i class="fas fa-plus plus-icon" style="color:white;"></i></a>
         							<div class="sub-menu mega-menu mega-menu-column-4">
                                 
                                        <?php foreach($category as $cat) { ?>
                                            <div class="list-item d-cake">
                                                 <a class="nav-link" style="padding:0px !important" href="<?php echo base_url('cakeprodlist') ?>/<?php echo $cat['id']; ?>">
                                                    <h6 class="text-color text-size"><?php echo $cat['category_name']; ?></h6>
                                                </a>
                                                <!--<ul>-->
                                                <!--    < ?php foreach ($hproduct as $product_item): ?>-->
                                                <!--        < ?php if ($product_item['category_id'] == $cat['id']): ?>-->
                                                <!--            < ?php if ($cat['id'] != 4 || (!is_null($product_item['product_variant']) && $product_item['product_variant'] !== '')): ?>-->
                                                <!--                <li style="line-height: 0 !important;">-->
                                                <!--                    <a class="nav-link" style="line-height: 0; padding:0; !important" href="< ?php echo base_url('viewdetails') . '/' . $product_item['id']; ?>">-->
                                                <!--                        <p class="my-auto" id="nav-color" style="text-transform: capitalize; white-space:nowrap">< ?php echo $product_item['product_name']; ?></p>-->
                                                <!--                    </a>-->
                                                <!--                </li>-->
                                                <!--            < ?php endif; ?>-->
                                                <!--        < ?php endif; ?>-->
                                                <!--    < ?php endforeach; ?>-->
                                                <!--</ul>-->
                                                <ul>
                                                    <?php foreach ($hproduct as $product_item): ?>
                                                        <?php if ($product_item['category_id'] == $cat['id']): ?>
                                                            <?php if ($cat['id'] != 4 || (!is_null($product_item['sub_variant']) && $product_item['sub_variant'] !== '1')): ?>
                                                                <li style="line-height: 0 !important;">
                                                                    <a class="nav-link" style="line-height: 0; padding:0; !important" href="<?php echo base_url('viewdetails') . '/' . $product_item['id']; ?>">
                                                                        <?php
                                                                            $product_name = $product_item['product_name'];
                                                                            $truncated_name = $product_name;
                                                                            if (strlen($product_name) > 25) {
                                                                                $truncated_name = substr($product_name, 0, 25) . '...';
                                                                            }
                                                                        ?>
                                                                        <p class="my-auto" id="nav-color" style="text-transform: capitalize; white-space:nowrap">
                                                                            <?php echo $truncated_name; ?>
                                                                            <?php if (strlen($product_name) > 25): ?>
                                                                                <span class="show-more" style="color: blue; cursor: pointer;" onclick="showMore(this)"></span>
                                                                                <span class="full-text" style="display: none;"><?php echo $product_name; ?></span>
                                                                            <?php endif; ?>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>

                                            </div>
                                        <?php } ?>

                                    </div>
         						</li>
         						<!--<li class="nav-item dropdown"><a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link">bouquet</a></li>-->
                                <li class="nav-item text-hover"><a href="<?= base_url('about'); ?>" class="nav-link a-nav" data-effect="About Us">About us</a></li>
                                <li class="nav-item text-hover"><a href="<?= base_url('contact'); ?>" class="nav-link a-nav" data-effect="Contact">Contact us</a></li>
         						<!--</li>-->
         					</ul>
         				</nav>
         			</div>
         			<?php 
         			if(empty($search)){
         			    $search = "";
         			}
         			?>
         			<div class="action-menu a-m">
                        <input type="text" name="search_data" id="input-bar" class="search-bar" VALUE="<?= $search ?>" placeholder="Search" onkeydown="return enterKeyPressed(event)"/>
                        <div class="dropdown">
                            <a class="nav-link user"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user user"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if (__get__session("id")): ?>
                                    <li><a class="dropdown-item text-center" href="<?= base_url('user_profile'); ?>">Profile</a></li>
                                    <li><a class="dropdown-item text-center" href="<?= base_url('order_orders'); ?>">My Orders</a></li>
                                    <li><a class="dropdown-item text-center" href="<?= base_url('user_logout'); ?>">Logout</a></li>
                                <?php else: ?>
                                    <li><a class="dropdown-item text-center" href="<?= base_url('user_login'); ?>">Login</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <a href="<?= base_url('addtocart'); ?>" class="nav-link cart">
                            <div>
                                <i class="icon icon-shopping-cart shopping"></i>
                            </div>
                            
                            <div>
                                <?php 
                                if (!empty($_SESSION["product"])) {
                                    $count = count($_SESSION["product"]);
                                } else {
                                    $count = "0";
                                }
                                ?>
                                <span id="cart-count"><?= $count ?></span>
                            </div>

                        </a>
                        <!-- mobile menu trigger -->
                 		<div class="mobile-menu-trigger" ><span style="color:#ffffff"></span></div>
                    </div>
         		</div>
         		<input type="text" name="search_data" id="search_data_mob" class="search_mob search-form mr-sm-2-bar" value="<?= $search ?>" placeholder="Search" />
            </div>
        </header>
        <!-- header end -->
        <?= $this->renderSection('content') ?>
        <footer>
            <div class="footer ftr">
                <!--<div class="ftr-img">-->
                    <div class="footer-logo col-4">
                        <a href="<?= base_url('/'); ?>">
                            <img src="<?= base_url('public/images/main-logo.jpg') ?>" alt="logo" />
                        </a>
                    </div>
                <!--</div>-->
                <div class="footer-links  col-8" id="footer-links">
                    <div class="col-1"></div>
                    <div class="footer-contact me-2 col-3 ">
                        <ul class="my-2 " id="company">
                            <li class="mb-2 title" style="color: #fff !important;font-weight:600">Company</li>
                            <li><a href="<?= base_url('about'); ?>" class="sub-title">About Us</a></li>
                            <li><a class="sub-title">Our Services</a></li>
                            <li><a class="sub-title">Our Team</a></li>
                            <li><a  class="sub-title">Careers</a></li>
                            <li><a  class="sub-title">Testimonials</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-contact me-2 col-3 policy">
                        <ul class="my-2">
                            <li class="mb-2 title" style="color: #fff !important;font-weight:600">Policy Info</li>
                            <li><a  class="sub-title" href="<?= base_url('cancellation_policy') ?>">Cancellations and refund policy</a></li>
                            <li><a  class="sub-title" href="<?= base_url('payment_options') ?>">Payment Options</a></li>
                            <li><a  class="sub-title" href="<?= base_url('data_security') ?>">Data Security</a></li>
                            <li><a  class="t&c sub-title" href="<?= base_url('terms_condition') ?>">Terms and Conditions</a></li>
                            
                        </ul>
                    </div>
                    <div class="footer-contact me-2 col-2 need-help">
                        <ul class="my-2 " id="need-help">
                             <li class="mb-2 title" style="color: #fff !important;font-weight:600">Need Help</li>
                            <li><a href="<?= base_url('contact'); ?>"  class="sub-title">Contact us</a></li>
                            <li><a class="sub-title">FAQs</a></li>
                        </ul>
                    </div>
                    <div col-3></div>
                </div>
            </div>
            
            <div class="line-footer block">
                <div class="row g-0 p-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-4 d-flex justify-content-center align-items-center  widt12" id="widt12"> <div class="copyright">©2024 Cake. All rights reserved.</div></div>
                    </div>
                </div>
            </div>
        <!--footer-line HTML for responsivness start-->
            <div class="line-footer res-block">
                <div class="row g-0 p-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-4 d-flex justify-content-center align-items-center  widt12" id="widt12"> <div class="copyright">©2024 Cake. All rights reserved.</div></div>
                    </div>
                </div>
            </div>
        <!--footer-line HTML for responsivness end-->
        </footer>

        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
        <!--<script src="<= base_url('public/js/jquery.min.js') ?>"></script>-->
        <script type="text/javascript" src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('public/js/plugins.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('public/js/script.js') ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- 06/06/2024 -->
        <script>
            var id_price = '';  
            var category_id = <?= json_encode($product[0]->category_id ?? null); ?>;
            // var autoSelectIds = [4, 31]; 
        
            function last_id_product(id) {
                document.querySelectorAll('.weightContainerBox').forEach(function(option) {
                    option.style.backgroundColor = '#fff'; 
                     option.style.color = '#000'; 
                });
                var selectedOption = document.querySelector(`div[onclick*='${id}']`);
                if (selectedOption) {
                    selectedOption.style.backgroundColor = '#616b37';  
                    selectedOption.style.color = '#fff';  
                    id_price = id;
                }
            }
            
            function flower_varient_id(id){
                document.querySelectorAll('.flower_varient').forEach(function(option) {
                    option.style.backgroundColor = '#fff'; 
                     option.style.color = '#000'; 
                });
                var selectedOption = document.querySelector(`div[onclick*='${id}']`);
                if (selectedOption) {
                    selectedOption.style.backgroundColor = '#616b37';  
                    selectedOption.style.color = '#fff';  
                    id_price = id;
                }
            }
            
            
            function enterKeyPressed(event) {
                if (event.keyCode === 13 || event.keyCode === 124) {
                    search();
                }
            }
        
            $(".btn").on("click", function() {
              search();
            });
            
            function search() {
              var search_data = $("#input-bar").val();
            // console.log(search_data);return;
              if (search_data !== "") {
                window.location = "<?= base_url('search_data_list/') ?>" + search_data ;
              }
            }
        
            document.getElementById('search_data_mob').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default form submission

        var search_mob_data = document.getElementById('search_data_mob').value;

        if (search_mob_data !== "") {
            window.location = "<?= base_url('search_data_list/') ?>" + search_mob_data;
        }
    }
});

            
            function validateSelection() {
                var selected = id_price !== '';  
                if (!selected) { 
                    alert("Please choose an option before adding to cart"); 
                }
                return selected; 
                // return selected || autoSelectIds.includes(category_id); 
            }
    
            function addToCart(product_id) {
                var message = document.getElementById("message").value; 
                if (!validateSelection()) {
                    return false;  
                }
    
                $.ajax({
                    url: '<?= base_url('addToCartProcess') ?>',
                    type: 'POST',
                    data: {
                        id: id_price,
                        product_id: product_id,
                        message: message 
                    },
                    success: function(response) {
                        console.log(response);
                        $('#cart-count').text(response.count);
                        // window.location.href = '< ?= base_url('addtocart') ?>';
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
                return false; 
            }
            
        </script>
        
        <script>
            function stopPropagation(event) {
                event.stopPropagation();
            }
            
            function hidePlus(plus){
               var plusbtn= document.getElementById("plusbtn" + plus);
               var minusbtn= document.getElementById("minusbtn" + plus);
               var sumbtn=document.getElementById("sum" + plus);
                plusbtn.style.display="none";
                minusbtn.style.display="block";
                sumbtn.style.display="block";
            }
            
            function hideMinus(minus){
                var plusbtn= document.getElementById("plusbtn" + minus);
               var minusbtn= document.getElementById("minusbtn" + minus);
               var sumbtn=document.getElementById("sum" + minus);
                minusbtn.style.display="none";
                plusbtn.style.display="block";
                sumbtn.style.display="none";
            }
        </script>
        <!-- Nilesh -->
        <script>
            const menu = document.querySelector(".menu");
            const menuMain = menu.querySelector(".menu-main");
            const goBack = menu.querySelector(".go-back");
            const menuTrigger = document.querySelector(".mobile-menu-trigger");
            const closeMenu = menu.querySelector(".mobile-menu-close");
            let subMenu;
        
            menuMain.addEventListener("click", (e) =>{
             	if(!menu.classList.contains("active")){
             		return;
             	}
                if(e.target.closest(".menu-item-has-children")){
               	    const hasChildren = e.target.closest(".menu-item-has-children");
                    showSubMenu(hasChildren);
                }
            });
            goBack.addEventListener("click",() =>{
         	    hideSubMenu();
            })
            menuTrigger.addEventListener("click",() =>{
         	    toggleMenu();
            })
            closeMenu.addEventListener("click",() =>{
         	    toggleMenu();
            })
            document.querySelector(".menu-overlay").addEventListener("click",() =>{
         	    toggleMenu();
            })
            
            function toggleMenu(){
             	menu.classList.toggle("active");
             	document.querySelector(".menu-overlay").classList.toggle("active");
            }
            
            function showSubMenu(hasChildren){
                subMenu = hasChildren.querySelector(".sub-menu");
                subMenu.classList.add("active");
                subMenu.style.animation = "slideLeft 0.5s ease forwards";
                const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
                menu.querySelector(".current-menu-title").innerHTML=menuTitle;
                menu.querySelector(".mobile-menu-head").classList.add("active");
            }
        
            function  hideSubMenu(){  
                subMenu.style.animation = "slideRight 0.5s ease forwards";
                setTimeout(() =>{
                   subMenu.classList.remove("active");	
                },300); 
                menu.querySelector(".current-menu-title").innerHTML="";
                menu.querySelector(".mobile-menu-head").classList.re
            window.onresize = function(){move("active");
            }
         
             	if(this.innerWidth >991){
             		if(menu.classList.contains("active")){
             			toggleMenu();
             		}
             	}
            }
        </script>
       


        
        <?= $this->renderSection('custom_script') ?>
    </body>
</html>
