@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Porfolio Items</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/portfolio/insert') }}" enctype="multipart/form-data"> @csrf
                    <div class="form-group"><!--### SELECT TAB ###-->
                        <label class="col-sm-12">Select Portfolio Tab</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="tab_id">
                                @foreach($tabs as $tab)
                                <option value="{{ $tab->id }}">{{ $tab->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group"><!--### CLASS ###-->
                        <label for="class" class="col-md-12">Class</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="class" placeholder="Give the class name for this tab as defined">
                            @error('class')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group"><!--### TITLE ###-->
                        <label for="title" class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Ex: Dashboard Design">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### SUB TITLE ###-->
                        <label for="sub_title" class="col-md-12">Sub Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Ex: Creative Design">
                            @error('sub_title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### PORTFOLIO IMAGE ###-->
                        <label for="image" class="col-md-12">Porfolio Image (370*370 px)</label>
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="image" id="image">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Add Portfolio</button>
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
