<title>Log in</title>
@include('header')
<main>

    <!---------------------------->
    <!-- login box starts -->
    <!---------------------------->

    <div class="row text-center">
        <div class="col-lg-4 my-5 mx-auto border border-primary rounded-3">

            <form method="POST" action="{{ route('successfully_login') }}" class="my-3">
                @csrf
                <h3 >Login</h3>

                <div class="row mb-3">
                    <div class="col-lg-12">
                      <input type="email" name="email" class="form-control border border-primary" id="inputEmail3" placeholder="Enter your email">
                    </div>
                </div>


                <div class="row mb-3">
                  <div class="col-lg-12">
                    <input type="password" name="password" class="form-control border border-primary" id="userPassword" placeholder="Enter your password">
                  </div>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

                
                <button type="submit" class="btn btn-primary mb-3 text-light">Log in</button>

                <h6>Don't have an accout, <a href="{{ route('user_register') }}">Register Now</a></h6>
              </form>

        </div>
    </div>

    <!-- login box ends -->
    <!---------------------------->


    </div>

  </main>

  @include('footer')