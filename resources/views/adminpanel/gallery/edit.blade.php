@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('title')
    O'zgartirish
@endsection


@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.gallery.update', $gallerys->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>O'zgartirish</h4>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control" name="category_id" id="" required>
                                        @foreach ($categories as $category)
                                            <option {{ $gallerys->category_id == $category->id ? 'selected' : '' }}
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                       
                                        </select>
                                    </div>
                                    {{-- <label>Fan</label>
                                    <input type="text" class="form-control" name="title" required
                                        value="{{ $gallerys->title }}">
                                </div> --}}

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image" required>
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Save</button>
                                </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection
