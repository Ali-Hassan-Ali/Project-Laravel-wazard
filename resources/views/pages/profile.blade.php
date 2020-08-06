@extends('layouts.app')

@section('content')

<!-- Page content -->
<div class="analytics">
    <div class="analytics-side">
        <section class="sliderInLeft">
            <div class="pb-xlg">
                <section class="slider-content widget mb-0 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../img/3727714.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../img/3808949.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../img/3993931.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
            </div>
        </section>
        <aside class="fixed-aside">
            <div class="pb-xlg">
                <section class="widget mb-2 h-100">
                    <header>
                        <h5>Rewards</h5>
                    </header>
                    <div class="widget-body">
                        <div class="row">
                                <span class="rewards-star">
                                    <i class="fa fa-star"></i>
                                </span>
                            <span class="rewards-star-line">
                                    <p>
                                        <span class="rewards-star-num">2</span>This is month</p>
                                </span>
                        </div>

                        <div class="row">
                                <span class="rewards-star">
                                    <i class="fa fa-star"></i>
                                </span>
                            <span class="rewards-star-line">
                                    <p>
                                        <span class="rewards-star-num">2</span>This is month</p>
                                </span>
                        </div>
                    </div>
                </section>
            </div>
            <div class="pb-xlg">
                <section class="widget joined mb-2 h-100">
                    <header>
                        <h5>Joind</h5>
                    </header>
                    <div class="widget-body">
                        <div class="row">
                            <!--                                    <div id="anymod-baarlk"></div>-->
                        </div>
                    </div>
                </section>
            </div>
            <div class="pb-xlg">
                <section class="widget joined  h-100">
                    <div class="widget-body">
                        <div class="ads">
                            <img class="" src="../img/images.jpg">
                        </div>
                    </div>
                </section>
            </div>

        </aside>
    </div>

</div>

