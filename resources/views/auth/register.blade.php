@extends('layouts.login')

@section('title','Sign-Up')

@section('content')

    <div class="flexbox-container container">
        <div class="flexbox-item row">
            <div class="col-lg-6" style="padding: 0">
                <div class="image">
                    <img src="{{ asset('img/Screenshot_1.png')}}" alt="image" class="img">
                </div>
            </div>
            <div class="col-lg-6 form-section">

                <div class="button float-right">
                    <button type="submit" id="user_btn" class=" a btn btn-select active"> User</button>
                    <button type="submit" id="org_btn" class=" b btn btn-select">Organization</button>
                </div>{{--end Titler Users and Organization--}}

                <div class="user_form">
                    <h2>Sign-Up</h2>
                    <form method="post" action="{{ route('SignUp.store') }}">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group form-input">
                            <input type="text" name="first_name" id="name" value="" required="">
                            <label for="name" class="form-label">first Name </label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="last_name" id="name" value="" required="">
                            <label for="name" class="form-label">last Name </label>
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" required="">
                            <label for="name" class="form-label"> Email</label>
                        </div>
                        <div class="form-group form-input margin-5">
                            <input type="password" name="password" id="password" value="" required="">
                            <label for="name" class="form-label">Password</label>
                        </div>
                        <div class="form-group form-input margin-5">
                            <input type="password" name="password_confirmation" id="password" value="" required="">
                            <label for="name" class="form-label">Confirm Password</label>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label for="customCheck1" class="custom-control-label">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-submit">
                            <div class="submit-btn">
                                <input type="submit" value="Submit" class="submit" id="submit" name="submit">
                            </div>

                        </div>
                        <div class="form-submit mb-4">
                            <a href="/login" class="vertify-booking">Login-Page</a>
                        </div>
                    </form>
                </div>{{--end forme Sidn-Up Users--}}


                <div class="org_form display py-0">
                    {{--                    <form class="inner-form" method="{{ route('Training .store') }}">--}}
                    <h2 class="mb-0">Sign-Up Organization</h2>
                    <form method="post" action="{{ route('SignUp.store') }}">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group form-input">
                            <select class="form-group pt-4" name="organization">
                                <option value="" class="form-label bg-black" selected="selected"
                                        style="background-color: #2c3b50">Select Organization
                                </option>
                                <option value="WorkOrg" class="form-label bg-black text-capitalize"
                                        style="background-color: #2c3b50; font-size: 20px;">WorkOrg
                                </option>
                                <option value="TrainingOrg" class="form-label bg-black text-capitalize"
                                        style="background-color: #2c3b50;font-size: 20px;">TrainingOrg
                                </option>
                                <option value="EducationalOrg" class="form-label bg-black text-capitalize"
                                        style="background-color: #2c3b50;font-size: 20px;">
                                    EducationalOrg
                                </option>
                            </select>
                        </div>

                        <div class="form-group form-input">
                            <input type="text" name="last_name" id="name" value="" required="">
                            <label for="name" class="form-label">last Name</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="text" name="first_name" id="name" value="" required="">
                            <label for="name" class="form-label">first Name</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" required="">
                            <label for="name" class="form-label">Email</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value="" required="">
                            <label for="name" class="form-label">Password</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="password" name="password_confirmation" id="password" value="" required="">
                            <label for="name" class="form-label">Password Confirmation</label>
                        </div>


                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label for="customCheck1" class="custom-control-label">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-submit">
                            <div class="submit-btn">
                                <button type="submit" class="submit">Submit</button>
                            </div>
                        </div>

                        <div class="form-submit mb-4">
                            <a href="/login" class="vertify-booking">Login-Page</a>
                        </div>

                    </form>{{--end forme  Sign-Up Organization--}}
                </div>
            </div>
        </div>
    </div>

@endsection
