@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Logo</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/logo/insert') }}" enctype="multipart/form-data"> @csrf
                    <div class="form-group"><!--### LOGO TEXT ###-->
                        <label class="col-md-12">Logo Text</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="My Logo" name="logo_text">
                            @error('logo_text')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group"><!--### LOGO LINK ###-->
                        <label class="col-md-12">Logo Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="https://mylogo.com" name="logo_link">
                            @error('logo_link')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group"><!--### LOGO IMAGE ###-->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload your logo (160*45 px)</label>
                            <input class="form-control" type="file" id="formFile" name="logo_image">
                            @error('logo_image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Add</button>
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