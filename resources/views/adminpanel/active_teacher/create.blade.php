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
                    <form action="{{ route('admin.activeteacher.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Create</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="select" id="" required>
                                        {{-- <option  selected="false" disabled="disabled">Tanlash Zarur</option> --}}
                                        <option value="O'qtuvchi">O'qituvchi</option>
                                        <option value="O'quvchi">O'quvchi</option>
                                    </select>
                                </div> 
                                 <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control"  name="title" required>
                                </div>
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="number" class="form-control" name="tel">
                                </div>
                                <div class="form-group">
                                    <label>Telegram</label>
                                    <input  type="text" class="form-control" name="telegram">
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
