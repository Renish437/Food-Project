<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.section.link')


</head>

<body>

    <!-- login section start -->
    <section class="log-in-section section-b-space">
        <a href="" class="logo-login"><img src="{{asset('backend/assets/images/logo/1.png')}}" class="img-fluid" alt=""></a>
        <div class="container w-100">
            <div class="row">

                <div class="col-xl-5 col-lg-6 me-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Zomo</h3>
                            <h5>Log In Your Account</h5>
                        </div>

                        <div class="input-box">
                            <form class="row g-3"  method="POST" action="{{ route('login') }}" autocomplete="on">
                                @csrf
                                <div class="col-12">
                                    <label class="col-form-label pt-0">Your Email</label>
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}"  autocomplete="email" >
                                         <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="col-form-label pt-0">Your Password</label>
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" name="password" placeholder="Enter Password">
                                         <x-input-error :messages="$errors->get('password')" class="mt-2" autocomplete="email" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="custom-checkbox p-0" type="checkbox" name="text" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                        </div>
                                        <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button  class="btn btn-animation w-100 justify-content-center" type="submit">Log
                                        In</button>
                                </div>
                            </form>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login section end -->

</body>

</html>
