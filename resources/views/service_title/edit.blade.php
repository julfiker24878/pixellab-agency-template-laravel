@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Service Titles</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/service-title/update') }}"> @csrf
                    <div class="form-group"><!--### ICON ###-->
                        <label for="icon" class="col-md-12">Icon</label>
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{ $service_titles->id }}">
                            <input type="text" class="form-control" name="icon" id="icon" placeholder="Font-Awesome class name" value="{{ $service_titles->icon }}">
                            @error('icon')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group"><!--### TITLE ###-->
                        <label for="title" class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" id="title" value="{{ $service_titles->title }}">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
@if (session('success'))
    <script>
        Swal.fire(
            'Congratulations!',
            '{{ session('success') }}',
            'success'
            )
    </script>
@endif
@endsection