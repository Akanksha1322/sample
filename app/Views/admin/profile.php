<!DOCTYPE html>
<html>
<head>
	<title>Birthday n Box</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="html,css,template,bootstrap">
	<meta name="description" content="Birthday n Box">
	<link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="public/css/vendor.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="public/css/user_profile.css">
	
	<!--FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /
</head>

<body>
    <!--user profile-->
    <div class="main-content">
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <!--<div class="col-xl-4 col-sm-8  order-xl-2 mb-5 mb-xl-0">-->
                    <!--<div class="card card-profile shadow">-->
                    <!--    <div class="row justify-content-center">-->
                    <!--        <div class="col-lg-3 order-lg-2">-->
                    <!--            <div class="card-profile-image">-->
                    <!--                <a href="#"><img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle" /></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="card-body pt-0 pt-md-4">-->
                    <!--        <div class="text-center">-->
                    <!--            <h3 class="pt-3">< ?= $userdetails[0]->first_name . ' ' . $userdetails[0]->last_name ?></h3>-->
                            
                    <!--             <div class="avatar-upload">-->
                    <!--                <div class="element">-->
                    <!--                    <i class="fa fa-camera pe-2"></i><span class="name">Change Image</span>-->
                    <!--                    <input type="file" name="" id="file" style="display:none;">-->
                    <!--                </div>-->
                    <!--             </div>-->
                                
                                
                    <!--            <div class="h5 font-weight-300"><i class="ni location_pin mr-2"></i><h3>< ?= $userdetails[0]->city?></h3></div>-->
                    <!--                <hr class="my-4" /><a href="< ?= base_url('admin-logout'); ?>">Logout</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow " id="profileForm">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-primary px-4 py-2" style="background-color: #616b37 !important"><a href="<?= base_url('admin-dashboard'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right"><strong class="card-title">My Profile</strong></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="<?= base_url('updateadmin/' . $userdetails[0]->id); ?>" method="POST" enctype="multipart/form-data">
                                    <h6 class="heading-small text-muted mb-4">User information</h6>
                                    <div class="pl-lg-4">
                                        <!--<div class="row"></div>-->
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
                                                    <input type="text" id="contact" name="contact" class="form-control form-control-alternative" placeholder="Mobile Number" value="<?= $userdetails[0]->contact; ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email address</label>
                                                    <input type="email" id="email" name="email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?= $userdetails[0]->email; ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                
                                            </div>
                                            
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-birthdate">Birthdate</label>
                                                    <input type="date" id="birthdate" name="birthdate" class="form-control form-control-alternative" placeholder="Birthdate" value="<?= $userdetails[0]->birthdate; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                        <!-- Address -->
                                     <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                        <div class="pl-lg-4">
                                            <div class="row">
                                                <!-- Address -->
                                                <div class="col-md-12">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label" for="input-address">Address</label>
                                                        <textarea type="text" id="address" name="address" rows="4" placeholder="Home Address" class="form-control form-control-alternative"><?= $userdetails[0]->address; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Postal Code -->
                                                <div class="col-lg-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-postal-code">Pin code</label>
                                                        <input type="text" id="pincode" name="pincode" class="form-control form-control-alternative" placeholder="Postal code" value="<?= $userdetails[0]->pincode; ?>"/>
                                                    </div>
                                                </div>
                                                <!-- Area -->
                                                <div class="col-lg-4 mt-2">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label" for="input-city">Area</label>
                                                        <input type="text" id="area" name="area" class="form-control form-control-alternative" placeholder="Area" value="<?= $userdetails[0]->area; ?>"/>
                                                    </div>
                                                </div>
                                                <!-- Country -->
                                                <div class="col-lg-4 mt-2">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label" for="input-country">City</label>
                                                        <input type="text" id="city" name="city" class="form-control form-control-alternative" placeholder="City" value="<?= $userdetails[0]->city; ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Description -->
                                        <hr class="my-4" />
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-center" style="background-color: #616b37 !important">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
    
    <script src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
    
    <script>
    $("i").click(function () {
  $("input[type='file']").trigger('click');
});

$('input[type="file"]').on('change', function() {
  var val = $(this).val();
  $(this).siblings('span').text(val);
})
</script>
</body>
</html>