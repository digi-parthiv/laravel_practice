<x-default-layout>

<style>
.errorTxt,#missMatchError{
    color:red;

}

</style>

<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <h1>Add Category</h1>
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
    </div>

	<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data" id="fileUploadForm">
	   @csrf
	    <div class="card-body py-4">
	        <!-- File Type Input -->

	        <!-- File Upload Input Group -->
                <div class="mb-3 position-relative">
                    <label class="form-label">Category name:</label>
                </div>
	        <div class="input-group mb-3">
	            <input type="text" class="categoryAdd form-control" id="categoryAdd" name="name">
	        </div>
            <p id="missMatchError"></p>
	        <!-- Submit Button -->
	        <button type="submit" class="submit btn btn-primary">+ Add</button>
	    </div>
	</form>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $(document).ready(function(){
        $('#fileUploadForm').validate({
            onfocusout: function(e) {  // this option is not needed
                this.element(e);       // this is the default behavior
            },
            rules: {
                file_type:{
                    required:true
                },
                fileUpload:{
                    required:true,
                    // extension: "jpg|jpeg|pdf|txt|png"
                }
           },
            messages: {
                file_type:{
                    required : "Please Select File Type."
                },
                fileUpload:{
                    required : "Please Select File.",
                    // extension: "Please select proper extension."
                }
            },
            highlight: function (element) {
                $(element).parent().addClass('errorTxt')
            },
            unhighlight: function (element) {
                $(element).parent().removeClass('errorTxt')
            }
        });


        $('#product-category-select').change(function(){
            $('#missMatchError').text("");
            if($('#product-category-select').find(":selected").val() == ""){
                $('.error_msg').text("Select any fileType");
            }else{
                $('.error_msg').text("");
            }
        });

        $('#fileUploadForm').submit(function(e){

            var fileType = $('#product-category-select').find(":selected").val();
            if(fileType != ""){
                var fileExtention = $('.fileUpload').val().split('.').pop();
                var fileTypeArr;
                if(fileType =="img"){
                    fileTypeArr = ['jpg','png','jpeg'];
                }

                if(fileType == "pdf"){
                    fileTypeArr = ['pdf']; 
                }

                if(fileType == "txt"){
                    fileTypeArr = ['txt']; 
                } 

                if(fileTypeArr.includes(fileExtention)){
                    console.log("same");
                }else{
                    e.preventDefault();
                    $('#missMatchError').text("Selected File Type Invalid");
                }
            }
        });

        // $('#product-category-select').change(function(event) {
        //     $('#inputGroupFile04').attr('accept', '.'+this.value)
        //      alert(this.value);
        // });
    });

</script>
@endpush
</x-default-layout>