<div class="all-courses">
    <div class="row">
        <div class="col-lg-12">
            <section class="widget" style="background-color: #fafafb;">
                <header>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>
                                My <span class="fw-semi-bold">Profile</span>
                            </h5>
                        </div>
                    </div>
                </header>
                <div class="widget-body">
                    <div class="row second-row">
                        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                            <div class="data-box">
                                <div class="row">
                                    <p class="fw-semi-bold col-lg-11">Information</p>
                                    <i class="col-lg-1 fa fa-pencil float-right" title="Edite"
                                       data-toggle="modal" data-target="#information_modal"></i>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-4" style="text-align: center">
                                        <img class="rounded-circle" width="50%" src="{{ $user->image_path }}" alt="...">
                                    </div>
                                    <div class="col-lg-8">
                                        <p><span><i class="fa fa-address-card"></i></span><span
                                                class="font-weight-bolder"> Name: </span><span id="name">{{ $user->first_name }} - {{ $user->last_name }}</span>
                                        </p>
                                        <p><span><i class="fa fa-envelope-o"></i></span><span
                                                class="font-weight-bolder"> Email: </span><span id="email">{{ $user->email }}</span>
                                        </p>
                                        <p><span><i class="fa fa-id-card-o"></i></span><span
                                                class="font-weight-bolder"> Id: </span><span
                                                id="id"> 1509950</span></p>
                                        <p><span><i class="fa fa-id-badge"></i></span><span
                                                class="font-weight-bolder"> Type: </span><span
                                                class="badge badge-primary" id="badge">User</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div class="data-box">
                                <div class="row">
                                    <p class="fw-semi-bold col-lg-10">About</p>
                                    <i class="col-lg-2 fa fa-pencil float-right" data-toggle="modal"
                                       data-target="#about_modal" title="Edite"></i>
                                </div>
                                <div class="output-data">
                                    {{ $user->resume }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row second-row">
                        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                            <div class="data-box">
                                <div class="row">
                                    <p class="fw-semi-bold col-lg-11">Contact Info</p>
                                    <i class="col-lg-1 fa fa-pencil float-right" title="Edite"
                                       data-toggle="modal" data-target="#contactinfo_modal"></i>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-6" style="border-right: 1px solid #d9dde4;">
                                        <p><span><i class="fa fa-home"></i></span> <span
                                                class="font-weight-bolder"> Country: </span><span id="adress">{{ $user->country }}</span>
                                        </p>
                                        <p><span><i class="fa fa-phone"></i></span><span
                                                class="font-weight-bolder"> M Phone 1: </span><span id="phone">{{ $user->phone1 }}</span>
                                        </p>
                                        <p><span><i class="fa fa-phone"></i></span><span
                                                class="font-weight-bolder"> M Phone 2: </span><span id="id">{{ $user->phone2 }}</span>
                                        </p>
                                        <p><span><i class="fa fa-birthday-cake"></i></span><span
                                                class="font-weight-bolder"> Date of Birth: </span><span id="id">{{ $user->dob }}</span>
                                        </p>

                                        <p>
                                            <span><i class="fa fa-star-half-full"></i></span>
                                            <span class="font-weight-bolder">Monthly Stars: </span>
                                            <span class="rating" id="m_stars">
                                                     <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span><i class="fa fa-file-text"></i></span><span
                                                class="font-weight-bolder"> Resume: </span><span id="cv1"><a
                                                    class="cv-link" href="{{ $user->resume }}" title="click here"> Resume</a></span>
                                        </p>
                                        <p><span><i class="fa fa-file-text"></i></span><span
                                                class="font-weight-bolder"> CV1: </span><span id="cv1"><a
                                                    class="cv-link" href="{{ $user->cv1 }}" title="click here"> CV1</a></span>
                                        </p>
                                        <p><span><i class="fa fa-file-text"></i></span><span
                                                class="font-weight-bolder"> CV2: </span><span id="cv2"><a
                                                    class="cv-link" href="{{ $user->cv2 }}" title="click here"> CV2</a></span>
                                        </p>
                                        <p><span><i class="fa fa-file-text"></i></span><span
                                                class="font-weight-bolder"> CV3: </span><span id="cv3"><a
                                                    class="cv-link" href="{{ $user->cv3 }}" title="click here"> CV3</a></span>
                                        </p>
                                        <p><span><i class="fa fa-file-text"></i></span><span
                                                class="font-weight-bolder"> CV4: </span><span id="cv4"><a
                                                    class="cv-link" href="{{ $user->cv4 }}" title="click here">CV4</a></span>
                                        </p>

                                        <p>
                                            <span class="font-weight-bolder">Total Stars: </span>
                                            <span class="rating" id="t_stars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                            <span class="fa fa-star"></span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div class="data-box">
                                <div class="row">
                                    <p class="fw-semi-bold col-lg-10">organization Joined</p>
                                </div>
                                <div class="output-data">
                                    <!--  <section class="customer-logos slider">
                                          <div class="slide">
                                              <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                              <p class="justfiy-center" id="course-name">Course Name</p>
                                          </div>
                                          <div class="slide">
                                              <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                              <p class="justfiy-center" id="course-name">Course Name</p>
                                          </div>
                                          <div class="slide">
                                              <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                              <p class="justfiy-center" id="course-name">Course Name</p>
                                          </div>
                                          <div class="slide">
                                              <img class="course-image" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                              <p class="justfiy-center" id="course-name">Course Name</p>
                                          </div>

                                      </section>
                                      -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row second-row">
                        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                            <div class="data-box">
                                <div class="row">
                                    <p class="fw-semi-bold col-lg-11">Courses Liked</p>
                                </div>

                                <div class="row cards">
                                    <div class="col-3 card">
                                        <img class="card-img-top" src="../img/3727714.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">course name</p>
                                        </div>
                                    </div>

                                    <div class="col-3 card">
                                        <img class="card-img-top" src="../img/3727714.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">course name</p>
                                        </div>
                                    </div>

                                    <div class="col-3 card">
                                        <img class="card-img-top" src="../img/3727714.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">course name</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="add_material">
    <div class="row">
        <div class="col-lg-12">
            <section class="widget">
                <header>
                    <h5>
                        Add <span class="fw-semi-bold">Material</span>
                    </h5>
                </header>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="recomment_material">Some degree and certificate programs have courses you
                                must take in order to become eligible for admission to the program. If you are
                                an undergraduate independent student planning on eventually pursuing a degree or
                                a certificate, you may wish to use your independent studies to complete courses
                                that will help you fulfill the requirements of your intended future program</p>
                        </div>
                        <div class="col-lg-2">
                            <button class="material-btn" data-toggle="modal" data-target="#elegantModalForm">
                                &#43; Add Material
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- add matrial  Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold" id="myModalLabel"><strong>Add
                        Material</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <!--Body-->
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Course Name</label>
                    <input type="text" id="course_name" class="form-control validate"
                           placeholder="Angular - The Complete Guide (2020 Edition)/">
                </div>
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Add Link</label>
                    <input type="email" id="course_link" class="form-control validate"
                           placeholder="https://www.udemy.com/courses/development/">
                </div>
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Add Image</label>
                    <input type="file" id="course_img" name="img" accept="image/*" style="height: auto"
                           class="form-control validate">
                </div>
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right">Add Discription</label>
                    <textarea type="text" id="course_disc" class="form-control validate"
                              placeholder="This course starts from scratch, you neither need to know Angular 1 nor Angular 2!">
                            </textarea>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn material-btn">Submit</button>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--  add material Modal -->

<!-- modal information -->
<div class="modal fade" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="post" action="{{ route('AccountProfile.update', $user->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="modal-body mx-4">
                        <!--Body-->
                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right">First Name</label>
                            <input type="text" value="{{ $user->first_name }}" name="first_name"
                                   class="form-control validate">
                        </div>
                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right">Last Name</label>
                            <input type="text" value="{{ $user->last_name }}" name="last_name"
                                   class="form-control validate">
                        </div>

                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right">Change Image</label>
                            <input type="file" value="{{ $user->image }}" id="persone_img" name="image"
                                   style="height: auto"
                                   class="form-control validate">
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">save changes</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Modal information -->

<!-- modal About -->
<div class="modal fade" id="about_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutpheader">About </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="modal-body mx-4">
                    <!--Body-->
                    <form method="post" action="{{ route('Account.update',$user->id ) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right">About</label>
                            <textarea type="text"  name="resume" id="about_disc" class="form-control validate">{{ $user->resume }}</textarea>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal information -->

<!-- modal  contact info -->
<div class="modal fade" id="contactinfo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 650px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact_header">Contact Info </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('Account.update',$user->id ) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="modal-body mx-4">
                        <!--Body-->
                        <div class="row">

                            <div class="col-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">Country</label>
                                <input name="country" type="text" id="country" class="form-control validate">
                            </div>

                            <div class="col-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">Date of Birth</label>
                                <input name="dob" type="date" id="date_birth" class="form-control validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">M Phone1</label>
                                <input name="phone1" type="number" id="phone_1" class="form-control validate">
                            </div>

                            <div class="col-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">M Phone2</label>
                                <input name="phone2" type="number" id="phone_2" class="form-control validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 md-form mb-2">
                                <label data-error="wrong" data-success="right">Upload Resume</label>
                                <input type="file" name="Tresume" accept="*/*" style="height: auto"
                                       class="form-control validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">Upload CV1</label>
                                <input type="file" id="cv_one" name="Tcv1" accept="*/*" style="height: auto"
                                       class="form-control validate">
                            </div>
                            <div class="col-lg-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">Upload CV2</label>
                                <input type="file" id="cv_two" name="Tcv2" accept="*/*" style="height: auto"
                                       class="form-control validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">Upload CV3</label>
                                <input type="file" id="cv_three" name="Tcv3" accept="*/*" style="height: auto"
                                       class="form-control validate">
                            </div>
                            <div class="col-lg-6 md-form mb-2">
                                <label data-error="wrong" data-success="right">Upload CV4</label>
                                <input type="file" id="cv_four" name="Tcv4" accept="*/*" style="height: auto"
                                       class="form-control validate">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">save changes</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal contact info -->

@endsection
