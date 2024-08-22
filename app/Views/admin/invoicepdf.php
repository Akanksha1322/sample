<!--< ?php-->
<!--// Function to convert image to base64-->
<!--function base64_encode_image($filename) {-->
<!--    if ($filename) {-->
<!--        $imageType = pathinfo($filename, PATHINFO_EXTENSION);-->
<!--        $imageData = file_get_contents($filename);-->
<!--        $base64 = 'data:image/' . $imageType . ';base64,' . base64_encode($imageData);-->
<!--        return $base64;-->
<!--    }-->
<!--    return null;-->
<!--}-->

<!--$imageBase64 = base64_encode_image('public/images/main-logo.jpg');-->
<!--?>-->


<!--<!doctype html>-->
<!--<html class="no-js" lang="">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <title>Birthday n Box</title>-->
<!--    <meta name="description" content="Birthday n Box">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">-->
<!--    <link rel="shortcut icon" href="< ?= base_url('public/images/main-logo.jpg') ?>">-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">-->
    <!-- Your custom styles -->
<!--    <style>-->
        <!--/* Global Reset */-->
<!--        body {-->
<!--            font-family: Arial, sans-serif;-->
<!--            line-height: 1.6;-->
<!--            margin: 0;-->
<!--            padding: 0;-->
<!--        }-->

        <!--/* Container */-->
<!--        .container {-->
<!--            width: 100%;-->
<!--            max-width: 1200px;-->
<!--            margin: 0 auto;-->
<!--            padding: 0 20px;-->
<!--        }-->

        <!--/* Invoice Wrapper */-->
<!--        .invoice-wrapper {-->
<!--            background: #FFF;-->
<!--            border: 1px solid #CDD3E2;-->
<!--            box-shadow: 0px 0px 1px #CCC;-->
<!--            padding: 20px;-->
            <!--/*margin-top: 40px;*/-->
<!--            border-radius: 2px;-->
<!--            page-break-inside: avoid; -->
<!--        }-->

        <!--/* Logo */-->
<!--        .logo {-->
<!--            text-align: center;-->
<!--            margin-top: 10px;-->
<!--        }-->

<!--        .logo img {-->
<!--            width: 30%;-->
<!--            height: auto;-->
<!--            max-width: 200px;-->
<!--        }-->

        <!--/* Payment Info and Details */-->
<!--        .payment-info, .payment-details, .line-items {-->
<!--            margin-top: 20px;-->
<!--            padding-top: 20px;-->
<!--            border-top: 1px solid #ddd;-->
<!--        }-->

<!--        .text-right {-->
<!--            text-align: right;-->
<!--        }-->

<!--        .text-center {-->
<!--            text-align: center;-->
<!--        }-->

<!--        .text-start {-->
<!--            text-align: left;-->
<!--        }-->

        <!--/* Table */-->
<!--        .table {-->
<!--            width: 100%;-->
<!--            margin-bottom: 1rem;-->
<!--            color: #212529;-->
<!--            border-collapse: collapse;-->
<!--        }-->

<!--        .table th, .table td {-->
<!--            border: 1px solid #dee2e6;-->
<!--            padding: .75rem;-->
<!--            vertical-align: top;-->
<!--        }-->

<!--        .table th {-->
<!--            background-color: #f2f2f2;-->
<!--        }-->

<!--        .table-striped tbody tr:nth-of-type(odd) {-->
<!--            background-color: rgba(0,0,0,.05);-->
<!--        }-->

        <!--/* Button */-->
<!--        .btn-primary {-->
<!--            display: inline-block;-->
<!--            background-color: #007bff;-->
<!--            color: #fff;-->
<!--            border: none;-->
<!--            padding: 10px 20px;-->
<!--            border-radius: 4px;-->
<!--            text-decoration: none;-->
<!--        }-->

<!--        .btn-primary:hover {-->
<!--            background-color: #0056b3;-->
<!--        }-->

        <!--/* Page Break for Print */-->
