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

    .custom-container {

        margin-top: 20px;

        display: flex;

        justify-content: space-evenly;

        align-items: flex-start;

    }

    .card__image{

            border-radius:5px;

            height:200px;

             transition: transform 0.25s ease-in-out; 

            /*width:300px;*/

        }

        .card__image:hover {

            transform: scale(0.9);

        }

    .filters {

        /* margin-left: -1px; */

        /*width: 257px;*/

        height: 100%;

        display: flex;

        box-shadow: 0px 3px 6px 0 rgb(212 212 212 / 35%);

        border-radius: 4px;

        flex-direction: column;

        background-color: #ffffff;

        flex-direction: column;

    }

    .product-listing {

        list-style-type: none;

        /*width: 75%;*/

        /*display: flex;*/

        /*justify-content: space-evenly;*/

        /*flex-wrap: wrap;*/

        box-shadow: 0px 3px 6px 0 rgb(212 212 212 / 35%);

        border-radius: 4px;

        background-color: #ffffff;

    }

    

    .menu-details{

        display:contents;

    }

    .filter-section {

        margin-left: 18px;

        margin-right:18px;

        /* margin-bottom: 20px; */

        padding: 10px;

        border-top: 1px solid;

        /*margin-left: -18px;*/

    }

    .sub-menu-item {

        cursor: pointer; /* Change cursor to pointer */

    }

    .product {

        border: 1px solid #ddd;

        padding: 10px;

        margin-bottom: 10px;

    }

    .checkbox-item {

        display: flex;

        align-items: baseline;

    }



    .listing {

        margin-top: 33px;

        margin-bottom: 15px;

    }

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

    

    

    /*Filter style start*/

    .main-label{

        display: flex;

        justify-content: space-between;

    }

    

    .sub-details{

        display:flex;

        flex-direction: column;

        display:none;

    }

    .filter-heading,.plus,.minus{

        color:#616b37 !important;

        cursor:pointer;

    }

    /*Filter style end*/



    .card-img{

        border-radius:5px !important;

    }

    

   .card-img{


        border: 1px solid #ebebeb;

        border-radius: 5px;

        transition-property: all;

         transition-duration: 0.5s;

        background-color: #616b37;

        color:#ffffff;

        max-width:105%;

    }

    

    .card-img:hover{

        /*opacity:1;*/

        background: linear-gradient(to top, rgba(0, 0, 0, -0.1) 0%, rgba(0, 0, 0, 0) 100%);

        color:black;

         box-shadow: 0px 0px 7px #616b37;

    }

    

    .card-img:hover .under_card {

        overflow:inherit;

       bottom: 10px;

    }

    

    .under_card{

         height:80px !important;

         position:relative;

         bottom: 0;

        transition: bottom 2s;

         width:100%;

    }

    .under_card:hover {

        overflow:inherit;

       bottom: 10px;

      

    }

    

        /*product style end*/

        

        

        /*product try start*/

        .product-card_card-container__1oJLc .product-card_product-info-holder__3TUe8 {

        max-height: 97px;

        color: #ffffff;

    }

    .product-card_card-container__1oJLc .product-card_product-info-holder__3TUe8:hover{

        color:black !important;

    }

    

    .product-card_product-title__32LFp {

        font-size: 12px;

        background: transparent;

        text-transform:capitalize;

        padding-top: 1rem;

        padding-bottom: .5rem;

        padding-left:10px;

        /*white-space: nowrap;*/

        overflow: hidden;

        text-overflow: ellipsis;

        line-height: 1;

        white-space: normal;

    }

    .product-card_product-title__32LFp:hover{

        color:black !important;

    }

    .product-card_product-desc-tile__10UVW {

        -moz-box-align: center;

        align-items: center;

    }

    

    .product-card_product-desc-tile__10UVW{

        display: -moz-box;

        display: flex;

        -moz-box-pack: justify;

        justify-content: space-between;

    }

    

    .product-card_rating-sec__34VZH {

        background: #008539;

        padding: 0 3px 0 5px;

        color: #fff;

        display: -moz-inline-box;

        display: inline-flex;

        -moz-box-align: center;

        align-items: center;

        border-radius: 4px;

        font-size: 14px;

        font-weight: 500;

        line-height: 1.5;

        width: 45px;

        padding-right: 18px;

    }

    

    .product-card_product-price-info__17tj7 {

        font-size: 12px;

        font-weight: 500;

       

    }

    

    .product-card_rating-sec__34VZH i {

        font-size: 15px;

        padding: 0 0 1px 3px;

    }

    

    .product-card_product-desc-tile__10UVW{

        

        display: flex;

        justify-content: space-between;

    }

    

    .earliest-delivery_earliest-del__23XZW {

        text-align: left;

        font-size: 12px;

        color: #555;

        text-overflow: ellipsis;

        margin-bottom: 8px;

        margin-top: 8px;

        overflow: hidden;

        padding-right:18px;

    }

    

    .product-card_product-review-info__2-RtV {

        color:#4f4848;

        font-size: 12px;

    }

    

    label{

        text-transform: capitalize;

    }


    /*product try end*/

    

    @media(max-width:767px){

        .product-item{

            width:auto;

        }

        

        .product-list{

            display:flex;

            flex-direction:column !important;

        }

        .pro-list{

            margin-top:2%;

        }

        

        .pro-list{

            width:100%;

        }

        .product-item{

            margin:auto;

        }

        .filters{

            width:100%;

        }

    }

    

    @media(min-width:768px) and (max-width:920px){

        .filters{

            width:191px;

        }

    }

     

    @media (max-width:400px){

        .filters{

            width:22rem !important;

        }

    }

    
    /* @media(max-width:416px){

        .filters{

            width:23.1rem ;

        }

    } */

    /*@media(max-width:435px){*/

    /*    .filters{*/

    /*        width:25.3rem;*/

    /*    }*/

    /*}*/
    @media (max-width: 756px) {
    .card__image {
        border-radius: 5px;
        height: 160px;
        transition: transform 0.25s ease-in-out;
        /* width: 300px; */
    }
     .card-img{


        border: 1px solid #ebebeb;

        border-radius: 5px;

        transition-property: all;

         transition-duration: 0.5s;

        background-color: #616b37;

        color:#ffffff;

        width:auto;

    }
}


    @media (min-width: 360px) and (max-width: 600px)

    {

        .wid {

            width: 65% !important;

        }

    }

    @media(min-width:1800px){
        .product-item{
            width: 16.66666667%;
        }
    }

    .image{

       height:15px;

       width:22px !important;

    }

    a:hover{
        color:black;
    }
    
    .filter_clear_all{
        color: #2179D0;
        font-weight:600;
    padding-top: 13px;
    text-align: end;
    margin-right: 20px;
    cursor: pointer;
    }
   

