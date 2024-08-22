    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
    <style>
        .btn-primary {
            background-color: #616b37 !important;;
            border-color: #616b37;
        }
        .btn-primary:hover{
            
            opacity:1 !important;
        }
        
    </style>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="float-left">
                                            <strong class="card-title">Add Flower Variant</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-product'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="addProductForm" action="<?= base_url('admin-storeflowervariant'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="product_name" class="control-label mb-1">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" id="product_name" name="product_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="category" class="control-label mb-1">Category Name <span class="text-danger">*</span></label>
                                            <select name="category_id" id="category" class="form-control" required onchange="checkCategory()">
                                                <option value="">Select Category</option>
                                                <?php foreach ($category as $key => $value) : ?>
                                                    <option value="<?php echo $value['id']; ?>" data-category-name="<?php echo $value['category_name']; ?>"><?php echo $value['category_name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" id="image-div">
                                        <div class="form-group ml-3">
                                            <label for="product_image" class="control-label mb-1">Product Image <span class="text-danger">*</span></label>
                                            <input type="file" id="product_image" name="product_image" class="form-control py-1" multiple required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="product_price" class="control-label mb-1">Product Price <span class="text-danger">*</span></label>
                                            <input type="text" id="product_price" name="product_price" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="status" class="control-label mb-1">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            <select>                                    
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="row">-->
                                <!--    <div class="col-12">-->
                                <!--        <div class="form-group ml-3 mr-3">-->
                                <!--            <label for="product_des" class="control-label mb-1">Product Description</label>-->
                                <!--            <textarea type="text" id="product_des" name="product_des" rows="10" class="form-control"></textarea>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    <div class="col-12">-->
                                <!--        <div class="form-group ml-3 mr-3">-->
                                <!--            <label for="deli_info" class="control-label mb-1">Delivery Information</label>-->
                                <!--            <textarea type="text" id="deli_info" name="deli_info" rows="10" class="form-control"></textarea>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    <div class="col-12">-->
                                <!--        <div class="form-group ml-3 mr-3">-->
                                <!--            <label for="care_instruct" class="control-label mb-1">Care Instruction</label>-->
                                <!--            <textarea type="text" id="care_instruct" name="care_instruct" rows="10" class="form-control"></textarea>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    <div class="col-6">-->
                                <!--        <div class="form-group ml-3">-->
                                <!--            <label for="product_price" class="control-label mb-1">Product Price <span class="text-danger">*</span></label>-->
                                <!--            <input type="text" id="product_price" name="product_price" class="form-control" required>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="row">
                                    <div class="col-12 text-center"><div class="py-2"><button type="submit" class="btn btn-primary">Submit</button></div></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    <div class="clearfix"></div>
    <!-- ckeditor -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var isSpecialCategory = false;
    
        function checkCategory() {
            var categorySelect = document.getElementById('category');
            var selectedOption = categorySelect.options[categorySelect.selectedIndex];
            var categoryName = selectedOption.getAttribute('data-category-name');
            var categoryId = selectedOption.value;
            var flavourDiv = document.getElementById('flavour-div');
            var productWeight = document.getElementById('product_weight');
            var addMore = document.getElementById('add_more');
            var productWeightLabel = document.getElementById('product-weight-label');
    
            if (categoryId == '31' || categoryId == '4') {
                flavourDiv.style.display = 'none';
                productWeight.style.display = 'none';
                addMore.style.display = 'none';
            } else {
                flavourDiv.style.display = 'block';
                productWeight.style.display = 'block';
                addMore.style.display = 'block';
            }
    
            if (categoryId == '31' || categoryId == '4') {
                productWeightLabel.textContent = 'Product Quantity';
                isSpecialCategory = true;
            } else {
                productWeightLabel.textContent = 'Product Weight (kg)';
                isSpecialCategory = false;
            }
        }
    </script>

    <!--6/6/2024-->
<!--//     function checkCategory() {-->
<!--//         var categorySelect = document.getElementById('category');-->
<!--//         var selectedOption = categorySelect.options[categorySelect.selectedIndex];-->
<!--//         var categoryId = selectedOption.value;-->
<!--//         var flavourDiv = document.getElementById('flavour-div');-->
<!--//         var imageDiv = document.getElementById('image-div');-->
<!--//         var productWeightLabel = document.getElementById('product-weight-label');-->

<!--//         // Determine display and class adjustments based on category-->
<!--//         if (categoryId == '31' || categoryId == '4') {-->
<!--//             flavourDiv.style.display = 'none';-->
<!--//             // imageDiv.classList.remove('mr-3');-->
<!--//             // imageDiv.classList.add('ml-3');-->
<!--//         } else {-->
<!--//             flavourDiv.style.display = 'block';-->
<!--//             // imageDiv.classList.remove('ml-3');-->
<!--//             // imageDiv.classList.add('mr-3');-->
<!--//         }-->

<!--//         // Change label for product weight or quantity-->
<!--//         if (categoryId == '31' || categoryId == '4') {-->
<!--//             productWeightLabel.textContent = 'Product Quantity';-->
<!--//         } else {-->
<!--//             productWeightLabel.textContent = 'Product Weight (kg)';-->
<!--//         }-->
<!--//     }-->
<!--// </script>-->

    <!--</script>-->
    <!--6/6/2024-->
    <script>
        ClassicEditor
        .create( document.querySelector( '#product_des' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
        
        ClassicEditor
        .create( document.querySelector( '#deli_info' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
        
        ClassicEditor
        .create( document.querySelector( '#care_instruct' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
    </script>

    <script>
        $(document).ready(function() {
            var counter = 1;
            $("#add_more").click(function() {
                var newFields = `
                    <div class="row">
                        <div class="col-1">
                            <i class="menu-icon fa fa-times remove_field ml-4 mt-4 text-danger"></i>
                        </div>
                        <div class="col-5 ml-0">
                            <div class="form-group">
                                <label for="product_price" class="control-label mb-1">Product Price <span class="text-danger">*</span></label>
                                <input type="text" id="product_price" name="product_price[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mr-3">
                                <label for="product_weight" class="control-label mb-1">${isSpecialCategory ? 'Product Quantity' : 'Product Weight (kg)'}</label>
                                <input type="text" id="product_weight" name="product_weight[]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                `;
                $("#additional_fields").append(newFields);
                counter++;
                $(document).on("click", ".remove_field", function() {
                    $(this).closest(".row").remove();
                });

            });
        });
    </script>

    <?= $this->endSection() ?>
