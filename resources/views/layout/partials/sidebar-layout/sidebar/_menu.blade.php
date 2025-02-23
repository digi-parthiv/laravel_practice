<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('dashboard') }}">
                    <span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
                    <span class="menu-title">Dashboard</span>
                </a>
                <!--end:Menu link-->
            </div>


			<!--begin:Menu item-->
			<div class="menu-item pt-5">
				<!--begin:Menu content-->
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
				</div>
				<!--end:Menu content-->
			</div>
			<!--end:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('e-commerce.*') ? 'here show' : '' }}">
				<a href="{{ url('admin/fileslist') }} ">
    				<span class="menu-link">
                            <span class="menu-title">Files</span>
    				</span>
                <a>
            </div>
		    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('e-commerce.*') ? 'here show' : '' }}">
				<a href="{{ url('admin/category') }} ">
    				<span class="menu-link">
                            <span class="menu-title">category</span>
    				</span>
                <a>
            </div>
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
