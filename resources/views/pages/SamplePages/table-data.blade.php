@extends('layouts.app')
@section('content')
    <!--Body-->
    <div class="main-content pt-0">
        <div class="container">
            <div class="page-header">
                <div><h2 class="main-content-title tx-24 mg-b-5">DataTable</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Maps &amp; Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </div>
                <div class="btn btn-list"><a class="btn ripple btn-primary" href="#"><i class="fe fe-external-link"></i>
                        Export</a> <a class="btn ripple btn-secondary" href="#"><i class="fe fe-download"></i> Download</a>
                    <a class="btn ripple btn-info" href="#"><i class="fe fe-help-circle"></i> Help</a> <a
                        class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true"> <i class="fe fe-settings"></i> Settings <i
                            class="fas fa-caret-down ml-1"></i> </a>
                    <div class="dropdown-menu tx-13"><a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a> <a
                            class="dropdown-item" href="#"><i class="fe fe-mail mr-2"></i>Email</a> <a
                            class="dropdown-item" href="#"><i class="fe fe-folder-plus mr-2"></i>Save</a> <a
                            class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a> <a
                            class="dropdown-item" href="#"><i class="fe fe-settings mr-2"></i>More</a></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                            <div><h6 class="card-title mb-1">Basic DataTable</h6>
                                <p class="text-muted card-sub-title">Searching, ordering and paging goodness will be
                                    immediately added to the table, as shown in this example.</p></div>
                            <div class="table-responsive">
                                <table class="table" id="example1_wrapper">
                                    <thead>
                                    <tr role="row">
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>$433,060</td>
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
@include('pages.plugins.datatable')
@push('footer-js')
    <script>
        $('#example1_wrapper').dataTable();
    </script>
@endpush
