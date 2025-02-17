<x-default-layout>

    @section('title')
        Transactions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('payments.transactions.index') }}
    @endsection

        <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="2Dfdndr3Tb2ELpG9CfMN6FjBjuDloGFzl3CI8jA2">
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Information</h4>

                            <div class="card-actions">
                                <a class="btn border border-1" type="button" href="" target="_blank">
                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path>
                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                        <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path>
                                    </svg>
                                    Print Invoice

                                </a>

                                <a class="btn border border-1 " type="button" href="" target="_blank">
                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M7 11l5 5l5 -5"></path>
                                        <path d="M12 4l0 12"></path>
                                    </svg>
                                    Download Invoice

                                </a>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Charge ID</div>
                                    <div class="datagrid-content">06D72161K45946729</div>
                                </div>


                                <div class="datagrid-item">
                                    <div class="datagrid-title">Payment Channel</div>
                                    <div class="datagrid-content">PayPal</div>
                                </div>

                                <div class="datagrid-item">
                                    <div class="datagrid-title">Total</div>
                                    <div class="datagrid-content">53.98 USD</div>
                                </div>

                                <div class="datagrid-item">
                                    <div class="datagrid-title">Created At</div>
                                    <div class="datagrid-content">2024-10-27 17:52:30</div>
                                </div>

                                <div class="datagrid-item">
                                    <div class="datagrid-title">Status</div>
                                    <div class="datagrid-content"><span class="badge bg-success text-success-fg">

    Completed