</style>

<section class="">

    <!--<div class="breadcrumbs" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQapHZj7q2DZY0H5lMJYJec5MdUUE4G86aW_g&usqp=CAU'); background-size: cover; background-position: center; min-height: 250px;">-->
    <div class="breadcrumbs" style="background-image: url(<?= base_url('public/images/Untitled design (1).png'); ?>); background-size: cover; background-position: center; min-height: 250px;">
        <div class="breadcrumbs-inner">

            <div class="row m-0">

                <div class="col-md-3 col-sm-6 wid">

                <div class="breadcume_banner">

                        <?php if($findBreadcumProd == "") : ?>

                        <div class="container_course my-5">

                            <div class=" breadcume_content" style="text-align:center;">

                                <h4 style="color:white !important;">Product List</h4>

                                <div class="breadcrumb_area" style="display: flex; justify-content:center">

                                    <h5 style="margin: 0; display: inline;">

                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>

                                    </h5>

                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>

                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;"><?= isset($search_name) ? $search_name : "Product List" ?></span>

                                </div>

                            </div>

                        </div>

                        <?php else : ?>

                        <div class="container_course my-5">

                            <div class=" breadcume_content" style="text-align:center;">

                                <h4 style="color:white !important;">Product List</h4>

                                <div class="breadcrumb_area" style="display: flex; justify-content:center">

                                    <h5 style="margin: 0; display: inline;">

                                        <a href="<?= base_url('/'); ?>" class="router-link-active" style="text-decoration: none; color: #000;"><span>Home</span></a>

                                    </h5>

                                    <span class="my-auto" style="margin: 0 10px; text-decoration: none; color: #000;">/</span>

                                    <span class="page_title my-auto" style="display: inline; text-decoration: none; color: #000;">Product List</span>

                                </div>

                            </div>

                        </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="container-fluid">

