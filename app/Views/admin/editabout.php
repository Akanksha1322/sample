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
                                        <div class="float-left">
                                            <strong class="card-title">Edit About</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-aboutlist'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="editAboutForm" action="<?= base_url('admin-updateabout/'.$edabout[0]->id); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <div class="form-group mr-3">
                                                <!--<label for="about_image" class="control-label mb-1">Image <span class="text-danger">*</span></label>-->
                                                <!--<input type="file" id="about_image" name="about_image" class="form-control py-1" required>-->
                                                <label for="about_image" class="control-label mb-1">Image</label>
                                                <input id="about_image" name="about_image" type="file" class="form-control" value="<?= $edabout['0']->image ?>">
                                                <img src="<?= base_url('public/admin/assets/uploads/about/' . $edabout['0']->image) ?>" alt="Image" height="50px;" width="50px;" style="padding-top: 5px; margin-right: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label for="about_des" class="control-label mb-1">About Description</label>
                                            <textarea type="text" id="about_des" name="about_des" rows="10" class="form-control"><?= $edabout['0']->aboutdesc ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center"><div class="py-2"><button type="submit" class="btn btn-primary">Update</button></div></div>
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
