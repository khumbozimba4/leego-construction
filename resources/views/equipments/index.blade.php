<x-app-layout>
    <div class="page-header">
        <a href="{{ route('equipments.create') }}">
            <button class="btn btn-primary" type="button">
                <i class="fa fa-plus"></i> New Equipment
            </button>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Equipments</li>
            </ol>
        </nav>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    @if (session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: 100%; overflow-x: auto;">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="card-title">All Equipments</h4>
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('searchEquipment') }}" class="row g-3 float-end">
                            @csrf
                            <div class="col-auto">
                                <input type="text" style="height: 40px" name="searchValue" required
                                    class="form-control" placeholder="Search by equipment name">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Serial Number </th>
                            <th> Description </th>
                            <th> Daily Rate </th>
                            <th> Available </th>
                            <th> Created </th>
                            <th> Edit </th>
                            <th> More </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($equipments->count())
                            @foreach ($equipments as $equipment)
                                <tr>
                                    <td> {{ $equipment->name }} </td>
                                    <td> {{ $equipment->serial_number }} </td>
                                    <td> {{ $equipment->description }} </td>
                                    <td> MWK{{ number_format($equipment->rental_price, 2) }} </td>
                                    <td>
                                        @if ($equipment->is_available)
                                            <span class="badge badge-success"><i class="fa fa-check-circle"></i> Available</span>
                                        @else
                                            <span class="badge badge-danger"><i class="fa fa-times-circle"></i> Not Available</span>
                                        @endif
                                    </td>
                                    <td> {{ $equipment->created_at->diffForHumans() }} </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('equipments.edit', $equipment->id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('equipments.show', $equipment->id) }}">
                                            More <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-danger">No records</div>
                        @endif
                    </tbody>
                </table>
                @if ($equipments->hasPages())
                    <div class="d-flex justify-content-center">
                        {!! $equipments->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
