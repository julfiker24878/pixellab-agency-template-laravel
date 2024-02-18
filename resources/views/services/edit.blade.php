@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Services</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/services/update') }}"> @csrf
                    <div class="form-group"><!--### SERVICE TITLE ###-->
                        <label for="icon" class="col-md-12">Service Title</label>
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{ $services->id }}">
                            <input type="text" class="form-control" value="{{ $services->rel_to_service_title->title }}" readonly>
                            @error('icon')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group"><!--### SERVICE ###-->
                        <label for="service" class="col-md-12">Service</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="service" id="service" value="{{ $services->service }}">
                            @error('service')
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