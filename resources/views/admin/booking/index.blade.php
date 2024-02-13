@extends('layouts.admin')
@section('content')
    <h1 class="page-title"> Bookings Listings
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Bookings</span>

                    </div>
                    <div class="actions">
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table datatable mdl-data-table dataTable table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>city</th>
                            <th>Size</th>
                            <th>Persons</th>
                            <th>Description</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('.data-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf'
                ],
                processing: true,
                serverSide: true,
                ajax: "{{ route('booking.index') }}", // Replace with the correct route name
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'city',
                        name: 'city'
                    },
                    {
                        data: 'event_size',
                        name: 'event_size'
                    },
                    {
                        data: 'persons',
                        name: 'persons'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'start_date',
                        name: 'start_date'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'id',
                        render: function(data, type, row) {
                            return '<button data-id="' + data +
                                '" class="edit btn btn-success btn-sm">Edit</button>' +
                                '<button data-id="' + data +
                                '" class="delete btn btn-danger btn-sm">Delete</button>';
                        },
                        orderable: false,
                        searchable: false
                    },

                ]

            });
        });
    </script>
@endsection
