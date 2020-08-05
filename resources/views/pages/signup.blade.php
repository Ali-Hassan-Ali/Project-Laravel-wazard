<!DOCTYPE html>
<html>
<head>
    <title>signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="css/stylels.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
    <![endif]-->
</head>
<body>
<div class="flexbox-container container">
    <div class="flexbox-item row">

         <div class="col-lg-6" style="padding: 0">
             <div class="image">
                 <img src="img/Screenshot_1.png" alt="image" class="img">
             </div>
         </div>
            <div class="col-lg-6 form-section">
                <div class="button float-right">
                    <button type="submit" id="user_btn" class=" a btn btn-select active"> User</button>
                    <button type="submit" id="org_btn" class=" b btn btn-select">Organization</button>
                </div>
                <div class="user_form">
                <form class="inner-form">
              <br><br><br>
                    <div class="form-group form-input">
                        <input type="text" name="name" id="name" value="" required="">
                        <label for="name" class="form-label">Full Name </label>
                    </div>
                    <div class="form-group form-input">
                        <input type="email" name="name" id="email" value="" required="">
                        <label for="name" class="form-label"> Email</label>
                    </div>
                    <div class="form-group form-input margin-5">
                        <input type="password" name="password" id="password" value="" required="">
                        <label for="name" class="form-label">Password</label>
                    </div>
                    <div class="form-group form-input margin-5">
                        <input type="password" name="password" id="password" value="" required="">
                        <label for="name" class="form-label">Confirm Password</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                        <label class="custom-control-label" for="customCheck">i agree with all the statement above</label>
                    </div>
                    <div class="form-submit">
                        <div class="submit-btn">
                        <input type="submit" value="Submit" class="submit" id="submit" name="submit">
                        </div>
                        <a href="/login" class="vertify-booking">I'm a member Yet ?</a>
                    </div>

                </form>
                </div>
                <div class="org_form display">
{{--                    <form class="inner-form" method="{{ route('Training .store') }}">--}}
                        <br><br>
                        <div class="row mt-4 justfiy-center">
                            <!-- Default inline 0-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="1" type="radio" class="custom-control-input" id="defaultInline0" name="inlineDefaultRadiosExample" checked="">
                                <form class="inner-form" method="">
                                <label class="custom-control-label" for="defaultInline0">Company/cor.</label>
                            </div>
                            <!-- Default inline 1-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="2"  type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                                <form class="inner-form" method="">
                                <label class="custom-control-label" for="defaultInline1">Training Center</label>
                            </div>

                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="3"  type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                                <form class="inner-form" method="">
                                <label class="custom-control-label" for="defaultInline2">Edu.</label>
                            </div>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required="">
                            <label for="name" class="form-label">Organization Name </label>
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="name" id="email" value="" required="">
                            <label for="name" class="form-label"> Email</label>
                        </div>
                        <div class="form-group form-input margin-5">
                            <input type="password" name="password" id="password" value="" required="">
                            <label for="name" class="form-label">Password</label>
                        </div>
                        <div class="form-group form-input margin-5">
                            <input type="password" name="password" id="password" value="" required="">
                            <label for="name" class="form-label">Confirm Password</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">i agree with all the statement above</label>
                        </div>
                        <div class="form-submit">
                            <div class="submit-btn">
                                <input type="submit" value="Submit" class="submit" id="submit" name="submit">
                            </div>
                            <a href="/login" class="vertify-booking">I'm a member Yet ?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/scriptls.js"></script>
</body>
</html>
