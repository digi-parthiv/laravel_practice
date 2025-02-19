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
	<form method="post" action="{{route('file.store')}}" enctype="multipart/form-data" id="filedata">
	 @csrf

	    <div class="card-body py-4">
	        <!-- File Type Input -->
            <div class="mb-3 position-relative">
            <label class="form-label">File Type:</label>
            </div>
            <div class="mb-3 position-relative">
	            <select class=" form-select" id="product-category-select" name="file_type">
                   <option value="img">img</option>
                   <option value="pdf" >pdf</option>
                   <option value="txt" >txt</option>
		       	</select>
            </div>
	        <!-- File Upload Input Group -->
	        <div class="input-group mb-3">
	            <input type="file" class="fileUpload form-control" id="inputGroupFile04" name="fileUpload" >
	            <button class="btn btn-outline-secondary" type="button">Upload</button>
	        </div>

	        <!-- Submit Button -->
	        <button type="submit" class="btn btn-primary">Submit</button>
	    </div>
	</form>

        <!--end::Card body-->
    </div>

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
         $(document).ready(function(){
             $('#filedata').validate({
               rules: {
                fileUpload:{
                    required:true,
                }
               },
               messages: {
                 fileUpload: "Please Upload file first."
               }
             });

             $('#product-category-select').change(function(event) {
                $('#inputGroupFile04').attr('accept', '.'+this.value)
                 alert(this.value);
             });
           });

    </script>
        
    @endpush
</x-default-layout>
