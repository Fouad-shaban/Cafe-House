@extends('layouts.app')


@section('content')
    <section class="tm-welcome-section">
        <div class="container tm-position-relative">
            <div class="tm-lights-container">
                <img src={{ asset("img/light.png") }} alt="Light" class="light light-1">
                <img src={{ asset("img/light.png") }} alt="Light" class="light light-2">
                <img src={{ asset("img/light.png") }} alt="Light" class="light light-3">
            </div>
            <div class="row tm-welcome-content">
                <h2 class="white-text aref-ruqaa-regular tm-welcome-header"><img src={{ asset("img/header-line.png") }} alt="Line"
                        class="tm-header-line">&nbsp;{{ __('language.CONTACT') }}&nbsp;&nbsp;<img src={{ asset("img/header-line.png") }} alt="Line"
                        class="tm-header-line"></h2>
                <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
                <p class="gray-text tm-welcome-description aref-ruqaa-regular " style="font-size: 20px">{{__("language.INTRODUCTION")}}</p>
                <a href="#main" class="tm-more-button tm-more-button-welcome">{{ __('language.CONTACT') }}</a>

            </div>
            <img src={{ asset("img/table-set.png") }} alt="Table Set" class="tm-table-set img-responsive">
        </div>
    </section>
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
            <section class="tm-section row">
                <h2 class="col-lg-12 margin-bottom-30 aref-ruqaa-regular">Send us a message</h2>
                <form action="#" method="post" class="tm-contact-form">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="tm-more-button" type="submit" name="submit">Send message</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div id="google-map"></div>
                    </div>
                </form>
            </section>
        </div>
    </div>

@endsection


