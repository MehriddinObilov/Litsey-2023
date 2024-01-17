 @extends('layouts.admin')
@include('adminpanel.sidebar')
@section('content')
<div class="main-content">
<h1>About Litsey sahifasi</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <a href="{{ route('admin.aboutLitsey.create') }}" class="btn btn-success">Create</a>
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
                    <th scope="col">Text</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                 @foreach ($aboutlitseys as $about)
                 <tr>
                    <th scope="row">{{ $about->id }}</th>
                    <td>{{ \Str::limit($about->text,70) }}</td>
                    <td>
                      <img src="/litsey/{{ $about->image }}" width="50px" height="50px" alt="">
                    </td>

                <td style="display:flex; column-gap:10px">
                  <a style="height: 36px" href="{{ route('admin.aboutLitsey.show', $about->id ) }}" class="btn btn-primary">Show</a>
                    <a style="height: 36px" href="{{ route('admin.aboutLitsey.edit', $about->id ) }}" class="btn btn-success">Edit</a>
                    <form  action="{{ route('admin.aboutLitsey.destroy', $about->id ) }}" method="POST">
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
