    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
       <style>
             .btn-primary {
            background-color: #616b37 !important;
            border-color: #616b37;
        }
        
        .page-item.active .page-link {
    
            background-color: #616b37;
            border-color: #616b37;
        }
       </style>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center m-0">
                                    <div class="col-sm-4">
                                        <div class="float-left">
                                            <strong class="card-title">Flavour List</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url(); ?>admin-addflv"><span class="text-white">Add Flavour</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Flavour Name</th>
                                            <th class="text-center" colspan="2"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; if(isset($flavour) && (count($flavour) > 0)) { $i = 1; }?>
                                            <?php foreach ($flavour as $key => $value) { ?>
                                            <tr>
                                                <th class="text-center"><?= $i; ?></th>
                                                <td><?= $value->product_flavour; ?></td>
                                                <td class="text-center">
                                                    <!--<a href="<= base_url('admin-editcategory/' .$value->id) ?>"><i class="fa fa-edit" style="color:#3279a8;"></i></a>-->
                                                    <!--<a href="< ?= base_url('admin-deleteflavour/' .$value->id) ?>"><i class="fa fa-trash" style="color:#eb5772;"></i></a>-->
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" data-delete-url="<?= base_url('admin-deleteflavour/' .$value->id) ?>"><i class="fa fa-trash" style="color:#eb5772; font-size: 25px;"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- pagination code start -->
                                <div class="pagination-area mt-15 mb-50">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <?php if ($currentPage > 1): ?>
                                                <li class="page-item"><a class="page-link" href="<?= base_url("admin-flavourlist/" . ($currentPage - 1)) ?>">Prev.</a></li>
                                            <?php endif; ?>
                            
                                            <?php for ($i = max(1, $currentPage - 3); $i <= min($totalPages, $currentPage + 3); $i++): ?>
                                                <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                                    <a class="page-link" href="<?= base_url("admin-flavourlist/$i") ?>"><?= $i ?></a>
                                                </li>
                                            <?php endfor; ?>
                            
                                            <?php if ($currentPage < $totalPages): ?>
                                                <li class="page-item"><a class="page-link" href="<?= base_url("admin-flavourlist/" . ($currentPage + 1)) ?>">Next</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- pagination code end -->
                            </div>
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

    <?= $this->endSection() ?>
