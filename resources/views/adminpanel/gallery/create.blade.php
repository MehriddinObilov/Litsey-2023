@extends('layouts.admin')
@include('adminpanel.sidebar')

@section('title')
    Mavzu qo'shish
@endsection

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Create</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="category_id" id="" required>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        
                                        {{-- <option value="Matematika">Matematika</option>
                                        <option value="Fizika">Fizika</option>
                                        <option value="Iqtisod">Iqtisod</option>
                                        <option value="Dasturlash">Dasturlash</option> --}}
                                    </select>
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