<div class="row mt-2 product-list">

    <div class="col-md-3 col-12">

        <div class="filters-fixed">

            <div class="filters">
                
                <div class="row">
                    <div class="col-md-6 col-6">
                        <h5 class="filter-heading p-3 color-dark mb-0">Filter</h5>
                    </div>
                    <div class="col-md-6 col-6">
                        <p class="filter_clear_all" id="clear_all_link" onclick="clear_all()" style="display: none;">Clear All</p>
                    </div>
                </div>
                <div class="filter-section">
                    <div class="dropdown">
                        
                        <div class="main-label">
                            <div class="dropdown-label">Price</div>
                            <i id="plusbtn1" class="fa-solid fa-plus plus" onclick="hidePlus(1);"></i>
                            <p id="clear_price" style="cursor: pointer; display: none;color: #2179D0;position: relative;text-align: end;margin-right: -150px;"  onclick="clear_fun('price')">Clear</p>
                            <i style="display:none;padding-top: 1px;" id="minusbtn1" class="fa-solid fa-minus minus"  onclick="hideMinus(1);"></i>
                        </div>
                        <div class="sub-menu sub-details" id="sum1">
                            <div class="checkbox-item">
                                <input type="checkbox" name="price[]" id="price-option1" value="0-500" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="price-option1">₹0 - ₹500</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="price[]" id="price-option2" value="500-1000" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="price-option2">₹500 - ₹1000</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="price[]" id="price-option3" value="1000-1500" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="price-option3">₹1000 - ₹1500</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="price[]" id="price-option4" value="1500-2000" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="price-option4">₹1500 - ₹2000</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="price[]" id="price-option5" value="2000" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="price-option5">₹2000 AND ABOVE</label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <?php if ($hideWeightFilter != 4 && $hideWeightFilter != 31): ?>
                <div class="filter-section">
                    <div class="dropdown">
                        <div class="main-label">
                            <div class="dropdown-label">Weight</div>
                            <i id="plusbtn5" class="fa-solid fa-plus plus" onclick="hidePlus(5);"></i>
                            <p id="clear_weight" style="cursor: pointer; display: none;color: #2179D0;position: relative;text-align: end;margin-right: -150px;"  onclick="clear_fun('weight')">Clear</p>
                            <i style="display:none; padding-top: 1px;" id="minusbtn5" class="fa-solid fa-minus minus" onclick="hideMinus(5);"></i>
                        </div>
                        <div class="sub-menu sub-details" id="sum5">
                            <div class="checkbox-item">
                                <input type="checkbox" name="weight[]" id="weight-option5" value="500gm" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="weight-option5">1/2 Kg</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="weight[]" id="weight-option6" value="1kg" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="weight-option6">1 kg</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="weight[]" id="weight-option7" value="1.5kg" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="weight-option7">1.5 kg</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="weight[]" id="weight-option8" value="2kg+" onclick="stopPropagation(event)" />
                                <label class="checkbox-label" for="weight-option8">2 kg and above</label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>

    </div>

    <div class="col-md-9 col-12 pro-list">
        <div class="product-listing pt-1" id="product-listing">
            <!-- Product html Section -->
            <div class="row m-3" id="product_html_data" style="    margin-left: 3px !important;">
               
            </div>
            
        </div>
    </div>

</div>

</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
var base_url = '<?= base_url() ?>';
var product_id  = <?= $product_id ?>;

document.querySelectorAll('input[name="price[]"], input[name="weight[]"]').forEach(function(checkbox) {
    checkbox.addEventListener('click', updateURL);
});

function clear_all(){
    document.querySelectorAll('input[name="price[]"], input[name="weight[]"]').forEach(function(checkbox) {
        checkbox.checked = false;
    });
    updateURL();
}

