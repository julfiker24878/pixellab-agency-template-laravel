@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Service Titles</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.I.</th>
                                <th>Icon</th>
                                <th>Class Name</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($service_titles as $key=>$service_title)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><i class="{{ $service_title->icon }}" style="font-size: 25px; color:blue;"></i></td>
                                <td>{{ $service_title->icon }}</td>
                                <td>{{ $service_title->title }}</td>
                                <td>{{ $service_title->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('service-title.edit', $service_title->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('service-title.delete', $service_title->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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