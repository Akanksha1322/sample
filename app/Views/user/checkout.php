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
    [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled), button:not(:disabled) {
        height: 35px;
        cursor: pointer;
        margin-right: 16px;
        margin-top: 7px;
        border-radius: 37px;
        padding-bottom: 8px;
        font-size: 9px !important;
        border-radius: 5px;
        /*margin: 0 10px;*/
        transition: background-color 0.3s;
    }
    
    button { /* This seems like an incomplete rule */
    }
    
    /* This rule is likely incorrect, 'd-flex' is not a valid CSS selector */
    d-flex button:hover {
        background-color: #45a049;
    }
    
    /* 'd-flex' is used as a class, so define it properly */
    .d-flex {
        align-items: center;
        display: flex !important;
    }
    
    button.btn,
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
        cursor: pointer;
        white-space: nowrap;
        vertical-align: middle;
    }
    input[type="radio"] {
        position: relative;
        bottom: 2px;
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
    .d-flex {
        justify-content: space-between;
         align-items: center; 
        display: flex !important;
    }
    .cart-item {
        display: flex;
        align-items: center;
    }
    
    .description, .price-info, .counter-icon, .delete-icon {
        display: flex;
        flex-direction: column;
    }
    }
    
    .delete-icon {
        justify-content: flex-end;
    }
    .col-lg-12 {
        flex: 0 0 auto;
        width: 75%;
    }
    .my-row {
        font-size: 12px;
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(-1 * var(--bs-gutter-y));
        margin-right: calc(-.5 * var(--bs-gutter-x));
        margin-left: calc(-.5 * var(--bs-gutter-x));
    }
    .p {
        margin: 0 0 .75em;
        line-height: 13px;
    }
    .border {
        border-radius: 10px;
        border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color)!important;
    }
    
    /* 16/3/2024 */
    .footer {
        background-color: #616b37 !important;
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
    b{
       color: black !important;
    }

    * {
        box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }
    
    .col-25 {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
    }
    
    .col-50 {
      -ms-flex: 50%; /* IE10 */
      flex: 50%;
    }
    
    .col-75 {
      -ms-flex: 75%; /* IE10 */
      flex: 75%;
    }
    
    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }
    
    .container {
      background-color: #ffffff;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }
    
    .input-text {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .title{
        color:#616b37 !important;
        font-size: 18px !important;
    }
    .navbtn{
        color:black !important;
    }
    .navbtn:hover{
        color:#9e9508 !important;;
    }
    .label {
      margin-bottom: 10px;
      display: block;
    }
    
    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }
    
    .btn {
      background-color: #616b37;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }
    
    .btn:hover {
      background-color: #616b37;
    }
    
    span.price {
      float: right;
      color: grey;
    }
    
    /*Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .my-row {
        flex-direction: column-reverse;
      }
      .bill-row{
          flex-direction: column;
      }
      .col-25 {
        margin-bottom: 20px;
      }
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
        
        a:hover{
            color:black;
        }
    span{
        font-size: 14px;
    }
    .response {
    background-color: #616B37;
    padding: 15px;
    border-radius: 3px;
    color: white;
    font-size: 20px;
    width: 100%;
    margin-bottom: 10px;
    display: none; /* Initially hidden */
}

.response.show {
    display: block; /* Show when the class 'show' is added */
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
                                <h4 style="color:white !important;">Checkout</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Checkout</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-3">
    <div class="row  my-row my-3" style="margin-left: 3PX;MARGIN-RIGHT: 3PX;">
        <div class="col-75">
            <div class="container main-block">
                <form id="billingForm"  method="POST" enctype="multipart/form-data">
                    <div class="row bill-row">
                        <div class="col-75 mt-3">
                            <h3 class="title">Billing Address</h3>
                            <div class="row my-row">
                                <div class="col-50">
                                    <label for="fname" class="label"><i class="fa fa-user"></i> First Name</label>
                                    <input type="text" class="form-control mb-2" id="fname" name="fname" maxlength="50" required>
                                    
                                </div>
                                <div class="col-50">
                                    <label for="lname" class="label"><i class="fa fa-user"></i> Last Name</label>
                                    <input type="text" class="form-control mb-2" id="lname" name="lname" maxlength="50" required>
                                    
                                </div>
                            </div>
                            <div class="row  my-row">
                                <div class="col-50">
                                    <label for="email" class="label"><i class="fa fa-user"></i> Email</label>
                                    <input type="email" class="form-control mb-2" id="usermail" name="email" required>
                                </div>
                                <div class="col-50">
                                    <label for="phone" class="label"><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                    <input type="text" class="form-control mb-2" id="contact" name="contact" maxlength="10" minlength="10" required>
                                </div>
                            </div>
                            <div class="row  my-row">
                                <div class="col-50">
                                    <label for="street" class="label"><i class="fa-solid fa-road" style="font-size: 15px;"></i> Street</label>
                                    <input type="text" class="form-control mb-2" id="street" name="street" required>
                                </div>
                                <div class="col-50">
                                    <label for="area" class="label"><i class="fa fa-address-card" aria-hidden="true"></i> Area</label>
                                    <input type="text" class="form-control mb-2" id="area" name="area" required>
                                </div>
                            </div>
                            <div class="row  my-row">
                                <div class="col-50">
                                    <label for="landmark" class="label"><i class="fa-solid fa-landmark" style="font-size: 15px;"></i> Landmark </label>
                                    <input type="text" class="form-control mb-2" id="landmark" name="landmark" required>
                                </div>    
                                <div class="col-50">
                                    <label for="city" class="label"><i class="fa-solid fa-city" style="font-size: 15px;"></i> City</label>
                                    <input type="text" class="form-control mb-2" id="city" name="city" required>
                                </div>  
                            </div>
                            <div class="row  my-row">
                                <div class="col-50">
                                    <label for="adr" class="label"><i class="fa fa-address-card-o"></i> Address</label>
                                    <textarea type="text" class="form-control mb-2" id="address" name="address" required></textarea>
                                </div>
                            </div>
                            <div class="row  my-row">
                                <div class="col-50">
                                    <label for="state" class="label">State</label>
                                    <input type="text" class="form-control mb-2" id="state" name="state" required>
                                </div>
                                <div class="col-50">
                                    <label for="pin" class="label">Pincode</label>
                                    <input type="text" id="pin" name="pin"  class="form-control mb-2" maxlength="6" minlength="6" required>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="col-50">
                            <h3 class="title">Payment</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="COD">
                                <label class="form-check-label" for="flexRadioDefault1">Cash on Delivery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Online">
                                <label class="form-check-label" for="flexRadioDefault2">Online</label>
                            </div>
                            <div class="error" style="color: red;" id="error-payment"></div>
                        </div>
                        <div>
                            <div id="responseContainer" class="response"></div>
                        </div>
                        

                    </div>
                    <button id="submit_data" class="btn w-10" style="font-size: 15px !important;">Add & Continue</button>
                </form>
            </div>
        </div>
        <div class="col-25" style="margin-left: -15px;">
            <div class="container main-block pt-4" >
                <h4 style="text-align:center;">Your Orders</h4>
                <p class="title"style="font-size: 16px;font-weight: 600;margin-bottom: 0px;">Products</p>
                <div class="row">
                    <?php 
                        foreach ($products as $product) { 
                        $total_price = $product['product_quantity'] * $product['product_price'];
                        $total_price = number_format($total_price, 2);
                        $product_price = number_format($product['product_price'], 2);

                    ?>
                    <div class="col-md-6 col-6" style="padding-left: 3px;">
                        <span id="Product_Name" class="ProductName"><?= $product['product_name'] . " &nbsp;(" . $product['product_kg'] . ")" ?></span>
                    </div>
                    <div class="col-md-3 col-3" style="padding-left: 3px;">
                        <span class="Quantity"><?= $product_price ."X".$product['product_quantity'] ?></span>
                    </div>
                    <div class="col-md-3 col-3" >
                       <span class="price"><?= $total_price ?></span>
                    </div>
                    <?php } ?>
                </div>
                    <?php foreach ($products as $product) { 
                    ?>
                            <img src="<?= base_url('public/admin/assets/uploads/product/') . $product['product_image']; ?>" class="border rounded me-3" style="width: 50px; height: 50px;"  hidden/>
                            <span id="Product_Name" hidden class="ProductName"><?= $product['product_name'] . " &nbsp;(" . $product['product_kg'] . ")" ?></span>

                            <span id="ProductId_new" hidden class="ProductIdNew" hidden><?= $product['product_id'] ?></span>
                            <span id="Product_Message" class="Message" hidden><?= isset($product['message']) ? $product['message'] : '' ?></span>
                            <span class="Quantity" hidden><?= $product['product_quantity'] ?></span>
                            <?php if (isset($product['product_kg'])) : ?>
                                <span class="weight" hidden><?= $product['product_kg'] ?></span>
                            <?php endif; ?>
                            <span class="price" hidden><?= $product['product_price'] ?></span>
                        
                    <?php } ?>
                <hr />
                <div class="d-flex justify-content-between mb-2">
                    <p style="font-weight:600;font-size:16px">Total Price:</p><p class="mb-3 dynamictotalPrice"><?= $total_price; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--var odrdate = $('#odrdate').val();var odrtime = $('#odrtime').val();-->
<script>
$(document).ready(function() {
    $('#billingForm').submit(function(e) {
        e.preventDefault();

        var isValid = true;
        var paymentMethod = $("input[name='flexRadioDefault']:checked").val();

        if (!paymentMethod) {
            $("#error-payment").text("Please choose a payment method.");
            isValid = false;
        }

        if (!isValid) return;

        var form = $(this);
        var data = form.serialize();

        $('#submit_data').text('Please wait...').prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: '<?= base_url('orders') ?>',
            data: data,
            dataType: 'json',
            success: function(response) {
                // console.log(response);return;
                $('#responseContainer').removeClass('show').hide();
                if (response.success) {
                    $('#responseContainer').html(response.message).addClass('show').show(); 
                    if (response.redirect) {
                        setTimeout(function() {
                            window.location.href = response.url;
                        }, 5000);
                    } else if (response.razorpayOrder) {
                        setTimeout(function() {
                            openRazorpayPaymentPage(response.razorpayOrder, response.userDetails);
                        }, 5000);
                    }
                } else {
                    $('#responseContainer').html('An unexpected error occurred.').addClass('show').show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error sending data:', error);
                
            }
        });
    });

    function openRazorpayPaymentPage(order, userDetails) {
        var options = {
            "key": "rzp_test_r7zmk7AdpYFcuH",
            "amount": order.amount,
            "currency": order.currency,
            "name": "Your Company Name",
            "description": "Order Payment",
            "order_id": order.id,
            "handler": function(response) {
                $.post("<?= site_url('verify-razorpay-payment'); ?>", {
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature
                }, function(result) {
                    if (result.redirect) {
                        window.location.href = result.redirect_url;
                    } else {
                        alert(result.error);
                    }
                });
            },
            "prefill": {
                "name": userDetails.name,
                "email": userDetails.email,
                "contact": userDetails.phone
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
});
</script>
<script>

    // $(document).ready(function() {
    //     $("#ContinuepaymentBtn").click(function(e) {
    //         e.preventDefault();
    //         clearErrors();
            // var isValid = true;var firstname = $("#fname").val();var lastname = $("#lname").val();
            // var email = $("#usermail").val();var contact = $("#contact").val();var street = $("#street").val();
            // var area = $("#area").val();var landmark = $("#landmark").val();var city = $("#city").val();
            // var address = $("#address").val();var state = $("#state").val();var pin = $("#pin").val();
            // var paymentMethod = $("input[name='flexRadioDefault']:checked").val();
            // var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // // var contactPattern = /^\d{10}$/;
            // var contactPattern = /^[6-9]\d{9}$/; // Indian phone number pattern
            // var pinPattern = /^\d{5,6}$/;
    
    //         if (!firstname) {
    //             $("#error-fname").text("Please fill firstname.");
    //             isValid = false;
    //         }
    //         if (!lastname) {
    //             $("#error-lname").text("Please fill lastname.");
    //             isValid = false;
    //         }
    //         if (!email || !emailPattern.test(email)) {
    //             $("#error-email").text("Please enter a valid email address.");
    //             isValid = false;
    //         }
    //         if (!contact || !contactPattern.test(contact)) {
    //             $("#error-contact").text("Please enter a valid Indian contact number (10 digits, starting with 6-9).");
    //             // $("#error-contact").text("Please enter a valid contact number (10 digits).");
    //             isValid = false;
    //         }
    //         if(!area){
    //             $("#error-area").text("please fill area");
    //             isValid = false;
    //         }
    //         if(!landmark){
    //             $("#error-landmark").text("please fill landmark");
    //             isValid = false;
    //         }
    //         if (!street) {
    //             $("#error-street").text("Please fill street address.");
    //             isValid = false;
    //         }
    //         if(!address){
    //             $("#error-address").text("please fill proper address");
    //             isValid = false;
    //         }
    //         if (!city) {
    //             $("#error-city").text("Please fill city.");
    //             isValid = false;
    //         }
    //         if (!state) {
    //             $("#error-state").text("Please fill state.");
    //             isValid = false;
    //         }
    //         if (!pin || !pinPattern.test(pin)) {
    //             $("#error-pin").text("Please enter a valid pin number (6 digits).");
    //             isValid = false;
    //         }
    //         // if (!odrdate) {
    //         //     $("#error-odrdate").text("please enter a order date");
    //         //     isValid = false;
    //         // }
    //         // if(!odrtime) {
    //         //     $("#error-odrtime").text("please enter a order time");
    //         //     isValid = false;
    //         // }
    //         if (!paymentMethod) {
    //             $("#error-payment").text("Please choose a payment method.");
    //             isValid = false;
    //         }
    //         if (isValid) {
    //             var dynamicPrice = < ?= json_encode($checkoutData['updatedPrice']); ?>;
    //             // var dynamicDiscount = < ?= json_encode($checkoutData['updatedDiscount']); ?>;
    //             // var dynamicTax = < ?= json_encode($checkoutData['updatedTax']); ?>;
    //             var dynamictotalPrice = <?= json_encode($checkoutData['finalTotal']); ?>;
    
    //             // Update the HTML elements with the new values
    //             $("#dynamicPrice").text(dynamicPrice);
    //             // $("#dynamicDiscount").text(dynamicDiscount);
    //             // $("#dynamicTax").text(dynamicTax);
    //             $(".dynamictotalPrice").text(dynamictotalPrice);
    
    //             // Now you can continue with your AJAX code
    //             var products = [];
    //             $("ul li").each(function(index) {
    //                 var productId = $(this).find(".ProductIdNew").text();
    //                 // var productId =$('#ProductId_new').text();
    //                 var productMessage = $(this).find(".Message").text().trim();
    //                 var productName = $(this).find(".ProductName").text().trim();
    //                 var productPrice = $(this).find(".price").text().trim().replace('₹', '').trim();
    //                 var productQuantity = $(this).find(".Quantity").text().trim();
    //                 var productKg = $(this).find(".weight").text().trim();
    //                 var productImageSrc = $(this).find("img").attr("src");
    //                 var productImage = productImageSrc ? productImageSrc.split('/').pop() : '';
                    
    //                 if (productName !== "" && productPrice !== "" && productQuantity !== "" && productKg !== "") {
    //                     products.push({
    //                         productId: productId,
    //                         message: productMessage,
    //                         name: productName,
    //                         quantity: productQuantity,
    //                         price: productPrice,
    //                         kg: productKg,
    //                         image: productImage
    //                     });
    //                 }
    //             });
      
    //             $.ajax({
    //                 url: "<?= base_url('orders'); ?>",
    //                 type: "POST",
    //                 data: {
    //                     firstname: firstname,lastname: lastname,email: email,
    //                     contact: contact,street: street,area: area,
    //                     landmark: landmark,city: city,address: address,
    //                     state: state,pin: pin,paymentMethod: paymentMethod,
    //                     dynamicPrice: dynamicPrice,
    //                     // dynamicDiscount: dynamicDiscount,
    //                     // dynamicTax: dynamicTax,
    //                     dynamictotalPrice: dynamictotalPrice,
    //                     products: JSON.stringify(products) 
    //                 },
    //                 success: function(response) {
    //                     if (response.success && response.redirect) {
    //                         window.location.href = "< ?= base_url('thanks') ?>";
    //                         // window.location.href = < ?= base_url('thanks') ?>;
    //                     } else if (response.success && response.razorpayOrder) {
    //                         openRazorpayPaymentPage(response.razorpayOrder, response.userDetails);
    //                     } else {
    //                         alert(response.message);
    //                     }
    //                 },
    //                 error: function(xhr, status, error) {
    //                     console.error(xhr.responseText);
    //                     alert("An error occurred while processing your request.");
    //                 }
    //             });
    //         }
    //     });
    //     function clearErrors() {
    //         $(".error").text("");
    //     }
        
        // function openRazorpayPaymentPage(order, userDetails) {
        //     console.log("Amount:", order.amount);
        //     var options = {
        //         "key": "rzp_test_r7zmk7AdpYFcuH", // Replace with your Razorpay key ID
        //         "amount": order.amount,
        //         "currency": order.currency,
        //         "name": "Birthday n Box",
        //         "description": "Order Payment",
        //         "order_id": order.id,
        //         "handler": function (response){
        //             $.post("<?= site_url('verify-razorpay-payment'); ?>", {
        //                 razorpay_payment_id: response.razorpay_payment_id,
        //                 razorpay_order_id: response.razorpay_order_id,
        //                 razorpay_signature: response.razorpay_signature
        //             }, function(result){
        //                 // Handle the response here
        //                 if (result.redirect) {
        //                     window.location.href = result.redirect_url;
        //                 } else {
        //                     alert(result.error);
        //                 }
        //             });
        //         },
        //         "prefill": {
        //             "name": userDetails.name,
        //             "email": userDetails.email,
        //             "contact": userDetails.phone
        //         },
        //         "theme": {
        //             "color": "#F37254"
        //         }
        //     };
        //     var rzp1 = new Razorpay(options);
        //     rzp1.open();
        // }

    // });
</script>
<!-- proceed to submit order end -->

<?= $this->endSection() ?>