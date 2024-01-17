@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
<div class="main-content">
<h1> Gallery sahifasi</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <a href="{{ route('admin.gallery.create') }}" class="btn btn-success">Create</a>
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
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                 @foreach ($gallerys as $gallery)
                 <tr>
                    <th scope="row">{{ $gallery->id }}</th>
                    <td>{{ $gallery->category->name ?? 'xato' }}</td>
                    <td>
                      <img src="/gallery/{{ $gallery->image }}" width="50px" height="50px" alt="">
                    </td>

                <td style="display:flex; column-gap:10px">
                  <a style="height: 36px" href="{{ route('admin.gallery.show', $gallery->id ) }}" class="btn btn-primary">Show</a>
                    <a style="height: 36px" href="{{ route('admin.gallery.edit', $gallery->id ) }}" class="btn btn-success">Edit</a>
                    <form  action="{{ route('admin.gallery.destroy', $gallery->id ) }}" method="POST">
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
