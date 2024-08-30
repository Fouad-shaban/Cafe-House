@extends('layouts.app')

@section('content')
<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
        <div class="row">
            <div class="col-md-12" style="margin-top: -150px">
                <table class="table table-striped " >
                    <h2 class="tm-handwriting-font text-center">Details of Product ID [ {{ $result->id }} ]</h2>
                    <br>

                    <thead class="gold-text">
<div style="margin:20px 350px 50px ">
    <img src="{{ asset('img/todayspecial/'.$result->image) }}" style="height: 300px; width: 300px;  " alt="">
</div>
                        <tr>

                            <th >id</th>

                            <th >Title_EN</th>
                            <th >Title_AR</th>
                            <th >Describtion_EN</th>
                            <th >Describtion_AR</th>
                            <th >Price</th>
                            <th >Parent_ID</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->title_en }}</td>
                            <td>{{ $result->title_ar }}</td>
                            <td>{{ $result->description_en }}</td>
                            <td>{{ $result->description_ar }}</td>
                            <td>{{ $result->price }}</td>
                            <td>{{ $result->parent_id }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <a href={{ route("home") }} class="tm-more-button tm-more-button-welcome">Main Dashboard</a>
                <br>
            </div>
            </div>
        </div>
    </div>


@endsection
