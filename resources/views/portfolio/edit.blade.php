@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Portfolio</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ url('/portfolio/update') }}" enctype="multipart/form-data"> @csrf
                    
                    <div class="form-group"><!--### SELECT TAB ###-->
                        <label class="col-sm-12">Portfolio Tab</label>
                        <div class="col-sm-12">
                            <input type="hidden" class="form-control" value="{{ $portfolios->id }}" name="id">
                            <input type="text" class="form-control" value="{{ $portfolios->rel_to_tab->name }}" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group"><!--### TITLE ###-->
                        <label for="title" class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Ex: Dashboard Design" value="{{ $portfolios->title }}">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### SUB TITLE ###-->
                        <label for="sub_title" class="col-md-12">Sub Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Ex: Creative Design" value="{{ $portfolios->sub_title }}">
                            @error('sub_title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group"><!--### PORTFOLIO IMAGE ###-->
                        <label for="image" class="col-md-12">Porfolio Image (370*370 px)</label>
                        <img src="{{ asset('/uploads/portfolio') }}/{{ $portfolios->image }}" alt="portfolio-image" width="350" style="margin: 15px;">
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="image" id="image">
                            @error('image')
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