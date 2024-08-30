@extends('layouts.app')
@section('content')
    <section class="tm-welcome-section">
        <div class="container tm-position-relative">
            <div class="tm-lights-container">
                <img src={{ asset('img/light.png') }} alt="Light" class="light light-1">
                <img src={{ asset('img/light.png') }} alt="Light" class="light light-2">
                <img src={{ asset('img/light.png') }} alt="Light" class="light light-3">
            </div>
            <div class="row tm-welcome-content text-center">
                <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src={{ asset("img/header-line.png") }} alt="Line"
                        class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src={{ asset("img/header-line.png") }} alt="Line"
                        class="tm-header-line"></h2>
                <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
                <p class="white-text tm-welcome-description aref-ruqaa-regular" style="font-size: 20px">{{__("language.INTRODUCTION")}}</p>
                <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>
            </div>
            <img src={{ asset("img/table-set.png") }} alt="Table Set" class="tm-table-set img-responsive">
        </div>
    </section>
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
            <section class="tm-section row">
                <div class="col-lg-9 col-md-9 col-sm-8">
                    <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
                    <h2 class="aref-ruqaa-regular">Cafe House</h2>
                    <h4 class="tm-welcome-description aref-ruqaa-regular"> Experience the artistry of coffee at Home Cafe </h4>


                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
                    <div class="inline-block shadow-img">
                        <img src={{ asset("img/1.jpg") }} alt="Image" class="img-circle img-thumbnail">
                    </div>
                </div>
            </section>
            <section class="tm-section tm-section-margin-bottom-0 row">
                <div class="col-lg-12 tm-section-header-container">
                    <h2 class="tm-section-header gold-text tm-handwriting-font"><img src={{ asset("img/logo.png") }} alt="Logo"
                            class="tm-site-logo"> Popular Items</h2>
                    <div class="tm-hr-container">
                        <hr class="tm-hr">
                    </div>
                </div>


                <div class="container">
                    <div class="row test">

                    </div>
                </div>

                <div class="col-lg-12 tm-popular-items-container">
                    <div class="tm-popular-item">
                        <img src={{ asset("img/popular-1.jpg") }} alt="Popular" class="tm-popular-item-img">
                        <div class="tm-popular-item-description">
                            <h3 class="tm-handwriting-font tm-popular-item-title"><span
                                    class="tm-handwriting-font bigger-first-letter">a</span>mericano</h3>
                            <hr class="tm-popular-item-hr">
                            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque. sed ipsum.</p>
                            <div class="order-now-container">
                                <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="tm-popular-item">
                        <img src={{ asset("img/popular-2.jpg") }} alt="Popular" class="tm-popular-item-img">
                        <div class="tm-popular-item-description">
                            <h3 class="tm-handwriting-font tm-popular-item-title"><span
                                    class="tm-handwriting-font bigger-first-letter">c</span>appuccino</h3>
                            <hr class="tm-popular-item-hr">
                            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque. sed ipsum.</p>
                            <div class="order-now-container">
                                <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="tm-popular-item">
                        <img src={{ asset("img/popular-3.jpg") }} alt="Popular" class="tm-popular-item-img">
                        <div class="tm-popular-item-description">
                            <h3 class="tm-handwriting-font tm-popular-item-title"><span
                                    class="tm-handwriting-font bigger-first-letter">m</span>ocha</h3>
                            <hr class="tm-popular-item-hr">
                            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque. sed ipsum.</p>
                            <div class="order-now-container">
                                <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tm-section row">
                <div class="col-lg-12 tm-section-header-container">
                    <h2 class="tm-section-header gold-text tm-handwriting-font"><img src={{ asset("img/logo.png") }} alt="Logo"
                            class="tm-site-logo"> Today's Special</h2>
                    <div class="tm-hr-container">
                        <hr class="tm-hr">
                    </div>
                </div>
                <div class="col-lg-12 tm-special-container margin-top-60">
                    <div class="tm-special-container-left"> <!-- left -->
                        <div class="tm-special-item">
                            <div class="tm-special-img-container">
                                <img src={{ asset("img/special-1.jpg") }} alt="Special" class="tm-special-img img-responsive">
                                <a href="#">
                                    <div class="tm-special-description">
                                        <h3 class="tm-special-title">Donec pede justo</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tm-special-container-right"> <!-- right -->
                        <div>
                            <div class="tm-special-item">
                                <div class="tm-special-img-container">
                                    <img src={{ asset("img/special-2.jpg") }} alt="Special" class="img-responsive">
                                    <a href="#">
                                        <div class="tm-special-description">
                                            <h3 class="tm-special-title">Etiam sit amet</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tm-special-container-lower">
                            <div class="tm-special-item">
                                <div class="tm-special-img-container">
                                    <img src={{ asset("img/special-3.jpg") }} alt="Special" class="img-responsive">
                                    <a href="#">
                                        <div class="tm-special-description">
                                            <p>Vivamus elementum</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tm-special-item">
                                <div class="tm-special-img-container">
                                    <img src={{ asset("img/special-4.jpg") }} alt="Special" class="img-responsive">
                                    <a href="#">
                                        <div class="tm-special-description">
                                            <p>Quisque rutrum.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
