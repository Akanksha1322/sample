    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
        <style>
            .btn-primary {
            background-color: #616b37 !important;
            border-color: #616b37;
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
                                        <div class="float-left"><strong class="card-title">Edit Product</strong></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-product/1'); ?>" style="color: #fff;">Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="<?= base_url('admin-updateproduct/'.$product[0]->product_id); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="product_name" class="control-label mb-1">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" id="product_name" name="product_name" class="form-control" value="<?= $product['0']->product_name ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="category" class="control-label mb-1">Category Name <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control" required>
                                                <option>
                                                    <?php foreach ($category as $key => $value) :?>
                                                        <option value="<?php echo $value['id']; ?>" <?php if($product[0]->category_id == $value['id']) {echo "selected";}?>><?php echo $value['category_name']; ?></option>
                                                    <?php endforeach; ?>
                                                </option>
                                            </select>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" id="flavour-div">
                                        <div class="form-group ml-3">
                                            <label for="flavour" class="control-label mb-1">Product Flavour</label>
                                            <select name="flavour_id" class="form-control">
                                                <option value="">Please select</option>
                                                <?php foreach ($proflavour as $key => $value) : ?>
                                                <option value="<?php echo $value['id']; ?>"  <?php if($product[0]->flavour_id == $value['id']) {echo "selected";}?>><?php echo $value['product_flavour']; ?></option>
                                                    <!--<option value="< ?php echo $value['id']; ?>" < ?php if($value['id']==$proflavour[0]['id']) {echo "selected";}?>>< ?php echo $value['product_flavour']; ?></option>-->
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6" id="prodimg-div">
                                        <div class="form-group mr-3">
                                            <label for="product_image" class="control-label mb-1">Product Image <span class="text-danger">*</span></label>
                                            <input type="file" id="product_image" name="product_images[]" class="form-control py-1" multiple>
                                            <?php foreach ($prodimg as $image) : ?>
                                                <div style="display: inline-block; margin-right: 10px; margin-top:5px;">
                                                    <img src="<?= base_url('public/admin/assets/uploads/product/' . $image->image_name) ?>" alt="Product Image" height="50px;" width="50px;">
                                                    <button type="button" class="btn badge btn-danger text-light delete-image" data-image-id="<?= $image->id ?>" style="margin-top: -42%;margin-left: -29%;">x</button>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="status" class="control-label mb-1">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control" required>
                                                <option value="">Please select</option>
                                                <option value="1" <?= ($product[0]->status == '1') ? 'selected' : '' ?>>Active</option>
                                                <option value="0" <?= ($product[0]->status == '0') ? 'selected' : '' ?>>Inactive</option>
                                            </select>                                    
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="product_des" class="control-label mb-1">Product Description</label>
                                            <textarea type="text" id="product_des" name="product_des" rows="4" class="form-control"><?= $product['0']->product_description ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="deli_info" class="control-label mb-1">Delivery Information</label>
                                            <textarea type="text" id="deli_info" name="deli_info" rows="4" class="form-control"><?= $product['0']->delivery_info ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="care_instruct" class="control-label mb-1">Care Instruction</label>
                                            <textarea type="text" id="care_instruct" name="care_instruct" rows="4" class="form-control"><?= $product['0']->care_instruction ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-start">
                                        <div class="py-2 ml-3"><button type="submit" class="btn btn-primary">Update</button></div>
                                    </div>
                                </div>
                            </form>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered mx-3" style="width:97.3% !important;">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Weight</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center" colspan="2"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; if(isset($productprice) && (count($productprice) > 0)) { $i = 1; }?>
                                    <?php foreach ($productprice as $key => $value) { ?>
                                    <tr>
                                        <th class="text-center"><?= $i; ?></th>
                                        <td class="text-center"><?= $value->kg; ?></td>
                                        <td class="text-center"><?= $value->price; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('admin-edtprodprice/' .$value->id) ?>"><i class="fa fa-edit" style="color:#3279a8; font-size: 25px;"></i></a>
                                            <!--<a href="< ?= base_url('admin-dltprodprice/' .$value->id) ?>"><i class="fa fa-trash" style="color:#eb5772;"></i></a>-->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" data-delete-url="<?= base_url('admin-dltprodprice/' .$value->id) ?>"><i class="fa fa-trash" style="color:#eb5772; font-size: 25px;"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Delete Confirmation Modal End -->
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5></div>
                    <div class="modal-body">Are you sure you want to delete this item? </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Confirmation Modal End -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--div hide show depends on category_id -->
    <script>
        function checkCategory() {
            // Get the selected category value
            var category = document.querySelector('select[name="category_id"]').value;
            // Example condition to hide the flavour-div
            if (category == '4' || category == '31') {
                document.getElementById('flavour-div').style.display = 'none';
                document.getElementById('prodimg-div').classList.remove('mr-3');
                document.getElementById('prodimg-div').classList.add('ml-3');
            } else {
                document.getElementById('flavour-div').style.display = 'block';
                document.getElementById('prodimg-div').classList.remove('ml-3');
                document.getElementById('prodimg-div').classList.add('mr-3');
            }
        }
    </script>

    <!--div hide show depends on category_id end -->


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('#deleteConfirmModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget); 
                    var deleteUrl = button.data('delete-url'); 
                    var modal = $(this);
                    modal.find('#confirmDelete').data('delete-url', deleteUrl);
                });
                $('#confirmDelete').click(function () {
                    var deleteUrl = $(this).data('delete-url');
                    window.location.href = deleteUrl; 
                });
            });
        </script>

    <!-- ckeditor start -->
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
    <!-- ckeditor end -->
    
    <script>
        $(document).ready(function () {
            $(".delete-image").click(function () {
                var ImageId = $(this).data("image-id");
                if(confirm("Are you sure want to delete this image?")){
                    var button = $(this);
                    $.ajax({
                        url: "<?= base_url('admin/delete_image/') ?>" + ImageId,
                        type: "POST",
                        data: { image_id: ImageId },
                        success: function (response) {
                            location.reload(); 
                        },
                        error: function () {
                            alert("Error occurred while deleting image.");
                        }
                    });
                }
            }); // Missing closing parenthesis
        });
    </script>
    <?= $this->endSection() ?>
