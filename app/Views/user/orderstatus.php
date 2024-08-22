<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<style> /* This opening <style> tag shouldn't be here if you're embedding CSS in an HTML file. */
.card {
    position: relative;
    display: block;
    height: auto;
    border-radius: 1px !important;
    overflow: hidden;
    text-decoration: none;
}
img.border.rounded.me-3 {
    width: 84px;
    height: 84px;
}

.quantity1 {
    display: flex;
    
}
[type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled), button:not(:disabled),button {
    height: 35px;
    /*cursor: pointer;*/
    margin-right: 16px;
    margin-top: 7px;
    border-radius: 37px;
    padding-bottom: 8px;
    font-size: 9px !important;
    border-radius: 5px;
    margin: 0 10px;
    transition: background-color 0.3s;
}

button { /* This seems like an incomplete rule */
}

/* This rule is likely incorrect, 'd-flex' is not a valid CSS selector */
product-details button:hover {
    background-color: #45a049;
}

/*.product-message{*/
/*    width:250px;*/
/*}*/

/* 'd-flex' is used as a class, so define it properly */
.product-details {
    align-items: center;
    display: flex !important;
   
}

.prod-status,.prod-status-res{
    position:relative;
    bottom:8px;
}

a.btn,
input[type="button"],
input[type="submit"],
input[type="reset"],
input[type="file"],
button {
    background-image: none;
    background:#616b37 !important;
    text-decoration: none !important;
    display: inline-block;
    position: relative;
    border: 1px solid transparent;
    border-radius: 6px;
    padding: 0.75em 1.5em;
    margin-top: 9px;
    font-size: 14px;
    font-weight: bold;
    line-height: normal;
    text-transform: uppercase;
    color: #fff;
    z-index: 0;
    /*cursor: pointer;*/
    white-space: nowrap;
    vertical-align: middle;
}
b{
    color:black !important;
}
input.count {
    height: 36px;
    width: 38px;
    font-size: 15px;
    text-align: center;
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 1px;
    transition: border-color 0.3s;
}
input.count:focus {
    outline: none;
    border-color: #4caf50;
    box-shadow: 0 0 5px #4caf50;
}
@media (max-width: 768px) {
    .product-details{
            /*width: 78%;*/
    }
    
    .tr{
        display: flex;
        justify-content: center;
    }
}
@media (max-width: 768px) {
    button {
        padding: 8px 16px;
        font-size: 16px;
    }

    input.count {
        width: 40px;
        font-size: 16px;
        padding: 8px;
        margin: 0 5px;
    }
}
.product-details {
    /*justify-content: space-between;*/
    /* align-items: center; */
    display: flex !important;
    justify-content:center;
}
.cart-item {
    display: flex;
    align-items: center;
}

.description, .price-info, .counter-icon, .delete-icon {
    display: flex;
    flex-direction: column;
}

#dyncost{
    width:15px;
}
.delete-icon {
    justify-content: flex-end;
}
.col-lg-12 {
    flex: 0 0 auto;
    width: 75%;
}
/*.row {*/
/*    font-size: 12px;*/
/*    --bs-gutter-x: 1.5rem;*/
/*    --bs-gutter-y: 0;*/
/*    display: flex;*/
/*    flex-wrap: wrap;*/
/*    margin-top: calc(-1 * var(--bs-gutter-y));*/
/*    margin-right: calc(-.5 * var(--bs-gutter-x));*/
/*    margin-left: calc(-.5 * var(--bs-gutter-x));*/
/*}*/
.p {
    margin: 0 0 .75em;
    line-height: 13px;
}
.border {
    border-radius: 10px;
    border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color)!important;
}

.title{
    color:#616b37 !important;
}

#productrender-res{
    display:none;
}
 #productrender{display:block;}

/* 16/3/2024 */
    .footer {
        background-color: #616b37 !important;
        /*color: yellow;*/
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
    a:hover{
        color:black !important;
    }
    .product-name{
        margin-left:3rem;
    }
    
     @media (min-width: 360px) and (max-width: 600px)
    {
        .wid {
            width: 65% !important;
        }
    }
    
    @media(max-width:600px){
        .product-item p{
          text-transform: uppercase;
          font-size: 12px;
          margin: 0;
        }
        .dynamicCost{
            width:15px;
        }
        .counter-icon{
            margin-left:18px;
        }
        /*.product-name{*/
        /*    margin:0 !important;*/
        /*}*/
        
        
    }
    
      
    @media(max-width:768px){
        #productrender-res{
            display:block !important;
        }
        /*#productrender{*/
        /*    display:none;*/
        /*}*/
        .pn-res{
            justify-content:center;
        }
    }
    
    
