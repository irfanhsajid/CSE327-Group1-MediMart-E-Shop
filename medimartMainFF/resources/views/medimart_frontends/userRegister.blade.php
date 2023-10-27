<title>Register</title>
@include('header')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <main>

    <!---------------------------->
    <!-- registration box starts -->
    <!---------------------------->

    <div class="row text-center">
        <div class="col-lg-4 my-5 mx-auto border border-primary rounded-3">

            <form method="POST" action="{{ route('user_register') }}">
                @csrf
                <h3 >Registration</h3>

                <div class="row mb-3">
                    <div class="col-lg-12">
                      <input type="text" name="name" class="form-control border border-primary" id="userName" placeholder="Enter your name">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                      <input type="email" name="email" class="form-control border border-primary" id="inputEmail3" placeholder="Enter your email">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                      <input type="number" name="phone" class="form-control border border-primary" id="phoneNumber" placeholder="Enter your phone number">
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col-lg-12">
                    <input type="password" name="password" class="form-control border border-primary" id="userPassword" placeholder="Enter your password">
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                      <input type="password" name="confirm_password"  class="form-control border border-primary" id="userConfirmPassword" placeholder="Confirm password">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary mb-3 text-light">Register Now</button>

                <h6>Already have an accout, <a href=" {{route('user_login')}} ">log in</a></h6>
              </form>

        </div>
    </div>


    </div>

  </main>

  @include('footer')
