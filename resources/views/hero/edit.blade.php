@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Hero Section Content</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/hero/update') }}"> @csrf
                    <div class="form-group"><!--### HEADING ###-->
                        <label for="heading" class="col-md-12">Heading</label>
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" name="id" id="heading" value="{{ $heros->id }}">
                            <input type="text" class="form-control" name="heading" id="heading" value="{{ $heros->heading }}">
                            @error('heading')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group"><!--### DESCRIPTION ###-->
                        <label for="desc" class="col-md-12">Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10">{{ $heros->desc }}</textarea>
                            @error('desc')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group"><!--### BUTTON TEXT ###-->
                        <label for="btn_text" class="col-md-12">Button Text</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="btn_text" id="btn_text" value="{{ $heros->btn_text }}">
                            @error('btn_text')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group"><!--### BUTTON LINK ###-->
                        <label for="btn_link" class="col-md-12">Button Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="btn_link" id="btn_link" value="{{ $heros->btn_link }}">
                            @error('btn_link')
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
@if (session('logo_exist'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('logo_exist') }}'
            })
    </script>
@endif
@endsection