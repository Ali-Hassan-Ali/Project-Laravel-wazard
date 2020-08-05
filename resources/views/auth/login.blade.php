@extends('layouts.login')

@section('title','Log-in')

@section('content')

    <div class="flexbox-container container">
        <div class="flexbox-item row">

            <div class="col-lg-6" style="padding: 0">
                <div class="image">
                    <img src="img/Screenshot_1.png" alt="image" class="img">
                </div>
            </div>
            <div class="col-lg-6 form-section">
                <form class="inner-form" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    <h2>Log-in</h2>
                    <div class="form-group form-input">
                        <input type="text" name="email" id="name" value="" required="">
                        <label for="name" class="form-label">Email </label>
                    </div>
                    <div class="form-group form-input margin-5">
                        <input type="password" name="password" id="password" value="" required="">
                        <label for="name" class="form-label">Password</label>
                    </div>
                    <div class="form-submit">
                        <div class="submit-btn">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit">
                        </div>
                        <a href="{{ route('register') }}" class="vertify-booking">New Account</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
