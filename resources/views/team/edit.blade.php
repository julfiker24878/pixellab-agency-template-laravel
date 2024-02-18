@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Member Profile</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/team/update') }}" enctype="multipart/form-data"> @csrf
                    
                    <div class="form-group"><!--### TITLE ###-->
                        <label for="name" class="col-md-12">Name</label>
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" name="id" value="{{ $teams->id }}">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ex: John Doe" value="{{ $teams->name }}">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### DESIGNATION ###-->
                        <label for="designation" class="col-md-12">Designation</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Ex: Web Developer" value="{{ $teams->designation }}">
                            @error('designation')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### PROFILE IMAGE ###-->
                        <label for="image" class="col-md-12">Porfolio Image (270*325 px)</label>
                        <div class="col-md-12">
                            <img src="{{ asset('/uploads/team') }}/{{ $teams->image }}" alt="team-image" width="350" style="margin: 15px;">
                            <input type="file" class="form-control" name="image" id="image">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Update Member</button>
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