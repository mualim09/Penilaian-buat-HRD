@extends('layouts.index')

@section('content')

<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                </div>

                <div class="card-body">
                	<div>
                		<a class="btn btn-success" href="{{ route ('create-grade') }}">Create Category</a>
                	</div>
                	<br>
                	<div class="table-responsive">
                		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                			<thead>
                				<tr>
                					<th>Tilte</th>
                					<th class="text-center">Action</th>
                				</tr>
                			</thead>
                			<tbody>
                                @foreach($category as $value)
                				<tr>
                					<td>{{ $value->grade }}</td>
                					<td class="text-center">
                                        <a href="{{ route ('view-category', ['id' => $value->id]) }}" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route ('delete-category', ['id' => $value->id]) }}" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>               
                                    </td>
                				</tr>
                                @endforeach
                				

                                <!-- Modal Delete -->
                                <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure delete your data ?</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">You will lose all the information with this action.</div>
                                        <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                          <a class="btn btn-danger" href="#">Delete</a>
                                        </div>
                                      </div>
                                    </div>
                                </div> -->
                			</tbody>
                		</table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascript')
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>
@endpush