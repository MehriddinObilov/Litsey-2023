@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
    <div class="main-content">
        <h1>Active Teacher ko'rish</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('admin.activeteacher.index') }}" class="btn btn-success">Back</a>

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
                                        <th>#Id</th> <td>{{ $Activeteachers->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{ $Activeteachers->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Text</th> <td>{{ $Activeteachers->text }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th> <td> <img src="/activeteacher/{{ $Activeteachers->image }}" width="100px" height="100px" alt=""></td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th> <td>{{ $Activeteachers->tel }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telegram</th> <td>{{ $Activeteachers->telegram }}</td>
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

