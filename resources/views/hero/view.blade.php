@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Hero Section Content</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.I.</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Button Text</th>
                                <th>Button Link</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($heros as $key=>$hero)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $hero->heading }}</td>
                                <td>{{ $hero->desc }}</td>
                                <td>{{ $hero->btn_text }}</td>
                                <td>{{ $hero->btn_link }}</td>
                                <td>{{ $hero->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('hero.edit', $hero->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('hero.delete', $hero->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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