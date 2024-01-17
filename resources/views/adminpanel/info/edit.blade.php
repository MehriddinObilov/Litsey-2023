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
                    <form action="{{ route('admin.info.update', $infos->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>O'zgartirish</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="text" required
                                        value="{{ $infos->text }}">
                                </div>
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
