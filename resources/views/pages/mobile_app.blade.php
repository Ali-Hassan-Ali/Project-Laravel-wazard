@extends('layouts.app')

@section('title','Mobile App')

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
                        <h5>
                            Mobile <span class="fw-semi-bold">Application</span>
                        </h5>
                    </header>

                    @if($courses->count() > 0 )
                        <div class="widget-body">
                            <div class="row">
                                @foreach($courses  as $course )
                                    @if($course->course_type == 'mobile')
                                        <div class="col-md-3 col-sm-6 mb-5">
                                            <a href="{{ asset($course->link ) }}" class="link-course">
                                                <div class="card card-block">
                                                    <img class="track_img" src="{{ $course->image_path }}" alt="Photo of sunset">
                                                    <h5 class="card-title mt-3 mb-3"> {{$course->name}}</h5>
                                                    <a href="URL/{{ url($course->link ) }}">https://{{ $course->link  }}</a>
                                                    <p class="card-text">{{$course->description}}</p>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

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
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Add Material</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <form method="post" action="{{ route('AddCourse.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <!--Body-->

                        <div class="form-group">
                            <label for="email">Enter name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter email">
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
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->


@endsection
