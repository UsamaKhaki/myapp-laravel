@extends('layouts.app', ['navbar' => false])
@section('content')
<div class="page error-bg main-error-wrapper"> <!-- Main-error -->
    <div class="row align-items-center d-flex flex-row">
        <div class="col-lg-6 pr-lg-4 tx-lg-right"><h1 class="display-1 mb-0">404</h1></div>
        <div class="col-lg-6 tx-lg-left"><h2>Oops.The Page you are looking for doesn't exit..</h2> <h6>You may have
                mistyped the address or the page may have moved. Try searching below.</h6> <a
                class="btn ripple btn-primary text-center" href="{{ route('page-dashboard') }}">Back to Home</a></div>
    </div> <!-- End Main-error -->
</div>
<!--End Body-->
@endsection
