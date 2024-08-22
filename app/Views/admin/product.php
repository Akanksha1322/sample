    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
    <style>
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }
        
        .switch input {
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
          border-radius: 34px;
        }
        
        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
          border-radius: 50%;
        }
        
        input:checked + .slider {
          background-color: #616b37;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #616b37;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }
          .btn-primary {
            background-color: #616b37 !important;
            border-color: #616b37;
        }
        
        .page-item.active .page-link {
    
            background-color: #616b37;
            border-color: #616b37;
        }
        
        @media(max-width:768px){
            
            .action-flex{
                 display:flex !important;
            }
           
        }
    </style>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form  action="<?= base_url('admin-product/1');?>" class="m-form m-form--fit m-form--label-align-right" method="post">
                            
                                <div class="card-header">
                                    <div class="d-flex align-items-center m-0">
                                        <div class="col-sm-4">
                                            <div class="float-left">
                                                <strong class="card-title">Product List</strong>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="float-right-md">
                                                <div class="row">
                                                    <?php
                                                        if(isset($_SESSION['product_search'])){
                                                            $product_search = $_SESSION['product_search'];
                                                        }else{
                                                            $product_search = "";
                                                        }
                                                    ?>
                                                    <div class="col-md-4 col-6">
                                                        <input type="text" name="product_search" id="product_search" value="<?= $product_search ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 col-3">
                                                        <button type="submit" id="filterBtn" class="btn btn-primary px-4">Filter</button>
                                                    </div>
                                                    <div class="col-md-2 col-3">
                                                        <button onclick="reset_product_data()" type="button" id="filterBtn" class="btn btn-primary px-4">Reset</button>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <button type="button" class="btn btn-primary px-4" style="width: 100%;"><a href="<?= base_url(); ?>admin-addproduct"><span class="text-white">Add Product</span></a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Product Name</th>
                                                <!--<th class="text-center">Color</th>-->
                                                <th class="text-center">Category Name</th>
                                                <!--<th class="text-center">Flavour Name</th>-->
                                                <!--<th class="text-center">Weight</th>-->
                                                <!--<th class="text-center">Price</th>-->
                                                <!--<th class="text-center">Quantity</th>-->
                                                <!--<th class="text-center">product Image</th>-->
                                                <th class="text-center">Status</th>
                                                <th class="text-center" colspan="2"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; if(isset($product) && (count($product) > 0)) { $i = 1; }?>
                                                <?php foreach ($product as $key => $value) { ?>
                                                <tr>
                                                    <th class="text-center"><?= $i; ?></th>
                                                    <td class="text-center">
                                                        <?php
                                                        $product_name = $value->product_name;
                                                        $truncated_name = (strlen($product_name) > 50) ? substr($product_name, 0, 50) . '...' : $product_name;
                                                        ?>
                                                        <span class="truncated-text"><?= $truncated_name; ?></span>
                                                        <?php if (strlen($product_name) > 50): ?>
                                                            <span class="full-text" style="display: none; white-space: normal;"><?= $product_name; ?></span>
                                                            <a href="javascript:void(0);" class="show-more-link" onclick="toggleText(this)" style="color: blue; cursor: pointer;">Show More</a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center"><?= getCategoryName($value->category_id); ?></td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" onclick="customChangeStatus(this.checked, <?= $value->id; ?>, 'product')" value="<?= $value->status ?>" <?= ($value->status == '1') ? 'checked' : '' ?>>
                                                                <span class="slider"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center action-flex">
                                                        <a href="#" onclick="customChangeStar(this, <?= $value->id; ?>, 'product')">
                                                            <i class="fa <?= ($value->bestseller == '1') ? 'fa-star' : 'fa-star-o' ?>" style="color:<?= ($value->bestseller == '1') ? '#f0c419' : '#ccc' ?>; font-size: 25px;"></i>
                                                        </a>
                                                        <a href="<?= base_url('admin-editproduct/' .$value->id) ?>"><i class="fa fa-edit" style="color:#3279a8; font-size: 25px;"></i></a>
                                                        <!--<a href="< ?= base_url('admin-deleteproduct/' .$value->id) ?>"><i class="fa fa-trash" style="color:#eb5772;"></i></a>-->
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" data-delete-url="<?= base_url('admin-deleteproduct/' .$value->id) ?>"><i class="fa fa-trash" style="color:#eb5772; font-size: 25px;"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <!--<div class="pagination-area mt-15 mb-50">-->
                                    <!--    <nav aria-label="Page navigation example">-->
                                    <!--        <ul class="pagination justify-content-end">-->
                                    <!--            < ?php if ($currentPage > 1): ?>-->
                                    <!--                <li class="page-item"><a class="page-link" href="< ?= base_url("admin-productlist/" . ($currentPage - 1)) ?>">Prev.</a></li>-->
                                    <!--            < ?php endif; ?>-->
                                
                                    <!--            < ?php for ($i = max(1, $currentPage - 3); $i <= min($totalPages, $currentPage + 3); $i++): ?>-->
                                    <!--                <li class="page-item < ?= ($i == $currentPage) ? 'active' : '' ?>">-->
                                    <!--                    <a class="page-link" href="< ?= base_url("admin-productlist/$i") ?>"><?= $i ?></a>-->
                                    <!--                </li>-->
                                    <!--            < ?php endfor; ?>-->
                                
                                    <!--            < ?php if ($currentPage < $totalPages): ?>-->
                                    <!--                <li class="page-item"><a class="page-link" href="< ?= base_url("admin-productlist/" . ($currentPage + 1)) ?>">Next</a></li>-->
                                    <!--            < ?php endif; ?>-->
                                    <!--        </ul>-->
                                    <!--    </nav>-->
                                    <!--</div>-->
                                    
                                    <!-- pagination code start -->
                                        <div class="pagination-area mt-15 mb-50">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end">
                                                    <?php
                                                    $queryString = "";
                                                    if (!empty($product_search)) {
                                                        $queryString .= "&search=$product_search";
                                                    }
                                                    ?>
                                                    <?php if ($currentPage > 1): ?>
                                                        <li class="page-item"><a class="page-link" href="<?= base_url("admin-product/" . ($currentPage - 1) . "?$queryString") ?>">Prev.</a></li>
                                                    <?php endif; ?>
                                        
                                                    <?php for ($i = max(1, $currentPage - 3); $i <= min($totalPages, $currentPage + 3); $i++): ?>
                                                        <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                                            <a class="page-link" href="<?= base_url("admin-product/$i?$queryString") ?>"><?= $i ?></a>
                                                        </li>
                                                    <?php endfor; ?>
                                        
                                                    <?php if ($currentPage < $totalPages): ?>
                                                        <li class="page-item"><a class="page-link" href="<?= base_url("admin-product/" . ($currentPage + 1) . "?$queryString") ?>">Next</a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </nav>
                                        </div>

                                        <!-- pagination code end -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
        <!-- 20/6/2024 text wrap -->
        <script>
        function reset_product_data() {
            $.ajax({
                type: 'POST',
                url: '<?= base_url('product_list_reset') ?>',
                success: function(response) {
                    if (response.success) {
                        window.location.href = '<?= base_url('admin-product/1') ?>';
                    } else {
                        console.error('Failed to reset order list');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error sending request:', error);
                }
            });
        }
            function insertLineBreaks(text, interval) {
                let result = '';
                for (let i = 0; i < text.length; i += interval) {
                    result += text.slice(i, i + interval) + '<br>';
                }
                return result;
            }
            
            function toggleText(element) {
                const truncatedText = element.previousElementSibling.previousElementSibling;
                const fullText = element.previousElementSibling;
                if (fullText.style.display === "none") {
                    fullText.innerHTML = insertLineBreaks(fullText.textContent, 200);
                    fullText.style.display = "inline";
                    truncatedText.style.display = "none";
                    element.textContent = "Show Less";
                } else {
                    fullText.style.display = "none";
                    truncatedText.style.display = "inline";
                    element.textContent = "Show More";
                }
            }
        </script>
        <!-- 20/6/2024 text wrap -->

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function customChangeStar(element, id, table) {
            $('#errorAlertMessage').empty('');
            $('#alert_message').empty('');
            let value = ($(element).find('i').hasClass('fa-star')) ? 1 : 0; 
            $.ajax({
                type: 'GET',
                url: '<?= base_url('admin/changebestseller'); ?>' + '/' + table + '/' + id + '/' + value,
                success: function(msg) {
                    if (value === 1) {
                        $(element).find('i').removeClass('fa-star').addClass('fa-star-o').css('color', '#ccc');
                    } else {
                        $(element).find('i').removeClass('fa-star-o').addClass('fa-star').css('color', '#f0c419');
                    }
                    $('#errorAlertMessage').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + msg.success + '</div>');
                },
                error: function(request, status, error) {
                    console.log(request, status, error);
                    $('#errorAlertMessage').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + error + '</div>');
                }
            });
        }
    </script>

    <?= $this->endSection() ?>
