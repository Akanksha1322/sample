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

   
    .footer {
        /*background-color: #9e9508 !important;*/
        /*color: yellow;*/
        justify-content: space-around;
        display: flex;
        padding: 20px;
        margin-top: 10px;
    }
    .footer-logo {
        margin-top: 37px;
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
       color:black !important; 
    }
    
    .fluid-container{
        width:95%;
    }
    .avatar-edit{
        background-color:#9e9508 !important;
        display:flex;
        
    }
    
    .element {
      display: inline-flex;
      align-items: center;
    }
    i.fa-camera {
      margin: 10px;
      cursor: pointer;
      font-size: 30px;
      color:#616b37 !important;
    }
    i:hover {
      opacity: 0.6;
    }
    .myname{
        font-size:25px;   
    }
    .title{
        text-transform:capitalize;
        color:#616b37 !important;
    }
    #file {
      display: none;
    }
    .avatar-upload{
        display: flex;
        justify-content: center;
    }  
    
    .btn-primary {
        color: #fff;
        background-color: #616b37 !important;
         border-color: #616b37 !important;
    }
    /*.btn-primary:hover{*/
    /*     background-color: #c2b709 !important;*/
    /*}*/

    @media (min-width: 360px) and (max-width: 600px)
    {
        .wid {
            width: 65% !important;
        }
    }
    
    b{
        color:black !important;
    }
    
    label{
        text-transform:capitalize;
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
                                <h4 style="color:white !important;">Profile</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Profile</span>
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


<section>
    <div class="container-fluid fluid-container">
        <div class="row my-4">
    <div class="col-md-3 col-sm-6 bg-light">
        <form action="<?= base_url('updateuserprof/'.$userdetails[0]->user_id) ?>" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="user-area dropdown" style="margin-top:5%">
                    <img class="user-avatar rounded-circle mx-auto d-block" src="<?= $userdetails[0]->profile_img ? base_url('public/admin/assets/uploads/user/' . $userdetails[0]->profile_img) : 'https://techfluxsolutions.com/cake/public/admin/images/admin.jpg' ?>" 
                    alt="User Avatar" id="output" style="max-width: 100%; width: 100px; height: 100px;">
                </div>
            </div>
            <div class="avatar-upload">
                <div class="element">
                    <i class="fa fa-camera" id="camera-icon"></i><span class="name">No File Selected</span>
                    <input type="file" name="profile_img" id="file" onchange="loadImage(event, 'output')" />
                </div>
            </div>

            <div class="card-body pt-0">
                <div class="text-center">
                    <h5 class="pt-3 title"><?= $userdetails[0]->first_name . ' ' . $userdetails[0]->last_name ?></h5>
                    <hr class="my-4" />
                    <button type="submit" class="btn btn-primary mx-auto">Update Image</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-9 bg-white">                
        <div class="row mt-3">
            <div class="col-md-12"><div class="bg-white border-0"><h1 class="mb-0 text-center title myname">My account</h1></div></div>
            <div class="col-md-12">
                <div class="card-body">
                    <?php if(session()->has('errors')): ?>
                        <div class="alert alert-danger">
                            <ul><?php foreach(session('errors') as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul>
                        </div>
                    <?php endif; ?>
                    <form id="updateUserForm" action="<?= base_url('updateuser/' . $userdetails[0]->user_id); ?>" method="POST" enctype="multipart/form-data">
                        <h6 class="heading-small text-muted mb-4">User Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">First name</label>
                                        <input type="text" id="first_name" name="first_name" class="form-control form-control-alternative" placeholder="First name" value="<?= $userdetails[0]->first_name; ?>"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Last name</label>
                                        <input type="text" id="last_name" name="last_name" class="form-control form-control-alternative" placeholder="Last name" value="<?= $userdetails[0]->last_name; ?>"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-mobile">Mobile Number</label>
                                        <input type="text" id="contact" name="contact" class="form-control form-control-alternative" placeholder="Mobile Number" value="<?= $userdetails[0]->contact; ?>" disabled/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?= $userdetails[0]->email; ?>" disabled/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-birthdate">Birthdate <span style="color:red">*</span></label>
                                        <input type="date" id="birthdate" name="birthdate" class="form-control form-control-alternative" placeholder="Birthdate" value="<?= $userdetails[0]->birthdate; ?>" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">Contact Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <textarea type="text" id="address" name="address" rows="4" placeholder="Home Address" class="form-control form-control-alternative"><?= $userdetails[0]->address; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mb-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-postal-code">Pin code</label>
                                        <input type="text" id="pincode" name="pincode" class="form-control form-control-alternative" placeholder="Postal code" value="<?= $userdetails[0]->pincode; ?>" minlength="6" maxlength="6"/ >
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-city">Area</label>
                                        <input type="text" id="area" name="area" class="form-control form-control-alternative" placeholder="Area" value="<?= $userdetails[0]->area; ?>"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-country">City</label>
                                        <input type="text" id="city" name="city" class="form-control form-control-alternative" placeholder="City" value="<?= $userdetails[0]->city; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 " />
                        <div class="text-center"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var loadImage = function(event, element) {
        var output = document.getElementById(element);
        if (event.target.files && event.target.files[0]) {
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src); // free memory
            }
        }
    };

    // Prevent the Enter key from triggering the file input dialog again
    $('#file').on('keypress keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
        }
    });

    $("#camera-icon").click(function () {
        $("#file").trigger('click');
    });

    $('#file').on('change', function(event) {
        loadImage(event, 'output');
        var val = $(this).val().replace(/C:\\fakepath\\/i, '');
        $(this).siblings('span').text(val);
    });
</script>


<?= $this->endSection() ?>
