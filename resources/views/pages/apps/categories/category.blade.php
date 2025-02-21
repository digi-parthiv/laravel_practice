<x-default-layout>
<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <h1>Categories</h1> 
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-right" data-kt-user-table-toolbar="base">
                <!--begin::Add user-->
                    <button onclick="location.href='{{ url('admin/category_add') }}'" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    {!! getIcon('plus', 'fs-2', '', 'i') !!}
                    Create
                    </button>
                <!--end::Add user-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
</div>

<table class="table table-bordered data-table">
    <thead>
        <tr>
            <th width="130px">ID</th>
            <th>categories</th>
            <th width="250px">Action</th>
        </tr>
    </thead>
     <tbody>
    </tbody>
</table>

@push('scripts')
<script type="text/javascript">
	$(function(){
		var table = $('.data-table').DataTable({
    	    processing: true,
    	    serverSide: true,
    	    ajax:"{{url('admin/getCategoryList')}}",
    	    columns:[
    	    	{data: 'id',name:'id'},
    	    	{data: 'name',name:'name'},
    	        {data: 'action', name: 'action', orderable: false, searchable: false},
    	    ]
		});

		$('.data-table').on('click','.delete',function(){
    	        var id = $(this).attr('data-id');
    	        if(confirm("Are you sure you want to delete this category ?")){
    	            $.ajax({   
    	                url:"destroyCategory/" + id,
    	                type:"DELETE",
                        data:{ _token:"{{ csrf_token() }}"},
    	                success: function(response){
    	                    alert(response.message);
    	                    table.ajax.reload();
    	                }
    	            });
    	        }
    	    });
	});
</script>
@endpush

</x-default-layout>
