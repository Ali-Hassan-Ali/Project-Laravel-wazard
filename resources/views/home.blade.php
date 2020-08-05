@extends('layouts.app')

@section('title','Dashboard')

@section('content')

    <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->

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
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
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


            <!--========== 	 start [testimonel - section] 		========== -->

            <header>
                <h5 class="align-content-center">
                    testimonel
                </h5>
            </header>

            <section class="testimonel slider-content section-padding overlay widget" id="Testimonel">

                <div class="row justify-content-center">
                    <!-- Blok Info -->
                    <div class="client-info">
                        <div class="owl-carousel owl-theme">
                            <!-- Item Client -->
                            <div class="item-client">
                                <div class="image-client">
                                    <img src="../img/clients/client.jpeg" alt="image">
                                </div>
                                <h4 class="mb-10">Awwwesome Work</h4>
                                <div class="rating mb-10">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p> " Reviews are one of the main ways that students can leave public feedback on a
                                    course
                                    for other students to see. Instructors can view all.."</p>


                                <div class="info">
                                    <h5>Jack Daniel</h5>
                                    <h6>Graphic Designer</h6>
                                </div>
                            </div>
                            <div class="item-client col-sm-12">
                                <div class="image-client">
                                    <img src="../img/clients/pexels-photo-694870.jpeg" alt="image">
                                </div>
                                <h4 class="mb-10">Awwwesome Work</h4>
                                <div class="rating mb-10">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p> " Reviews are one of the main ways that students can leave public feedback on a
                                    course
                                    for other students to see. Instructors can view all.."</p>


                                <div class="info">
                                    <h5>Jack Daniel</h5>
                                    <h6>Graphic Designer</h6>
                                </div>
                            </div>
                            <div class="item-client col-sm-12">
                                <div class="image-client">
                                    <img src="../img/clients/pexels-photo-428333.jpeg" alt="image">
                                </div>
                                <h4 class="mb-10">Awwwesome Work</h4>
                                <div class="rating mb-10">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p> " Reviews are one of the main ways that students can leave public feedback on a
                                    course
                                    for other students to see. Instructors can view all.."</p>


                                <div class="info">
                                    <h5>Jack Daniel</h5>
                                    <h6>Graphic Designer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Row-->
            </section>

            <!--========== 	 End [testimonel - section] 		========== -->
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
                                        <p class="recomment_material">Some degree and certificate programs have courses
                                            you
                                            must take in order to become eligible for admission to the program. If you
                                            are
                                            an undergraduate independent student planning on eventually pursuing a
                                            degree or
                                            a certificate, you may wish to use your independent studies to complete
                                            courses
                                            that will help you fulfill the requirements of your intended future
                                            program</p>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="material-btn" data-toggle="modal"
                                                data-target="#elegantModalForm">
                                            &#43; Add Material
                                        </button>
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
                        <form method="get" action="{{ route('addcmaterial.create') }}" enctype="multipart/form-data">
                            <div class="modal-header text-center">
                                <h3 class="modal-title w-100 dark-grey-text font-weight-bold" id="myModalLabel"><strong>Add
                                        Material</strong></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </form>
                    </div>
                    <form method="post" action="{{ route('addcmaterial.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="modal-body mx-4">
                            <!--Body-->

                            <div class="form-group">
                                <label for="email">Enter name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Select track</label>
                                <select class="form-control" name="course_type">
                                    <option>web dev</option>
                                    <option>cyber</option>
                                    <option>mobile</option>
                                    <option>data</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">enter descrption</label>
                                <textarea type="text" name="description" class="form-control"
                                          placeholder="Enter description">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Ener Link</label>
                                <input type="text" name="link" class="form-control" placeholder="Enter link">
                            </div>

                            <div class="form-group">
                                <label for="email">Selcte Images</label>
                                <input type="file" name="image" class="form-control" placeholder="Selcte Images"">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Course <i class="fa fa-plus"></i></button>
                    </form>
                </div>
                <!--Body-->
                </form>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus
                                neque
                                illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
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
