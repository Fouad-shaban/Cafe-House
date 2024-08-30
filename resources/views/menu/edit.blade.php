@extends('layouts.app')

@section('content')
    <div class=" light-gray-bg">
        <div class="container " style="padding: 30px">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header tm-site-name tm-handwriting-font" style="margin-bottom: 20px">Update
                            Product </div>

                            <div class="card-body">

                            <form method="POST" action="{{ route('menu.update') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_id" value="{{ $item->id }}">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">ID</label>
                                    <div class="col-md-8">
                                        <input type="text" name="id" class="form-control" value="{{ $item->id }}">
                                    </div>
                                    @error('id')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" >
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Title_EN</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title_en" class="form-control" value="{{ $item->title_en }}">
                                    </div>
                                    @error('title_en')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Title_AR</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title_ar" class="form-control" value="{{ $item->title_ar }}">
                                    </div>
                                    @error('title_ar')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Description_EN</label>
                                    <div class="col-md-8">
                                        <input type="text" name="description_en" class="form-control" value="{{ $item->description_en }}">
                                    </div>
                                    @error('description_en')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Description_AR</label>
                                    <div class="col-md-8">
                                        <input type="text" name="description_ar" class="form-control" value="{{ $item->description_ar }}">
                                    </div>
                                    @error('description_ar')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" >Price</label>
                                    <div class="col-md-8">
                                        <input type="text" name="price" class="form-control" value="{{ $item->price }}">
                                    </div>
                                    @error('price')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Parent_ID</label>
                                    <div class="col-md-8">
                                        <select type="text" name="parent_id" class="form-control"   >
                                            <option value="main">main</option>
                                            <option value="{{ $item->title_en }}">{{ $item->title_en }}</option>
                                        </select>
                                    </div>
                                    @error('parent_id')
                                        <div style="color: red" >{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-left: 270px ">
                                    <button type="submit" class="tm-more-button tm-more-button-welcome" style="display: inline">Update
                                        Product</button>
                                        <a href={{ route("home") }} class="tm-more-button tm-more-button-welcome" style="margin-top:-85px " >Cancel</a>
                                    </div>
                                    </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
