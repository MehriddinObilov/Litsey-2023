@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
    <div class="main-content">
        <h1>News ko'rish</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('admin.aboutLitsey.index') }}" class="btn btn-success">Back</a>

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
                                        <th>#Id</th> <td>{{ $aboutlitsey->id }}</td>
                                    </tr>
                                 
                                    <tr>
                                        <th>Text</th> <td>{{ $aboutlitsey->text }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th> <td> <img src="/litsey/{{ $aboutlitsey->image }}" width="100px" height="100px" alt=""></td>
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

