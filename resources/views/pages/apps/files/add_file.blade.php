<x-default-layout>

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <h1>Add File</h1> 
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
            <!--         <a href ="file_add">
                    	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Create
                    	</button>
                    </a> -->
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
	<form method="post" action="{{route('file.store')}}" enctype="multipart/form-data">
	 @csrf

				    <div class="card-body py-4">
				        <!-- File Type Input -->
				       <select class="product-category-select" id="product-category-select" name="file_type">
                            <option value="img">img</option>
                            <option value="pdf" >pdf</option>
							<option value="php" >php</option>
						</select>
				        <!-- File Upload Input Group -->
				        <div class="input-group mb-3">
				            <input type="file" class="form-control" id="inputGroupFile04" name="fileUpload" >
				            <button class="btn btn-outline-secondary" type="button">Upload</button>
				        </div>

				        <!-- Submit Button -->
				        <button type="submit" class="btn btn-primary">Submit</button>
				    </div>
				</form>

        <!--end::Card body-->
    </div>

    @push('scripts')
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
