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
                                    <div class="col-sm-4"><div class="float-left"><strong class="card-title">Order Accept</strong></div></div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-order'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">User</th>
                                            <th class="text-center">Oreder Id</th>
                                            <th class="text-center">Product Name</th>
                                            <th class="text-center">Payment Method</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center" colspan="2"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; if(isset($order) && (count($order) > 0)) { $i = 1; }?>
                                            <?php foreach ($order as $key => $value) { ?>
                                            <tr>
                                                <th class="text-start"><?= $i; ?></th>
                                                <td class="text-start"><?= $value->first_name . ' ' . $value->last_name; ?></td>
                                                <td class="text-start"><?= $value->orderid; ?></td>
                                                <td class="text-start"><?= $value->product_name; ?></td>
                                                <td class="text-start"><?= $value->paymethod; ?></td>
                                                <td class="text-start"><?= $value->phone; ?></td>
                                                <td class="text-start">
                                                    <a href="<?= base_url('admin-vieworder/' . $value->odrdetail_id) ?>"><i class="fa fa-eye mx-1"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" data-delete-url="<?= base_url('admin-deleteorder/' . $value->odrdetail_id) ?>"><i class="fa fa-trash mx-1" style="color:#eb5772;"></i></a>
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
                                                <li class="page-item"><a class="page-link" href="<?= base_url("admin-orderacceptlist/" . ($currentPage - 1)) ?>">Prev.</a></li>
                                            <?php endif; ?>
                                            <?php for ($i = max(1, $currentPage - 3); $i <= min($totalPages, $currentPage + 3); $i++): ?>
                                                <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                                    <a class="page-link" href="<?= base_url("admin-orderacceptlist/$i") ?>"><?= $i ?></a>
                                                </li>
                                            <?php endfor; ?>
                                            <?php if ($currentPage < $totalPages): ?>
                                                <li class="page-item"><a class="page-link" href="<?= base_url("admin-orderacceptlist/" . ($currentPage + 1)) ?>">Next</a></li>
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
    <?= $this->endSection() ?>
