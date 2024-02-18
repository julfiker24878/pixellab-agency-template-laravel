@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Site Logo</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.L.</th>
                                <th>Logo Text</th>
                                <th>Logo Link</th>
                                <th>Logo Image</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($logos as $key=>$logo)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $logo->logo_text }}</td>
                                <td>{{ $logo->logo_link }}</td>
                                <td><img src="{{ asset('/uploads/logo/') }}/{{ $logo->logo_image }}" alt="site-logo"></td>
                                <td>{{ $logo->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('logo.edit', $logo->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('logo.delete', $logo->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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