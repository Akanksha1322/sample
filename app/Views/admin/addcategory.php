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
        <!--                            <li><a href="<= base_url('admin-product'); ?>">Category</a></li>-->
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
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="float-left">
                                            <strong class="card-title">Add Category</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-categoryproduct'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="addCategoryForm" action="<?= base_url('admin-storecategory'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="category" class="control-label mb-1">Category Name</label>
                                            <input id="category" name="category" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="category_image" class="control-label mb-1">Select Image</label>
                                            <input id="category_image" name="category_image" type="file" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="status" class="control-label mb-1">Status</label>
                                            <select name="status" class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            <select>
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
