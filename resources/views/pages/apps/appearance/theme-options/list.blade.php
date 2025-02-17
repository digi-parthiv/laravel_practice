<x-default-layout>

    @section('title')
        Theme Options
    @endsection

    @section('breadcrumbs')
            {{ Breadcrumbs::render('appearance.theme-options.index') }}
    @endsection

        <div class="card theme-option">
            <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="2Dfdndr3Tb2ELpG9CfMN6FjBjuDloGFzl3CI8jA2">
                <div class="card-header">
                    <h4 class="card-title">
                        Theme Options
                    </h4>

                    <div class="card-actions"><div class="btn-list justify-content-end align-items-center">

                            <button class="btn btn-primary" type="submit">

                                Save Changes

                            </button>
                        </div></div>
                </div>

                <div class="card-body p-0">
                    <div class="d-block d-md-flex">
                        <div class="bg-light-secondary nav mb-md-0 flex-column nav-pills overflow-hidden p-3" id="themeOptionTab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link w-100 active" id="opt-text-subsection-general-tab" data-bs-toggle="pill" data-bs-target="#opt-text-subsection-general" type="button" role="tab" aria-controls="opt-text-subsection-general" aria-selected="true" title="General">
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                </svg>                                                                <span class="text-truncate">General</span>
                            </button>
                            <button class="nav-link w-100" id="opt-text-subsection-social-links-tab" data-bs-toggle="pill" data-bs-target="#opt-text-subsection-social-links" type="button" role="tab" aria-controls="opt-text-subsection-social-links" aria-selected="false" title="Social links" tabindex="-1">
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M8.7 10.7l6.6 -3.4"></path>
                                    <path d="M8.7 13.3l6.6 3.4"></path>
                                </svg>                                                                <span class="text-truncate">Social links</span>
                            </button>
                            <button class="nav-link w-100" id="opt-contact-tab" data-bs-toggle="pill" data-bs-target="#opt-contact" type="button" role="tab" aria-controls="opt-contact" aria-selected="false" title="Contact info boxes" tabindex="-1">
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 9h.01"></path>
                                    <path d="M11 12h1v4h1"></path>
                                </svg>                                                                <span class="text-truncate">Contact info boxes</span>
                            </button>
                            <button class="nav-link w-100" id="opt-text-subsection-logo-tab" data-bs-toggle="pill" data-bs-target="#opt-text-subsection-logo" type="button" role="tab" aria-controls="opt-text-subsection-logo" aria-selected="false" title="Logo" tabindex="-1">
                                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 8h.01"></path>
                                    <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z"></path>
                                    <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5"></path>
                                    <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3"></path>
                                </svg>                                                                <span class="text-truncate">Logo</span>
                            </button>
                        </div>
                        <div class="tab-content w-100 p-3" id="themeOptionTabContent">
                            <div class="tab-pane fade show active" id="opt-text-subsection-general" role="tabpanel" aria-labelledby="opt-text-subsection-general-tab" tabindex="0">

                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="preloader_enabled">
                                        Enable Preloader?


                                    </label>
                                    <select data-placeholder="Select an option" class="form-control form-select" name="preloader_enabled"><option value="yes" selected="selected">Yes</option><option value="no">No</option></select>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="preloader_version">
                                        Preloader Version?


                                    </label>
                                    <select data-placeholder="Select an option" class="form-control form-select" name="preloader_version"><option value="v1">V1</option><option value="v2" selected="selected">V2</option></select>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="preloader_image">
                                        Preloader image (if it is not set, preloader image will be site favicon)


                                    </label>
                                    <div class="image-box image-box-payment_stripe_logo" action="select-image">
                                        <input class="image-data" name="payment_stripe_logo" type="hidden" value="">
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image.svg') }}') !important;
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder 'image-input-empty' }}" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('');"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                {!! getIcon('pencil','fs-7') !!}
                                                <!--begin::Inputs-->
                                                <input type="file" wire:model.live="avatar" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    {!! getIcon('cross','fs-2') !!}
                                </span>
                                            <!--end::Cancel-->

                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="enabled_browse_categories_on_header">
                                        Enable Browse Categories button on header?


                                    </label>
                                    <select data-placeholder="Select an option" class="form-control form-select" name="enabled_browse_categories_on_header"><option value="yes" selected="selected">Yes</option><option value="no">No</option></select>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="copyright">
                                        Copyright


                                    </label>
                                    <input class="form-control" placeholder="Change copyright" data-counter="250" name="copyright" type="text" value="Kruzpet® Team ©2024 copyright. Designed by Marketome INC">
                                    <small class="form-hint">Copyright on footer of site</small>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="hotline">
                                        Hotline


                                    </label>
                                    <input class="form-control" placeholder="Hotline" data-counter="30" name="hotline" type="text" value="">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="phone">
                                        Phone


                                    </label>
                                    <input class="form-control" placeholder="Phone" data-counter="30" name="phone" type="text" value="">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="contact_email">
                                        Email


                                    </label>
                                    <input class="form-control" data-counter="120" name="contact_email" type="email" value="kruzpetsales@gmail.com">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="address">
                                        Address


                                    </label>
                                    <input class="form-control" placeholder="Address" data-counter="120" name="address" type="text" value="LA, CA, 90064">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="working_hours">
                                        Working Hours


                                    </label>
                                    <input class="form-control" placeholder="Working Hours" data-counter="120" name="working_hours" type="text" value="9:00 AM - 6:00 PM">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="site_title">
                                        Site title


                                    </label>
                                    <input class="form-control" placeholder="Site title" data-counter="255" name="site_title" type="text" value="KRUZPET - Dog Collars, Dog Leashes, Dog Harness">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="show_site_name">
                                        Show site name after page title, separate with "-"?


                                    </label>
                                    <select data-placeholder="Select an option" class=" form-select" name="show_site_name"><option value="0">No</option><option value="1" selected="selected">Yes</option></select>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="seo_title">
                                        SEO Title


                                    </label>
                                    <input class="form-control" placeholder="SEO Title" data-counter="120" name="seo_title" type="text" value="KRUZPET - Dog Collars, Dog Leashes, Dog Harness">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="seo_description">
                                        SEO Description


                                    </label>
                                    <textarea class="form-control" rows="4" name="seo_description" cols="50">KRUZPET® stands for Ultimate DOg COmfort!</textarea>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="seo_og_image">
                                        SEO default Open Graph image


                                    </label>
                                    <div class="image-box image-box-payment_stripe_logo" action="select-image">
                                        <input class="image-data" name="payment_stripe_logo" type="hidden" value="">
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image.svg') }}') !important;
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder 'image-input-empty' }}" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('');"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                {!! getIcon('pencil','fs-7') !!}
                                                <!--begin::Inputs-->
                                                <input type="file" wire:model.live="avatar" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    {!! getIcon('cross','fs-2') !!}
                                </span>
                                            <!--end::Cancel-->

                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="theme_breadcrumb_enabled">
                                        Enable breadcrumb?


                                    </label>
                                    <select data-placeholder="Select an option" class=" form-select" name="theme_breadcrumb_enabled"><option value="1" selected="selected">Yes</option><option value="0">No</option></select>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="opt-text-subsection-social-links" role="tabpanel" aria-labelledby="opt-text-subsection-social-links-tab" tabindex="0">

                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="social_links">
                                        Social links


                                    </label>
                                    <input name="social_links" type="hidden" value="[]">

                                    <div class="repeater-group" id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c_group" data-next-index="2">
                                        <fieldset class="form-fieldset position-relative" data-id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c_0" data-index="0">
                                            <legend class="d-flex justify-content-end align-items-center">
                                                <button class="btn btn-icon  btn-sm position-absolute remove-item-button" type="button" data-target="repeater-remove" data-id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c_0">
                                                    <svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M18 6l-12 12"></path>
                                                        <path d="M6 6l12 12"></path>
                                                    </svg>

                                                </button>
                                            </legend>

                                            <div><div class="repeater-item-group">
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">
                                                            Name
                                                        </label>

                                                        <input name="social_links[0][0][key]" type="hidden" value="social-name">

                                                        <input class="form-control" id="repeater_field_ad8b21cfed852e3793eb0381e8dc745a_6720c6f57923a" name="social_links[0][0][value]" type="text" value="Facebook">
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">
                                                            URL


                                                        </label>

                                                        <input name="social_links[0][2][key]" type="hidden" value="social-url">

                                                        <input class="form-control" id="repeater_field_25fb24f781281a9829bbd46228c988e6_6720c6f579eee" name="social_links[0][2][value]" type="text" value="https://www.facebook.com/kruzpet/">
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                    <div class="mb-3">
                                        <button class="btn border border-1" type="button" data-target="repeater-add" data-id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c">

                                            Add new

                                        </button>
                                    </div>

                                    <script type="text/x-custom-template" id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c_template">
                                        <fieldset data-id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c___key__" data-index="__key__" class="form-fieldset position-relative">
                                            <div data-target="fields">__fields__</div>

                                            <button
                                                class="btn btn-icon  btn-sm position-absolute remove-item-button" type="button" data-target="repeater-remove" data-id="repeater_field_ab30191f59c7d7f95998d9d2dfc936a2_6720c6f57d06c___key__"
                                            >
                                                <svg class="icon icon-sm icon-left"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     width="24"
                                                     height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none"
                                                     stroke="currentColor"
                                                     stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round"
                                                >
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M18 6l-12 12" />
                                                    <path d="M6 6l12 12" />
                                                </svg>

                                            </button>
                                        </fieldset>
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="opt-contact" role="tabpanel" aria-labelledby="opt-contact-tab" tabindex="0">

                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="contact_info_boxes">
                                        Contact info boxes


                                    </label>
                                    <input name="contact_info_boxes" type="hidden" value="[]">

                                    <div class="repeater-group" id="repeater_field_355f8e35152ceb8409300af8838bb276_6720c6f586098_group" data-next-index="1">
                                        <fieldset class="form-fieldset position-relative" data-id="repeater_field_355f8e35152ceb8409300af8838bb276_6720c6f586098_0" data-index="0">
                                            <legend class="d-flex justify-content-end align-items-center">
                                                <button class="btn btn-icon  btn-sm position-absolute remove-item-button" type="button" data-target="repeater-remove" data-id="repeater_field_355f8e35152ceb8409300af8838bb276_6720c6f586098_0">
                                                    <svg class="icon icon-sm icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M18 6l-12 12"></path>
                                                        <path d="M6 6l12 12"></path>
                                                    </svg>

                                                </button>
                                            </legend>

                                            <div><div class="repeater-item-group">
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">
                                                            Name


                                                        </label>

                                                        <input name="contact_info_boxes[0][0][key]" type="hidden" value="name">

                                                        <input class="form-control" id="repeater_field_3564c0bda50dabc0ebe5d8aad87b20fd_6720c6f5836f7" name="contact_info_boxes[0][0][value]" type="text" value="Head Office">
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">
                                                            Address


                                                        </label>

                                                        <input name="contact_info_boxes[0][1][key]" type="hidden" value="address">

                                                        <input class="form-control" id="repeater_field_33a34e9d5d24f22ae6caf7d06a10a2c9_6720c6f5839f3" name="contact_info_boxes[0][1][value]" type="text" value="LA, CA, 90064">
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">
                                                            Phone


                                                        </label>

                                                        <input name="contact_info_boxes[0][2][key]" type="hidden" value="phone">

                                                        <input class="form-control" id="repeater_field_f195ab1d82a28c8733c8da9443c977fc_6720c6f583c74" name="contact_info_boxes[0][2][value]" type="text">
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">
                                                            Email


                                                        </label>

                                                        <input name="contact_info_boxes[0][3][key]" type="hidden" value="email">

                                                        <input class="form-control" id="repeater_field_acda90b741aa616c699944c162d73868_6720c6f583f2c" name="contact_info_boxes[0][3][value]" type="email" value="kruzpet@gmail.com">
                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="opt-text-subsection-logo" role="tabpanel" aria-labelledby="opt-text-subsection-logo-tab" tabindex="0">

                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="logo_light">
                                        Light Logo


                                    </label>
                                    <div class="image-box image-box-payment_stripe_logo" action="select-image">
                                        <input class="image-data" name="payment_stripe_logo" type="hidden" value="">
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image.svg') }}') !important;
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder 'image-input-empty' }}" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('');"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                {!! getIcon('pencil','fs-7') !!}
                                                <!--begin::Inputs-->
                                                <input type="file" wire:model.live="avatar" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    {!! getIcon('cross','fs-2') !!}
                                </span>
                                            <!--end::Cancel-->

                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="favicon">
                                        Favicon


                                    </label>
                                    <div class="image-box image-box-payment_stripe_logo" action="select-image">
                                        <input class="image-data" name="payment_stripe_logo" type="hidden" value="">
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image.svg') }}') !important;
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder 'image-input-empty' }}" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('');"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                {!! getIcon('pencil','fs-7') !!}
                                                <!--begin::Inputs-->
                                                <input type="file" wire:model.live="avatar" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    {!! getIcon('cross','fs-2') !!}
                                </span>
                                            <!--end::Cancel-->

                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="logo">
                                        Logo


                                    </label>
                                    <div class="image-box image-box-payment_stripe_logo" action="select-image">
                                        <input class="image-data" name="payment_stripe_logo" type="hidden" value="">
                                        <!--begin::Image placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image.svg') }}') !important;
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ image('svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline image-input-placeholder 'image-input-empty' }}" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('');"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                {!! getIcon('pencil','fs-7') !!}
                                                <!--begin::Inputs-->
                                                <input type="file" wire:model.live="avatar" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    {!! getIcon('cross','fs-2') !!}
                                </span>
                                            <!--end::Cancel-->

                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="btn-list justify-content-end align-items-center">

                        <button class="btn btn-primary" type="submit">

                            Save Changes

                        </button>
                    </div>
                </div>
            </form>
        </div>

    @push('scripts')
    @endpush

</x-default-layout>
