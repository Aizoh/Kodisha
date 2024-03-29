@extends('layouts.account-layout')
@section('content')
  {{-- side-bar code in account-layout blade file --}}
  <div class="account-content container-fluid">
    <div class="jumbotron">
      <h2 class="page-header">My Property Enqueries</h2>
      <hr>
      <a href="{{route('user.propertyCreate')}}" class="btn primary-btn">Add a new Listings</a>
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="my-4">
            <div class="table-responsive">
              <table class="table table-striped table-light table-bordered my-2" id="mydataTable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Property Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Actions</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div> 
      </div>
    </div><!-- jumbotron -->
    @include('inc.account-footer')
  </div><!--account-content -->
@endsection


@push('js')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
function tableView(e){
  let data = e;
  console.log(data);
}
function tableDelete(id){
  swal.queue([{
    icon:'info',
    title: 'Delete property listing ?',
    confirmButtonText: 'Yes',
    showCancelButton: true,
    showLoaderOnConfirm: true,
    preConfirm:()=>{
      $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      $.ajax({
        type:'DELETE',
        url:'/account/property-listings/'+id,
        data: {
          "id": id,
        },
      }).then(function(res){
        const Toast = swal.mixin({
          toast:true,
          position:'top',
          showConfirmButton: false,
          timer:2000
        })
        if(res.data){
          Toast.fire({
           icon:'success',
           title:res.msg
         })
        }else{
          Toast.fire({
           icon:'error',
           title:res.msg
         })
        }
      })
    }
  }]);
}

var table;
$(function(){
    var table = $('#mydataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('user.propertyEnqueries') }}",
            error: function(xhr, error, thrown) {
                console.log("Ajax error:", error);
                console.log("Thrown error:", thrown);
            }
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'property_id', name: 'property_id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'telephone', name: 'telephone' },
            { data: 'created_at', name: 'created_at' },
            { data: 'actions', name: 'actions', orderable: false, searchable: false },
        ]
  });
});
</script>
@endpush

@push('css')
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<style> 
.jumbotron{
  min-height:80vh;
}
.datatable-img{
  width:8rem;
  height:8rem;
}
</style>
@endpush