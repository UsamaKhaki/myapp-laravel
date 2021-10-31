@extends('layouts.app')
@section('content')
    <!--Body-->
    <div class="main-content pt-0 h-100">
        <div class="container"> <!-- Page Header -->
            <div class="page-header">
                <div><h2 class="main-content-title tx-24 mg-b-5">My Resume</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Resume</li>
                    </ol>
                </div>
                <div class="btn btn-list">
                    <a class="btn ripple btn-primary" href="#"><i class="fe fe-download"></i>
                        Download CV
                    </a>
                </div>
            </div> <!-- End Page Header --> <!-- Row -->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body text-center">
                            <div class="main-profile-overview widget-user-image text-center">
                                <div class="main-img-user"><img alt="avatar" src="https://www.spruko.com/demo/dashlead/dashlead/assets/img/users/1.jpg"></div>
                            </div>
                            <div class="item-user pro-user"><h4 class="pro-user-username text-dark mt-2 mb-0">Sonia
                                    Taylor</h4>
                                <p class="pro-user-desc text-muted mb-1">Web Designer</p>
                                <p class="user-info-rating"><a hre
                                                               f="#"><i class="fa fa-star text-warning"> </i></a> <a
                                        href="#"><i class="fa fa-star text-warning"> </i></a> <a href="#"><i
                                            class="fa fa-star text-warning"> </i></a> <a href="#"><i
                                            class="fa fa-star text-warning"> </i></a> <a href="#"><i
                                            class="far fa-star text-warning"> </i></a></p>
                                <div class="contact-info mb-3"><a href="#" class="contact-icon border text-primary"><i
                                            class="fab fa-facebook-f"></i></a> <a href="#"
                                                                                  class="contact-icon border text-primary"><i
                                            class="fab fa-twitter"></i></a> <a href="#"
                                                                               class="contact-icon border text-primary"><i
                                            class="fab fa-google"></i></a> <a href="#"
                                                                              class="contact-icon border text-primary"><i
                                            class="fab fa-dribbble"></i></a></div>
                                <a href="#" class="btn ripple btn-primary btn-sm"><i
                                        class="far fa-edit mr-1"></i>Edit</a> <a href="#"
                                                                                 class="btn ripple btn-secondary btn-sm"><i
                                        class="fas fa-rss mr-1"></i>Follow</a></div>
                        </div>
                        <div class="card-footer p-0">
                            <div class="row text-center">
                                <div class="col-sm-6 border-right">
                                    <div class="description-block"><h5 class="description-header mb-1">689k</h5> <span
                                            class="text-muted">Followers</span></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="description-block"><h5 class="description-header mb-1">3,765</h5> <span
                                            class="text-muted">Following</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card">
                        <div class="card-header custom-card-header">
                            <div><h6 class="card-title mb-0">Skills</h6></div>
                        </div>
                        <div class="card-body">
                            <div class="skill-tags">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">Java Script</a></li>
                                    <li><a href="#">Photo Shop</a></li>
                                    <li><a href="#">Php</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Sass</a></li>
                                    <li><a href="#">Angular</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card">
                        <div class="card-header custom-card-header">
                            <div><h6 class="card-title mb-0">Contact Information</h6></div>
                        </div>
                        <div class="card-body">
                            <div class="main-profile-contact-list main-profile-work-list">
                                <div class="media">
                                    <div class="media-logo bg-light text-dark"><i class="fe fe-smartphone"></i></div>
                                    <div class="media-body"><span>Mobile</span>
                                        <div> (+63) 123 4567 890</div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-logo bg-light text-dark"><i class="fe fe-mail"></i></div>
                                    <div class="media-body"><span>Slack</span>
                                        <div> @sophia.w</div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-logo bg-light text-dark"><i class="fe fe-map-pin"></i></div>
                                    <div class="media-body"><span>Current Address</span>
                                        <div> San Francisco, CA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card custom-card main-content-body-profile">
                        <div class="card-body h-100">
                            <div class="main-content-label tx-13 mg-b-20"> Personal Information</div>
                            <div class="table-responsive ">
                                <table class="table row table-borderless">
                                    <tbody class="col-lg-12 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Full Name :</strong>Sonia Taylor</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Location :</strong> UK</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Languages :</strong> English, German, Spanish.</td>
                                    </tr>
                                    </tbody>
                                    <tbody class="col-lg-12 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>Website :</strong> domain.com</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email :</strong> klomitoor@doamin.com</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone :</strong> +125 254 3562</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card main-content-body-profile">
                        <div class="card-body h-100">
                            <div class="main-content-label tx-13 mg-b-20"> About</div>
                            <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy when an unknown printer took a galley of type and
                                scrambled Lorem Ipsum has been the industry's standard dummy when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived
                                .</p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo consequat. Duis aute irure dolor in reprehenderit Lorem Ipsum has been
                                the industry's standard dummy when an unknown printer took a galley of type and
                                scrambled in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                    <div class="card custom-card main-content-body-profile">
                        <div class="card-body h-100">
                            <div class="main-content-label tx-13 mg-b-20"> Education Details</div>
                            <div class="main-profile-work-list">
                                <div class="media">
                                    <div class="media-logo bg-success"><i class="icon ion-logo-whatsapp"></i></div>
                                    <div class="media-body"><h6>UI/UX Designer at <a href="">Whatsapp</a></h6><span>2016 - present</span>
                                        <p>Past Work: spruko, Inc.</p></div>
                                </div>
                                <div class="media">
                                    <div class="media-logo bg-primary"><i class="icon ion-logo-buffer"></i></div>
                                    <div class="media-body"><h6>Studied at <a href="">Buffer University</a></h6>
                                        <span>2002 - 2006</span>
                                        <p>Degree: Bachelor of Science in Computer Science</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card main-content-body-profile">
                        <div class="card-body h-100">
                            <div class="main-content-label tx-13 mg-b-20"> Work </div>
                            <div class="main-profile-work-list">
                                <div class="media">
                                    <div class="media-logo bg-success"><i class="icon ion-logo-whatsapp"></i></div>
                                    <div class="media-body"><h6>UI/UX Designer at <a href="">Whatsapp</a></h6><span>2016 - present</span>
                                        <p>Past Work: spruko, Inc.</p></div>
                                </div>
                                <div class="media">
                                    <div class="media-logo bg-primary"><i class="icon ion-logo-buffer"></i></div>
                                    <div class="media-body"><h6>Studied at <a href="">Buffer University</a></h6>
                                        <span>2002 - 2006</span>
                                        <p>Degree: Bachelor of Science in Computer Science</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Body-->
@endsection
