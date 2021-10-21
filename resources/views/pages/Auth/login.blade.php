@extends('layouts.app', ['navbar' => false])
@section('content')
    <div class="page main-signin-wrapper">
        <div class="container w-50">
            <div class="text-center mb-4">
                <img src="{{ asset('img/logo/logo-sm.png') }}" height="100" alt="">
            </div>
            <div class="card custom-card rounded w-50 mx-auto">
                <div class="card-body">
                    <h4 class="mb-4 text-center">Signup to Your Account</h4>
                    <form>
                        <div class="form-group text-left">
                            <label>Username or Email</label>
                            <input class="form-control" placeholder="Enter your Username or Email" type="text">
                        </div>

                        <div class="form-group text-left">
                            <label>Password</label>
                            <input class="form-control" placeholder="Enter your Password" type="password">
                        </div>

                        <label class="ckbox text-left"><input type="checkbox"><span>Remember me</span></label>

                        <button class="btn ripple btn-main-primary btn-block mt-5"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--End Body-->
@endsection