/*    .product-name {*/
/*    overflow: hidden;*/
/*    text-overflow: ellipsis;*/
/*    white-space: nowrap;*/
/*}*/

/*.product-name-container {*/
/*    width: 150px; */
/*    overflow: hidden;*/
/*    text-overflow: ellipsis;*/
/*    white-space: nowrap;*/
/*}*/

.product-name-container {
    width: 260px; /* Adjust the width according to your layout */
    overflow-x: auto;
    white-space: nowrap;
}
/* Hide the scrollbar by default */
.product-name-container::-webkit-scrollbar {
    width: 0;
    height: 0;
}

/* Show the scrollbar only when the container is hovered */
.product-name-container:hover::-webkit-scrollbar {
    width: 6px; /* Adjust the scrollbar width */
    height: 6px; /* Adjust the scrollbar height */
}

/* Track (the area where the scrollbar runs) */
.product-name-container::-webkit-scrollbar-track {
    background: transparent;
}

/* Handle (the draggable part of the scrollbar) */
.product-name-container::-webkit-scrollbar-thumb {
    background: #ccc; /* Adjust the scrollbar color */
    border-radius: 1px; /* Adjust the scrollbar border radius */
}

/* Handle on hover */
.product-name-container::-webkit-scrollbar-thumb:hover {
    background: #aaa; /* Adjust the scrollbar hover color */
}

