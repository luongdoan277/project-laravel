<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .section-header--deliveredTo {
            background-image: url(https://ci6.googleusercontent.com/proxy/kozFd-5wBSeG9k44hZTE7pLKg4r8Z85tWseOPIxlSjwYda1_vWGOHoUQHcYs2LwodwY9TMwl1of_hZkUwN7gv05aOJTDC1hqoV7ocwrtZz1ZiloVuEClVMF3p3q-KNR4Rsnay1QUHVUv_rfKQf3aag6kmogX=s0-d-e1-ft#http://static.cdn.responsys.net/i5/responsysimages/lazada/contentlibrary/!images/ic-your-order.png);
        }
        .section-header--yourPackage {
            background-image: url(https://ci5.googleusercontent.com/proxy/MtS59kqNX0mbRIBTLQHaNLX-cKCe4V5vNSZZ3PxX3rhFNpVRAwxkRxjuJYKUto3Ph3qtyRUskJPVrVtICjjao6VbSZphfUu_rYsx8DQCuptl5VDQLrpdghxlVPkWP7uLcCHAeLt1lDH48jzyBsgfOPgP=s0-d-e1-ft#http://static.cdn.responsys.net/i5/responsysimages/lazada/contentlibrary/!images/ic-package.png);
        }
        .section-header--notes {
            background-image: url(https://ci4.googleusercontent.com/proxy/-BbraqfZXGKtsAqjKZi9_jLJX7AY-j36LkGGu9N9njhmb58mbdvMf13lt-TbG7Mdr1L5jCAZyCWU3dIBjQXzPExDr3hymIB0pvYMvvX32HO6zVXmYE4ZX4qG5AptA_tjOSWgTJUyWceAwSAE4Q1Y=s0-d-e1-ft#http://static.cdn.responsys.net/i5/responsysimages/lazada/contentlibrary/!images/ic-note.png);
        }
        .section{
            padding: 30px;
            background: #fff;
            border-bottom: 10px solid #f0f0f0;
        }
        .section-end{
            padding: 30px;
            background: #fff;
        }
        .section-header {
            background-size: 30px;
            background-repeat: no-repeat;
            padding: 5px 0 15px 45px;
            font-size: 18px;
        }
        .product {
            border-bottom: 1px solid #d8d8d8;
            padding-top: 20px;
            padding-bottom: 20px;
            display: inline-block;
            width: 100%;
        }
        .product-productInfo-name {
            margin-bottom: 7px;
        }
        .product-productInfo-name a {
            color: #173948!important;
            font-size: 16px!important;
            text-decoration: none!important;
        }
        .product-productInfo-price {
            color: #dd3937;
            font-size: 16px;
        }
        .section-content {
            display: inline-block;
            width: 100%;
        }
        .checkout {
            display: inline-block;
            width: 100%;
            margin-top: 20px;
        }
        .two_col {
            width: 100%!important;
            float: none!important;
            max-width: none!important;
        }
        .checkout-amount {
            width: 100%;
            line-height: 24px;
        }

    </style>
</head>
<body id="style-2">
    <div style="margin: auto; max-width: 730px; border: 3px solid #d1d1d1">
        <div class="section" style="padding-top:0">
            <div class="section-content">
                <h2>Hi {{$name}}  ,</h2>
                <div class="hide">
                </div>
                <p>Thank you for trusting us.</p>
                <p>Your order&nbsp;has been received and is being processed. We will notify you when the parcel is ready</p>

{{--                    <div class="two_col" align="center" style="padding-top:10px">--}}
{{--                        <div align="center">--}}
{{--                            <a href="https://email.lazada.com/pub/cc?_ri_=X0Gzc2X%3DAQpglLjHJlYQGkkEXzdSYwzfk3unrhHlubfs7trljwyePvbcMDYoejI9lN8PspTPHC5M8CVXtpKX%3DCBRTBAWY&amp;_ei_=EidnsdN_RVCFMKwnGHhZHU36T3C4jeQBnE6ULgokJ0kH1d00M3z3hRck8GJ0IOjzUEcuNuWlBSOeDatduCd6I3_OFAWvoylGr4c6535RCysR0wMfLOeKB707ZqM-ufPi7CikjGvk3xnZzPh-pq1BneMTKONgofvvozY.&amp;_di_=0fm32vpisv0k24gajd0md757gib27ah9i5igit6chu5qmli7e7qg" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://email.lazada.com/pub/cc?_ri_%3DX0Gzc2X%253DAQpglLjHJlYQGkkEXzdSYwzfk3unrhHlubfs7trljwyePvbcMDYoejI9lN8PspTPHC5M8CVXtpKX%253DCBRTBAWY%26_ei_%3DEidnsdN_RVCFMKwnGHhZHU36T3C4jeQBnE6ULgokJ0kH1d00M3z3hRck8GJ0IOjzUEcuNuWlBSOeDatduCd6I3_OFAWvoylGr4c6535RCysR0wMfLOeKB707ZqM-ufPi7CikjGvk3xnZzPh-pq1BneMTKONgofvvozY.%26_di_%3D0fm32vpisv0k24gajd0md757gib27ah9i5igit6chu5qmli7e7qg&amp;source=gmail&amp;ust=1597218683440000&amp;usg=AFQjCNErsRCDZmjeRgpwSwgToee0hGaYcg">--}}
{{--                                <img src="https://ci5.googleusercontent.com/proxy/pT40pd5Fm81RuqzRRpJEQzHe1s-8wU_fp1Hti29e0uH4zgDxpsDmE4CMbyHBrrDCdZpJf-z-xM8zqvapH0iYX_hLUgqblskqaBGNlOrXu5nXvHXWE7Q4yha6T4sDnQr-VoB79AIS9DQjWQqh=s0-d-e1-ft#http://static.cdn.responsys.net/i5/responsysimages/content/lazada/btn_Order_Status_en.png" border="0" class="CToWUd"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                <p><b>*Note:</b></p>
                <ul>
                    <li>If you have made this purchase as part of a&nbsp;Group-Buy, please note that this is not considered as a confirmation of the Group-Buy success. Only once all orders have been successfully placed within your group will we release the stock.</li>
                    <li>To make sure you receive the right package, please only agree to receive the package if&nbsp;"<b>Out for Delivery</b>"&nbsp;status has been updated for your order.</li>
                </ul>
            </div>
        </div>
        <div class="section">
            <div class="section-header section-header--deliveredTo">Delivery Details</div>
            <div class="section-content">
                <table cellpadding="2" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td width="25%" valign="top" style="color:#0f146d;font-weight:bold">Name:</td>
                            <td width="75%" valign="top">{{$name}}</td>
                        </tr>
                        <tr>
                            <td valign="top" style="color:#0f146d;font-weight:bold">Address:</td>
                            <td valign="top">{{$address}}</td>
                        </tr>
                        <tr>
                            <td valign="top" style="color:#0f146d;font-weight:bold">Phone:</td>
                            <td valign="top">{{$phone}}</td>
                        </tr>
                        <tr>
                            <td valign="top" style="color:#0f146d;font-weight:bold">Email:</td>
                            <td valign="top"><a href="mailto:.{{$email}}" target="_blank">{{$email}}</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>
                *Note for you: You do not need to pay any duties for overseas product. If asked to, please contact Lazada immediately for further support. If you have already paid duties, send us proof of payment for reimbursement.
                We will keep you updated on the rest of your order (if any).
            </p>
        </div>
        <div class="section" style="padding-bottom:0">
            <div class="section-content">
                <div class="section-header section-header--yourPackage">Order {{$order->order_number}}</div>
                <p style="padding-left:10px;margin-top:0px;margin-bottom:0px;color:#585858">
                    Sold by: BerryBerri shop
                    <br>
                    Delivered on: 7 days after ordering
                </p>
                <div class="product" style="border-bottom:0 none">
                    <table cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                            @foreach($items as $key => $value)
                                <tr>
                                    <td style="width:40%">
                                        <div style="padding-right:10px">
                                           <img src="{{asset('/images/'.$value['productInfo']->url_image)}}" style="width:100%;max-width:160px" class="CToWUd">
                                        </div>
                                    </td>
                                    <td style="width:60%">
                                        <div class="product-productInfo-name">
                                            <a href="https://www.lazada.vn/products/i284164131.html?urlFlag=true&amp;mp=1?" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.lazada.vn/products/i284164131.html?urlFlag%3Dtrue%26mp%3D1?&amp;source=gmail&amp;ust=1597218683440000&amp;usg=AFQjCNGUhXRyq6Mnb-DxNJJML1eBxm_dEw"><span style="font-size:14px">{{$value['productInfo']->name}}</span></a>
                                        </div>
                                        <div class="product-productInfo-price"><span style="font-size:14px">$ {{$value['price']/$value['qty']}}</span></div>
                                        <div class="product-productInfo-subInfo"><span style="font-size:14px">Quantity: {{$value['qty']}}</span></div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="section" style="padding-top:0">
            <div class="section-content">
                <div class="checkout">
                    <div class="two_col">
                        <table cellpadding="0" cellspacing="0" class="checkout-amount" style="border-bottom:1px solid #d8d8d8">
                            <tbody><tr>
                                <td valign="top" style="color:#585858;width:49%">Subtotal:</td>
                                <td align="right" valign="top">USD</td>
                                <td align="right" valign="top">{{$order->total}}}</td>
                            </tr>
                            <tr>
                                <td valign="top" style="color:#585858;width:49%">Shipping fee:</td>
                                <td align="right" valign="top">USD</td>
                                <td align="right" valign="top">Free</td>
                            </tr>
                            <tr>
                                <td valign="top" style="color:#585858;width:49%">Discount:</td>
                                <td align="right" valign="top">USD</td>
                                <td align="right" valign="top">(0.00)</td>
                            </tr>
                            <tr>
                                <td valign="top" style="color:#585858">Total (VAT included):</td>
                                <td align="right" valign="top"><div style="color:#f27c24;font-weight:bold">USD</div></td>
                                <td align="right" valign="top"><div style="color:#f27c24;font-weight:bold">{{$order->total}}}</div></td>
                            </tr>
                            </tbody></table>
                        <br>
                        <table cellpadding="0" cellspacing="0" class="checkout-amount">
                            <tbody><tr>
                                <td valign="top" style="color:#585858;width:49%">Delivery Type:</td>
                                <td align="right" valign="top" colspan="2">Standard</td>
                            </tr>
                            <tr>
                                <td valign="top" style="color:#585858;width:49%">Payment Method:</td>
                                <td align="right" valign="top" colspan="2">Cash On Delivery</td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-end">
            <div class="section-header section-header--notes">You may concern</div>
            <div class="section-content">
                <p>
                    <b>You want to know exact date and time of the delivery?</b><br>
                    Our courier will call you for scheduling before delivery.
                </p>
                <p>
                    <b>You want to check your item(s) by opening the package before accepting?</b><br>
                    Sorry, we haven't supported yet. Your package can only be opened after you have accepted the package by signing on the EPOD.
                </p>
                <p>
                    <b>How can I change delivery address/phone number/recipient for my existing order?</b><br>
                    Changes in delivery address / phone number / recipient of the item are not supported after the order has been successfully made. Hope you could sympathize with&nbsp;us
                </p>
            </div>
        </div>
    </div>
</body>
</html>
