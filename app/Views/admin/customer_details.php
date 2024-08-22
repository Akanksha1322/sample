    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="<?= base_url('admin-dashboard'); ?>">Dashboard</a></li>
                                    <li><a href="<?= base_url('admin-product'); ?>">Customer Details</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <!--<div class="col-sm-4"><strong class="card-title">Customer List</strong></div>-->
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="float-left">
                                            <strong class="card-title">Customer List</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <a href="<?= base_url('admin-customer'); ?>" class="px-4 py-2" style="border-radius:5px; color: #fff;background: #616b37;">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <tr>
                                        <td style="width:20%"><strong>User Id</strong></td>
                                        <td><?= $customerdetails['user_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>First Name</strong></td>
                                        <td><?= $customerdetails['first_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>Last Name</strong></td>
                                        <td><?= $customerdetails['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>Email</strong></td>
                                        <td><?= $customerdetails['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>Contact Number</strong></td>
                                        <td><?= $customerdetails['contact']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>Birth Date</strong></td>
                                        <td><?= $customerdetails['birthdate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>Address</strong></td>
                                        <td><?= $customerdetails['address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>Area</strong></td>
                                        <td><?= $customerdetails['area']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><strong>City</strong></td>
                                        <td><?= $customerdetails['city']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?= $this->endSection() ?>