<!--        @media print {-->
<!--            .invoice-wrapper {-->
                <!--page-break-inside: avoid; /* Avoid page break inside invoice wrapper */-->
<!--            }-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--    <section>-->
<!--        <div class="receipt-content">-->
<!--            <div class="container">-->
<!--                <div class="invoice-wrapper">-->
<!--                    <div class="logo">-->
<!--                        <img src="< ?= $imageBase64 ?>" alt="Logo" style="width: 30%;height: 75px;">-->
<!--                    </div>-->
                    <!--<div class="row" style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center;">-->
                    <!--    <div style="display: flex; text-align: left;">-->
                    <!--        <div style="flex: 1;">-->
                    <!--            <strong>Order Id:</strong> < ?= $orderinvoice[0]->orderid; ?>-->
                    <!--        </div>-->
                    <!--        <div style="flex: 1; text-align: right;">-->
                    <!--            <strong>Order Date:</strong> < ?= date('d-m-Y', strtotime($orderinvoice[0]->created_at)); ?> <strong>|</strong>-->
                    <!--            <strong>Order Time:</strong> < ?= date('H:i:s', strtotime($orderinvoice[0]->created_at)); ?>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
<!--                    <div style="display: table; width: 100%;">-->
<!--                        <div style="display: table-row;">-->
<!--                            <div style="display: table-cell; width: 50%; vertical-align: top;">-->
<!--                                <strong>Order Id:</strong>< ?= $orderinvoice[0]->orderid; ?><br>-->
<!--                            </div>-->
<!--                            <div style="display: table-cell; width: 50%; vertical-align: top; text-align: right;">-->
<!--                                <strong>Order Date:</strong> < ?= date('d-m-Y', strtotime($orderinvoice[0]->created_at)); ?> <strong>|</strong>-->
<!--                                <strong>Order Time:</strong> < ?= date('H:i:s', strtotime($orderinvoice[0]->created_at)); ?>                                <!--<div>Name : < ?= $orderinvoice[0]->first_name . ' ' . $orderinvoice[0]->last_name?></div>-->-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <hr>-->
<!--                    <div style="display: table; width: 100%;">-->
<!--                        <div style="display: table-row;">-->
<!--                            <div style="display: table-cell; width: 50%; vertical-align: top;">-->
<!--                                <strong>Address:</strong><br>-->
<!--                                <p>< ?= $orderinvoice[0]->address ?><br>-->
<!--                                < ?= $orderinvoice[0]->area ?><br>-->
<!--                                < ?= $orderinvoice[0]->street ?><br>-->
<!--                                < ?= $orderinvoice[0]->city . ',' . $orderinvoice[0]->state . '-' . $orderinvoice[0]->pincode ?></p>-->
<!--                            </div>-->
<!--                            <div style="display: table-cell; width: 50%; vertical-align: top; text-align: right;">-->
<!--                                <strong>User Details</strong><br>-->
<!--                                <div>Name : < ?= $orderinvoice[0]->first_name . ' ' . $orderinvoice[0]->last_name?></div>-->
<!--                                <div>Email : < ?= $orderinvoice[0]->email ?></div>-->
<!--                                <div>Phone : < ?= $orderinvoice[0]->phone ?></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--<hr>-->
<!--                    <div style="margin-top: 20px;">-->
<!--                        <div class="table-responsive">-->
<!--                            <table class="table table-striped">-->
<!--                                <thead>-->
<!--                                    <tr>-->
<!--                                        <th style="text-align: center;">Product Name</th>-->
<!--                                        <th style="text-align: center;">Product Kg</th>-->
<!--                                        <th style="text-align: center;">Product Quantity</th>-->
<!--                                        <th style="text-align: center;">Payment Method</th>-->
<!--                                        <th style="text-align: center;">Product Price</th>-->
<!--                                    </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                    < ?php foreach ($orderinvoice as $key => $value): ?>-->
<!--                                    <tr>-->
<!--                                        <td style="text-align: left;">< ?= $value->product_name; ?></td>-->
<!--                                        <td style="text-align: left;">< ?= $value->product_kg; ?></td>-->
<!--                                        <td style="text-align: left;">< ?= $value->product_quantity; ?></td>-->
<!--                                        <td style="text-align: left;">< ?= $value->paymethod; ?></td>-->
<!--                                        <td style="text-align: left;">< ?= $value->product_price; ?></td>-->
<!--                                    </tr>-->
<!--                                    < ?php endforeach; ?>-->
<!--                                    <tr>-->
<!--                                        <td colspan="5"></td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->
<!--                                        <td colspan="5">-->
<!--                                            <div style="margin-bottom: 7px;">Tax: <span>< ?= $orderinvoice[0]->tax; ?></span></div>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->
<!--                                        <td colspan="5">-->
<!--                                            <div style="margin-bottom: 7px;">Discount: <span>< ?= $orderinvoice[0]->discount; ?></span></div>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->
<!--                                        <td colspan="5">-->
<!--                                            <div style="font-size: 16px;">Total: <span>< ?= $orderinvoice[0]->totalamount; ?></span></div>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</body>-->
<!--</html>-->
