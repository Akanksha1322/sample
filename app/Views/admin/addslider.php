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
                                            <strong class="card-title">Add Slider</strong>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-primary px-4 py-2"><a href="<?= base_url('admin-sliderlist'); ?>"><span class="text-white">Back</span></a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="addSliderForm" action="<?= base_url('admin-storeslider'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <div class="row clearfix">
                                            <div class="col-md-4 text-right"><label class="label_control">Select Media Type:</label></div>
                                            <div class="col-md-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="media_type" id="image_radio" value="image" onclick="showImageDiv()">
                                                    <label class="form-check-label" for="image_radio">Image</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="media_type" id="video_radio" value="video" onclick="showVideoDiv()">
                                                    <label class="form-check-label" for="video_radio">Video</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="imageDiv" style="display: none;">
                                            <div class="form-group ml-3">
                                                <label for="slider_image" class="control-label mb-1">Select Image</label>
                                                <input id="slider_image" name="slider_image" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div id="videoDiv" style="display: none;">
                                            <div class="form-group ml-3">
                                                <label for="slider_video" class="control-label mb-1">Select Video</label>
                                                <input id="slider_video" name="slider_video" type="file" class="form-control" accept="video/mp4">
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mr-3">
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
        
        <script>
            function showImageDiv() {
                document.getElementById('imageDiv').style.display = 'block';
                document.getElementById('videoDiv').style.display = 'none';
            }
        
            function showVideoDiv() {
                document.getElementById('videoDiv').style.display = 'block';
                document.getElementById('imageDiv').style.display = 'none';
            }
        </script>
    <?= $this->endSection() ?>
