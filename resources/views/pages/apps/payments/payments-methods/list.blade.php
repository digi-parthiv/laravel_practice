<x-default-layout>

    @section('title')
        Payment methods
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('payments.methods.index') }}
    @endsection

        <div class="container-xl">


            <form method="POST" action="" accept-charset="UTF-8" id="botble-payment-forms-settings-payment-method-setting-form" class="js-base-form dirty-check" section_title="Payment methods" section_description="Setup payment methods for website" novalidate="novalidate"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="ctC6gBZHBwcBCBbfBaaSDhPvy7h5IkQDq1128S4k">

                <div class="mb-5 d-block d-md-flex">
                    <div class="col-12 col-md-3">
                        <h2>Payment methods</h2>
                        <p class="text-muted">Setup payment methods for website</p>


                    </div>

                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3 position-relative">

                                    <label class="form-label" for="default_payment_method">
                                        Default payment method


                                    </label>


                                    <select data-placeholder="Select an option" class="form-control form-select" name="default_payment_method"><option value="cod">Cash on delivery (COD)</option><option value="bank_transfer">Bank transfer</option><option value="stripe" selected="selected">Stripe</option><option value="paypal">PayPal</option><option value="razorpay">Razorpay</option><option value="paystack">Paystack</option><option value="mollie">Mollie</option><option value="sslcommerz">SslCommerz</option></select>




                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-9 offset-md-3">
                        <button class="btn btn-primary" type="submit" form="botble-payment-forms-settings-payment-method-setting-form">
                            <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                            </svg>
                            Save settings

                        </button>
                    </div>
                </div>
            </form>

            <div class="my-5 d-block d-md-flex">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-9">
                    <div class="card mb-3">
                        <table class="table table-vcenter card-table">
                            <tbody>
                            <tr class="border-bottom">
                                <td style="width: 5%; vertical-align: middle; padding: 12px !important;" class="border-end">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12"></path>
                                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                                    </svg>
                                </td>
                                <td>
                                    <img src="https://kruzpetz.com/vendor/core/plugins/stripe/images/stripe.svg" alt="Stripe" style="width: 8rem">
                                </td>
                                <td>
                                    <a href="https://stripe.com" target="_blank">Stripe</a>
                                    <p class="mb-0">Customer can buy product and pay directly using Visa, Credit card via Stripe</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="pb-3 px-5 border-bottom border-1  d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="payment-name-label-group">
                                                Use
                                                <span class="method-name-label">payment_stripe_name</span>
                                            </div>
                                        </div>
                                        <button id="edit" onclick="showHideForm('payment-stripe')" class="btn border border-1  toggle-payment-item edit-payment-item-btn-trigger" type="button">
                                            Edit
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="payment-content-item payment-stripe" style="display: none" id="payment-stripe">
                                <td colspan="3">
                                    <form method="POST" action="" accept-charset="UTF-8">
                                        <input name="_token" type="hidden" value="ctC6gBZHBwcBCBbfBaaSDhPvy7h5IkQDq1128S4k">
                                        <input type="hidden" name="type" value="stripe" class="payment_type">

                                        <div class="row p-5">
                                            <div class="col-md-6">
                                                <label class="form-label">
                                                    Configuration instruction for Stripe
                                                </label>

                                                <p class="mb-2">To use Stripe, you need:</p>

                                                <ol>
                                                    <li>
                                                        <p>
                                                            <a href="https://dashboard.stripe.com/register" target="_blank">
                                                                Register with Stripe
                                                            </a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>After registration at Stripe, you will have Public, Secret keys</p>
                                                    </li>
                                                    <li>
                                                        <p>Enter Public, Secret keys into the box in right hand</p>
                                                    </li>
                                                </ol>

                                                <h4>Stripe Webhook Setup Guide</h4>

                                                <p>Follow these steps to set up a Stripe webhook</p>

                                                <ol>
                                                    <li>
                                                        <p><strong>Login to the Stripe Dashboard:</strong> Access the <a href="https://dashboard.stripe.com/" target="_blank" rel="noreferrer noopener">Stripe Dashboard</a> and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.</p>
                                                    </li>

                                                    <li>
                                                        <p><strong>Select Event and Configure Endpoint:</strong> Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: <code></code></p>
                                                    </li>

                                                    <li>
                                                        <p><strong>Add Endpoint:</strong> Click the "Add Endpoint" button to save the webhook.</p>
                                                    </li>

                                                    <li>
                                                        <p><strong>Copy Signing Secret:</strong> Copy the "Signing Secret" value from the "Webhook Details" section and paste it into the "Stripe Webhook Secret" field in the "Stripe" section of the "Payment" tab in the "Settings" page.</p>
                                                    </li>
                                                </ol>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="payment_stripe_name">
                                                        Method name
                                                    </label>



                                                    <input class="form-control" type="text" name="payment_stripe_name" id="payment_stripe_name" value="Pay Via Credit / Debit Card" data-counter="400">
                                                </div>

                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="payment_stripe_description">
                                                        Description
                                                    </label>

                                                    <textarea class="form-control" name="payment_stripe_description" id="payment_stripe_description">Complete your purchase securely using our online Credit and Debit card gateway.</textarea>
                                                </div>

                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="payment_stripe_logo">
                                                        Method logo


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

                                                <fieldset class="form-fieldset bg-gray-200 rounded p-5">
                                                    <legend class="fs-4 fw-semibold mb-3">
                                                        Please provide information
                                                        <a href="https://stripe.com" target="_blank">Stripe</a>:
                                                    </legend>

                                                    <div class="mb-3 position-relative">

                                                        <label class="form-label" for="payment_stripe_client_id">
                                                            Stripe Public Key


                                                        </label>


                                                        <input class="form-control" data-counter="400" name="payment_stripe_client_id" type="text">



                                                    </div>



                                                    <div class="mb-3 position-relative">

                                                        <label for="payment_stripe_secret" class="form-label">Stripe Private Key</label>
                                                        <input class="form-control" data-counter="250" placeholder="sk_*************" name="payment_stripe_secret" type="password">


                                                    </div>



                                                    <div class="mb-3 position-relative">

                                                        <label class="form-label" for="payment_stripe_payment_type">
                                                            Payment Type


                                                        </label>


                                                        <select data-placeholder="Select an option" class="form-control form-select" name="payment_stripe_payment_type"><option value="stripe_api_charge">Stripe API Charge</option><option value="stripe_checkout" selected="selected">Stripe Checkout</option></select>




                                                    </div>



                                                    <div class="mb-3 position-relative">

                                                        <label for="payment_stripe_webhook_secret" class="form-label">Webhook Secret</label>
                                                        <input class="form-control" data-counter="250" placeholder="whsec_*************" name="payment_stripe_webhook_secret" type="password" value="" id="payment_stripe_webhook_secret">



                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="btn-list justify-content-end">
                                            <button class="btn   disable-payment-item" type="button">
                                                Deactivate

                                            </button>
                                            <button class="btn btn-info  save-payment-item btn-text-trigger-update" type="button">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 offset-col-md-3">
                </div>
            </div>
        </div>
    @push('scripts')
        <script>
            function showHideForm(element) {
                $('.'+element).slideToggle(function(){$('#edit')});
            }
        </script>
    @endpush

</x-default-layout>
