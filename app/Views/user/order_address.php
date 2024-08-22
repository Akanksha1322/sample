<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    :root {
        --surface-color: #fff;
        --curve: 40;
    }

    * {
        box-sizing: border-box;
    }
    body{
        font-family: Roboto, sans-serif;
        background-color:#f0f0ed;
    }

    /* Styles for layout */
    
    .footer {
        background-color: #9e9508 !important;
        color: yellow;
        justify-content: space-around;
        display: flex;
        padding: 20px;
        margin-top: 10px;
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


/*my css start*/
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/*body{*/
/*    background-color: rgb(78, 172, 181);*/
/*    padding: 0 10px ;*/
/*}*/

@media only screen and (max-width: 768px) {
    .main-block{
        display:none !important;

    }
    .responsive-block{
        display:block !important;
       
    }
    .responsive-block{
    /*max-width: 500px;*/
    /*width: 100%;*/
    background-color: white;
    margin: 20px auto;
    padding: 30px;
    box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
    /*display: flex;*/
    flex-direction: column;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    }
    
    .responsive-block .title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #9e9508 !important;
        text-transform: uppercase;
        text-align: center;
    }
    
    .responsive-block .form{
        width: 100%;
    }
    
    .responsive-block .form .input_field{
        margin-bottom: 15px;
        /*display: flex;*/
        align-items: center;
    }
    
    .responsive-block .form .input_field label{
        width: 200px;
        margin-right: 10px;
        font-size: 14px;
    }
    
    .responsive-block .form .input_field .input,
    .responsive-block .form .input_field .textarea,
    .responsive-block .form .input_field .selectbox{
        width:100%;
        outline: none;
        border:1px solid #9e9508;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 5px;
        transition: all 0.5s ease;
    }
    
    .responsive-block .form .input_field .textarea{
        resize: none;
        height: 150px;
    }
    
    .responsive-block .form .input_field .selectbox{
        position: relative;
        width: 100%;
        -webkit-appearance: none;
        appearance: none;
    }
    
    /* .main-block .form .input_field .selectbox:before{
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        border: 1 solid black;
    } */
    
    .responsive-block .form .input_field p{
        font-size: 14px;
        color: #757575;
    }
    
    .responsive-block .form .input_field .check{
        width: 15px;
        height: 15px;
        position: relative;
       display: block;
       cursor: pointer;
    }
    
    .btn{
        width: 100%;
        padding: 8px 10px;
        font-size: 15px;
        border: none;
        background-color:#9e9508 !important;
        color: white;
        cursor: pointer;
    }
    
    /*.btn:hover{*/
    /*    background-color: rgb(44, 106, 102);*/
    /*}*/
    
    .responsive-block .form .input_field :last-child{
        margin-bottom: 0;
    }
    
    .responsive-block .time{
        width: 72%;
        border: 1px solid #9e9508;
        padding: 8px 10px;
        border-radius: 5px;
         transition: all 0.5s ease;
    }
    
    .textarea{
        margin-left:38px !important;
        outline: none;
        border:1px solid #9e9508;
        /*font-size: 15px;*/
        /*padding: 8px 10px;*/
        border-radius: 5px;
        transition: all 0.5s ease;
    }
}

@media(max-width:280px){
     .textarea{
        margin-left:-14px !important;
        outline: none;
        border:1px solid #9e9508;
        /*font-size: 15px;*/
        /*padding: 8px 10px;*/
        border-radius: 5px;
        transition: all 0.5s ease;
    }
}
.main-block{
    /*max-width: 500px;*/
    /*width: 100%;*/
    background-color: white;
    margin: 20px auto;
    padding: 30px;
    box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
    /*display: flex;*/
    flex-direction: column;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

.main-block .title{
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #9e9508 !important;
    text-transform: uppercase;
    text-align: center;
}

.main-block .form{
    width: 100%;
}

.main-block .form .input_field{
    margin-bottom: 15px;
    /*display: flex;*/
    align-items: center;
}

.main-block .form .input_field label{
    width: 200px;
    margin-right: 10px;
    font-size: 14px;
}

.main-block .form .input_field .input,
.main-block .form .input_field .textarea,
.main-block .form .input_field .selectbox{
    width:100%;
    outline: none;
    border:1px solid #9e9508;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 5px;
    transition: all 0.5s ease;
}

.main-block .form .input_field .textarea{
    resize: none;
    height: 150px;
}

.main-block .form .input_field .selectbox{
    position: relative;
    width: 100%;
    -webkit-appearance: none;
    appearance: none;
}

/* .main-block .form .input_field .selectbox:before{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    border: 1 solid black;
} */

.main-block .form .input_field p{
    font-size: 14px;
    color: #757575;
}

.main-block .form .input_field .check{
    width: 15px;
    height: 15px;
    position: relative;
   display: block;
   cursor: pointer;
}

.btn{
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: none;
    background-color:#9e9508 !important;
    color: white;
    cursor: pointer;
}

/*.btn:hover{*/
/*    background-color: rgb(44, 106, 102);*/
/*}*/

.main-block .form .input_field :last-child{
    margin-bottom: 0;
}

.time{
    width: 72%;
    border: 1px solid #9e9508;
    padding: 8px 10px;
    border-radius: 5px;
     transition: all 0.5s ease;
}

.textarea{
    margin-left:-27px;
}

.main-block{
    display:block;
}

#responsive-block{
    display:none;
}


