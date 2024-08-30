@extends('layouts.app')
@section('content')
    <section class="tm-welcome-section" style="height: 450px">
        <div class="container tm-position-relative">
            <div class="tm-lights-container">
                <img src={{ asset('img/light.png') }} alt="Light" class="light light-1">
                <img src={{ asset('img/light.png') }} alt="Light" class="light light-2">
                <img src={{ asset('img/light.png') }} alt="Light" class="light light-3">
            </div>
            <div class="row ">
                <h2 class="gold-text tm-welcome-header-2" style="margin-top: 120px">Cafe House</h2>
                <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src={{ asset('img/header-line.png') }}
                        alt="Line" class="tm-header-line">&nbsp;DASHBOARD&nbsp;&nbsp;<img
                        src={{ asset('img/header-line.png') }} alt="Line" class="tm-header-line"></h2>
                <a href={{ route('welcome') }}
                    class="tm-more-button tm-more-button-welcome">{{ __('language.HOMEPAGE') }}</a>
            </div>

        </div>
    </section>
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
            <div class="row">
                <div class="col-md-12" style="margin-top:-100px">
                    @if (session('message'))
                        <h4 class="tm-handwriting-font tm-welcome-header gold-text">{{ session('message') }}</h4>
                    @endif
                    <table class="table table-striped ">
                        <h2 class="aref-ruqaa-regular text-center gold-text ">{{ __('language.MENU') }}</h2>
                        <a href={{ route('menu.create') }}
                            class="order-now-link aref-ruqaa-regular ">{{ __('language.CREATENEWPRODUCT') }}</a>

                        <thead class="gold-text">
                            <tr>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">id</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Image</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Title</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Describtion</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Price</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Parent_ID</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Opration</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item)
                                <tr>
                                    <td class="aref-ruqaa-regular" style="font-size: 20px">{{ $item->id }}</td>
                                    <td>
                                        <img src="{{ asset('img/menu/' . $item->image) }}" style="height: 70px; width: 70px;"
                                            alt="">
                                    </td>
                                    <td class="aref-ruqaa-regular" style="font-size: 20px">{{ $item->title }}</td>

                                    <td class="aref-ruqaa-regular" style="font-size: 17px">{{ $item->description }}</td>

                                    <td class="aref-ruqaa-regular" style="font-size: 17px">{{ $item->price }}</td>
                                    <td class="aref-ruqaa-regular" style="font-size: 17px">{{ $item->parent_id }}</td>
                                    <td>
                                        <a href={{ route('menu.show', $item->id) }}><i class="fa-solid fa-eye fa-lg"
                                                style="color: #e6ca65;"></i></a>
                                        <a href={{ route('menu.edit', $item->id) }}><i
                                                class="fa-solid fa-pen-to-square fa-lg" style="color: #4766ee;"></i></a>
                                        <a href="{{ route('menu.delete', $item->id) }}"><i class="fa-solid fa-trash fa-lg"
                                                style="color: #db1313;"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                </div>
                <table class="table table-striped  ">
                    <h2 class="aref-ruqaa-regular text-center gold-text">{{ __('language.TODAYSPECIAL') }}</h2>
                    <a href={{ route('todayspecial.create') }}
                        class="order-now-link aref-ruqaa-regular ">{{ __('language.CREATENEWPRODUCT') }}</a>

                        <thead class="gold-text">
                            <tr>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">id</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Image</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Title</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Describtion</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Price</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Parent_ID</th>
                                <th class="aref-ruqaa-regular" style="font-size: 17px">Opration</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($todayspecial as $item)
                            <tr>
                                <td class="aref-ruqaa-regular">{{ $item->id }}</td>
                                <td>
                                    <img src="{{ asset('img/todayspecial/' . $item->image) }}"
                                        style="height: 70px; width: 70px;" alt="">
                                </td>
                                <td class="aref-ruqaa-regular" style="font-size: 20px">{{ $item->title }}</td>

                                <td class="aref-ruqaa-regular" style="font-size: 17px">{{ $item->description }}</td>

                                <td class="aref-ruqaa-regular" style="font-size: 20px">{{ $item->price }}</td>
                                <td class="aref-ruqaa-regular" style="font-size: 17px">{{ $item->parent_id }}</td>
                                <td>
                                    <a href={{ route('todayspecial.show', $item->id) }}><i class="fa-solid fa-eye fa-lg"
                                            style="color: #e6ca65;"></i></a>
                                    <a href={{ route('todayspecial.edit', $item->id) }}><i
                                            class="fa-solid fa-pen-to-square fa-lg" style="color: #4766ee;"></i></a>
                                    <a href="{{ route('todayspecial.delete', $item->id) }}"><i
                                            class="fa-solid fa-trash fa-lg" style="color: #db1313;"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
    </div>
@endsection
