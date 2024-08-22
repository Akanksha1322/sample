    <?= $this->extend('admin/layout/main') ?>
    <?= $this->section('content') ?>
    <style>
        #filterBtn { 
            background-color: #616b37 !important;
            border-radius: 5px;
            width: 100%;
            padding: 6px !important;
            border: none;
            color: #ffffff;
        }
        
        @media(max-width:768px){
            #filterBtn {
                background-color: #616b37 !important;
                border-radius: 5px;
                width: 100% !important;;
                padding: 6px !important;
                border: none;
                color: #ffffff;
            }
            input::placeholder {
                font-size:2px;
                color: black !important; /* Ensure it's visible */
            }
        }
    </style>
        <!-- Content -->
        <div class="content">
            <form  action="<?php echo base_url('/admin-dashboard');?>" class="m-form m-form--fit m-form--label-align-right" method="post">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= $userCount; ?></span></div>
                                            <div class="stat-heading">Customers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= $orderCount; ?></span></div>
                                            <div class="stat-heading">Total Orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">₹ <span class="count"><?= $revenue; ?></span></div>
                                            <div class="stat-heading">Total Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--<div class="col-md-4 col-12">-->
                    <!--    <div class="card">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="stat-widget-five">-->
                    <!--                <div class="stat-icon dib flat-color-1">-->
                    <!--                    <i class="pe-7s-check"></i>-->
                    <!--                </div>-->
                    <!--                <div class="stat-content">-->
                    <!--                    <div class="text-left dib">-->
                    <!--                        <div class="stat-text"><span class="count"><?= $approvedCount; ?></span></div>-->
                    <!--                        <div class="stat-heading">Approved Orders</div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-box2"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= $deliveredCount; ?></span></div>
                                            <div class="stat-heading">Delivered Orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-close"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= $cancelledCount; ?></span></div>
                                            <div class="stat-heading">Cancel Orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    <?= $this->endSection() ?>
