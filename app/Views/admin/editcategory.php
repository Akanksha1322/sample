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
                                        <div class="float-left"><strong class="card-title">Edit Category</strong></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="#" style="color: #fff;">Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="<?= base_url('admin-updatecategory/'.$category[0]->id); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="category" class="control-label mb-1">Category</label>
                                            <input id="category" name="category" type="text" class="form-control" value="<?= $category['0']->category_name ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="category_image" class="control-label mb-1">Select Image</label>
                                            <input id="category_image" name="category_image" type="file" class="form-control" value="<?= $category['0']->category_image ?>">
                                            <img src="<?= base_url('public/admin/assets/uploads/category/' . $category['0']->category_image) ?>" alt="Image" height="50px;" width="50px;" style="padding-top: 5px; margin-right: 10px;">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="status" class="control-label mb-1">Status</label>
                                            <select name="status" class="form-control" required>
                                                <option value="">Please select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            <select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="py-2">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div>
    <?= $this->endSection() ?>
