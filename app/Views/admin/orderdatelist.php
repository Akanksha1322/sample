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
            width: 150%;
            padding: 6px;
            border: none;
            color: #ffffff;
        }
    </style>   
    <section>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form  action="<?php echo base_url('order/select_by_date');?>" class="m-form m-form--fit m-form--label-align-right" method="post">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-sm-4"><div class="float-left"><strong class="card-title">Order List</strong></div></div>
                                    <!--<div class="col-sm-8">-->
                                    <!--    <div class="float-right">-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-5">-->
                                    <!--                <input type="date" id="fromDate" name="from_date" value="<php if(isset $_POST['from_date']){ echo $_POST['from_date']; } ?>" class="form-control" placeholder="From Date">-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-5">-->
                                    <!--                <input type="date" id="toDate" name="to_date" value="<php if(isset $__POST['To_date']; } ?>" class="form-control" placeholder="To Date">-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-2">-->
                                    <!--                <button type="submit" id="filterBtn" class="btn">Filter</button>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                            <!--<button type="button" class="btn btn-primary px-4 py-2"><a href="<= base_url(); ?>admin-category"><span class="text-white">Add Category</span></a></button>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="date" id="fromDate" name="from_date" value="<?php echo isset($from_date) ? $from_date : ''; ?>" class="form-control" placeholder="From Date">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="date" id="toDate" name="to_date" value="<?php echo isset($to_date) ? $to_date : ''; ?>" class="form-control" placeholder="To Date">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" id="filterBtn" class="btn">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                           <div class="table-responsive">
                                                <!--<div style="overflow-x: auto;">-->
                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">User</th>
                                                                <th class="text-center">Order Id</th>
                                                                <th class="text-center">Order Date</th>
                                                                <th class="text-center">Product Name</th>
                                                                <th class="text-center">Payment Method</th>
                                                                <th class="text-center">Phone</th>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center" colspan="2">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!--< ?php $i = 1; if(isset($order) && (count($order) > 0)) { $i = 1; }?>-->
                                                            <?php $i = 1; ?>
                                                            <?php if(isset($order) && (count($order) > 0)) { ?>
                                                                <?php foreach ($order as $key => $value) { ?> 
                                                                <tr>
                                                                    <th class="text-start"><?= $i; ?></th>
                                                                    <td class="text-start"><?= $value->first_name . ' ' . $value->last_name; ?></td>
                                                                    <td class="text-start"><?= $value->orderid; ?></td>
                                                                    <!--<td class="text-start">< ?= $value->odrdate; ?></td>-->
                                                                    <td class="text-start">
                                                                        <?php $date = new DateTime($value->odrdate); echo $date->format('d-m-Y'); ?>
                                                                    </td>
                                                                    <td class="text-start"><?= $value->product_name; ?></td>
                                                                    <td class="text-start"><?= $value->paymethod; ?></td>
                                                                    <td class="text-start"><?= $value->phone; ?></td>
                                                                    <!--<td class="text-start">< ?= $value->crntstatus; ?></td>-->
                                                                    <!--<td class="text-start" id="crntstatus_< ?= $value->odrdetail_id ?>">< ?= $value->crntstatus; ?></td>-->
                                                                    <td class="text-start">
                                                                        <?php if ($value->status == '1' || $value->status !== null) : ?>
                                                                        <div class="dropdown">
                                                                            <select class="custom-select action-select" data-orderid="<?= $value->odrdetail_id ?>">
                                                                                <option value="">Select Action</option>
                                                                                <option value="approve" <?= $value->crntstatus == 'approve' ? 'selected' : '' ?>>Approve</option>
                                                                                <option value="pending" <?= $value->crntstatus == 'pending' ? 'selected' : '' ?>>Pending</option>
                                                                                <option value="shipped" <?= $value->crntstatus == 'shipped' ? 'selected' : '' ?>>Shipped</option>
                                                                                <option value="delivered" <?= $value->crntstatus == 'delivered' ? 'selected' : '' ?>>Delivered</option>
                                                                                <option value="cancelled" <?= $value->cancelled == 'cancelled' ? 'selected' : '' ?>>Cancel</option>
                                                                            </select>
                                                                        </div>
                                                                        <?php endif ?>
                                                                    </td>
                                                                    <td class="text-start">
                                                                        <a href="<?= base_url('admin-vieworder/' . $value->odrdetail_id) ?>"><i class="fa fa-eye mx-1"></i></a>
                                                                        <!--<a href="#" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" data-delete-url="< ?= base_url('admin-deleteorder/' .$value->odrdetail_id) ?>"><i class="fa fa-trash mx-1" style="color:#eb5772;"></i></a>-->
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <tr>
                                                                    <td colspan="9" class="text-center">No data found</td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
        $(document).ready(function() {
            $('.action-select').change(function() {
                var action = $(this).val();
                var orderId = $(this).data('orderid');
                if (action) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('approveorder'); ?>',
                        data: {
                            action: action,
                            order_id: orderId
                        },
                        success: function(response) {
                            console.log(response);
                            $('#crntstatus_' + orderId).text(response.crntstatus);
                        }
                    });
                }
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
                        switch(selectedOption) {
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
                                console.log(selectedOption + ' confirmed');
                            };
                        }
                    }
                });
        
            });
        });
    </script>
    
    <?= $this->endSection() ?>
