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
          background-color: #2196F3;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }
    </style>   
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-sm-4"><div class="float-left"><strong class="card-title">Order List</strong></div></div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                                <button type="button" class="py-2 px-3 mx-1" style="background-color: #616b37 ; color:white; border:none;"><a target="_blank" href="<?php echo base_url($order[0]->pdf_path); ?>">
                                                    <i class="fa fa-file-pdf-o" style="color:white;" aria-hidden="true"></i>
                                                </a></button>
                                                <button type="button" class="py-2 px-3" style="background-color: #616b37 ; border:none;"><a href="<?= base_url('admin-order'); ?>"><span class="text-white">Back</span></a></button>
                                            </div>
                                            <!--<div class="d-flex flex-row-reverse bd-highlight">-->
                                            <!--  <a href="< ?php echo base_url('admin-orderinvoice/'.$order[0]->odrdetail_id) ?>" class="" style="background-color: #c2b709;"><i class="fa fa-print" aria-hidden="true"></i></a>-->
                                            <!--</div>-->
                                            <!--<button type="button" class="py-2" style="background-color: #c2b709;"><a href="< ?= base_url('admin-order'); ?>"><span class="text-white">Back</span></a></button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <tbody>
                                        <?php $userDetailsShown = false; foreach ($order as $key => $value) { ?>
                                            <?php if (!$userDetailsShown) { ?>
                                                <tr>
                                                    <td class="text-start">Username</td>
                                                    <td class="text-start"><?= ($value->first_name !== null) ? $value->first_name . ' ' . $value->last_name : "NULL"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Email</td>
                                                    <td class="text-start"><?= ($value->email !== null) ? $value->email : "NULL"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Phone</td>
                                                    <td class="text-start"><?= ($value->phone !== null) ? $value->phone : "NULL"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Address</td>
                                                    <td class="text-start"><?= ($value->address !== null) ? $value->address . ' , <br>' . $value->area . ' , ' . $value->street . ' , <br>' . $value->landmark . ' , <br>' . $value->city . ' , ' . $value->state . ' - ' . $value->pincode : "NULL"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">Order Id</td>
                                                    <td class="text-start"><?= ($value->orderid !== null) ? $value->orderid : "NULL"; ?></td>
                                                </tr>
                                                <?php $userDetailsShown = true; ?>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Message</th>
                                            <th>Product Weight</th>
                                            <th>Product Quantity</th>
                                            <th>Product Price</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($order as $key => $value) { ?>
                                            <tr>
                                                <td class="text-start"><?= $value->product_name ? $value->product_name : "NULL"; ?></td>
                                                <td class="text-start"><?= $value->product_message ? $value->product_message : ""; ?></td>
                                                <td class="text-start"><?= $value->product_kg ? $value->product_kg : "NULL"; ?></td>
                                                <td class="text-start"><?= $value->product_quantity ? $value->product_quantity : "NULL"; ?></td>
                                                <td class="text-start"><?= $value->product_price ? $value->product_price : "NULL"; ?></td>
                                                <td class="text-start"><?= $value->paymethod ? $value->paymethod : "NULL"; ?></td>
                                                <td class="text-start">
                                                    <div class="dropdown">
                                                        <select class="custom-select action-select" data-orderid="<?= $value->odrdetail_id ?>">
                                                            <option value="">Select Action</option>
                                                            <option value="approve" <?= $value->crntstatus == 'approve' ? 'selected' : '' ?>>Approve</option>
                                                            <option value="pending" <?= $value->crntstatus == 'pending' ? 'selected' : '' ?>>Pending</option>
                                                            <option value="shipped" <?= $value->crntstatus == 'shipped' ? 'selected' : '' ?>>Shipped</option>
                                                            <option value="delivered" <?= $value->crntstatus == 'delivered' ? 'selected' : '' ?>>Delivered</option>
                                                            <option value="cancelled" <?= $value->crntstatus == 'cancelled' ? 'selected' : '' ?>>Cancel</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                                order_id: actionSelect.getAttribute('data-orderid')
                            },
                            success: function(response) {
                                if (response.success) {
                                    $('#crntstatus_' + actionSelect.getAttribute('data-orderid')).text(response.crntstatus);
                                } else {
                                    console.error('Failed to update status');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Error sending request:', error);
                            }
                        });
                    };

                    confirmationModal._element.querySelector('[data-bs-dismiss="modal"]').onclick = function() {
                        confirmationModal.hide();
                        actionSelect.value = initialOption; // Reset the select value
                    };
                }
            }
        });
    });
});


        </script>
    <?= $this->endSection() ?>
