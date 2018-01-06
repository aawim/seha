<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Order System | </title>

    <!-- Bootstrap -->
    <link href="{{url('/').'/vendors/bootstrap/dist/css/bootstrap.min.css'}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/').'/vendors/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/').'/vendors/nprogress/nprogress.css'}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('/').'/vendors/animate.css/animate.min.css'}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/').'/build/css/custom.min.css'}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}


              <h1>System Login</h1>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email"  autofocus>
                  
                                                  @if ($errors->has('email'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                  @endif







              </div>





              






              <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 

                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif




              </div>











              <div>
            
                  <button type="submit" class="btn btn-primary">
                      Login
                  </button>

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      Forgot Your Password?
                  </a>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>
                <p> Trials remain: 3</p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> OOSMV</h1>
                  <p>©2017 - {{date("Y")}}. All Rights Reserved. OOSMV is an online oder system. Target country is Maldives</p>
                   <p>3 attempt security policy is implemented </p>

                    
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                 
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
