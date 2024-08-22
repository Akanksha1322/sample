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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row m-0">
                                    <div class="col-md-4">
                                        <div class="float-left">
                                            <strong class="card-title">Add About</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-aboutlist'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="addProductForm" action="<?= base_url('admin-storeabout'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-md-3 mr-md-3">
                                            <div class="form-group mr-3">
                                                <label for="about_image" class="control-label mb-1">Image <span class="text-danger">*</span></label>
                                                <input type="file" id="about_image" name="about_image" class="form-control py-1" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="max-height: 200px; overflow-y: auto;">
                                        <div class="form-group ml-3 mr-md-3">
                                            <label for="about_des" class="control-label mb-1">About Description</label>
                                             
                                                <textarea type="text" id="about_des" name="about_des" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center"><div class="py-2"><button type="submit" class="btn btn-primary">Submit</button></div></div>
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
    <script>
        ClassicEditor
        .create( document.querySelector( '#about_des' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
    </script>
    <?= $this->endSection() ?>
