    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
    <style>
           .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #616b37;
            border-color: #616b37;
        }
        .page-link {
             color: #616b37;
        }
    </style>
        <!--<div class="breadcrumbs">-->
        <!--    <div class="breadcrumbs-inner">-->
        <!--        <div class="row m-0">-->
        <!--            <div class="col-sm-4">-->
        <!--                <div class="page-header float-left">-->
        <!--                    <div class="page-title">-->
        <!--                        <h1>Dashboard</h1>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-sm-8">-->
        <!--                <div class="page-header float-right">-->
        <!--                    <div class="page-title">-->
        <!--                        <ol class="breadcrumb text-right">-->
        <!--                            <li><a href="<= base_url('admin-dashboard'); ?>">Dashboard</a></li>-->
        <!--                            <li><a href="<= base_url('admin-product'); ?>">Customer</a></li>-->
        <!--                        </ol>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!--<div class="card-header">-->
                            <!--    <strong class="card-title">Customer List</strong>-->
                            <!--</div>-->
                            <div class="card-header">
                                <div class="d-flex align-items-center m-0">
                                    <div class="col-sm-4">
                                        <div class="float-left">
                                            <strong class="card-title">Customer List</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <!--<a href="< ?= base_url('admin-register'); ?>" class="px-4 py-2" style="border-radius:5px; color: #fff;background: #616b37 ;">Add Customer</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Customer Id</th>
                                            <th class="text-center">First Name</th>
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Contact</th>
                                            <th class="text-center">City</th>
                                            <th class="text-center" colspan="2"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $i = 1; 
                                            if(isset($categoryDetails) && (count($categoryDetails) > 0)) {
                                                $i = 1; 
                                            }
                                        ?>
                                        <?php foreach ($customer as $key => $value) { ?>
                                            <tr>
                                                <th><?= $i; ?></th>
                                                <td><?= $value->first_name; ?></td>
                                                <td><?= $value->last_name; ?></td>
                                                <td><?= $value->contact; ?></td>
                                                <td><?= $value->city; ?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url('admin-customerview/' . $value->user_id); ?>"><i class="fa fa-eye" style="font-size: 25px;"></i></a>
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
                                                <li class="page-item"><a class="page-link" href="<?= base_url("admin-customerlist/" . ($currentPage - 1)) ?>">Prev.</a></li>
                                            <?php endif; ?>
                            
                                            <?php for ($i = max(1, $currentPage - 3); $i <= min($totalPages, $currentPage + 3); $i++): ?>
                                                <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                                    <a class="page-link" href="<?= base_url("admin-customerlist/$i") ?>"><?= $i ?></a>
                                                </li>
                                            <?php endfor; ?>
                            
                                            <?php if ($currentPage < $totalPages): ?>
                                                <li class="page-item"><a class="page-link" href="<?= base_url("admin-customerlist/" . ($currentPage + 1)) ?>">Next</a></li>
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