/*my css end*/

</style>
<section>    
<!--<div class="breadcrumbs" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU'); background-size: cover; background-position: center; min-height: 250px;">-->
        <div class="breadcrumbs" style="background-image: url(<?= base_url('public/images/Untitled design (1).png'); ?>); background-size: cover; background-position: center; min-height: 250px;">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-3">
                <div class="breadcume_banner">
                        <div class="container_course my-5">
                            <div class=" breadcume_content" style="text-align:center;">
                                <h4 style="color:white !important;">Add Address</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Add Address</span>
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
<div class="container main-block">
    <form action="<?= base_url('addshippingaddress'); ?>" method="POST" enctype="multipart/form-data">
        <div ><h4 class="title">Address Details</h4></div>
            <div class="row form">
                <div class="col-6">
                    <div class="input_field">
                        <label for="fname">First Name</label>
                        <input type="text" class="input" id="fname" name="fname" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input_field">
                        <label for="lname">Last Name</label>
                        <input type="text" class="input" id="lname" name="lname" required>
                    </div>
                </div>
            </div>
            <div class="row form">
                <div class="col-6">
                    <div class="input_field">
                        <label for="area">Area</label>
                        <input type="text" class="input" id="area" name="area" required>
                    </div>
                </div>
                 <div class="col-6">
                    <div class="input_field">
                        <label for="landmark">Landmark</label>
                        <input type="text" class="input" id="landmark" name="landmark" required>
                    </div>
                </div>
                
            </div>
            <div class="row form">
               <div class="col-6">
                    <div class="input_field">
                        <label for="city"> City</label>
                            <!--<select name="gender" id="" class="selectbox" required="">-->
                            <!--    <option value="Not Selected">select</option>-->
                            <!--    <option value="Male">Nashik</option>-->
                            <!--    <option value="Female">Pune</option>-->
                            <!--    <option value="Female">Mumbai</option>-->
                            <!--</select>-->
                        <input type="text" class="input" id="city" name="city" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input_field">
                        <label for="pincode">Pin Code</label>
                        <input type="text" class="input" id="pincode" name="pincode" required>
                    </div>
                </div>
            </div>
            <div class="row form">
                <div class="col-6">
                    <div class="input_field">
                        <label for="fname">phone</label>
                        <input type="text" class="input" id="contact" name="contact" required>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="input_field">
                        <label for="address">Delivery Address</label>
                        <!--<textarea type="text" class="input" id="address" name="address" rows="4" cols="50" required></textarea>-->
                        <input type="text" class="input" id="address" name="address" required>
                    </div>
                </div>
               
            </div>
            <!--<div class="row form">-->
            <!--    <div class="col-6">-->
            <!--        <div class="input_field">-->
            <!--            <label for="extime" class="label" id="from">Expected Time</label>-->
            <!--            <input type="time" class="input time" id="extime" name="extime" required>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>       -->

            <div class="row form">
                
            </div>    
            <div class="input_field" style="justify-content:end;">
                <!--<a href="javascript:void(0)" onclick="addAddress()" class="btn w-10">Add & Continue</a>-->
                <!--<input type="submit" value="Add & Continue" class="btn m-auto w-50">-->
                <button type="submit" name="submit" class="w-50 mb-3 p-3" style="background-color: #9e9508 !important;">Submit</button>
            </div>
            </form>
        </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!--<script>-->
<!--    function addAddress(){-->
<!--        const fname = $('#fname').val();-->
<!--        const lname = $('#lname').val();-->
<!--        const area = $('#area').val();-->
<!--        const city = $('#city').val();-->
<!--        const pincode = $('#pincode').val();-->
<!--        const exdate = $('#exdate').val();-->
<!--        const phone = $('#contact').val();-->
<!--        const landmark = $('#landmark').val();-->
<!--        const extime = $('#extime').val();-->
<!--        const address = $('#address').val();-->
<!--        $.ajax({-->
<!--            url: '< ?= base_url('addshippingaddress'); ?>', -->
<!--            type: "POST",-->
<!--            data: {-->
<!--                fname: fname,lname: lname,area: area,city: city,pincode: pincode,-->
<!--                exdate: exdate,phone: phone,landmark: landmark,extime: extime,address: address-->
<!--            },-->
<!--            success: function(response) {-->
                <!--// alert(response); -->
<!--                if (response == 1) {-->
<!--                    $("#shippingAddressDiv").append(-->
<!--                        '<label class="mx-3"><input type="radio"><div style="margin: 0;" class="mx-5">Name: ' + fname + ' ' + lname + '</div><br><div style="margin: 0;" class="mx-5">Address: ' + address + '</div><br><div style="margin: 0;" class="mx-5">Landmark: ' + area + ' ' + landmark + ' ' + city +  ' ' + pincode + '</div><br><div style="margin: 0;" class="mx-5">Phone no: ' + phone + '</div><br></label><br>'-->
<!--                    );-->
<!--                }                             -->
<!--            },-->
<!--            error: function(xhr, status, error) {-->
<!--                console.error(error);-->
<!--            }-->
<!--        });-->
<!--    }-->
<!--</script>-->
<?= $this->endSection() ?>
