@extends('layouts.app')
@section('content')
    <!--Body-->
        <div class="main-content pt-0">
            <div class="container">
                <div class="page-header">
                    <div><h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sales Dashboard</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="mr-2"><a class="btn ripple btn-outline-primary dropdown-toggle mb-0" href="#"
                                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i
                                class="fe fe-external-link"></i> Export <i class="fas fa-caret-down ml-1"></i> </a>
                            <div class="dropdown-menu tx-13"><a class="dropdown-item" href="#"><i
                                    class="far fa-file-pdf mr-2"></i>Export as Pdf</a> <a class="dropdown-item" href="#"><i
                                    class="far fa-image mr-2"></i>Export as Image</a> <a class="dropdown-item" href="#"><i
                                    class="far fa-file-excel mr-2"></i>Export as Excel</a></div>
                        </div>
                        <div class=""><a href="#" class="btn ripple btn-secondary navresponsive-toggler mb-0"
                                         data-toggle="collapse" data-target="#navbarSupportedContent"
                                         aria-controls="navbarSupportedContent" aria-expanded="false"
                                         aria-label="Toggle navigation"> <i class="fe fe-filter mr-1"></i> Filter <i
                                class="fas fa-caret-down ml-1"></i> </a></div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card custom-card">
                            <div class="card-body dash1">
                                <div class="d-flex"><p class="mb-1 tx-inverse">Number Of Sales</p>
                                    <div class="ml-auto"><i class="fas fa-chart-line fs-20 text-primary"></i></div>
                                </div>
                                <div><h3 class="dash-25">568</h3></div>
                                <div class="progress mb-1">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                         class="progress-bar progress-bar-xs wd-70p" role="progressbar"></div>
                                </div>
                                <div class="expansion-label d-flex"><span class="text-muted">Last Month</span> <span
                                        class="ml-auto"><i class="fas fa-caret-up mr-1 text-success"></i>0.7%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card custom-card">
                            <div class="card-body dash1">
                                <div class="d-flex"><p class="mb-1 tx-inverse">New Revenue</p>
                                    <div class="ml-auto"><i class="fab fa-rev fs-20 text-secondary"></i></div>
                                </div>
                                <div><h3 class="dash-25">$12,897</h3></div>
                                <div class="progress mb-1">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                         class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
                                </div>
                                <div class="expansion-label d-flex"><span class="text-muted">Last Month</span> <span
                                        class="ml-auto"><i class="fas fa-caret-down mr-1 text-danger"></i>0.43%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card custom-card">
                            <div class="card-body dash1">
                                <div class="d-flex"><p class="mb-1 tx-inverse">Total Cost</p>
                                    <div class="ml-auto"><i class="fas fa-dollar-sign fs-20 text-success"></i></div>
                                </div>
                                <div><h3 class="dash-25">$11,234</h3></div>
                                <div class="progress mb-1">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                         class="progress-bar progress-bar-xs wd-50p bg-success" role="progressbar"></div>
                                </div>
                                <div class="expansion-label d-flex text-muted"><span class="text-muted">Last Month</span>
                                    <span class="ml-auto"><i class="fas fa-caret-down mr-1 text-danger"></i>1.44%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card custom-card">
                            <div class="card-body dash1">
                                <div class="d-flex"><p class="mb-1 tx-inverse">Profit By Sale</p>
                                    <div class="ml-auto"><i class="fas fa-signal fs-20 text-info"></i></div>
                                </div>
                                <div><h3 class="dash-25">$789</h3></div>
                                <div class="progress mb-1">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                         class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
                                </div>
                                <div class="expansion-label d-flex text-muted"><span class="text-muted">Last Month</span>
                                    <span class="ml-auto"><i class="fas fa-caret-up mr-1 text-success"></i>0.9%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-4 col-lg-4 mb-3">
                        <div class="card custom-card mb-0 h-100">
                            <div class="card-body">
                                <div><h6 class="card-title mb-1">Activity</h6>
                                    <p class="text-muted mb-0 card-sub-title">Nemo enim ipsam voluptatem fugit sequi
                                        nesciunt.</p></div>
                            </div>
                            <div class="card-body">
                                <div class="activity-block">
                                    <ul class="task-list">
                                        <li><i class="task-icon bg-success"></i> <h6>Successful Purchase<small
                                                class="float-right text-muted tx-11">29 Oct 2019</small></h6> <span
                                                class="text-muted tx-12">Order ID: #4567</span></li>
                                        <li><i class="task-icon bg-secondary"></i> <h6>New Registered Seller<small
                                                class="float-right text-muted tx-11">25 Oct 2019</small></h6> <span
                                                class="text-muted tx-12">User ID: #8976</span></li>
                                        <li><i class="task-icon bg-primary"></i> <h6>Order Verification<small
                                                class="float-right text-muted tx-11">14 Oct 2019</small></h6> <span
                                                class="text-muted tx-12">Order ID: #6290</span></li>
                                        <li><i class="task-icon bg-info"></i> <h6>New Item Added<small
                                                class="float-right text-muted tx-11">02 Oct 2019</small></h6> <span
                                                class="text-muted tx-12">Item ID: #0235</span></li>
                                        <li><i class="task-icon bg-danger"></i> <h6>Purchase Cancellation<small
                                                class="float-right text-muted tx-11">28 Sep 2019</small></h6> <span
                                                class="text-muted tx-12">Order ID: #1905</span></li>
                                        <li class="mb-0"><i class="task-icon bg-warning"></i> <h6>Overdue Shipments<small
                                                class="float-right text-muted tx-11">25 Sep 2019</small></h6> <span
                                                class="text-muted tx-12">Order ID: #8902</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 col-lg-4 mb-3">
                        <div class="card custom-card mb-0 h-100">
                            <div class="card-body">
                                <div><h6 class="card-title mb-1">Top Users Conversion Rate</h6>
                                    <p class="text-muted mb-0 card-sub-title">Nemo enim ipsam voluptatem fugit sequi
                                        nesciunt.</p></div>
                            </div>
                            <div class="user-manager scroll-widget border-top">
                                <div class="table-responsive">
                                    <table class="table mg-b-0">
                                        <tbody>
                                        <tr>
                                            <td class="bd-t-0">
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/2.jpg"></div>
                                            </td>
                                            <td class="bd-t-0"><h6 class="mg-b-0">Socrates Itumay</h6><small
                                                    class="tx-11 tx-gray-500">Sales Manager1</small></td>
                                            <td class="bd-t-0"><h6 class="mg-b-0 font-weight-bold">34%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/3.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Reynante Labares</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager2</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">22%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/5.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager4</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">15%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/5.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager4</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">15%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/5.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager4</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">15%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4 col-lg-4 mb-3">
                        <div class="card custom-card mb-0 h-100">
                            <div class="card-body">
                                <div><h6 class="card-title mb-1">Top Users Conversion Rate</h6>
                                    <p class="text-muted mb-0 card-sub-title">Nemo enim ipsam voluptatem fugit sequi
                                        nesciunt.</p></div>
                            </div>
                            <div class="user-manager scroll-widget border-top">
                                <div class="table-responsive">
                                    <table class="table mg-b-0">
                                        <tbody>
                                        <tr>
                                            <td class="bd-t-0">
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/2.jpg"></div>
                                            </td>
                                            <td class="bd-t-0"><h6 class="mg-b-0">Socrates Itumay</h6><small
                                                    class="tx-11 tx-gray-500">Sales Manager1</small></td>
                                            <td class="bd-t-0"><h6 class="mg-b-0 font-weight-bold">34%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/3.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Reynante Labares</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager2</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">22%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/5.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager4</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">15%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/5.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager4</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">15%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-img-user"><img alt="avatar"
                                                                                src="./img/5.jpg"></div>
                                            </td>
                                            <td><h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Sales
                                                Manager4</small></td>
                                            <td><h6 class="mg-b-0 font-weight-bold">15%</h6><small
                                                    class="tx-11 tx-gray-500">Conversion Rate</small></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-12 col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div><h6 class="card-title mb-1">Product Summary</h6>
                                    <p class="text-muted card-sub-title">Nemo enim ipsam voluptatem fugit sequi
                                        nesciunt.</p></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th>#No</th>
                                            <th>Client Name</th>
                                            <th>Product ID</th>
                                            <th>Product</th>
                                            <th>Product Cost</th>
                                            <th>Payment Mode</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#01</td>
                                            <td>Sean Black</td>
                                            <td>PRO12345</td>
                                            <td>Mi LED Smart TV 4A 80</td>
                                            <td>$14,500</td>
                                            <td>Online Payment</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#02</td>
                                            <td>Evan Rees</td>
                                            <td>PRO8765</td>
                                            <td>Thomson R9 122cm (48 inch) Full HD LED TV</td>
                                            <td>$30,000</td>
                                            <td>Cash on delivered</td>
                                            <td><span class="badge badge-primary">Add Cart</span></td>
                                        </tr>
                                        <tr>
                                            <td>#03</td>
                                            <td>David Wallace</td>
                                            <td>PRO54321</td>
                                            <td>Vu 80cm (32 inch) HD Ready LED TV</td>
                                            <td>$13,200</td>
                                            <td>Online Payment</td>
                                            <td><span class="badge badge-secondary">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#04</td>
                                            <td>Julia Bower</td>
                                            <td>PRO97654</td>
                                            <td>Micromax 81cm (32 inch) HD Ready LED TV</td>
                                            <td>$15,100</td>
                                            <td>Cash on delivered</td>
                                            <td><span class="badge badge-info">Delivering</span></td>
                                        </tr>
                                        <tr>
                                            <td>#05</td>
                                            <td>Kevin James</td>
                                            <td>PRO4532</td>
                                            <td>HP 200 Mouse &amp; Wireless Laptop Keyboard</td>
                                            <td>$5,987</td>
                                            <td>Online Payment</td>
                                            <td><span class="badge badge-danger">Shipped</span></td>
                                        </tr>
                                        <tr>
                                            <td>#06</td>
                                            <td>Theresa Wright</td>
                                            <td>PRO6789</td>
                                            <td>Digisol DG-HR3400 Router</td>
                                            <td>$11,987</td>
                                            <td>Cash on delivered</td>
                                            <td><span class="badge badge-secondary">Delivering</span></td>
                                        </tr>
                                        <tr>
                                            <td>#07</td>
                                            <td>Sebastian Black</td>
                                            <td>PRO4567</td>
                                            <td>Dell WM118 Wireless Optical Mouse</td>
                                            <td>$4,700</td>
                                            <td>Online Payment</td>
                                            <td><span class="badge badge-info">Add to Cart</span></td>
                                        </tr>
                                        <tr>
                                            <td>#08</td>
                                            <td>Kevin Glover</td>
                                            <td>PRO32156</td>
                                            <td>Dell 16 inch Laptop Backpack</td>
                                            <td>$678</td>
                                            <td>Cash On delivered</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--End Body-->
@endsection
