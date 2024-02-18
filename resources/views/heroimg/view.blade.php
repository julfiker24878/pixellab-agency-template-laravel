@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Hero Section Images</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.I.</th>
                                <th>Left Side Image</th>
                                <th>Right Side Image</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($herosimages as $key=>$herosimage)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset('/uploads/hero/') }}/{{ $herosimage->left_image }}" alt="left_image" width="300"></td>
                                <td><img src="{{ asset('/uploads/hero/') }}/{{ $herosimage->right_image }}" alt="right_image" width="300"></td>
                                <td>{{ $herosimage->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('heroimg.edit', $herosimage->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('heroimg.delete', $herosimage->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
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