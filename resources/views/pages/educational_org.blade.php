@extends('layouts.app')

@section('title','educational_org')

@section('content')

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
                                    Acadimic <span class="fw-semi-bold">Org</span>
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
                                <a href="http://www.fayoum.edu.eg/english/" class="link-course">
                                    <div class="card card-block">
                                        <div class="card-body">
                                            <img class="track_img" src="../img/org/0.png" alt="Photo of sunset">
                                            <h5 class="card-title mt-3 mb-3"> Fayoum university </h5>
                                            <p class="card-text"> <span style="color: #666666;">Address:</span><span>  32 شارع زيد بن حارثة، المشتل </span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-5 display_none  card-body">
                                <a href="https://www.aucegypt.edu/home" class="link-course">
                                    <div class="card card-block ">
                                        <div class="card-body">
                                            <img class="track_img" src="../img/org/2.png" alt="Photo of sunset">
                                            <h5 class="card-title mt-3 mb-3">AUC University</h5>
                                            <p class="card-text"> <span style="color: #666666;">Address:</span><span>  5th Urban District, El Banafseg Zone, Area 1</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-5 display_none  card-body">
                                <a href="http://www.asu.edu.eg/" class="link-course">
                                    <div class="card card-block">
                                        <div class="card-body">
                                            <img class="track_img" src="../img/org/3.png" alt="Photo of sunset">
                                            <h5 class="card-title mt-3 mb-3">Ain Shams University</h5>
                                            <p class="card-text"> <span style="color: #666666;">Address:</span><span> El-Khalyfa El-Mamoun Street Abbasya,Cairo , Eygpt</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-5 display_none  card-body">
                                <a href="https://cu.edu.eg/Home" class="link-course">
                                    <div class="card card-block">
                                        <div class="card-body">
                                            <img class="track_img" src="../img/org/4.jpeg" alt="Photo of sunset">
                                            <h5 class="card-title mt-3 mb-3">Cairo University</h5>
                                            <p class="card-text"> <span style="color: #666666;">Address:</span><span>: شارع الجامعة، Cairo University Rd, 12613
</span></p>
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

@endsection
