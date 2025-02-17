<x-default-layout>

    @section('title')
        Posts
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('blog.posts.create') }}
    @endsection

    <div class="row">
        <div class="col-md-9">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-detail" role="tabpanel">
                            <div class="mb-3 position-relative">
                                <label class="form-label form-label required" for="name"
                                       aria-required="true">Name</label>
                                <input class="form-control" data-counter="250" placeholder="Name" required="required"
                                       name="name" type="text" value="" aria-required="true">
                            </div>

                            <input type="hidden" name="model" value="Botble\Blog\Models\Post">

                            <div class="mb-3 ">
                                <div class="slug-field-wrapper" data-field-name="name">
                                    <div class="mb-3 position-relative">
                                        <label class="form-label required" for="slug" aria-required="true">
                                            Permalink
                                        </label>

                                        <div class="input-group input-group-flat"><span class="input-group-text"></span>
                                            <input class="form-control ps-0" type="text" name="slug" id="slug"
                                                   required="required" aria-required="true">
                                            <span class="input-group-text slug-actions">
                    <a href="#" class="link-secondary d-none" data-bs-toggle="tooltip" aria-label="Generate URL"
                       data-bs-original-title="Generate URL" data-bb-toggle="generate-slug">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
  <path d="M6 21l15 -15l-3 -3l-15 15l3 3"></path>
  <path d="M15 6l3 3"></path>
  <path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
  <path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
</svg>                    </a>
                </span>

                                        </div>
                                    </div>
                                    <input class="slug-current" name="slug" type="hidden" value="">
                                    <div class="slug-data" data-url=""
                                         data-view="" data-id="0"></div>
                                    <input name="slug_id" type="hidden" value="0">
                                    <input name="is_slug_editable" type="hidden" value="1">
                                </div>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="description">
                                    Description
                                </label>
                                <textarea class="form-control" data-counter="400" rows="4"
                                          placeholder="Short description" name="description" cols="50"></textarea>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-check form-switch ">
                                    <input name="is_featured" type="hidden" value="0">
                                    <input class="form-check-input" name="is_featured" type="checkbox" value="1"
                                           id="is_featured">

                                    <span class="form-check-label">Is featured?</span>
                                </label>


                            </div>


                            <div class="mb-3 position-relative">

                                <label class="form-label" for="content">
                                    Content
                                </label>

                                <textarea name="kt-ckeditor-1" id="kt-ckeditor-1"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-3 gap-3 d-flex flex-column-reverse flex-md-column mb-md-0 mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Publish
                    </h4>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <button class="btn btn-sm btn-primary" type="submit" value="apply" name="submitter">
                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                            </svg>
                            Save

                        </button>

                        <button class="btn btn-sm" type="submit" name="submitter" value="save">
                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                <path d="M4 14h9"></path>
                                <path d="M10 11l3 3l-3 3"></path>
                            </svg>
                            Save &amp; Exit

                        </button>


                    </div>
                </div>
            </div>

            <div data-bb-waypoint="" data-bb-target="#form-actions"></div>

            <header class="top-0 w-100 position-fixed end-0 z-1000 vertical-wrapper" id="form-actions"
                    style="display: none;">
                <div class="navbar">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center w-100">
                            <div class="col">
                                <div class="page-pretitle">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                            <div class="col-auto ms-auto d-print-none">
                                <div class="btn-list">
                                    <button class="btn btn-sm btn-primary" type="submit" value="apply" name="submitter">
                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M14 4l0 4l-6 0l0 -4"></path>
                                        </svg>
                                        Save

                                    </button>

                                    <button class="btn btn-sm" type="submit" name="submitter" value="save">
                                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                            <path d="M4 14h9"></path>
                                            <path d="M10 11l3 3l-3 3"></path>
                                        </svg>
                                        Save &amp; Exit

                                    </button>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="card meta-boxes">
                <div class="card-header">
                    <h4 class="card-title">
                        <label for="status" class="form-label required" aria-required="true">Status</label>
                    </h4>
                </div>

                <div class="card-body">
                    <select data-placeholder="Select an option" class="form-control form-select" required="required"
                            id="status" name="status" aria-required="true">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
            </div>
            <div class="card meta-boxes">
                <div class="card-header">
                    <h4 class="card-title">
                        <label for="categories[]" class="form-label">Categories</label>
                    </h4>
                </div>

                <div class="card-body">
                    <div data-bb-toggle="tree-checkboxes">
                        <ul class="list-unstyled ">

                            <li>
                                <label class="form-check">
                                    <input type="checkbox" name="categories[]" class="form-check-input" value="5">
                                    <span class="form-check-label">Pets Care</span>
                                </label>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card meta-boxes">
                <div class="card-header">
                    <h4 class="card-title">
                        <label for="image" class="form-label">Image</label>
                    </h4>
                </div>

                <div class="card-body">
                    <div class="image-box image-box-image" action="select-image">
                        <input class="image-data" name="image" type="hidden" value="">

                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
            <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
        <script>
            var KTCkeditor = function () {
                // Private functions
                var demos = function () {
                    ClassicEditor
                        .create( document.querySelector( '#kt-ckeditor-1' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                }

                return {
                    // public functions
                    init: function() {
                        demos();
                    }
                };
            }();

            // Initialization
            jQuery(document).ready(function() {
                KTCkeditor.init();
            });
        </script>
    @endpush

</x-default-layout>
