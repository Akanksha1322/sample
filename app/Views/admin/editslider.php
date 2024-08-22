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
                                        <div class="float-left"><strong class="card-title">Edit Slider</strong></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-sliderlist'); ?>" style="color: #fff;">Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="<?= base_url('admin-updateslider/'.$slider[0]->id); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="form-group ml-3">
                                            <label class="control-label mb-1">Media Type</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="media_type" id="image_radio" value="image" required>
                                                <label class="form-check-label" for="image_radio">Image</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="media_type" id="video_radio" value="video" required>
                                                <label class="form-check-label" for="video_radio">Video</label>
                                            </div>
                                        </div>
                                        <div class="form-group ml-3">
                                            <label for="slider_image" class="control-label mb-1">Select Image</label>
                                            <input id="slider_image" name="slider_image" type="file" class="form-control" value="<?= $slider['0']->slider_image ?>" accept="image/*,video/mp4">
                                            <img src="<?= base_url('public/admin/assets/uploads/slider/' . $slider['0']->slider_image) ?>" alt="Image" height="50px;" width="50px;" style="padding-top: 5px; margin-right: 10px;">
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
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const imageRadio = document.getElementById('image_radio');
                const videoRadio = document.getElementById('video_radio');
                const fileInput = document.getElementById('slider_image');
                function handleMediaTypeChange() {
                    if (imageRadio.checked) {
                        fileInput.accept = "image/*";
                    } else if (videoRadio.checked) {
                        fileInput.accept = "video/mp4"; 
                    }
                }
                imageRadio.addEventListener('change', handleMediaTypeChange);
                videoRadio.addEventListener('change', handleMediaTypeChange);
            });
        </script>

    <?= $this->endSection() ?>
