@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Team Profiles</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.I.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Profile Image</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($teams as $key=>$team)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->designation }}</td>
                                <td><img src="{{ asset('/uploads/team') }}/{{ $team->image }}" alt="team-image" width="350"></td>
                                <td>{{ $team->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('team.edit', $team->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('team.delete', $team->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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