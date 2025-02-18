<x-default-layout>

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <h1>Files</h1> 
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <a href ="file_add">
                    	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Create
                    	</button>
                    </a>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Modal-->
{{--                <livewire:user.add-user-modal></livewire:user.add-user-modal>--}}
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->

            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FileType</th>
                <th>File</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
         <tbody>
        </tbody>
    </table>


    @push('scripts')
		    <script type="text/javascript">
		  $(function () { 
		    var table = $('.data-table').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: "{{ route('get.filelist') }}",
		        columns: [
		            {data: 'id', name: 'id'},
		            {data: 'file_type', name: 'file_type'},
		            {data: 'file', name: 'file'},
		            {data: 'action', name: 'action', orderable: false, searchable: false},
		        ]
		    });
		    $('.data-table').on('click','.delete',function(){
		        var id = $(this).attr('data-id');
		        if(confirm("Are you sure you want to delete this user ?")){
		            $.ajax({
		                url:"destroyFile/" + id,
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
        <script>
            document.getElementById('mySearchInput').addEventListener('keyup', function () {
                window.LaravelDataTables['products-table'].search(this.value).draw();
            });
            document.addEventListener('livewire:init', function () {
                Livewire.on('success', function () {
                    $('#kt_modal_add_user').modal('hide');
                    window.LaravelDataTables['products-table'].ajax.reload();
                });
            });
            $('#kt_modal_add_user').on('hidden.bs.modal', function () {
                Livewire.dispatch('new_user');
            });
        </script>
    @endpush
</x-default-layout>
