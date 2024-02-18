@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Services</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/services/insert') }}"> @csrf
                    <div class="form-group"><!--### SELECT TITLE ###-->
                        <label class="col-sm-12">Select Service Title</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="service_title">
                                @foreach($service_titles as $service_title)
                                <option value="{{ $service_title->id }}">{{ $service_title->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group"><!--### SERVICE ###-->
                        <label for="service" class="col-md-12">Service</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="service" id="service">
                            @error('service')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Add Service</button>
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
