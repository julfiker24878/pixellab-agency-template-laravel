@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Team Accounts</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/account/insert') }}"> @csrf

                    <div class="form-group"><!--### MEMBER NAME ###-->
                        <label class="col-sm-12">Select A Member</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="team_id">
                                @foreach($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group"><!--### ACCOUNT NAME ###-->
                        <label for="name" class="col-md-12">Account Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ex: Facebook">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### ACCOUNT LINK ###-->
                        <label for="link" class="col-md-12">Account Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="link" id="link" placeholder="Ex: www.facebook.com">
                            @error('link')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### ICON ###-->
                        <label for="icon" class="col-md-12">Set Icon</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="icon" id="icon" placeholder="Font-Awesome class name. Ex: fa-brands fa-facebook">
                            @error('icon')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Add Title</button>
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
