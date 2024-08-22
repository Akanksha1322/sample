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
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #616b37;
            border-color: #616b37;
        }
        .page-link {
             color: #616b37;
        }
        #filterBtn { 
            background-color: #616b37 !important;
            border-radius: 5px;
            /*width: 100%;*/
            /*padding: 6px;*/
            border: none;
            color: #ffffff;
        }
        
        @media(max-width:768px){
            #filterBtn {
                width: 85%;
               
            }
        }
        
        .pending-order {
            background-color: #616b37;
            color: white;
        }
        
    </style>   
    <section>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form  action="<?= base_url('admin-order/1');?>" class="m-form m-form--fit m-form--label-align-right" method="post">
                                <div class="card-header">
                                    <div class="row m-0">
                                        <div class="col-sm-2"><div class="float-left"><strong class="card-title">Order List</strong></div></div>
                                        <div class="col-sm-10">
                                            <div class="float-right-md">
                                                <div class="row">
                                                    <?php 
                                                    if(isset($_SESSION['order_search'])){
                                                        $order_Search = $_SESSION['order_search'];
                                                    }else{
                                                        $order_Search = "";
                                                    }
                                                    
                                                    if(isset($_SESSION['order_from_date'])){
                                                        $order_from_date = $_SESSION['order_from_date'];
                                                    }else{
                                                        $order_from_date = "";
                                                    }
                                                    
                                                    if(isset($_SESSION['order_to_date'])){
                                                        $order_to_date = $_SESSION['order_to_date'];
                                                    }else{
                                                        $order_to_date = "";
                                                    }
                                                    
                                                    ?>
                                                    <div class="col-md-4 col-6">
                                                        <input type="text" name="search" id="search" value="<?= $order_Search ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <input type="date" id="fromDate" name="from_date" value="<?= $order_from_date ?>" class="form-control" placeholder="From Date">
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <input type="date" id="toDate" name="to_date" value="<?= $order_to_date ?>" class="form-control" placeholder="To Date">
                                                    </div>
                                                    <div class="col-md-1 col-3">
                                                        <button type="submit" id="filterBtn" class="btn">Filter</button>
                                                    </div>
                                                    <div class="col-md-1 col-3">
                                                        <button onclick="reset_data()" type="button" id="filterBtn" class="btn">Reset</button>
                                                    </div>
                                                </div>
                                                <!--<button type="button" class="btn btn-primary px-4 py-2"><a href="<= base_url(); ?>admin-category"><span class="text-white">Add Category</span></a></button>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <table id="bootstrap-data-table" class="table table-bordered table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Serial No.</th>
                                                            <th class="text-center">Order Id</th>
                                                            <th class="text-center">User Name</th>
                                                            <th class="text-center">Order Date</th>
                                                            <th class="text-center">Order Time</th>
                                                            <th class="text-center">Payment Method</th>
                                                            <th class="text-center">Amount</th>
                                                            <th class="text-center">Phone</th>
                                                            <th class="text-center" colspan="2">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $start = ($currentPage - 1) * $perPage + 1;
                                                        ?>
                                                        <?php if(isset($orders) && (count($orders) > 0)) { ?>
                                                            <?php foreach ($orders as $index => $order) {
                                                            if($order->order_view != 1){
                                                                $bg_color = "#ECFFDC";
                                                            }else{
                                                                $bg_color = "";
                                                            }
                                                            ?>
                                                                <tr style="background-color: <?= $bg_color ?>">
                                                                    <th class="text-start"><?= $start + $index; ?></th>
                                                                    <td class="text-start"><?= $order->order_id; ?></td>
                                                                    <td class="text-start"><?= $order->first_name . ' ' . $order->last_name; ?></td>
                                                                    <td class="text-start"><?= (new DateTime($order->orderdate))->format('d-m-Y'); ?></td>
                                                                    <td class="text-start"><?= (new DateTime($order->ordertime))->format('H:i:s'); ?></td>
                                                                    <td class="text-start"><?= $order->paymethod; ?></td>
                                                                    <td class="text-start"><?= number_format($order->totalamount, 2); ?></td>
                                                                    <td class="text-start"><?= $order->phone; ?></td>
                                                                    <td class="text-start">
                                                                        <a onclick="order_view(<?= $order->order_id ?>)">
                                                                            <i class="fa fa-eye mx-1" style="font-size: 25px;"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <tr><td colspan="10" class="text-center">Data not found</td></tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                
                                        <!-- pagination code start -->
                                        <div class="pagination-area mt-15 mb-50">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end">
                                                    <?php
                                                    $queryString = "";
                                                    if (!empty($search_)) {
                                                        $queryString .= "&search=$search_";
                                                    }
                                                    if (!empty($from_date_)) {
                                                        $queryString .= "&from_date=$from_date_";
                                                    }
                                                    if (!empty($to_date_)) {
                                                        $queryString .= "&to_date=$to_date_";
                                                    }
                                                    ?>
                                                    <?php if ($currentPage > 1): ?>
                                                        <li class="page-item"><a class="page-link" href="<?= base_url("admin-order/" . ($currentPage - 1) . "?$queryString") ?>">Prev.</a></li>
                                                    <?php endif; ?>
                                        
                                                    <?php for ($i = max(1, $currentPage - 3); $i <= min($totalPages, $currentPage + 3); $i++): ?>
                                                        <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                                            <a class="page-link" href="<?= base_url("admin-order/$i?$queryString") ?>"><?= $i ?></a>
                                                        </li>
                                                    <?php endfor; ?>
                                        
                                                    <?php if ($currentPage < $totalPages): ?>
                                                        <li class="page-item"><a class="page-link" href="<?= base_url("admin-order/" . ($currentPage + 1) . "?$queryString") ?>">Next</a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </nav>
                                        </div>

                                        <!-- pagination code end -->
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Order Confirmation Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Confirmation</h5></div>
                    <div class="modal-body" id="confirmationMessage">Are you sure you want to perform this action?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="confirmActionButton">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Order Confirmation Modal End -->
        
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
    </section>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function order_view(order_id) {
            $.ajax({
                type: 'POST',
                url: `<?= base_url('order_view_details') ?>`,
                data: { order_id: order_id },
                success: function(response) {
                    window.location.href = `<?= base_url('admin-vieworder/') ?>${order_id}`;
                },
                error: function(xhr, status, error) {
                    console.error('Error sending request:', error);
                }
            });
        }

        function reset_data() {
            $.ajax({
                type: 'POST',
                url: '<?= base_url('order_list_reset') ?>',
                success: function(response) {
                    if (response.success) {
                        window.location.href = '<?= base_url('admin-order/1') ?>';
                    } else {
                        console.error('Failed to reset order list');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error sending request:', error);
                }
            });
        }
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
        
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var actionSelects = document.querySelectorAll('.action-select');
            actionSelects.forEach(function(actionSelect) {
                var initialOption = actionSelect.value;
                actionSelect.addEventListener('change', function(event) {
                    var selectedOption = this.value;
                    var confirmationMessage = '';
        
                    if (selectedOption !== '') {
                    switch (selectedOption) {
                      case 'approve':
                        confirmationMessage = 'Are you sure you want to approve?';
                        break;
                      case 'pending':
                        confirmationMessage = 'Are you sure you want to mark as pending?';
                        break;
                      case 'shipped':
                        confirmationMessage = 'Are you sure you want to mark as shipped?';
                        break;
                      case 'delivered':
                        confirmationMessage = 'Are you sure you want to mark as delivered?';
                        break;
                      case 'cancelled':
                        confirmationMessage = 'Are you sure you want to cancel?';
                        break;
                      default:
                        confirmationMessage = 'Are you sure you want to proceed?';
                    }
            
                    if (confirmationMessage !== '') {
                        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                        var confirmationMessageElement = document.getElementById('confirmationMessage');
                        var confirmActionButton = document.getElementById('confirmActionButton');

                        confirmationMessageElement.innerText = confirmationMessage;
                        confirmationModal.show();
            
                        confirmActionButton.onclick = function() {
                            confirmationModal.hide();
                
                            // Call AJAX here
                            $.ajax({
                                type: 'POST',
                                url: '<?= base_url('approveorder'); ?>',
                                data: {
                                    action: selectedOption,
                                    order_id: $(actionSelect).data('order_id')
                                },
                                success: function(response) {
                                    // console.log(response);
                                    $('#crntstatus_' + $(actionSelect).data('order_id')).text(response.crntstatus);
                                    window.location.reload(); 
                                }
                            });
                
                            // console.log(selectedOption + ' confirmed');
                        };
                        
                        confirmationModal._element.querySelector('[data-bs-dismiss="modal"]').onclick = function() {
                            confirmationModal.hide();
                            // window.location.reload(); 
                        };

                    };

                    }
                });
            });
        });

        // document.addEventListener("DOMContentLoaded", function() {
        //     var actionSelects = document.querySelectorAll('.action-select');
        //     actionSelects.forEach(function(actionSelect) {
        //         var initialOption = actionSelect.value; 
        //         actionSelect.addEventListener('change', function(event) {
        //             var selectedOption = this.value;
        //             var confirmationMessage = '';
        //             if (selectedOption !== '') {
        //                 switch(selectedOption) {
        //                     case 'approve':
        //                         confirmationMessage = 'Are you sure you want to approve?';
        //                         break;
        //                     case 'pending':
        //                         confirmationMessage = 'Are you sure you want to mark as pending?';
        //                         break;
        //                     case 'shipped':
        //                         confirmationMessage = 'Are you sure you want to mark as shipped?';
        //                         break;
        //                     case 'delivered':
        //                         confirmationMessage = 'Are you sure you want to mark as delivered?';
        //                         break;
        //                     case 'cancelled':
        //                         confirmationMessage = 'Are you sure you want to cancel?';
        //                         break;
        //                     default:
        //                         confirmationMessage = 'Are you sure you want to proceed?';
        //                 }
        
        //                 if (confirmationMessage !== '') {
        //                     var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        //                     var confirmationMessageElement = document.getElementById('confirmationMessage');
        //                     var confirmActionButton = document.getElementById('confirmActionButton');
        
        //                     confirmationMessageElement.innerText = confirmationMessage;
        //                     confirmationModal.show();
        
        //                     confirmActionButton.onclick = function() {
        //                         confirmationModal.hide();
        //                         console.log(selectedOption + ' confirmed');
        //                     };
        
        //                     // if(selectedOption === 'cancelled') {
        //                     //     event.preventDefault();
        //                     //     actionSelect.value = initialOption;
        //                     // }
        //                 }
        //             }
        //         });
        
        //         // var cancelButtons = document.querySelectorAll('.btn-secondary[data-bs-dismiss="modal"]');
        //         // cancelButtons.forEach(function(button) {
        //         //     button.addEventListener('click', function(event) {
        //         //         event.stopPropagation();
        //         //         actionSelect.value = initialOption;
        //         //     });
        //         // });
        //     });
        // });
    </script>
    
    <?= $this->endSection() ?>
