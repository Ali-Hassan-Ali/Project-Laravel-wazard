@extends('layouts.app')

@section('title','Wazard-Careers')

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
                                Work  <span class="fw-semi-bold">Org Profile</span>
                            </h5>
                                </div>
                            </div>
                        </header>
                        <div class="widget-body">

                            <div class="row second-row">
                                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                                    <div class="data-box">
                                        <div class="row">
                                            <p class="fw-semi-bold col-lg-11">Data Information</p>
                                            <i class="col-lg-1 fa fa-pencil float-right" title="Edite" data-toggle="modal" data-target="#information_modal"></i>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-2"  style="text-align: center">
                                                <img class="org-logo" src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                                            </div>
                                            <div class="col-lg-5">
                                                <p><span><i class="fa fa-address-card"></i></span><span  class="font-weight-bolder"> Name: </span><span id="name"> Mohamed Eways Ahmed</span></p>
                                                <p><span><i class="fa fa-envelope-o"></i></span><span class="font-weight-bolder"> Email: </span><a id="email"> Cloud-11</a></p>

                                            </div>
                                            <div class="col-lg-5">
                                                <p><span><i class="fa fa-phone"></i></span><span class="font-weight-bolder"> Phone1: </span><span id="email">010101548548</span></p>
                                                <p><span><i class="fa fa-phone"></i></span><span class="font-weight-bolder"> Phone2: </span><span id="email">010101548548</span></p>
                                                <p><span><i class="fa fa-phone"></i></span><span class="font-weight-bolder"> Phone3: </span><span id="email">010101548548</span></p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-3">
                                                <label data-error="wrong" data-success="right">Brief Details*</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="md-form mb-2">
                                                    <textarea maxlength="70" rows="3" cols="40" type="text" id="" class="form-control validate" spellcheck="false" placeholder="write details max words 70word"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-3">
                                                <label data-error="wrong" data-success="right"> Details Intro*</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="md-form mb-2">
                                                    <textarea maxlength="100" rows="4" cols="50" type="text" id="" class="form-control validate" spellcheck="false" placeholder="write details max words 100word"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <p class="fw-semi-bold col-lg-11">Location</p>

                                            <div id="map" style="width: 100%;height: 300px">

                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--   oraganization slider -->
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                    <div class="data-box">
                                        <div class="row">
                                            <p class="fw-semi-bold col-lg-10">Oranizations Images</p>
                                            <i class="col-lg-2 fa fa-pencil float-right" data-toggle="modal" data-target="#add_image_modal" title="Edite"></i>
                                        </div>
                                        <div class="output-data">
                                            <section class="customer-logos slider">
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
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row second-row">
                                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                                    <div class="data-box">
                                        <div class="row">
                                            <p class="fw-semi-bold col-lg-11">Work Staff</p>
                                        </div>
                                        <div class="row mt-4">
                                            <table class="table table-hover">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Job Description</th>
                                                    <th scope="col">Material</th>
                                                    <th scope="col">Edite</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mohamed</td>
                                                    <td>1540</td>
                                                    <td>@mdo</td>
                                                    <td>
                                                        <span class="icon-table"><i class="fa fa-plus" data-toggle="modal" data-target="#add_matrial" > </i> </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon-table"><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#org-profile_modal" > </i> </span>
                                                        <span class="icon-table"><i class="fa fa-trash" data-toggle="modal" data-target="#delete_Modal" ></i> </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mohamed</td>
                                                    <td>1540</td>
                                                    <td>@mdo</td>
                                                    <td>
                                                        <span class="icon-table"><i class="fa fa-plus" data-toggle="modal" data-target="#add_matrial" > </i> </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon-table"><i class="fa fa-pencil-square-o"></i> </span>
                                                        <span class="icon-table"><i class="fa fa-trash"></i> </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mohamed</td>
                                                    <td>1540</td>
                                                    <td>@mdo</td>
                                                    <td>
                                                        <span class="icon-table"><i class="fa fa-plus" data-toggle="modal" data-target="#add_matrial" > </i> </span>
                                                    </td>
                                                    <td>
                                                        <span class="icon-table"><i class="fa fa-pencil-square-o"></i> </span>
                                                        <span class="icon-table"><i class="fa fa-trash"></i> </span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-3" style="justify-content: center">
                                            <button class="material-btn" data-toggle="modal" data-target="#elegantModalForm"> &#43; Add Staff</button>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                    Ads
                                </div>
                            </div>

                            <div class="row second-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                            <div class="row second-row mt-3" style="justify-content: center">
                                <div class="col-lg-9">
                                <div class="data-box">
                                    <div class="row" style="border-bottom: 1px solid #ece3e3;">
                                        <p class="fw-semi-bold col-lg-11"> Org Jobs</p>
                                    </div>
                                    <div class="data-job">
                                    <div class="row">
                                        <div class="col-6 pt-1"><span>Job Name:</span><span>Front End Developer</span></div>
                                        <div class="col-6 pt-2"><span>Job Description:</span><span>.......</span></div>
                                        <div class="col-6"><span>Job Salary:</span><span>2000$</span></div>
                                        <div class="col-6"><span>Job Date:</span><span>20/5/2020</span></div>
                                        <div class="col-6"><span>Job Type: </span><span>Job</span></div>

                                    </div>
                                    <div class="row mt-4" style="justify-content: center">
                                        <button class="material-btn margin-btn" data-toggle="modal" data-target="#">Edit</button>
                                        <button class="material-btn margin-btn" data-toggle="modal" data-target="">Delete</button>
                                        <button class="material-btn margin-btn" data-toggle="modal" data-target="#">Applicans</button>
                                    </div>
                                    </div>
                                    <div class="data-job">
                                        <div class="row">
                                            <div class="col-6 pt-1"><span>Job Name:</span><span>Back End Developer</span></div>
                                            <div class="col-6 pt-2"><span>Job Description:</span><span>.......</span></div>
                                            <div class="col-6"><span>Job Salary:</span><span>2000$</span></div>
                                            <div class="col-6"><span>Job Date:</span><span>20/5/2020</span></div>
                                            <div class="col-6"><span>Job Type: </span><span>Internship</span></div>

                                        </div>
                                        <div class="row mt-4" style="justify-content: center">
                                            <button class="material-btn margin-btn" data-toggle="modal" data-target="#">Edit</button>
                                            <button class="material-btn margin-btn" data-toggle="modal" data-target="">Delete</button>
                                            <button class="material-btn margin-btn" data-toggle="modal" data-target="#">Applicans</button>
                                        </div>
                                    </div>
                            </div>
                                    <div class="row mt-4" style="justify-content: center">
                                        <button class="material-btn" data-toggle="modal" data-target="#"> + Add New Job</button>
                                    </div>
                            </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
<!--        Add material -->
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
<!--        footer -->
@endsection
