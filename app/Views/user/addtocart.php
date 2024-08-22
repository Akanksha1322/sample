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
    /*right: 10%;*/
}
[type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled), button:not(:disabled) {
    height: 35px;
    cursor: pointer;
    margin-right: 16px;
    margin-top: 7px;
    border-radius: 37px;
    padding-bottom: 8px;
    font-size: 13px !important;
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

/* 'd-flex' is used as a class, so define it properly */
.product-details {
    align-items: center;
    display: flex !important;
   
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
    cursor: pointer;
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
#product-details-res{
    display:none !important;
}
.dynamicCost{
   white-space: nowrap;
}
    
@media (max-width: 768px) {
    .description{
    
     justify-content: center;
    }
    
    .dynamicCost{
        margin-left: 14px !important;
    }
    
    .quantity1{
        position: relative;
        /*right: 13%;*/
    }
    /*#product-details-res{*/
    /*    display:flex !important;*/
    /*}*/
    
    /*#product-detail{*/
    /*    display:none !important;*/
    /*}*/
     .price-quant-res{
        display:flex;
    }
    .img-name-res{
        display:flex;
    }
    .add-delete-btn-res{
        display:flex;
        align-items:center;
    }
    .img-div{
        width:115px;
    }
    
    .img-res{
        width:100px !important;
        height:100px !important;
    }
    
    .product-cart{
        display:flex;
        flex-wrap: wrap;
    }
    
    /*.tr{*/
    /*    display: flex;*/
    /*    justify-content: center;*/
    /*}*/
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
    width:30px;
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
    
     @media (min-width: 360px) and (max-width: 600px)
    {
        .wid {
            width: 65% !important;
        }
    }
    .hr_wth{
        margin: 0.8rem !important;
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
        .hr_wth{
            margin: 1rem !important;
        }
        .del_btn{
            margin-top: -175px;
            text-align: end;
            margin-right: 30px;
        }
    }
    
/*    .product-namedel {*/
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
<?= base_url('public/images/veg.jpg'); ?>
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
                                <h4 style="color:white !important;">Add to Cart</h4>
                                <div class="breadcrumb_area" style="display: flex; justify-content:center">
                                    <h5 style="margin: 0; display: inline;">
                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>
                                    </h5>
                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>
                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Add to Cart</span>
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
            <div class="col-lg-9">
                <div class="my-3">
                    <div class="table">
                        <table class="table table-sm table-bordered">
                            <tr><th><h4 class="mx-2 title">Product Details</h4></th></tr>
                            <tr><td>
                                <div id="productrender" style="margin-top: 10px;">
                                    <?php if (!empty($cart_products)) : ?>
                                        <?php foreach ($cart_products as $product) : ?>
                                            <div class="border shadow-0 box product-item">
                                                <div class="product-details row" id="product-detail" style="margin: 0px;">
                                                        <div class="col-md-1 col-3" style="width: 85px;">
                                                            <img src="<?= base_url('public/admin/assets/uploads/product/') . $product['product_image']; ?>" class="" style="" />
                                                            <p class="mb-0 product-message" hidden><b><?= $product['message'] ?? '' ?></b></p>
                                                        </div>
                                                        <div class="col-md-4 col-9">
                                                            <p  class="product-name"><b><?= $product['product_name'] ?></b></p>
                                                        </div>
                                                        <div class="col-md-2 col-3">
                                                            <p class="" id="dyncost"><b><?= $product['product_price'] ?>(<?= $product['product_kg'] ?>)</b></p>
                                                            <p class="" id="fistprice" hidden><b>₹ <?= $product['product_price'] ?></b></p>
                                                        </div>
                                                        <div class="col-md-1 col-2">
                                                            <p class="dynamicCost"><b>₹ <?= $product['product_price'] ?></b></p>
                                                        </div>
                                                    
                                                        <div class="col-md-3 col-7" data-product-id="<?= $product['product_id'] ?>" data-product-weight="<?= $product['product_kg'] ?>">
                                                            <div class="containers">
                                                               <div class="details_addtocart quantity1">
                                                                    <input type="button" value="-" class="minus_input" data-product-id="<?= $product['product_id'] ?>" data-product-kg="<?= $product['product_kg'] ?>">
                                                                    <input type="text" size="2" class="details_inputtxt count" data-product-id="<?= $product['product_id'] ?>" value="<?= $product['product_quantity'] ?>" disabled>
                                                                    <input type="button" value="+" class="plus_input" data-product-id="<?= $product['product_id'] ?>" data-product-kg="<?= $product['product_kg'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 del_btn" style="text-align: end;">
                                                            <a href="#" class="text-dark delete-product" data-product-id="<?= $product['product_id'] ?>" data-product-weight="<?= $product['product_kg'] ?>" data-product-quantity="<?= $product['product_quantity'] ?>">
                                                                <i class="fa-solid fa-trash-can" style="color: #616B37;"></i>
                                                            </a>
                                                        </div>
                                                </div>
                                                <hr class="hr_wth">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="border shadow-0 p-4"><div class="d-flex product-details py-5 px-5">
                                            <div class="me-3 py-5 px-5"><h4 class="mb-0 text-center title"><b>Cart is Empty</b></h4></div>
                                        </div></div>
                                    <?php endif; ?>
                                </div>
                            </td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 my-3">
                <table class="table table-sm table-bordered">
                    <tr  class="tr">
                        <td class="d-flex product-details justify-content-center ">
                    <div class="card shadow-0 border">
                    <div class="card-body">
                        <div class="d-flex product-details justify-content-between mb-2">
                            <p class=" p">Total Price:</p><p class="p mb-0" id="dynamicPrice">₹ 00.00</p>
                        </div>
                        <hr />
                        <div class="d-flex product-details justify-content-between mb-2">
                            <p class=" p">Final Total:</p><p class="p mb-3 dynamictotalPrice">₹ 00.00</p>
                        </div>
                        <div class="mt-2">
                            <button  class="w-100 ms-0" style="background-color:#616b37 !important;"><a href="<?= base_url('checkout'); ?>" style="text-decoration:none">Continue To Checkout</a></button>
                                
                           
                        </div>
                    </div>
                </div>
                </td></tr>
                </table>
            </div>
        </div>
    </div>
    
</section>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function updateQuantity(productId, productKg, changeType) {
        // AJAX call to update quantity
        $.ajax({
            type: 'POST',
            url: '<?= base_url('updateproductquantity') ?>', 
            data: {
                product_id: productId,
                product_kg: productKg,
                change_type: changeType
            },
            success: function(response) {
                var selector = ".details_inputtxt[data-product-id='" + productId + "'][data-product-kg='" + productKg + "']";
                $(selector).val(response.product_quantity);
            },
            error: function(xhr, status, error) {
                // Handle errors here
                console.error('Error updating quantity:', error);
            }
        });
    }

    // Event listeners for plus and minus buttons
    $(document).ready(function() {
        $(".plus_input").on("click", function() {
            var productId = $(this).attr("data-product-id");
            var productKg = $(this).attr("data-product-kg");
            updateQuantity(productId, productKg, 'increment'); 
        });

        $(".minus_input").on("click", function() {
            var productId = $(this).attr("data-product-id");
            var productKg = $(this).attr("data-product-kg");
            updateQuantity(productId, productKg, 'decrement'); 
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.delete-product').on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            var productWeight = $(this).data('product-weight');
            var productQuantity = $(this).data('product-quantity'); 
            // alert(productQuantity);return;
            $.ajax({
                url: '<?= base_url('remove_product'); ?>', 
                type: 'POST',
                data: {
                    product_id: productId,
                    product_weight: productWeight,
                    product_quantity: productQuantity
                },
                success: function(response) {
                    console.log("Product removed successfully"); 
                    location.reload(); 
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
<script>
    function updateCost(productContainer) {
        let totalCost = 0;
        // Loop through each product
        document.querySelectorAll('.border.shadow-0.box').forEach(productContainer => {
            const quantityInput = productContainer.querySelector('.details_inputtxt.count');
            const costElement = productContainer.querySelector('#fistprice');
            const dynamicCostElement = productContainer.querySelector('.dynamicCost');
    
            const quantity = parseInt(quantityInput.value);
            const costPerItem = parseFloat(costElement.textContent.replace(/[^\d.]/g, ''));
            const productTotal = quantity * costPerItem;
    
            totalCost += productTotal;
            dynamicCostElement.innerHTML = `<b>₹${productTotal.toFixed(2)}</b>`;
            
        });
    
        // Update local storage
        sessionStorage.setItem('cartTotalCost', totalCost);
        
        // Calculate discount, tax, and final total based on the total cost
        // const totalDiscount = 0.1 * totalCost; // Assuming 10% discount
        // const totalTax = 0.18 * totalCost; // Assuming 18% tax
        // const totalDiscount = 0; // Assuming 0% discount
        // const totalTax = 0; // Assuming 0% tax
        // const finalTotal = totalCost - totalDiscount + totalTax;
        const finalTotal = totalCost;

        // Update the HTML elements with the calculated values
        document.getElementById('dynamicPrice').innerHTML = `<b>₹${totalCost.toFixed(2)}</b>`;
        // document.getElementById('dynamicDiscount').innerHTML = `<b>₹${totalDiscount.toFixed(2)}</b>`;
        // document.getElementById('dynamicTax').innerHTML = `<b>₹${totalTax.toFixed(2)}</b>`;
        document.querySelector('.dynamictotalPrice').innerHTML = `<b>₹${finalTotal.toFixed(2)}</b>`;
    }
    
    function loadFromStorage() {
        document.querySelectorAll('.details_inputtxt.count').forEach(input => {
            const productId = input.getAttribute('data-product-id');
            const savedQuantity = sessionStorage.getItem('productQuantity_' + productId);
            if (savedQuantity) {
                input.value = savedQuantity;
            }
        });
        updateCost();
    }
 
    document.querySelectorAll('.plus_input, .minus_input').forEach(button => {
        button.addEventListener('click', function() { 
            const productContainer = this.closest('.border.shadow-0.box') || this.closest('.product-cart');
            if (productContainer) {
                const quantityInput = productContainer.querySelector('.details_inputtxt.count');
                if (quantityInput) {
    
                let currentQty = parseInt(quantityInput.value);
                const productId = quantityInput.getAttribute('data-product-id');
                const productWeight = quantityInput.getAttribute('data-product-weight');
                const uniqueKey = `productQuantity_${productId}_${productWeight}`;
        
                if (button.classList.contains('plus_input')) {
                    currentQty++;
                } else if (button.classList.contains('minus_input') && currentQty > 1) {
                    currentQty--;
                }
        
                quantityInput.value = currentQty;
                sessionStorage.setItem(uniqueKey, currentQty);
                updateCost();
                }
            }
        });
    });
    
    // Call loadFromStorage when the page loads
    document.addEventListener('DOMContentLoaded', loadFromStorage);
  
 </script>
<!-- NILESH 4/4/2024 -->
<script>
    document.getElementById("checkoutButton").addEventListener("click", function(event) {
        event.preventDefault();

        // Populate the hidden form's fields with your values
        var dynamicPrice = document.getElementById("dynamicPrice").innerText.trim();
        // var dynamicDiscount = document.getElementById("dynamicDiscount").innerText.trim();
        // var dynamicTax = document.getElementById("dynamicTax").innerText.trim();
        var dynamictotalPrice = document.querySelector(".dynamictotalPrice").innerText.trim();
        document.getElementById("formUpdatedPrice").value = dynamicPrice;
        // document.getElementById("formUpdatedDiscount").value = dynamicDiscount;
        // document.getElementById("formUpdatedTax").value = dynamicTax;
        document.getElementById("formFinalTotal").value = dynamictotalPrice;
        
        // Initialize arrays to store product details
        var productMessages = [];
        var productNames = [];
        var productIDs = [];
        var productQuantities = [];
        var productPrices = [];
        var productKgs = [];

        // Loop through each product item
        document.querySelectorAll(".product-item").forEach(function(product, index) {
            var productMessage = product.querySelector(".product-message").innerText.trim();
            var productName = product.querySelector(".product-name").innerText.trim();
            var productKgElement = product.querySelector("#dyncost"); 
            var productKg = productKgElement ? productKgElement.innerText.trim() : ""; 
            var productID = product.querySelector(".counter-icon").getAttribute("data-product-id");
            var productQuantity = product.querySelector(".count").value;
            var productPrice = product.querySelector(".dynamicCost").innerText.replace("₹ ", "");
            // Push details into arrays
            productMessages.push(productMessage);
            productNames.push(productName);
            productIDs.push(productID);
            productQuantities.push(productQuantity);
            productPrices.push(productPrice);
            productKgs.push(productKg);
        });
        for (var i = 0; i < productNames.length; i++) {
            var hiddenInputs = `
                <input type="hidden" name="products[${i}][name]" value="${productNames[i]}">
                <input type="hidden" name="products[${i}][message]" value="${productMessages[i]}">
                <input type="hidden" name="products[${i}][id]" value="${productIDs[i]}">
                <input type="hidden" name="products[${i}][quantity]" value="${productQuantities[i]}">
                <input type="hidden" name="products[${i}][price]" value="${productPrices[i]}">
                <input type="hidden" name="products[${i}][kg]" value="${productKgs[i]}">
            `;
            document.getElementById("checkoutForm").insertAdjacentHTML("beforeend", hiddenInputs);
        }
        // Submit the hidden form
        document.getElementById("checkoutForm").submit();
    });
  
 </script>
<?= $this->endSection() ?>