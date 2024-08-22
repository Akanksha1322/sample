    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
    
    <style>
        .btn-primary {
            background-color: #616b37 !important;;
            border-color: #616b37;
        }
        .btn-primary:hover{
            
            opacity:1 !important;
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
                                        <div class="float-left">
                                            <strong class="card-title">Add Flavour</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-flavourlist'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="addFlavourForm" action="<?= base_url('admin-storeproflv'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="product_flavour" class="control-label mb-1">Product Flavour</label>
                                            <input id="product_flavour" name="product_flavour" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center"><div class="py-2"><button type="submit" class="btn btn-primary">Submit</button></div></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    <div class="clearfix"></div>

    <?= $this->endSection() ?>
