@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Members Accounts</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.I.</th>
                                <th>Member Name</th>
                                <th>Icon</th>
                                <th>Account Name</th>
                                <th>Link</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($accounts as $key=>$account)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $account->rel_to_team->name }}</td>
                                <td><i class="{{ $account->icon }}" style="font-size: 25px; color:blue;"></i></td>
                                <td>{{ $account->name }}</td>
                                <td>{{ $account->link }}</td>
                                <td>{{ $account->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('account.edit', $account->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('account.delete', $account->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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