function updateURL() {
    var params = new URLSearchParams(window.location.search);
    params.delete('price[]');
    params.delete('weight[]');

    var filtersApplied = false;

    var priceChecked = document.querySelectorAll('input[name="price[]"]:checked').length > 0;
    var weightChecked = document.querySelectorAll('input[name="weight[]"]:checked').length > 0;

    if (priceChecked) {
        filtersApplied = true;
        document.querySelectorAll('input[name="price[]"]:checked').forEach(function(checkbox) {
            params.append('price[]', checkbox.value);
        });
        document.getElementById('clear_price').style.display = 'block';
    } else {
        document.getElementById('clear_price').style.display = 'none';
    }

    var weightFilterExists = document.querySelector('input[name="weight[]"]') !== null;

    if (weightFilterExists) {
        if (weightChecked) {
            filtersApplied = true;
            document.querySelectorAll('input[name="weight[]"]:checked').forEach(function(checkbox) {
                params.append('weight[]', checkbox.value);
            });
            document.getElementById('clear_weight').style.display = 'block';
        } else {
            document.getElementById('clear_weight').style.display = 'none';
        }
    }

    if (filtersApplied) {
        document.getElementById('clear_all_link').style.display = 'block';
        if (!params.has('filter')) {
            params.append('filter', 'yes');
        }
    } else {
        document.getElementById('clear_all_link').style.display = 'none';
        params.delete('filter');
    }

    window.history.replaceState({}, '', `${window.location.pathname}?${params}`);

    var dataString = params.toString();

    $.ajax({
        url: base_url + 'cakeprodlist/' + product_id,
        method: 'POST',
        data: dataString,
        contentType: 'application/x-www-form-urlencoded',
        success: function(data) {
            var jsonData = JSON.parse(data);
            if (jsonData.filter_set == "yes") {
                var clear_html = 'clear';
                $("#clear_design").html(clear_html);
            } else {
                $("#clear_design").html('');
            }
            product_list_Card(jsonData);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}


function clear_all() {
    document.querySelectorAll('input[name="price[]"], input[name="weight[]"]').forEach(function(checkbox) {
        checkbox.checked = false;
    });
    updateURL();
}

function clear_fun(filterType) {
    if (filterType === 'price') {
        document.querySelectorAll('input[name="price[]"]').forEach(function(checkbox) {
            checkbox.checked = false;
        });
    } else if (filterType === 'weight') {
        document.querySelectorAll('input[name="weight[]"]').forEach(function(checkbox) {
            checkbox.checked = false;
        });
    }
    updateURL();
}

updateURL();

function product_list_Card(data) {
    var products = data.product;
    // console.log(products);return;
    var product_html = '';
    var base_url = '<?= base_url() ?>';

    if (!products || products.length === 0) {
        product_html = `<div class="col-md-12" ><h3 style="text-align: center;">No Data Found...</h3></div>`;
    }

    products.forEach(function(product) {
        var product_name = product.product_name;
        var truncated_name = product_name.length > 40 ? product_name.substring(0, 40) + '...' : product_name;

        product_html += `<div class="col-md-3 col-6">
                            
                                <a href="${base_url}viewdetails/${product.product_id}" class="card card-img">
                                    <img src="${base_url}public/admin/assets/uploads/product/${product.image_name}" class="card__image" alt="${truncated_name}"/>
                                    <div class="menu-details">
                                        <div class="name-job under_card">
                                            <div class="product-card_product-info-holder__3TUe8">
                                                <div class="product-card_product-info__2G6yk" style="transform: translateY(0px);">
                                                    <meta itemprop="availability" content="https://schema.org/InStock">
                                                    <div class="product-card_product-title__32LFp px-2" itemprop="name">
                                                        <img class="image pe-2" src="${base_url}public/images/veg.jpg">
                                                        ${truncated_name}
                                                    </div>
                                                    <div class="product-card_product-desc-tile__10UVW px-2">
                                                        <meta itemprop="priceCurrency" content="INR">
                                                        <span class="product-card_product-price-info-container__E9rQf">
                                                            <span class="product-card_product-price-info__17tj7" data-testid="currency">
                                                                ₹&nbsp;<span itemprop="price" data-testid="price">${product.price}</span>
                                                            </span>
                                                        </span>
                                                        <span class="product-card_product-weight-info-container__E9rQf" hidden>
                                                            <span class="product-card_product-price-info__17tj7" data-testid="">
                                                                ₹&nbsp;<span itemprop="weight" data-testid="weight">${product.kg}</span>
                                                            </span>
                                                        </span>
                                                        <span class="product-card_rating-sec__34VZH">${parseFloat(product.average_rating).toFixed(1)}<i class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div>`;
    });

    $("#product_html_data").html(product_html);
}

function clear_fun(filterType) {
    if (filterType === 'price') {
        document.querySelectorAll('input[name="price[]"]').forEach(function(checkbox) {
            checkbox.checked = false;
        });
    } else if (filterType === 'weight') {
        document.querySelectorAll('input[name="weight[]"]').forEach(function(checkbox) {
            checkbox.checked = false;
        });
    }
    updateURL();
}
</script>
<script>

//     $(document).ready(function() {
//     // Function to filter products by price range start
//         function filterByPrice() {
//             var checkedPriceValues = $('input[type="checkbox"][name="price"]:checked').map(function() {
//                 return $(this).val();
//             }).get();

//             $('.product-item').each(function() {
//                 var productPrice = parseInt($(this).data('price'));
//                 var priceInRange = checkedPriceValues.length === 0 || checkedPriceValues.includes(getPriceRange(productPrice));
//                 if (priceInRange) {
//                     $(this).show();
//                 } else {
//                     $(this).hide();
//                 }
//             });
//         }

//         function getPriceRange(price) {
//             if (price <= 300) {
//                 return 'option1';
//             } else if (price > 300 && price <= 500) {
//                 return 'option2';
//             } else if (price > 500 && price <= 800) {
//                 return 'option3';
//             } else if (price > 800) {
//                 return 'option4';
//             }
//         }
//         $('input[type="checkbox"][name="price"]').change(function() {
//             filterByPrice();
//         });
//         filterByPrice();



//     function filterByWeight() {
//         var checkedWeightValues = $('input[type="checkbox"][name="weight"]:checked').map(function() {
//             return $(this).val();
//         }).get();

//         $('.product-item').each(function() {
//             var productWeight = parseWeight($(this).data('weight'));
//             var weightInRange = checkedWeightValues.length === 0 || isWeightInRange(productWeight, checkedWeightValues);
//             if (weightInRange) {
//                 $(this).show();
//             } else {
//                 $(this).hide();
//             }
//         });
//     }

//     function parseWeight(weightStr) {
//         if (weightStr.includes('gm')) {
//             return parseFloat(weightStr.replace('gm', '')); // remove 'gm' and parse as float
//         } else if (weightStr.includes('kg')) {
//             return parseFloat(weightStr.replace('kg', '')) * 1000; // remove 'kg', parse as float, and convert to grams
//         }
//         return 0;
//     }

//     function isWeightInRange(weight, ranges) {
//         for (var i = 0; i < ranges.length; i++) {
//             var range = ranges[i];
//             if (range === '500gm' && weight <= 500) {
//                 return true;
//             } else if (range === '1kg-2kg' && weight > 1000 && weight <= 2000) {
//                 return true;
//             } else if (range === '2kg-3kg' && weight > 2000 && weight <= 3000) {
//                 return true;
//             } else if (range === '3kg-5kg' && weight > 3000 && weight <= 5000) {
//                 return true;
//             } else if (range === '5kg+' && weight > 5000) {
//                 return true;
//             }
//         }
//         return false;
//     }

//     $('input[type="checkbox"][name="weight"]').change(function() {
//         filterByWeight();
//     });

//     // Initial call to filter products on page load
//     filterByWeight();

// // 20/6/2024
//     // function filterByWeight() {
//     //     var checkedWeightValues = $('input[type="checkbox"][name="weight"]:checked').map(function() {
//     //         return $(this).val();
//     //     }).get();
        
//     //     $('.product-item').each(function() {
//     //         var productWeight = parseWeight($(this).data('weight').toString()); // Convert to string
//     //         var weightInRange = checkedWeightValues.length === 0 || isWeightInRange(productWeight, checkedWeightValues);
    
//     //         if (weightInRange) {
//     //             $(this).show();
//     //         } else {
//     //             $(this).hide();
//     //         }
//     //     });
//     // }
    
//     // function parseWeight(weightStr) {
//     //     if (weightStr.includes('gm')) {
//     //         return parseFloat(weightStr.replace('gm', '')); // remove 'gm' and parse as float
//     //     } else if (weightStr.includes('kg')) {
//     //         return parseFloat(weightStr.replace('kg', '')) * 1000; // remove 'kg', parse as float, and convert to grams
//     //     }
//     //     return 0;
//     // }
    
//     // function isWeightInRange(weight, ranges) {
//     //     for (var i = 0; i < ranges.length; i++) {
//     //         var range = ranges[i];
//     //         if (range === '500gm' && weight <= 500) {
//     //             return true;
//     //         } else if (range === '1kg-2kg' && weight >= 1000 && weight <= 2000) {
//     //             return true;
//     //         } else if (range === '2kg-3kg' && weight > 2000 && weight <= 3000) {
//     //             return true;
//     //         } else if (range === '3kg-5kg' && weight > 3000 && weight <= 5000) {
//     //             return true;
//     //         } else if (range === '5kg+' && weight > 5000) {
//     //             return true;
//     //         }
//     //     }
//     //     return false;
//     // }
    
//     // $('input[type="checkbox"][name="weight"]').change(function() {
//     //     filterByWeight();
//     // });

//     // // Initial call to filter products on page load
//     // filterByWeight();


//     });

</script>



<?= $this->endSection() ?>

