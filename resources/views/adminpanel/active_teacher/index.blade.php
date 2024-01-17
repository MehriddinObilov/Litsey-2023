@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
<div class="main-content">
<h1> Active Teacher sahifasi</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <a href="{{ route('admin.activeteacher.create') }}" class="btn btn-success">Create</a>
              @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
              </div>
              @endif
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    {{-- <th scope="col">Title</th> --}}
                    <th scope="col">Name</th>
                    <th scope="col">Text</th>
                    <th scope="col">Image</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Telegram</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                 @foreach ($Activeteachers as $Activeteacher)
                 <tr>
                    <th scope="row">{{ $Activeteacher->id }}</th>
                    <td>{{ $Activeteacher->title }}</td>
                    <td>{{ \Str::limit($Activeteacher->text,70) }}</td>
                    <td>
                      <img src="/activeteacher/{{ $Activeteacher->image }}" width="50px" height="50px" alt="">
                    </td>
                    <td>{{ $Activeteacher->tel }}</td>
                    <td>{{ $Activeteacher->telegram }}</td>

                <td style="display:flex; column-gap:10px">
                  <a style="height: 36px" href="{{ route('admin.activeteacher.show', $Activeteacher->id ) }}" class="btn btn-primary">Show</a>
                    <a style="height: 36px" href="{{ route('admin.activeteacher.edit', $Activeteacher->id ) }}" class="btn btn-success">Edit</a>
                    <form  action="{{ route('admin.activeteacher.destroy', $Activeteacher->id ) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Ochirishni xohlaysizmi?')">Delete</button>
                    </form>
                </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
    </div>
</div>
</div>
@endsection 
