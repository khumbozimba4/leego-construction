<x-app-layout>
    <div class="page-header">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Quotations</li>
            </ol>
        </nav>
    </div>

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
                        <h4 class="card-title">All Quotations</h4>
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('searchQuotation') }}" class="row g-3 float-end">
                            @csrf
                            <div class="col-auto">
                                <input type="text" style="height: 40px" name="searchValue" required
                                    class="form-control" placeholder="Search by customer name">
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
                            <th> Customer Name </th>
                            <th> Contact </th>
                            <th> Equipment Details </th>
                            <th> Daily Rate </th>
                            <th> Rental Duration </th>
                            <th> Total Price </th>
                            <th> Status </th>
                            <th> Expires At </th>
                            <th> Created </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($quotations->count())
                            @foreach ($quotations as $quotation)
                                <tr>
                                    <td> {{ $quotation->customer_name }} </td>
                                    <td> {{ $quotation->customer_contact }} </td>
                                    <td> {{ Str::limit($quotation->equipment_details, 50, '...') }} </td>
                                    <td> {{ number_format($quotation->daily_rate, 2) }} </td>
                                    <td> {{ $quotation->rental_duration }} days</td>
                                    <td> {{ number_format($quotation->total_price, 2) }} </td>
                                    <td>
                                        @if ($quotation->status === 'Pending')
                                            <span class="badge badge-warning"><i class="fa fa-clock"></i> Pending</span>
                                        @elseif ($quotation->status === 'Approved')
                                            <span class="badge badge-success"><i class="fa fa-check-circle"></i> Approved</span>
                                        @elseif ($quotation->status === 'Rejected')
                                            <span class="badge badge-danger"><i class="fa fa-times-circle"></i> Rejected</span>
                                        @endif
                                    </td>
                                    <td> {{ $quotation->expires_at ? $quotation->expires_at->format('d/m/Y') : 'N/A' }} </td>
                                    <td> {{ $quotation->created_at->diffForHumans() }} </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('quotations.edit', $quotation->id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('quotations.delete', $quotation->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this quotation?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-danger">No records</div>
                        @endif
                    </tbody>
                </table>
                @if ($quotations->hasPages())
                    <div class="d-flex justify-content-center">
                        {!! $quotations->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
