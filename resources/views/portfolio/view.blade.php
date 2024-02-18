@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Portfolio Items</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>T.I.</th>
                                <th>Portfolio Tab</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Portfolio Image</th>
                                <th>Created At</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($portfolios as $key=>$portfolio)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $portfolio->rel_to_tab->name }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->sub_title }}</td>
                                <td><img src="{{ asset('/uploads/portfolio') }}/{{ $portfolio->image }}" alt="portfolio-image" width="350"></td>
                                <td>{{ $portfolio->created_at->diffForHumans() }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="{{ route('portfolio.delete', $portfolio->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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