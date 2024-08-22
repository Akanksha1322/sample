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
                                            <strong class="card-title">Add Contact</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-contactlist'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="addContactForm" action="<?= base_url('admin-storecontact'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="phone" class="control-label mb-1">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" id="phone" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
                                            <label for="email" class="control-label mb-1">Email <span class="text-danger">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label for="status" class="control-label mb-1">Status</label>
                                            <select name="status" class="form-control" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            <select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="address" class="control-label mb-1">Address</label>
                                            <textarea type="text" id="address" name="address" rows="5" class="form-control"></textarea>
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
    <!-- ckeditor -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?= $this->endSection() ?>
