@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
<div class="main-content">
<h1> Directors sahifasi</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <a href="{{ route('admin.director.create') }}" class="btn btn-success">Create</a>
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
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                 @foreach ($directors as $director)
                 <tr>
                    <th scope="row">{{ $director->id }}</th>
                    <td>{{ $director->title }}</td>
                    <td>{{ \Str::limit($director->text,70) }}</td>
                    <td>
                      <img src="/directors/{{ $director->image }}" width="50px" height="50px" alt="">
                    </td>

                <td style="display:flex; column-gap:10px">
                  <a style="height: 36px" href="{{ route('admin.director.show', $director->id ) }}" class="btn btn-primary">Show</a>
                    <a style="height: 36px" href="{{ route('admin.director.edit', $director->id ) }}" class="btn btn-success">Edit</a>
                    <form  action="{{ route('admin.director.destroy', $director->id ) }}" method="POST">
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
