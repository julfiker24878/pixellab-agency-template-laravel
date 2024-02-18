@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Portfolio Tabs</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/tab/insert') }}"> @csrf
                    <div class="form-group"><!--### TAB NAME ###-->
                        <label for="name" class="col-md-12">Tab Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ex: Design">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group"><!--### TAB CLASS ###-->
                        <label for="class" class="col-md-12">Tab Class</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="class" id="class" placeholder="Ex: my-class">
                            @error('class')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Add Tab</button>
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
