<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Birthday n Box</title>
    <meta name="description" content="Birthday n Box">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('public/images/main-logo.jpg') ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <style>
        .receipt-content .logo a:hover {
          text-decoration: none;
          color: #7793C4; 
        }
        
        .receipt-content .invoice-wrapper {
          background: #FFF;
          border: 1px solid #CDD3E2;
          box-shadow: 0px 0px 1px #CCC;
          padding: 0px 40px 60px;
          margin-top: 40px;
          border-radius: 4px; 
        }
        
        .receipt-content .invoice-wrapper .payment-details span {
          color: #A9B0BB;
          display: block; 
        }
        .receipt-content .invoice-wrapper .payment-details a {
          display: inline-block;
          margin-top: 5px; 
        }
        
        .receipt-content .invoice-wrapper .line-items .print a {
          display: inline-block;
          border: 1px solid #9CB5D6;
          padding: 13px 13px;
          border-radius: 5px;
          color: #708DC0;
          font-size: 13px;
          -webkit-transition: all 0.2s linear;
          -moz-transition: all 0.2s linear;
          -ms-transition: all 0.2s linear;
          -o-transition: all 0.2s linear;
          transition: all 0.2s linear; 
        }
        
        .receipt-content .invoice-wrapper .line-items .print a:hover {
          text-decoration: none;
          border-color: #333;
          color: #333; 
        }
        
        .receipt-content {
          background: #ECEEF4; 
        }
        @media (min-width: 1200px) {
          .receipt-content .container {width: 900px; } 
        }
        
        .receipt-content .logo {
          text-align: center;
          margin-top: 50px; 
        }
        
        .receipt-content .logo a {
          font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
          font-size: 36px;
          letter-spacing: .1px;
          color: #555;
          font-weight: 300;
          -webkit-transition: all 0.2s linear;
          -moz-transition: all 0.2s linear;
          -ms-transition: all 0.2s linear;
          -o-transition: all 0.2s linear;
          transition: all 0.2s linear; 
        }
        
        .receipt-content .invoice-wrapper .intro {
          line-height: 25px;
          color: #444; 
        }
        
        .receipt-content .invoice-wrapper .payment-info {
          margin-top: 25px;
          padding-top: 15px; 
        }
        
        .receipt-content .invoice-wrapper .payment-info span {
          color: #A9B0BB; 
        }
        
        .receipt-content .invoice-wrapper .payment-info strong {
          display: block;
          color: #444;
          margin-top: 3px; 
        }
        
        @media (max-width: 767px) {
          .receipt-content .invoice-wrapper .payment-info .text-right {
          text-align: left !important;
          margin-top: 20px; } 
        }
        .receipt-content .invoice-wrapper .payment-details {
          border-top: 2px solid #EBECEE;
          margin-top: 30px;
          padding-top: 20px;
          line-height: 22px; 
        }
        
        
        @media (max-width: 767px) {
          .receipt-content .invoice-wrapper .payment-details .text-right {
          text-align: left;
          margin-top: 20px; } 
        }
        .receipt-content .invoice-wrapper .line-items {
          margin-top: 40px; 
        }
        .receipt-content .invoice-wrapper .line-items .headers {
          color: #A9B0BB;
          font-size: 13px;
          letter-spacing: .3px;
          border-bottom: 2px solid #EBECEE;
          padding-bottom: 4px; 
        }
        .receipt-content .invoice-wrapper .line-items .items {
          margin-top: 8px;
          border-bottom: 2px solid #EBECEE;
          padding-bottom: 8px; 
        }
        .receipt-content .invoice-wrapper .line-items .items .item {
          padding: 10px 0;
          color: #696969;
          font-size: 15px; 
        }
        @media (max-width: 767px) {
          .receipt-content .invoice-wrapper .line-items .items .item {
          font-size: 13px; } 
        }
        .receipt-content .invoice-wrapper .line-items .items .item .amount {
          letter-spacing: 0.1px;
          color: #84868A;
          font-size: 16px;
         }
        @media (max-width: 767px) {
          .receipt-content .invoice-wrapper .line-items .items .item .amount {
          font-size: 13px; } 
        }
        
        .receipt-content .invoice-wrapper .line-items .total {
          margin-top: 30px; 
        }
        
        .receipt-content .invoice-wrapper .line-items .total .extra-notes {
          float: left;
          width: 40%;
          text-align: left;
          font-size: 13px;
          color: #7A7A7A;
          line-height: 20px; 
        }
        
        @media (max-width: 767px) {
          .receipt-content .invoice-wrapper .line-items .total .extra-notes {
          width: 100%;
          margin-bottom: 30px;
          float: none; } 
        }
        
        .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
          display: block;
          margin-bottom: 5px;
          color: #454545; 
        }
        
        .receipt-content .invoice-wrapper .line-items .total .field {
          margin-bottom: 7px;
          font-size: 14px;
          color: #555; 
        }
        
        .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
          margin-top: 10px;
          font-size: 16px;
          font-weight: 500; 
        }
        
        .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
          color: #20A720;
          font-size: 16px; 
        }
        
        .receipt-content .invoice-wrapper .line-items .total .field span {
          display: inline-block;
          margin-left: 20px;
          min-width: 85px;
          color: #84868A;
          font-size: 15px; 
        }
        
        .receipt-content .invoice-wrapper .line-items .print {
          margin-top: 50px;
          text-align: center; 
        }
        
        
        
        .receipt-content .invoice-wrapper .line-items .print a i {
          margin-right: 3px;
          font-size: 14px; 
        }
        
        .receipt-content .footer {
          margin-top: 40px;
          margin-bottom: 110px;
          text-align: center;
          font-size: 12px;
          color: #969CAD; 
        }     
        
        @media (max-width: 768px) {
            .col-sm-6,
            .col-md-6 {
                width: 100%;
            }
            .receipt-content .invoice-wrapper {
                /*background: #FFF;*/
                /*border: 1px solid #CDD3E2;*/
                /*box-shadow: 0px 0px 1px #CCC;*/
                padding: 40px 17px 0px !important;
                /*margin-top: 40px;*/
                /*border-radius: 4px;*/
            }
        }
    </style>
