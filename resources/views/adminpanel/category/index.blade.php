@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
<div class="main-content">
<h1> Category sahifasi</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <a href="{{ route('admin.category.create') }}" class="btn btn-success">Create</a>
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
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($categories as $category)
                 <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                  

                <td style="display:flex; column-gap:10px">
              
                    <a style="height: 36px" href="{{ route('admin.category.edit', $category->id ) }}" class="btn btn-success">Edit</a>
                    <form  action="{{ route('admin.category.destroy', $category->id ) }}" method="POST">
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
