<x-default-layout>
    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

        <!--begin::Row-->
        <div class="row gy-5 gx-xl-10">
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-3 mb-xl-10">
                <!--begin::Card widget 2-->
                <div class="card h-lg-100 orders-background">
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <!--begin::Icon-->
                        <div class="m-0">
                            <span class="fw-bolder fs-6 text-white">Orders</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Section-->
                        <div class="d-flex flex-row justify-content-between w-100 my-7">
                            <!--begin::Number-->
                            <span class="fw-bolder fs-3x text-white lh-1 ls-n2">327</span>
                            <!--end::Number-->
                            <!--begin::Follower-->
                            <div class="m-0 card-icons-dg">
                                <i class="fa fa-cart-flatbed-suitcase"></i>
                            </div>
                            <!--end::Follower-->
                        </div>
                        <!--end::Section-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-3 mb-xl-10">
                <!--begin::Card widget 2-->
                <div class="card h-lg-100 products-background">
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <!--begin::Icon-->
                        <div class="m-0">
                            <span class="fw-bolder fs-6 text-white">Products</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Section-->
                        <div class="d-flex flex-row justify-content-between w-100 my-7">
                            <!--begin::Number-->
                            <span class="fw-bolder fs-3x text-white lh-1 ls-n2">275</span>
                            <!--end::Number-->
                            <!--begin::Follower-->
                            <div class="m-0 card-icons-dg">
                                <i class="fa fa-cart-shopping"></i>
                            </div>
                            <!--end::Follower-->
                        </div>
                        <!--end::Section-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-3 mb-xl-10">
                <!--begin::Card widget 2-->
                <div class="card h-lg-100 customers-background">
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <!--begin::Icon-->
                        <div class="m-0">
                            <span class="fw-bolder fs-6 text-white">Customers</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Section-->
                        <div class="d-flex flex-row justify-content-between w-100 my-7">
                            <!--begin::Number-->
                            <span class="fw-bolder fs-3x text-white lh-1 ls-n2">149</span>
                            <!--end::Number-->
                            <!--begin::Follower-->
                            <div class="m-0 card-icons-dg">
                                <i class="fa fa-users"></i>
                            </div>
                            <!--end::Follower-->
                        </div>
                        <!--end::Section-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-3 mb-xl-10">
                <!--begin::Card widget 2-->
                <div class="card h-lg-100 reviews-background">
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <!--begin::Icon-->
                        <div class="m-0">
                            <span class="fw-bolder fs-6 text-white">Reviews</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Section-->
                        <div class="d-flex flex-row justify-content-between w-100 my-7">
                            <!--begin::Number-->
                            <span class="fw-bolder fs-3x text-white lh-1 ls-n2">89</span>
                            <!--end::Number-->
                            <!--begin::Follower-->
                            <div class="m-0 card-icons-dg">
                                <i class="fa fa-message"></i>
                            </div>
                            <!--end::Follower-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 2-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-6 mb-5 mb-xl-10">
                <!--begin::Table Widget 4-->
                <div class="card h-xl-100">
                    <!--begin::Card header-->
                    <div class="card-header border-1 pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Recent Posts</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="text-start min-w-25px">#</th>
                                <th class="text-start min-w-100px">Name</th>
                                <th class="text-end min-w-100px">Created</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-800 text-hover-primary">1</a>
                                </td>
                                <td class="text-start text-primary fw-semibold">3 Must-Have Dog Products Online That You Should Get For Your New Puppy</td>
                                <td class="text-end fw-semibold">2024-08-30</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-800 text-hover-primary">2</a>
                                </td>
                                <td class="text-start text-primary fw-semibold">3 Must-Have Dog Products Online That You Should Get For Your New Puppy</td>
                                <td class="text-end fw-semibold">2024-08-30</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-800 text-hover-primary">3</a>
                                </td>
                                <td class="text-start text-primary fw-semibold">3 Must-Have Dog Products Online That You Should Get For Your New Puppy</td>
                                <td class="text-end fw-semibold">2024-08-30</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-800 text-hover-primary">4</a>
                                </td>
                                <td class="text-start text-primary fw-semibold">3 Must-Have Dog Products Online That You Should Get For Your New Puppy</td>
                                <td class="text-end fw-semibold">2024-08-30</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="text-gray-800 text-hover-primary">5</a>
                                </td>
                                <td class="text-start text-primary fw-semibold">3 Must-Have Dog Products Online That You Should Get For Your New Puppy</td>
                                <td class="text-end fw-semibold">2024-08-30</td>
                            </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 4-->
            </div>
            <!--end::Col-->
            <div class="col-xl-6 mb-xl-10">
                <!--begin::Table widget 2-->
                <div class="card h-md-100">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-1">
                        <!--begin::Title-->
                        <h3 class="fw-bold text-gray-900 m-0">Ecommerce</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <ul class="ecommerce-status-list list-unstyled">
                            <li class="sales-this-month">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 19l16 0"></path>
                                    <path d="M4 15l4 -6l4 2l4 -5l4 4"></path>
                                </svg>        <a class="ms-2" href="" draggable="false">
                                    <strong>
                                        $67.88
                                    </strong> Revenue this month
                                </a>
                            </li>
                            <li class="processing-orders">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                </svg>        <a class="ms-2" href="" draggable="false">
                                    <strong>40</strong>
                                    order(s) processing in this month
                                </a>
                            </li>
                            <li class="completed-orders">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                </svg>        <a class="ms-2" href="" draggable="false">
                                    <strong>0</strong> order(s) completed in this month
                                </a>
                            </li>
                            <li class="low-in-stock">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 16v.01"></path>
                                </svg>        <a class="ms-2" href="" draggable="false">
                                    <strong>0</strong>
                                    product(s) will be out of stock soon
                                </a>
                            </li>
                            <li class="out-of-stock">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                                </svg>        <a class="ms-2" href="?filter_table_id=botble-ecommerce-tables-product-table&amp;class=Botble%5CEcommerce%5CTables%5CProductTable&amp;filter_columns%5B%5D=stock_status&amp;filter_operators%5B%5D=%3D&amp;filter_values%5B%5D=out_of_stock" draggable="false">
                                    <strong>3</strong> product(s) out of stock
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Table widget 2-->
            </div>
        </div>
</x-default-layout>