.product-item p {
    text-transform: capitalize;
    
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
                                <h4 style="color:white !important;">Order Status Tracker</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Order Status</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<section class="m-3 bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="my-3">
                    <div class="table">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th>
                                    <h5 class="mx-2 title">Order Id : <?= $statustrack[0]['odrtrackid'] ?></h5>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <div id="productrender">
                                        <?php foreach ($statustrack as $order) :?>
                                            <div class="row m-2">
                                                <div class="col-lg-1 col-3">
                                                    <img src="<?= base_url('public/admin/assets/uploads/product/') . $order['product_image']; ?>" />
                                                </div>
                                                <div class="col-lg-5 col-9">
                                                    <p>
                                                            <b><?= $order['product_name'] ."(". $order['product_kg'] .")"?></b>
                                                    </p>
                                                </div>
                                                <div class="col-lg-2 col-4">
                                                    <p class=""><b><?= $order['product_price'] ."X". $order['product_quantity']; ?></b></p>
                                                </div>
                                                <div class="col-lg-1 col-3">
                                                    <p class=""><b><?= $order['total_price']; ?></b></p>
                                                </div>
                                                <div class="col-lg-3 col-5">
                                                <?php if($order['crntstatus'] == "delivered"){ ?>
                                                    <ul class="inline-list d-flex" id="stars_<?= $order['order_id']; ?>" style="padding: 0; margin: 0; list-style: none;">
                                                        <?php
                                                        $userRating = 0;
                                                        for ($count = 1; $count <= 5; $count++) {
                                                            $starRatingId = $order['product_id'] . '_' . $count;
                                                            $user_rate__ = find_rating($order['product_id'],$order['user_id']);
                                                            // print_r($user_rate__);exit;
                                                            if ($count <= $user_rate__) {
                                                                echo '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected" onclick="addRatingOnClick(' . $order['product_id'] . ', ' . $order['user_id'] . ', ' . $count . ');" style="cursor: pointer; font-size: 20px; margin-right: 5px; color: #f0c419;">&#9733;</li>';
                                                            } else {
                                                                echo '<li value="' . $count . '" id="' . $starRatingId . '" class="star" onclick="addRatingOnClick(' . $order['product_id'] . ', ' . $order['user_id'] . ', ' . $count . ');" onMouseOver="mouseOverRating(' . $order['product_id'] . ', ' . $count . ');" style="cursor: pointer; font-size: 20px; margin-right: 5px;">&#9733;</li>';
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                <?php } else{ ?>
                                                <p class="" id="status_<?= $order['order_id']; ?>"><b><?= $order['crntstatus']; ?></b></p>
                                                <?php } ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <hr style="width: 100%;">
                                    </div>
                                    
                                    
                                    
                                    <!--<div id="productrender-res">-->
                                    <!--    < ?php foreach ($statustrack as $order) : ?>-->
                                    <!--    <div class="border shadow-0 box py-1 px-4 product-item" style="display: flex; flex-direction: column; padding: 10px;">-->
                                    <!--        <div class="d-flex align-items-center justify-content-between product-details" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; width: 100%;">-->
                                    <!--           <div class="d-flex">-->
                                    <!--                <div class="mb-3 img-res" style="flex: 0 0 50px;">-->
                                    <!--                    <img src="< ?= base_url('public/admin/assets/uploads/product/') . $order['product_image']; ?>" class="border rounded me-3" style="width: 50px; height: 50px;" />-->
                                    <!--                </div>-->
                                                    <!--<div class="description mb-3 ms-5 me-2" style="flex: 1; min-width: 250px;">-->
                                                    <!--    <p class="mb-0 product-message"><b>< ?= $order['product_name']; ?></b></p>-->
                                                    <!--</div>-->
                                    <!--                <div class="description product-name pn-res mb-3  ms-3" style="flex: 1; min-width: 250px;">-->
                                    <!--                    <p class="mb-0 product-message" style="word-wrap: break-word;">-->
                                    <!--                        <b>< ?= strlen($order['product_name']) > 150 ? wordwrap($order['product_name'], 150, "<br>\n") : $order['product_name']; ?></b>-->
                                    <!--                    </p>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="description mb-3 mx-2" style="flex: 1; ">-->
                                    <!--                <p class="mb-0 product-message"><b><?= $order['product_price']; ?></b></p>-->
                                    <!--            </div>-->
                                    <!--            <div class="description mb-3 mx-2" style="flex: 1;">-->
                                    <!--                <p class="mb-0 product-message"><b><?= $order['product_quantity']; ?></b></p>-->
                                    <!--            </div>-->
                                                <!--<div class="description mb-3 mx-2" style="flex: 1; min-width: 100px;">-->
                                                <!--    <p class="mb-0 product-message"><b>< ?= $order['crntstatus']; ?></b></p>-->
                                                <!--</div>-->
                                                
                                    <!--            <div class="description mx-2" style="flex: 1;">-->
                                    <!--                <p class="mb-0 product-message prod-status-res" id="status_<?= $order['order_id']; ?>"><b><?= $order['crntstatus']; ?></b></p>-->
                                    <!--            </div>-->
                                    <!--            <div class="description mx-2" style="flex: 1;">-->
                                                    <!-- Rating stars will be dynamically shown/hidden here -->
                                    <!--                <ul class="inline-list d-flex" id="stars_<?= $order['order_id']; ?>" style="padding: 0; margin: 0; list-style: none; <?= $order['crntstatus'] !== 'delivered' ? 'display: none;' : 'display:block' ?>">-->
                                    <!--                    < ?php-->
                                    <!--                    $userRating = 0;-->
                                    <!--                    for ($count = 1; $count <= 5; $count++) {-->
                                    <!--                        $starRatingId = $order['product_id'] . '_' . $count;-->
                                    <!--                        if ($count <= $userRating) {-->
                                    <!--                            echo '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected" onclick="addRatingOnClick(' . $order['product_id'] . ', ' . $order['user_id'] . ', ' . $count . ');" style="cursor: pointer; font-size: 20px; margin-right: 5px; color: #f0c419;">&#9733;</li>';-->
                                    <!--                        } else {-->
                                    <!--                            echo '<li value="' . $count . '" id="' . $starRatingId . '" class="star" onclick="addRatingOnClick(' . $order['product_id'] . ', ' . $order['user_id'] . ', ' . $count . ');" onMouseOver="mouseOverRating(' . $order['product_id'] . ', ' . $count . ');" style="cursor: pointer; font-size: 20px; margin-right: 5px;">&#9733;</li>';-->
                                    <!--                        }-->
                                    <!--                    }-->
                                    <!--                    ?>-->
                                    <!--                </ul>-->
                                    <!--            </div>-->
                                    <!--            <hr style="width: 100%;">-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    < ?php endforeach; ?>-->
                                    <!--</div>-->
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <table class="table table-sm table-bordered">
                    <tr>
                        <th><h4 class="mx-2 title">Total Price : <?= $statustrack[0]['totalamount'] ?></h4></th>
                    </tr>
                    <!--<tr class="tr">-->
                    <!--    <td class="d-flex product-details">-->
                    <!--        <div class="row my-2 w-100">-->
                    <!--            <div class="col-4 text-start"><b>Price :</b></div>-->
                    <!--            <div class="col-8"><?= $statustrack[0]['price'] ?></div>-->
                    <!--        </div>-->
                    <!--    </td>-->
                    <!--</tr>-->
                </table>
                <table class="table table-sm table-bordered">
                    <tr>
                        <th><h4 class="mx-2 title">Shipping Address</h4></th>
                    </tr>
                    <tr class="tr">
                        <td class="d-flex product-details">
                            <div class="row my-2">
                                <div class="col-4"><b style="margin-left: 10px;">Address :</b></div>
                                <div class="col-8"><?= $shippingaddress[0]['address'] . ", " . 
                                    $shippingaddress[0]['street'] . ", " . 
                                    $shippingaddress[0]['area'] . ", " . 
                                    $shippingaddress[0]['landmark'] . ", " . 
                                    $shippingaddress[0]['city'] . ", " . 
                                    $shippingaddress[0]['state'] . ", " . 
                                   $shippingaddress[0]['pincode']; ?>
                                </div>
                                <div class="col-4 my-2"><b style="margin-left: 10px;">Phone :</b></div>
                                <div class="col-8 my-2"><?= $shippingaddress[0]['phone'] ?></div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- NIlESH PRODUCT RATING START 29/4/2024 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function pollStatus(orderId, productId, userId) {
        setInterval(function() {
            $.ajax({
                url: '<?= base_url("order/getStatus") ?>/' + orderId,
                type: 'GET',
                success: function(response) {
                    if (response.status === 'success') {
                        $('#status_' + orderId).html('<b>' + response.crntstatus + '</b>');
                        // Handle showing/hiding stars based on status
                        if (response.crntstatus !== 'delivered') {
                            $('#stars_' + orderId).remove();
                        } else {
                            if (!$('#stars_' + orderId).length) {
                                var starsHtml = '<ul class="inline-list d-flex" onMouseLeave="mouseOutRating(' + productId + ', 0);" style="padding: 0; margin: 0; list-style: none;" id="stars_' + orderId + '">';
                                for (var count = 1; count <= 5; count++) {
                                    var starRatingId = productId + '_' + count;
                                    starsHtml += '<li value="' + count + '" id="' + starRatingId + '" class="star" onclick="addRatingOnClick(' + productId + ', ' + userId + ', ' + count + ');" onMouseOver="mouseOverRating(' + productId + ', ' + count + ');" style="cursor: pointer; font-size: 20px; margin-right: 5px; color: #9E9E9E;">&#9733;</li>';
                                }
                                starsHtml += '</ul>';
                                $('#status_' + orderId).after(starsHtml);
                            }
                        }
                    }
                }
            });
        }, 5000); // Poll every 5 seconds
    }

    $(document).ready(function() {
        <?php foreach ($statustrack as $order): ?>
            pollStatus(<?= $order['order_id']; ?>, <?= $order['product_id']; ?>, <?= $order['user_id']; ?>);
        <?php endforeach; ?>
    });
</script>


<script>
    function addRating(productId, userId, rating) {
        $.ajax({
            url: "<?= base_url('rating'); ?>",
            type: 'POST',
            dataType: 'json',
            data: {product_id: productId, user_id: userId, rating: rating},
            success: function (response) {
                if (response.success) {
                    console.log('Rating added successfully.');
                    // window.location.href = '< ?= base_url('ratingcount'); ?>';
                    window.location.reload();
                }
            },
            error: function (xhr, status, error) {
                console.error('Error adding rating:', error);
            }
        });
    }

    function addRatingOnClick(productId, userId, rating) {
        addRating(productId, userId, rating);
    }

    function mouseOverRating(productId, rating) {
        resetRatingStars(productId);
        var maxRating = Math.min(rating, 5); // Limit to maximum of 5 stars
        for (var i = 1; i <= maxRating; i++) {
            var ratingId = productId + "_" + i;
            var starElement = document.getElementById(ratingId);
            if (starElement) {
                starElement.style.color = "#ff6e00";
            }
        }
    }

    function resetRatingStars(productId) {
        for (var i = 1; i <= 5; i++) {
            var ratingId = productId + "_" + i;
            var starElement = document.getElementById(ratingId);
            if (starElement) {
                starElement.style.color = "#9E9E9E";
            }
        }
    }

    function mouseOutRating(productId, userRating) {
        var maxRating = Math.min(userRating, 5);
        for (var i = 1; i <= maxRating; i++) {
            var ratingId = productId + "_" + i;
            var starElement = document.getElementById(ratingId);
            if (starElement) {
                starElement.style.color = "#ff6e00";
            }
        }
        for (var i = (maxRating + 1); i <= 5; i++) {
            var ratingId = productId + "_" + i;
            var starElement = document.getElementById(ratingId);
            if (starElement) {
                starElement.style.color = "#9E9E9E";
            }
        }
    }
</script>
<!-- NIlESH PRODUCT RATING END 29/4/2024 -->
<?= $this->endSection() ?>