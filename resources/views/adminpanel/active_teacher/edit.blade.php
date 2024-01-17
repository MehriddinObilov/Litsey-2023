@extends('layouts.admin')
@include('adminpanel.sidebar')
@section('title')
    O'zgartirish
@endsection


@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.activeteacher.update', $Activeteachers->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h4>O'zgartirish</h4>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control" name="select" id="" required>
                                            <option value="{{ $Activeteachers->select }}" selected="false"
                                                disabled="disabled">{{ $Activeteachers->select }}</option>
                                            <option value="O'qtuvchi">O'qtuvchi</option>
                                            <option value="O'quvchi">O'quvchi</option>
                                        </select>
                                    </div>
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="title" required
                                        value="{{ $Activeteachers->title }}">
                                </div>
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="text" required
                                        value="{{ $Activeteachers->text }}">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="number" class="form-control" name="tel" 
                                        value="{{ $Activeteachers->tel }}">
                                </div>
                                <div class="form-group">
                                    <label>Telegram</label>
                                    <input type="text" class="form-control" name="telegram" 
                                        value="{{ $Activeteachers->telegram }}">
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