</span></div>
                                </div>
                            </div>

                            <div class="my-3">
                                <div class="alert alert-success" role="alert">
                                    <p class="mb-2">Payment ID: <strong>06D72161K45946729</strong></p>

                                    <p class="mb-2">
                                        Details:
                                        <strong>
                                            53.98 USD                             (Pay for your order #378 at kruzpetz.com)
                                        </strong>
                                    </p>

                                    <p class="mb-2">Payer Name
                                        : Delaine Bartley</p>
                                    <p class="mb-2">Email: delainebaxter@gmail.com</p>
                                    <p class="mb-2">Phone:
                                        2069414211</p>
                                    <p class="mb-2">Country: US</p>
                                    <p class="mb-0">
                                        Shipping Address:
                                        Delaine Bartley, 520 Cassidy Ave,
                                        Ottawa, IL
                                        61350, US
                                    </p>
                                </div>


                                <button class="btn mb-3 collapsed border border-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-response-source" aria-expanded="false">
                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 8l-4 4l4 4"></path>
                                        <path d="M17 8l4 4l-4 4"></path>
                                        <path d="M14 4l-4 16"></path>
                                    </svg>
                                    View response source

                                </button>

                                <div class="collapse bg-gray-900i text-white p-5" id="collapse-response-source" style="">
    <pre>{
    "statusCode": 200,
    "result": {
        "id": "06D72161K45946729",
        "intent": "CAPTURE",
        "status": "COMPLETED",
        "payment_source": {
            "paypal": {
                "email_address": "delainebaxter@gmail.com",
                "account_id": "JR9DCW5FPQG4A",
                "account_status": "UNVERIFIED",
                "name": {
                    "given_name": "Delaine",
                    "surname": "Bartley"
                },
                "phone_number": {
                    "national_number": "2069414211"
                },
                "address": {
                    "country_code": "US"
                }
            }
        },
        "purchase_units": [
            {
                "reference_id": "default",
                "amount": {
                    "currency_code": "USD",
                    "value": "53.98",
                    "breakdown": {
                        "item_total": {
                            "currency_code": "USD",
                            "value": "53.98"
                        },
                        "shipping": {
                            "currency_code": "USD",
                            "value": "0.00"
                        },
                        "handling": {
                            "currency_code": "USD",
                            "value": "0.00"
                        },
                        "insurance": {
                            "currency_code": "USD",
                            "value": "0.00"
                        },
                        "shipping_discount": {
                            "currency_code": "USD",
                            "value": "0.00"
                        },
                        "discount": {
                            "currency_code": "USD",
                            "value": "0.00"
                        }
                    }
                },
                "payee": {
                    "email_address": "docopet@gmail.com",
                    "merchant_id": "QRUPXXR5P5F3Y"
                },
                "description": "Pay for your order #378 at kruzpetz.com",
                "custom_id": "delainebartley@gmail.com",
                "soft_descriptor": "PAYPAL *DOCOPETLLC",
                "shipping": {
                    "name": {
                        "full_name": "Delaine Bartley"
                    },
                    "address": {
                        "address_line_1": "520 Cassidy Ave",
                        "admin_area_2": "Ottawa",
                        "admin_area_1": "IL",
                        "postal_code": "61350",
                        "country_code": "US"
                    }
                },
                "payments": {
                    "captures": [
                        {
                            "id": "8BF03606WC3419938",
                            "status": "COMPLETED",
                            "amount": {
                                "currency_code": "USD",
                                "value": "53.98"
                            },
                            "final_capture": true,
                            "seller_protection": {
                                "status": "ELIGIBLE",
                                "dispute_categories": [
                                    "ITEM_NOT_RECEIVED",
                                    "UNAUTHORIZED_TRANSACTION"
                                ]
                            },
                            "seller_receivable_breakdown": {
                                "gross_amount": {
                                    "currency_code": "USD",
                                    "value": "53.98"
                                },
                                "paypal_fee": {
                                    "currency_code": "USD",
                                    "value": "2.37"
                                },
                                "net_amount": {
                                    "currency_code": "USD",
                                    "value": "51.61"
                                }
                            },
                            "custom_id": "delainebartley@gmail.com",
                            "links": [
                                {
                                    "href": "https:\/\/api.paypal.com\/v2\/payments\/captures\/8BF03606WC3419938",
                                    "rel": "self",
                                    "method": "GET"
                                },
                                {
                                    "href": "https:\/\/api.paypal.com\/v2\/payments\/captures\/8BF03606WC3419938\/refund",
                                    "rel": "refund",
                                    "method": "POST"
                                },
                                {
                                    "href": "https:\/\/api.paypal.com\/v2\/checkout\/orders\/06D72161K45946729",
                                    "rel": "up",
                                    "method": "GET"
                                }
                            ],
                            "create_time": "2024-10-27T17:52:30Z",
                            "update_time": "2024-10-27T17:52:30Z"
                        }
                    ]
                }
            }
        ],
        "payer": {
            "name": {
                "given_name": "Delaine",
                "surname": "Bartley"
            },
            "email_address": "delainebaxter@gmail.com",
            "payer_id": "JR9DCW5FPQG4A",
            "phone": {
                "phone_number": {
                    "national_number": "2069414211"
                }
            },
            "address": {
                "country_code": "US"
            }
        },
        "update_time": "2024-10-27T17:52:30Z",
        "links": [
            {
                "href": "https:\/\/api.paypal.com\/v2\/checkout\/orders\/06D72161K45946729",
                "rel": "self",
                "method": "GET"
            }
        ]
    },
    "headers": {
        "": "",
        "content-type": "application\/json",
        "content-length": "2393",
        "date": "Tue, 29 Oct 2024 10",
        "access-control-expose-headers": "Server-Timing",
        "application_id": "APP-7S497470X20416157",
        "cache-control": "max-age=0, no-cache, no-store, must-revalidate",
        "caller_acct_num": "QRUPXXR5P5F3Y",
        "paypal-debug-id": "4b10e59c36c63",
        "server-timing": "traceparent;desc=\"00-00000000000000000004b10e59c36c63-ca54b8dddbc5bd76-01\"",
        "set-cookie": "l7_az=ccg14.slc; Path=\/; Domain=paypal.com; Expires=Tue, 29 Oct 2024 11",
        "traceparent": "00-00000000000000000004b10e59c36c63-ede408cbed402fef-01",
        "vary": "Accept-Encoding",
        "strict-transport-security": "max-age=31536000; includeSubDomains"
    }
}</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Action
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="btn-list">
                                <button class="btn btn-sm btn-primary" type="submit" value="apply" name="submitter">
                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M14 4l0 4l-6 0l0 -4"></path>
                                    </svg>
                                    Save

                                </button>

                                <button class="btn btn-sm border border-1 mx-2 " type="submit" name="submitter" value="save">
                                    <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

                    <header class="top-0 w-100 position-fixed end-0 z-1000 vertical-wrapper" id="form-actions" style="display: none;">
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
                                            <button class="btn btn-primary" type="submit" value="apply" name="submitter">
                                                <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                    <path d="M14 4l0 4l-6 0l0 -4"></path>
                                                </svg>
                                                Save

                                            </button>

                                            <button class="btn" type="submit" name="submitter" value="save">
                                                <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

                    <div class="card meta-boxes mt-3">
                        <div class="card-header">
                            <h4 class="card-title">
                                <label class="form-label required" for="status">
                                    Status
                                </label>
                            </h4>
                        </div>
                        <div class="card-body">
                            <select data-placeholder="Select an option" class=" form-select" name="status"><option value="completed" selected="selected">Completed</option><option value="refunding">Refunding</option><option value="refunded">Refunded</option><option value="fraud">Fraud</option><option value="failed">Failed</option></select>
                        </div>
                    </div>

                </div>
            </div>
        </form>

</x-default-layout>
