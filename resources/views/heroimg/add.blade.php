@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Hero Section Images</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/heroimg/insert') }}" enctype="multipart/form-data"> @csrf
                    <div class="form-group"><!--### LEFT IMAGE ###-->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Left Side Image (245*335 px)</label>
                            <input class="form-control" type="file" id="formFile" name="left_image">
                            @error('left_image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group"><!--### RIGHT IMAGE ###-->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Right Side Image (495*690 px)</label>
                            <input class="form-control" type="file" id="formFile" name="right_image">
                            @error('right_image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Add Images</button>
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