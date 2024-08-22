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
                                        <div class="float-left"><strong class="card-title">Edit Product Price</strong></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-editproduct/'.$productprice[0]->product_id); ?>" style="color: #fff;">Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="<?= base_url('admin-updateprodprice/'.$productprice[0]->id); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="product_id" name="product_id" class="form-control" value="<?= $productprice['0']->product_id ?>">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="product_price" class="control-label mb-1">Product price <span class="text-danger">*</span></label>
                                            <input type="text" id="product_price" name="product_price" class="form-control" value="<?= $productprice['0']->price ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="product_weight" class="control-label mb-1">Product weight <span class="text-danger">*</span></label>
                                            <input type="text" id="product_weight" name="product_weight" class="form-control" value="<?= $productprice['0']->kg ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-start">
                                        <div class="py-2 ml-3"><button type="submit" class="btn btn-primary">Update</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="clearfix"></div>
    
    <?= $this->endSection() ?>
