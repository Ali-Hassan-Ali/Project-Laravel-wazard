@extends('layouts.app')

@section('title','Wazard-Centers')

@section('content')

<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">
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
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                                    <span  class="rewards-star-line">
                                            <p>
                                                <span class="rewards-star-num">2</span>This is month</p>
                                        </span>
                                </div>

                                <div class="row">
                                        <span class="rewards-star">
                                            <i class="fa fa-star"></i>
                                        </span>
                                    <span  class="rewards-star-line">
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
                    <section class="widget">
                        <header>
                            <div class="row">
                                <div class="col-lg-10">
                            <h5>
                                Our <span class="fw-semi-bold">Centers</span>
                            </h5>
                                    </div>
                                <div>
                                    <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
                                </div>
                            </div>
                        </header>
                        <div class="widget-body">
                                <div class="row" id="myItems">
                                    <div class="col-md-3 col-sm-6 mb-5 display_none card-body">
                                        <a href="web_development.html" class="link-course">
                                            <div class="card card-block">
                                                <div class="card-body">
                                                <img class="track_img" src="https://www.edarabia.com/wp-content/uploads/2010/10/episcopal-training-center-1-200x200.png" alt="Photo of sunset">
                                                <h5 class="card-title mt-3 mb-3"> Episcopal Training Center (ETC) </h5>
                                                <p class="card-text"> <span style="color: #666666;">Address:</span><span> Building 7 Road 162B Hadayek al Maadi</span></p>
                                            </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mb-5 display_none  card-body">
                                        <a href="https://www.edarabia.com/12473/art-cafe/" class="link-course">
                                            <div class="card card-block ">
                                                <div class="card-body">
                                                <img class="track_img" src="https://www.edarabia.com/wp-content/uploads/2010/10/acad-arab-consulting-development-corporation-200x200.png" alt="Photo of sunset">
                                                <h5 class="card-title mt-3 mb-3"> Acad - Arab Consulting & Development Corporation </h5>
                                                <p class="card-text"> <span style="color: #666666;">Address:</span><span>  5th Urban District, El Banafseg Zone, Area 1</span></p>
                                            </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mb-5 display_none  card-body">
                                        <a href="https://www.edarabia.com/12491/aspect-academy/" class="link-course">
                                            <div class="card card-block">
                                                <div class="">
                                                <img class="track_img" src="https://www.edarabia.com/wp-content/uploads/2010/10/art-cafe-200x200.jpg" alt="Photo of sunset">
                                                <h5 class="card-title mt-3 mb-3">Art Cafe</h5>
                                                <p class="card-text"> <span style="color: #666666;">Address:</span><span> 10b road 11, cross road 85, Maadi</span></p>
                                            </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 mb-5 display_none  card-body">
                                        <a href="web_development.html" class="link-course">
                                            <div class="card card-block">
                                                <div class="">
                                                <img class="track_img" src="https://www.edarabia.com/wp-content/uploads/2010/10/aspect-academy-200x200.png" alt="Photo of sunset">
                                                <h5 class="card-title mt-3 mb-3">Aspect Academy</h5>
                                                <p class="card-text"> <span style="color: #666666;">Address:</span><span> 724 El-Horrya st, Loran</span></p>
                                            </div>
                                            </div>
                                        </a>
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
                                    <p class="recomment_material">Some degree and certificate programs have courses you must take in order to become eligible for admission to the program. If you are an undergraduate independent student planning on eventually pursuing a degree or a certificate, you may wish to use your independent studies to complete courses that will help you fulfill the requirements of your intended future program</p>
                                </div>
                                <div class="col-lg-2">
                                    <button class="material-btn" data-toggle="modal" data-target="#elegantModalForm"> &#43; Add Material</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content form-elegant">
                    <!--Header-->
                    <div class="modal-header text-center">
                        <h3 class="modal-title w-100 dark-grey-text font-weight-bold" id="myModalLabel"><strong>Add Material</strong></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body mx-4">
                        <!--Body-->
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="Form-email1">Course Name</label>
                            <input type="text" id="course_name" class="form-control validate" placeholder="Angular - The Complete Guide (2020 Edition)/">
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="Form-email1">Add Link</label>
                            <input type="email" id="course_link" class="form-control validate" placeholder="https://www.udemy.com/courses/development/">
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="Form-email1">Add Image</label>
                            <input type="file" id="course_img" name="img" accept="image/*" style="height: auto" class="form-control validate">
                        </div>
                        <div class="md-form mb-5">
                            <label data-error="wrong" data-success="right" for="Form-email1">Add Discription</label>
                            <textarea type="text" id="course_disc" class="form-control validate" placeholder="This course starts from scratch, you neither need to know Angular 1 nor Angular 2!">
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
        <!-- Modal -->

        <footer class="footer-content-area ">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"> Wizard </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY &amp; TOS</h5>
                                <a href=""><p>Advertiser Agreement</p></a>
                                <a href=""><p>Acceptable Use Policy</p></a>
                                <a href=""><p>Privacy Policy</p></a>
                                <a href=""><p>Technology Privacy</p></a>
                                <a href=""><p>Developer Agreement</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href=""><p>Advertisers</p></a>
                                <a href=""><p>Developers</p></a>
                                <a href=""><p>Resources</p></a>
                                <a href=""><p>Company</p></a>
                                <a href=""><p>Connect</p></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

@endsection
