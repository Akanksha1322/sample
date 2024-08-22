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
                                    <li><a href="<?= base_url('admin-product'); ?>">Category Price</a></li>
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
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="float-left">
                                            <strong class="card-title">Add Category Price</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <a href="#" class="px-4 py-2" style="border-radius:5px; color: #fff;background: #ce3c83;">Category Image</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="<?= base_url('admin-storeproductprice'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="product_id" class="control-label mb-1">Product Name</label>
                                            <select name="product_id" class="form-control">
                                                <option>
                                                    <?php foreach ($product as $key => $value) : ?>
                                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['product_name']; ?></option>
                                                    <?php endforeach; ?>
                                                </option>
                                            </select>                                        
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="product_kg" class="control-label mb-1">Product Weight(kg)</label>
                                            <input id="product_kg" name="product_kg" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="product_price" class="control-label mb-1">Product Price</label>
                                            <input id="product_price" name="product_price" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="py-2"><button type="submit" class="btn btn-primary">Submit</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>
    <?= $this->endSection() ?>
