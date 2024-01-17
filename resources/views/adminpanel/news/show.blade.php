@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
    <div class="main-content">
        <h1>News ko'rish</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('admin.news.index') }}" class="btn btn-success">Back</a>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-md">
                            <tbody>
                                    <tr>
                                        <th>#Id</th> <td>{{ $news->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th> <td>{{ $news->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Text</th> <td>{{ $news->text }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th> <td> <img src="/news/{{ $news->image }}" width="100px" height="100px" alt=""></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

