@extends('layouts.admin')
@section('content')
    <?php
    
    use App\Http\Controllers\Controller;
    
    $controller = new Controller(); ?>

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Company Settings
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
                        <span class="caption-subject font-green sbold uppercase">Company List</span>

                    </div>
                    <div class="actions">

                        {{-- <a href="{{ Route('company.create') }}" class="btn btn sbold green btn-sm active">Add New company<i
                                class="fa fa-plus"></i></a> --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>
                        @endif
                        @if (Session::has('alert-danger'))
                            <div class="alert alert-danger">
                                {{ Session::get('alert-danger') }}
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                            </div>
                        @endif

                    </div><!--actions-->

                </div><!--portlet-title-->
            </div>

            <div class="portlet-body">
                <div class="table-container">
                    <table class="table table-striped table-bordered table-hover" id="companys">
                        <thead>
                            <tr bgcolor="#E9E9E9">

                                <th>Company Name</th>
                                <th>Company Phone</th>
                                <th>Company Email</th>
                                <th>Physical Address</th>
                                <th>Zip Code</th>
                                <th>Slang</th>
                                <th>ACTIONS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->company_name }}</td>
                                    <td>{{ $company->company_phone }}</td>
                                    <td>{{ $company->company_email }}</td>
                                    <td>{{ $company->physical_address }}</td>
                                    <td>{{ $company->zip_code }}</td>
                                    <td>{{ $company->slang }}</td>
                                    <td>
                                        <a href="{{ route('company.edit', $company->id) }}"><button
                                                class="btn sbold blue btn-xs"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i></button></a>
                                        <a href="{{ route('company.show', $company->id) }}"><button
                                                class="btn btn-success sbold blue btn-xs"><i class="fa fa-eye"
                                                    aria-hidden="true"></i></button></a>

                                        {!! Form::open([
                                            // 'method' => 'DELETE',
                                            // 'route' => ['company.destroy', $company->id],
                                            'style' => 'display:inline',
                                            'onsubmit' => 'return ConfirmDelete()',
                                        ]) !!}
                                        <button type="submit" class="btn btn-xs sbold red"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End: life time stats -->
@endsection