</head>
<body>
    <section>
    <div class="receipt-content">
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="col-md-12">
                    <div class="invoice-wrapper">
                        <div class="payment-info">
                            <div class="navbar-header" style=" display: flex; justify-content: center; align-items: center;">
                                <img src="<?= base_url('public/images/main-logo.jpg') ?>" alt="Logo" style="width: 30%;height: 75px;">
                            </div>
                            <div class="row">
                                <div class="col-sm-8"><strong>Order Id</strong><p><?= $orderinvoice[0]->orderid; ?></p></div>
                                <div class="col-sm-4 text-right d-flex">
                                    <div class="col-sm-6"><strong>Order Date</strong><p><?= date('d-m-Y', strtotime($orderinvoice[0]->created_at)); ?></p></div>
                                    <div class="col-sm-6"><strong>Order Time</strong><p><?= date('H:i:s', strtotime($orderinvoice[0]->created_at)); ?></p></div>
                                    <!--<strong>Order Date</strong><p>< ?= $orderinvoice[0]->created_at; ?></p>-->
                                </div>
                            </div>
                        </div>

                        <div class="payment-details">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <strong>Address :</strong>
                                    <p><?= $orderinvoice[0]->address ?> <br><?= $orderinvoice[0]->area ?> <br><?= $orderinvoice[0]->street ?> <br><?= $orderinvoice[0]->city . ',' . $orderinvoice[0]->state . '-' . $orderinvoice[0]->pincode ?></p>
                                </div>
                                <div class="col-sm-12 col-md-6 text-md-right">
                                    <strong>User Details :</strong>
                                    <span>Name : <?= $orderinvoice[0]->first_name . ' ' . $orderinvoice[0]->last_name?></span>
                                    <span>Email : <?= $orderinvoice[0]->email ?></span>
                                    <span>Phone : <?= $orderinvoice[0]->phone ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="line-items">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Product Name</th>
                                            <th class="text-center">Product Kg</th>
                                            <th class="text-center">Product Quantity</th>
                                            <th class="text-center">Payment Method</th>
                                            <th class="text-center">Product Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orderinvoice as $key => $value): ?>
                                        <tr>
                                            <td class="text-start"><?= $value->product_name; ?></td>
                                            <td class="text-start"><?= $value->product_kg; ?></td>
                                            <td class="text-start"><?= $value->product_quantity; ?></td>
                                            <td class="text-start"><?= $value->paymethod; ?></td>
                                            <td class="text-start"><?= $value->product_price; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="5"></td>
                                            <!--<td>-->
                                            <!--    <div class="field">Tax: <span>< ?= $orderinvoice[0]->tax; ?></span></div>-->
                                            <!--    <div class="field">Discount: <span>< ?= $orderinvoice[0]->discount; ?></span></div>-->
                                            <!--    <div class="field grand-total">Total: <span>< ?= $orderinvoice[0]->totalamount; ?></span></div>-->
                                            <!--</td>-->
                                            <!--<tr>-->
                                            <!--    <td colspan="5">-->
                                            <!--        <div class="field">Tax: <span>< ?= $orderinvoice[0]->tax; ?></span></div>-->
                                            <!--    </td>-->
                                            <!--</tr>-->
                                            <!--<tr>-->
                                            <!--    <td colspan="5">-->
                                            <!--        <div class="field">Discount: <span>< ?= $orderinvoice[0]->discount; ?></span></div>-->
                                            <!--    </td>-->
                                            <!--</tr>-->
                                            <tr>
                                                <td colspan="5">
                                                    <div class="field grand-total">Total: <span><?= $orderinvoice[0]->totalamount; ?></span></div>
                                                </td>
                                            </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="print text-center">
                            <a target="_blank" href="<?= base_url('admin-orderpdf/' . $orderinvoice[0]->order_id) ?>" style="background-color: #616b37; color:white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;"><i class="fa fa-print"></i><strong>Download PDF<strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

        