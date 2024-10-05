
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">View Project</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Projects</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->
											<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-filter fs-6 text-muted me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Filter</a>
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab243e">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab243e" data-allow-clear="true" data-select2-id="select2-data-7-rksm" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-h47f" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-q5rt-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-q5rt-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1">
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked">
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Navbar-->
									<div class="card mb-6 mb-xl-9">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
												<!--begin::Image-->
												<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
													<img class="mw-50px mw-lg-75px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="image">
												</div>
												<!--end::Image-->
												<!--begin::Wrapper-->
												<div class="flex-grow-1">
													<!--begin::Head-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::Details-->
														<div class="d-flex flex-column">
															<!--begin::Status-->
															<div class="d-flex align-items-center mb-1">
																<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">CRM Dashboard</a>
																<span class="badge badge-light-success me-auto">In Progress</span>
															</div>
															<!--end::Status-->
															<!--begin::Description-->
															<div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500">#1 Tool to get started with Web Apps any Kind &amp; size</div>
															<!--end::Description-->
														</div>
														<!--end::Details-->
														<!--begin::Actions-->
														<div class="d-flex mb-4">
															<a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
															<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
															<!--begin::Menu-->
															<div class="me-0">
																<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																</button>
																<!--begin::Menu 3-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																	<!--begin::Heading-->
																	<div class="menu-item px-3">
																		<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Create Invoice</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link flex-stack px-3">Create Payment 
																		<span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Generate Bill</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																		<a href="#" class="menu-link px-3">
																			<span class="menu-title">Subscription</span>
																			<span class="menu-arrow"></span>
																		</a>
																		<!--begin::Menu sub-->
																		<div class="menu-sub menu-sub-dropdown w-175px py-4">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Plans</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Billing</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Statements</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu separator-->
																			<div class="separator my-2"></div>
																			<!--end::Menu separator-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<div class="menu-content px-3">
																					<!--begin::Switch-->
																					<label class="form-check form-switch form-check-custom form-check-solid">
																						<!--begin::Input-->
																						<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
																						<!--end::Input-->
																						<!--end::Label-->
																						<span class="form-check-label text-muted fs-6">Recuring</span>
																						<!--end::Label-->
																					</label>
																					<!--end::Switch-->
																				</div>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu sub-->
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3 my-1">
																		<a href="#" class="menu-link px-3">Settings</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu 3-->
															</div>
															<!--end::Menu-->
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Head-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap justify-content-start">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<div class="fs-4 fw-bold">29 Jan, 2024</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-500">Due Date</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold counted" data-kt-countup="true" data-kt-countup-value="75" data-kt-initialized="1">75</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-500">Open Tasks</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<div class="fs-4 fw-bold counted" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$" data-kt-initialized="1">$15,000</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-500">Budget Spent</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
														<!--begin::Users-->
														<div class="symbol-group symbol-hover mb-3">
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-7.jpg">
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-20.jpg">
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<!--end::User-->
															<!--begin::All users-->
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="View more users" data-kt-initialized="1">+42</span>
															</a>
															<!--end::All users-->
														</div>
														<!--end::Users-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Details-->
											<div class="separator"></div>
											<!--begin::Nav-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6 active" href="apps/projects/project.html">Overview</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6" href="apps/projects/targets.html">Targets</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6" href="apps/projects/budget.html">Budget</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6" href="apps/projects/users.html">Users</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6" href="apps/projects/files.html">Files</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6" href="apps/projects/activity.html">Activity</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary py-5 me-6" href="apps/projects/settings.html">Settings</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--end::Nav-->
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::Row-->
									<div class="row gx-6 gx-xl-9">
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Summary-->
											<div class="card card-flush h-lg-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">Tasks Summary</h3>
														<div class="fs-6 fw-semibold text-gray-500">24 Overdue Tasks</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-light btn-sm">View Tasks</a>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body p-9 pt-5">
													<!--begin::Wrapper-->
													<div class="d-flex flex-wrap">
														<!--begin::Chart-->
														<div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
															<div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
																<span class="fs-2qx fw-bold">237</span>
																<span class="fs-6 fw-semibold text-gray-500">Total Tasks</span>
															</div>
															<canvas id="project_overview_chart" width="131" height="131" style="display: block; box-sizing: border-box; height: 175px; width: 175px;"></canvas>
														</div>
														<!--end::Chart-->
														<!--begin::Labels-->
														<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-primary me-3"></div>
																<div class="text-gray-500">Active</div>
																<div class="ms-auto fw-bold text-gray-700">30</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-success me-3"></div>
																<div class="text-gray-500">Completed</div>
																<div class="ms-auto fw-bold text-gray-700">45</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-danger me-3"></div>
																<div class="text-gray-500">Overdue</div>
																<div class="ms-auto fw-bold text-gray-700">0</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center">
																<div class="bullet bg-gray-300 me-3"></div>
																<div class="text-gray-500">Yet to start</div>
																<div class="ms-auto fw-bold text-gray-700">25</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Labels-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-semibold">
																<div class="fs-6 text-gray-700">
																<a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Summary-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Graph-->
											<div class="card card-flush h-lg-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">Tasks Over Time</h3>
														<!--begin::Labels-->
														<div class="fs-6 d-flex text-gray-500 fs-6 fw-semibold">
															<!--begin::Label-->
															<div class="d-flex align-items-center me-6">
															<span class="menu-bullet d-flex align-items-center me-2">
																<span class="bullet bg-success"></span>
															</span>Complete</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex align-items-center">
															<span class="menu-bullet d-flex align-items-center me-2">
																<span class="bullet bg-primary"></span>
															</span>Incomplete</div>
															<!--end::Label-->
														</div>
														<!--end::Labels-->
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Select-->
														<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible" data-select2-id="select2-data-9-h0y9" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option value="1">2020 Q1</option>
															<option value="2">2020 Q2</option>
															<option value="3" selected="selected" data-select2-id="select2-data-11-eydb">2020 Q3</option>
															<option value="4">2020 Q4</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-1n67" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-4l-container" aria-controls="select2-status-4l-container"><span class="select2-selection__rendered" id="select2-status-4l-container" role="textbox" aria-readonly="true" title="2020 Q3">2020 Q3</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														<!--end::Select-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-10 pb-0 px-5">
													<!--begin::Chart-->
													<div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px; min-height: 315px;"><div id="apexchartswzgsv7ahk" class="apexcharts-canvas apexchartswzgsv7ahk apexcharts-theme-light" style="width: 580px; height: 300px;"><svg id="SvgjsSvg1092" width="580" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="580" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1122" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1149" class="apexcharts-yaxis" rel="0" transform="translate(12.423828125, 0)"><g id="SvgjsG1150" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1152" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1153">84</tspan><title>84</title></text><text id="SvgjsText1155" font-family="Helvetica, Arial, sans-serif" x="20" y="77.753866563797" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1156">77</tspan><title>77</title></text><text id="SvgjsText1158" font-family="Helvetica, Arial, sans-serif" x="20" y="124.00773312759401" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1159">70</tspan><title>70</title></text><text id="SvgjsText1161" font-family="Helvetica, Arial, sans-serif" x="20" y="170.261599691391" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1162">63</tspan><title>63</title></text><text id="SvgjsText1164" font-family="Helvetica, Arial, sans-serif" x="20" y="216.51546625518802" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1165">56</tspan><title>56</title></text><text id="SvgjsText1167" font-family="Helvetica, Arial, sans-serif" x="20" y="262.769332818985" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1168">49</tspan><title>49</title></text></g></g><g id="SvgjsG1094" class="apexcharts-inner apexcharts-graphical" transform="translate(42.423828125, 30)"><defs id="SvgjsDefs1093"><clipPath id="gridRectMaskwzgsv7ahk"><rect id="SvgjsRect1097" width="521.2220048904419" height="247.269332818985" x="-5" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskwzgsv7ahk"></clipPath><clipPath id="nonForecastMaskwzgsv7ahk"></clipPath><clipPath id="gridRectMarkerMaskwzgsv7ahk"><rect id="SvgjsRect1098" width="518.2220048904419" height="235.269332818985" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-grid"><g id="SvgjsG1111" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1115" x1="0" y1="46.253866563797" x2="514.2220048904419" y2="46.253866563797" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1116" x1="0" y1="92.507733127594" x2="514.2220048904419" y2="92.507733127594" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1117" x1="0" y1="138.76159969139098" x2="514.2220048904419" y2="138.76159969139098" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1118" x1="0" y1="185.015466255188" x2="514.2220048904419" y2="185.015466255188" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1112" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1121" x1="0" y1="231.269332818985" x2="514.2220048904419" y2="231.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1120" x1="0" y1="1" x2="0" y2="231.269332818985" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1113" class="apexcharts-grid-borders"><line id="SvgjsLine1114" x1="0" y1="0" x2="514.2220048904419" y2="0" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1119" x1="0" y1="231.269332818985" x2="514.2220048904419" y2="231.269332818985" stroke="#f1f1f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1099" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1100" class="apexcharts-series" zIndex="0" seriesName="Incomplete" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1103" d="M 0 231.269332818985 L 0 92.50773312759395C14.283944580290052, 92.50773312759395, 57.1357783211602, 92.50773312759395, 85.70366748174031, 92.50773312759395S142.8394458029005, 26.43078089359824, 171.40733496348062, 26.43078089359824S228.54311328464084, 26.43078089359824, 257.11100244522095, 26.43078089359824S314.2467807663811, 59.469257010596095, 342.81466992696124, 59.469257010596095S399.95044824812146, 59.469257010596095, 428.5183374087016, 59.469257010596095S499.93806031015185, 59.469257010596095, 514.2220048904419, 59.469257010596095 L 514.2220048904419 231.269332818985 L 0 231.269332818985M 0 92.50773312759395z" fill="rgba(233,243,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwzgsv7ahk)" pathTo="M 0 231.269332818985 L 0 92.50773312759395C14.283944580290052, 92.50773312759395, 57.1357783211602, 92.50773312759395, 85.70366748174031, 92.50773312759395S142.8394458029005, 26.43078089359824, 171.40733496348062, 26.43078089359824S228.54311328464084, 26.43078089359824, 257.11100244522095, 26.43078089359824S314.2467807663811, 59.469257010596095, 342.81466992696124, 59.469257010596095S399.95044824812146, 59.469257010596095, 428.5183374087016, 59.469257010596095S499.93806031015185, 59.469257010596095, 514.2220048904419, 59.469257010596095 L 514.2220048904419 231.269332818985 L 0 231.269332818985M 0 92.50773312759395z" pathFrom="M -1 555.0463987655639 L -1 555.0463987655639 L 85.70366748174031 555.0463987655639 L 171.40733496348062 555.0463987655639 L 257.11100244522095 555.0463987655639 L 342.81466992696124 555.0463987655639 L 428.5183374087016 555.0463987655639 L 514.2220048904419 555.0463987655639"></path><path id="SvgjsPath1104" d="M 0 92.50773312759395C14.283944580290052, 92.50773312759395, 57.1357783211602, 92.50773312759395, 85.70366748174031, 92.50773312759395S142.8394458029005, 26.43078089359824, 171.40733496348062, 26.43078089359824S228.54311328464084, 26.43078089359824, 257.11100244522095, 26.43078089359824S314.2467807663811, 59.469257010596095, 342.81466992696124, 59.469257010596095S399.95044824812146, 59.469257010596095, 428.5183374087016, 59.469257010596095S499.93806031015185, 59.469257010596095, 514.2220048904419, 59.469257010596095" fill="none" fill-opacity="1" stroke="#1b84ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwzgsv7ahk)" pathTo="M 0 92.50773312759395C14.283944580290052, 92.50773312759395, 57.1357783211602, 92.50773312759395, 85.70366748174031, 92.50773312759395S142.8394458029005, 26.43078089359824, 171.40733496348062, 26.43078089359824S228.54311328464084, 26.43078089359824, 257.11100244522095, 26.43078089359824S314.2467807663811, 59.469257010596095, 342.81466992696124, 59.469257010596095S399.95044824812146, 59.469257010596095, 428.5183374087016, 59.469257010596095S499.93806031015185, 59.469257010596095, 514.2220048904419, 59.469257010596095" pathFrom="M -1 555.0463987655639 L -1 555.0463987655639 L 85.70366748174031 555.0463987655639 L 171.40733496348062 555.0463987655639 L 257.11100244522095 555.0463987655639 L 342.81466992696124 555.0463987655639 L 428.5183374087016 555.0463987655639 L 514.2220048904419 555.0463987655639" fill-rule="evenodd"></path><g id="SvgjsG1101" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1172" r="0" cx="0" cy="0" class="apexcharts-marker wbgtgwygj no-pointer-events" stroke="#1b84ff" fill="#e9f3ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1105" class="apexcharts-series" zIndex="1" seriesName="Complete" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1108" d="M 0 231.269332818985 L 0 191.62316147858752C14.283944580290052, 191.62316147858752, 57.1357783211602, 191.62316147858752, 85.70366748174031, 191.62316147858752S142.8394458029005, 158.58468536158966, 171.40733496348062, 158.58468536158966S228.54311328464084, 158.58468536158966, 257.11100244522095, 158.58468536158966S314.2467807663811, 191.62316147858752, 342.81466992696124, 191.62316147858752S399.95044824812146, 191.62316147858752, 428.5183374087016, 191.62316147858752S501.78612704053165, 163.37867452693897, 514.2220048904419, 158.58468536158966 L 514.2220048904419 231.269332818985 L 0 231.269332818985M 0 191.62316147858752z" fill="rgba(223,255,234,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskwzgsv7ahk)" pathTo="M 0 231.269332818985 L 0 191.62316147858752C14.283944580290052, 191.62316147858752, 57.1357783211602, 191.62316147858752, 85.70366748174031, 191.62316147858752S142.8394458029005, 158.58468536158966, 171.40733496348062, 158.58468536158966S228.54311328464084, 158.58468536158966, 257.11100244522095, 158.58468536158966S314.2467807663811, 191.62316147858752, 342.81466992696124, 191.62316147858752S399.95044824812146, 191.62316147858752, 428.5183374087016, 191.62316147858752S501.78612704053165, 163.37867452693897, 514.2220048904419, 158.58468536158966 L 514.2220048904419 231.269332818985 L 0 231.269332818985M 0 191.62316147858752z" pathFrom="M -1 555.0463987655639 L -1 555.0463987655639 L 85.70366748174031 555.0463987655639 L 171.40733496348062 555.0463987655639 L 257.11100244522095 555.0463987655639 L 342.81466992696124 555.0463987655639 L 428.5183374087016 555.0463987655639 L 514.2220048904419 555.0463987655639"></path><path id="SvgjsPath1109" d="M 0 191.62316147858752C14.283944580290052, 191.62316147858752, 57.1357783211602, 191.62316147858752, 85.70366748174031, 191.62316147858752S142.8394458029005, 158.58468536158966, 171.40733496348062, 158.58468536158966S228.54311328464084, 158.58468536158966, 257.11100244522095, 158.58468536158966S314.2467807663811, 191.62316147858752, 342.81466992696124, 191.62316147858752S399.95044824812146, 191.62316147858752, 428.5183374087016, 191.62316147858752S501.78612704053165, 163.37867452693897, 514.2220048904419, 158.58468536158966" fill="none" fill-opacity="1" stroke="#17c653" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskwzgsv7ahk)" pathTo="M 0 191.62316147858752C14.283944580290052, 191.62316147858752, 57.1357783211602, 191.62316147858752, 85.70366748174031, 191.62316147858752S142.8394458029005, 158.58468536158966, 171.40733496348062, 158.58468536158966S228.54311328464084, 158.58468536158966, 257.11100244522095, 158.58468536158966S314.2467807663811, 191.62316147858752, 342.81466992696124, 191.62316147858752S399.95044824812146, 191.62316147858752, 428.5183374087016, 191.62316147858752S501.78612704053165, 163.37867452693897, 514.2220048904419, 158.58468536158966" pathFrom="M -1 555.0463987655639 L -1 555.0463987655639 L 85.70366748174031 555.0463987655639 L 171.40733496348062 555.0463987655639 L 257.11100244522095 555.0463987655639 L 342.81466992696124 555.0463987655639 L 428.5183374087016 555.0463987655639 L 514.2220048904419 555.0463987655639" fill-rule="evenodd"></path><g id="SvgjsG1106" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1173" r="0" cx="0" cy="0" class="apexcharts-marker w3af989tb no-pointer-events" stroke="#17c653" fill="#dfffea" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1102" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1107" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1123" x1="0" y1="0" x2="0" y2="231.269332818985" stroke="#1b84ff" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="231.269332818985" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1124" x1="0" y1="0" x2="514.2220048904419" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1125" x1="0" y1="0" x2="514.2220048904419" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1126" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1127" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1129" font-family="Helvetica, Arial, sans-serif" x="0" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1130">Feb</tspan><title>Feb</title></text><text id="SvgjsText1132" font-family="Helvetica, Arial, sans-serif" x="85.70366748174033" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1133">Mar</tspan><title>Mar</title></text><text id="SvgjsText1135" font-family="Helvetica, Arial, sans-serif" x="171.40733496348062" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1136">Apr</tspan><title>Apr</title></text><text id="SvgjsText1138" font-family="Helvetica, Arial, sans-serif" x="257.1110024452209" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1139">May</tspan><title>May</title></text><text id="SvgjsText1141" font-family="Helvetica, Arial, sans-serif" x="342.8146699269612" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1142">Jun</tspan><title>Jun</title></text><text id="SvgjsText1144" font-family="Helvetica, Arial, sans-serif" x="428.5183374087015" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1145">Jul</tspan><title>Jul</title></text><text id="SvgjsText1147" font-family="Helvetica, Arial, sans-serif" x="514.2220048904419" y="260.269332818985" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1148">Aug</tspan><title>Aug</title></text></g></g><g id="SvgjsG1169" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1170" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1171" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1174" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1175" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(233, 243, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(223, 255, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Graph-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Card-->
											<div class="card card-flush h-lg-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">What's on the road?</h3>
														<div class="fs-6 text-gray-500">Total 482 participants</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Select-->
														<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible" data-select2-id="select2-data-12-ce6r" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option value="1" selected="selected" data-select2-id="select2-data-14-83g8">Options</option>
															<option value="2">Option 1</option>
															<option value="3">Option 2</option>
															<option value="4">Option 3</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-13-w199" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-80-container" aria-controls="select2-status-80-container"><span class="select2-selection__rendered" id="select2-status-80-container" role="textbox" aria-readonly="true" title="Options">Options</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														<!--end::Select-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body p-9 pt-4">
													<!--begin::Dates-->
													<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2" role="tablist">
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Su</span>
																<span class="fs-6 fw-bold">22</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1" aria-selected="true" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Mo</span>
																<span class="fs-6 fw-bold">23</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Tu</span>
																<span class="fs-6 fw-bold">24</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">We</span>
																<span class="fs-6 fw-bold">25</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Th</span>
																<span class="fs-6 fw-bold">26</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Fr</span>
																<span class="fs-6 fw-bold">27</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Sa</span>
																<span class="fs-6 fw-bold">28</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Su</span>
																<span class="fs-6 fw-bold">29</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Mo</span>
																<span class="fs-6 fw-bold">30</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9" aria-selected="false" tabindex="-1" role="tab">
																<span class="opacity-50 fs-7 fw-semibold">Tu</span>
																<span class="fs-6 fw-bold">31</span>
															</a>
														</li>
														<!--end::Date-->
													</ul>
													<!--end::Dates-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Day-->
														<div id="kt_schedule_day_0" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_1" class="tab-pane fade show active" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_2" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_3" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_4" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_5" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_6" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_7" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_8" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_9" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-500 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-500">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Card-->
											<div class="card card-flush h-lg-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">Latest Files</h3>
														<div class="fs-6 text-gray-500">Total 382 fiels, 2,6GB space usage</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body p-9 pt-3">
													<!--begin::Files-->
													<div class="d-flex flex-column mb-9">
														<!--begin::File-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Icon-->
															<div class="symbol symbol-30px me-5">
																<img alt="Icon" src="assets/media/svg/files/pdf.svg">
															</div>
															<!--end::Icon-->
															<!--begin::Details-->
															<div class="fw-semibold">
																<a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Project tech requirements</a>
																<div class="text-gray-500">2 days ago 
																<a href="#">Karina Clark</a></div>
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-element-plus fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</button>
															<!--begin::Menu 1-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2a60">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<div class="px-7 py-5">
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div>
																			<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2a60" data-allow-clear="true" data-select2-id="select2-data-15-fpj0" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="2">In Process</option>
																				<option value="2">Rejected</option>
																			</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-pgu5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-91a0-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-91a0-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																		</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Member Type:</label>
																		<!--end::Label-->
																		<!--begin::Options-->
																		<div class="d-flex">
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" value="1">
																				<span class="form-check-label">Author</span>
																			</label>
																			<!--end::Options-->
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="2" checked="checked">
																				<span class="form-check-label">Customer</span>
																			</label>
																			<!--end::Options-->
																		</div>
																		<!--end::Options-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Notifications:</label>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																			<label class="form-check-label">Enabled</label>
																		</div>
																		<!--end::Switch-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Form-->
															</div>
															<!--end::Menu 1-->
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Icon-->
															<div class="symbol symbol-30px me-5">
																<img alt="Icon" src="assets/media/svg/files/doc.svg">
															</div>
															<!--end::Icon-->
															<!--begin::Details-->
															<div class="fw-semibold">
																<a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Create FureStibe branding proposal</a>
																<div class="text-gray-500">Due in 1 day 
																<a href="#">Marcus Blake</a></div>
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-element-plus fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</button>
															<!--begin::Menu 1-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2a68">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<div class="px-7 py-5">
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div>
																			<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2a68" data-allow-clear="true" data-select2-id="select2-data-17-tnv2" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="2">In Process</option>
																				<option value="2">Rejected</option>
																			</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-18-jnma" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-i6bp-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-i6bp-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																		</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Member Type:</label>
																		<!--end::Label-->
																		<!--begin::Options-->
																		<div class="d-flex">
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" value="1">
																				<span class="form-check-label">Author</span>
																			</label>
																			<!--end::Options-->
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="2" checked="checked">
																				<span class="form-check-label">Customer</span>
																			</label>
																			<!--end::Options-->
																		</div>
																		<!--end::Options-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Notifications:</label>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																			<label class="form-check-label">Enabled</label>
																		</div>
																		<!--end::Switch-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Form-->
															</div>
															<!--end::Menu 1-->
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex align-items-center mb-5">
															<!--begin::Icon-->
															<div class="symbol symbol-30px me-5">
																<img alt="Icon" src="assets/media/svg/files/css.svg">
															</div>
															<!--end::Icon-->
															<!--begin::Details-->
															<div class="fw-semibold">
																<a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Completed Project Stylings</a>
																<div class="text-gray-500">Due in 1 day 
																<a href="#">Terry Barry</a></div>
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-element-plus fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</button>
															<!--begin::Menu 1-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2a6f">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<div class="px-7 py-5">
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div>
																			<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2a6f" data-allow-clear="true" data-select2-id="select2-data-19-1inh" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="2">In Process</option>
																				<option value="2">Rejected</option>
																			</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-lu2n" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-kgz1-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-kgz1-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																		</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Member Type:</label>
																		<!--end::Label-->
																		<!--begin::Options-->
																		<div class="d-flex">
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" value="1">
																				<span class="form-check-label">Author</span>
																			</label>
																			<!--end::Options-->
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="2" checked="checked">
																				<span class="form-check-label">Customer</span>
																			</label>
																			<!--end::Options-->
																		</div>
																		<!--end::Options-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Notifications:</label>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																			<label class="form-check-label">Enabled</label>
																		</div>
																		<!--end::Switch-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Form-->
															</div>
															<!--end::Menu 1-->
															<!--end::Menu-->
														</div>
														<!--end::File-->
														<!--begin::File-->
														<div class="d-flex align-items-center">
															<!--begin::Icon-->
															<div class="symbol symbol-30px me-5">
																<img alt="Icon" src="assets/media/svg/files/ai.svg">
															</div>
															<!--end::Icon-->
															<!--begin::Details-->
															<div class="fw-semibold">
																<a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Create Project Wireframes</a>
																<div class="text-gray-500">Due in 3 days 
																<a href="#">Roth Bloom</a></div>
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-element-plus fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</button>
															<!--begin::Menu 1-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2a77">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<div class="px-7 py-5">
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div>
																			<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2a77" data-allow-clear="true" data-select2-id="select2-data-21-i826" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																				<option></option>
																				<option value="1">Approved</option>
																				<option value="2">Pending</option>
																				<option value="2">In Process</option>
																				<option value="2">Rejected</option>
																			</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-ses4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-qjv6-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-qjv6-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																		</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Member Type:</label>
																		<!--end::Label-->
																		<!--begin::Options-->
																		<div class="d-flex">
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" value="1">
																				<span class="form-check-label">Author</span>
																			</label>
																			<!--end::Options-->
																			<!--begin::Options-->
																			<label class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="2" checked="checked">
																				<span class="form-check-label">Customer</span>
																			</label>
																			<!--end::Options-->
																		</div>
																		<!--end::Options-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-10">
																		<!--begin::Label-->
																		<label class="form-label fw-semibold">Notifications:</label>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																			<label class="form-check-label">Enabled</label>
																		</div>
																		<!--end::Switch-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Form-->
															</div>
															<!--end::Menu 1-->
															<!--end::Menu-->
														</div>
														<!--end::File-->
													</div>
													<!--end::Files-->
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
														<!--begin::Icon-->
														<i class="ki-duotone ki-svg/files/upload.svg fs-2tx text-primary me-4"></i>
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-semibold">
																<h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
																<div class="fs-6 text-gray-700">Drag &amp; Drop or choose files from computer</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
												</div>
												<!--end::Card body -->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Card-->
											<div class="card card-flush h-lg-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">New Contibutors</h3>
														<div class="fs-6 text-gray-500">From total 482 Participants</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card toolbar-->
												<!--begin::Card body-->
												<div class="card-body d-flex flex-column p-9 pt-3 mb-9">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Avatar-->
														<div class="me-5 position-relative">
															<!--begin::Image-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-6.jpg">
															</div>
															<!--end::Image-->
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith</a>
															<div class="text-gray-500">8 Pending &amp; 97 Completed Tasks</div>
														</div>
														<!--end::Details-->
														<!--begin::Badge-->
														<div class="badge badge-light ms-auto">5</div>
														<!--end::Badge-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Avatar-->
														<div class="me-5 position-relative">
															<!--begin::Image-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
															</div>
															<!--end::Image-->
															<!--begin::Online-->
															<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
															<!--end::Online-->
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy</a>
															<div class="text-gray-500">5 Pending &amp; 84 Completed</div>
														</div>
														<!--end::Details-->
														<!--begin::Badge-->
														<div class="badge badge-light ms-auto">8</div>
														<!--end::Badge-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Avatar-->
														<div class="me-5 position-relative">
															<!--begin::Image-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg">
															</div>
															<!--end::Image-->
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith</a>
															<div class="text-gray-500">9 Pending &amp; 103 Completed</div>
														</div>
														<!--end::Details-->
														<!--begin::Badge-->
														<div class="badge badge-light ms-auto">9</div>
														<!--end::Badge-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Avatar-->
														<div class="me-5 position-relative">
															<!--begin::Image-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-5.jpg">
															</div>
															<!--end::Image-->
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean</a>
															<div class="text-gray-500">3 Pending &amp; 55 Completed</div>
														</div>
														<!--end::Details-->
														<!--begin::Badge-->
														<div class="badge badge-light ms-auto">3</div>
														<!--end::Badge-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="me-5 position-relative">
															<!--begin::Image-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg">
															</div>
															<!--end::Image-->
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox</a>
															<div class="text-gray-500">4 Pending &amp; 115 Completed</div>
														</div>
														<!--end::Details-->
														<!--begin::Badge-->
														<div class="badge badge-light ms-auto">4</div>
														<!--end::Badge-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Tasks-->
											<div class="card card-flush h-lg-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">My Tasks</h3>
														<div class="fs-6 text-gray-500">Total 25 tasks in backlog</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body d-flex flex-column mb-9 p-9 pt-3">
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid ms-6 me-4">
															<input class="form-check-input" type="checkbox" value="">
														</div>
														<!--end::Checkbox-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
															<!--begin::Info-->
															<div class="text-gray-500">Due in 1 day 
															<a href="#">Karina Clark</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-element-plus fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2b43">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2b43" data-allow-clear="true" data-select2-id="select2-data-23-4gf4" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-24-joi8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-fge4-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-fge4-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1">
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked">
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid ms-6 me-4">
															<input class="form-check-input" type="checkbox" value="">
														</div>
														<!--end::Checkbox-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
															<!--begin::Info-->
															<div class="text-gray-500">Due in 3 days 
															<a href="#">Rober Doe</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-element-plus fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2b4a">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2b4a" data-allow-clear="true" data-select2-id="select2-data-25-fdxq" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-skyc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-oy9w-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-oy9w-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1">
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked">
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid ms-6 me-4">
															<input class="form-check-input" type="checkbox" value="">
														</div>
														<!--end::Checkbox-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
															<!--begin::Info-->
															<div class="text-gray-500">Due in 1 week 
															<a href="#">Neil Owen</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-element-plus fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2b50">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2b50" data-allow-clear="true" data-select2-id="select2-data-27-npyv" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-28-y205" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-geuj-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-geuj-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1">
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked">
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid ms-6 me-4">
															<input class="form-check-input" type="checkbox" value="">
														</div>
														<!--end::Checkbox-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Dashgboard UI &amp; UX for Leafr CRM</a>
															<!--begin::Info-->
															<div class="text-gray-500">Due in 1 week 
															<a href="#">Olivia Wild</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-element-plus fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2b58">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2b58" data-allow-clear="true" data-select2-id="select2-data-29-08dy" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-30-z6zr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-jrxr-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-jrxr-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1">
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked">
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Checkbox-->
														<div class="form-check form-check-custom form-check-solid ms-6 me-4">
															<input class="form-check-input" type="checkbox" value="">
														</div>
														<!--end::Checkbox-->
														<!--begin::Details-->
														<div class="fw-semibold">
															<a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
															<!--begin::Info-->
															<div class="text-gray-500">Due in 2 weeks 
															<a href="#">Sean Bean</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="ki-duotone ki-element-plus fs-3">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</button>
														<!--begin::Menu 1-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ab2b5e">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<div class="px-7 py-5">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div>
																		<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ab2b5e" data-allow-clear="true" data-select2-id="select2-data-31-18qn" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="2">In Process</option>
																			<option value="2">Rejected</option>
																		</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-32-9u1k" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-15uo-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-15uo-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Member Type:</label>
																	<!--end::Label-->
																	<!--begin::Options-->
																	<div class="d-flex">
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="checkbox" value="1">
																			<span class="form-check-label">Author</span>
																		</label>
																		<!--end::Options-->
																		<!--begin::Options-->
																		<label class="form-check form-check-sm form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="2" checked="checked">
																			<span class="form-check-label">Customer</span>
																		</label>
																		<!--end::Options-->
																	</div>
																	<!--end::Options-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label fw-semibold">Notifications:</label>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																		<label class="form-check-label">Enabled</label>
																	</div>
																	<!--end::Switch-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Form-->
														</div>
														<!--end::Menu 1-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Tasks-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Table-->
									<div class="card card-flush mt-6 mt-xl-9">
										<!--begin::Card header-->
										<div class="card-header mt-5">
											<!--begin::Card title-->
											<div class="card-title flex-column">
												<h3 class="fw-bold mb-1">Project Spendings</h3>
												<div class="fs-6 text-gray-500">Total $260,300 sepnt so far</div>
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar my-1">
												<!--begin::Select-->
												<div class="me-6 my-1">
													<select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible" data-select2-id="select2-data-kt_filter_year" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
														<option value="All" selected="selected" data-select2-id="select2-data-34-9boo">All time</option>
														<option value="thisyear">This year</option>
														<option value="thismonth">This month</option>
														<option value="lastmonth">Last month</option>
														<option value="last90days">Last 90 days</option>
													</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-33-ku5u" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_filter_year-container" aria-controls="select2-kt_filter_year-container"><span class="select2-selection__rendered" id="select2-kt_filter_year-container" role="textbox" aria-readonly="true" title="All time">All time</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												<!--end::Select-->
												<!--begin::Select-->
												<div class="me-4 my-1">
													<select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible" data-select2-id="select2-data-kt_filter_orders" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
														<option value="All" selected="selected" data-select2-id="select2-data-36-3xdz">All Orders</option>
														<option value="Approved">Approved</option>
														<option value="Declined">Declined</option>
														<option value="In Progress">In Progress</option>
														<option value="In Transit">In Transit</option>
													</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-35-oog6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_filter_orders-container" aria-controls="select2-kt_filter_orders-container"><span class="select2-selection__rendered" id="select2-kt_filter_orders-container" role="textbox" aria-readonly="true" title="All Orders">All Orders</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												<!--end::Select-->
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order">
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<div id="kt_profile_overview_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
													<thead class="fs-7 text-gray-500 text-uppercase">
														<tr><th class="min-w-250px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Manager: activate to sort column ascending" style="width: 439.458px;">Manager</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 271.062px;">Date</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 165.583px;">Amount</th><th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 175.812px;">Status</th><th class="min-w-50px text-end sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 107.917px;">Details</th></tr>
													</thead>
													<tbody class="fs-6">
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
													<tr class="odd">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-6.jpg">
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
																		<div class="fw-semibold text-gray-500">smith@kpmg.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-12-20T00:00:00+05:30">Dec 20, 2024</td>
															<td>$516.00</td>
															<td>
																<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="even">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Online-->
																		<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																		<!--end::Online-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
																		<div class="fw-semibold text-gray-500">melody@altbox.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-05-05T00:00:00+05:30">May 05, 2024</td>
															<td>$908.00</td>
															<td>
																<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="odd">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-1.jpg">
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
																		<div class="fw-semibold text-gray-500">max@kt.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-10-25T00:00:00+05:30">Oct 25, 2024</td>
															<td>$901.00</td>
															<td>
																<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="even">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-5.jpg">
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
																		<div class="fw-semibold text-gray-500">sean@dellito.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-06-24T00:00:00+05:30">Jun 24, 2024</td>
															<td>$553.00</td>
															<td>
																<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="odd">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-25.jpg">
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
																		<div class="fw-semibold text-gray-500">brian@exchange.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-02-21T00:00:00+05:30">Feb 21, 2024</td>
															<td>$520.00</td>
															<td>
																<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="even">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Online-->
																		<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																		<!--end::Online-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
																		<div class="fw-semibold text-gray-500">mik@pex.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-03-10T00:00:00+05:30">Mar 10, 2024</td>
															<td>$801.00</td>
															<td>
																<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="odd">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-9.jpg">
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
																		<div class="fw-semibold text-gray-500">f.mit@kpmg.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-08-19T00:00:00+05:30">Aug 19, 2024</td>
															<td>$407.00</td>
															<td>
																<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="even">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Online-->
																		<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																		<!--end::Online-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
																		<div class="fw-semibold text-gray-500">olivia@corpmail.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-09-22T00:00:00+05:30">Sep 22, 2024</td>
															<td>$931.00</td>
															<td>
																<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="odd">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Online-->
																		<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																		<!--end::Online-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
																		<div class="fw-semibold text-gray-500">owen.neil@gmail.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-08-19T00:00:00+05:30">Aug 19, 2024</td>
															<td>$626.00</td>
															<td>
																<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr><tr class="even">
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="Pic" src="assets/media/avatars/300-23.jpg">
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
																		<div class="fw-semibold text-gray-500">dam@consilting.com</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td data-order="2024-02-21T00:00:00+05:30">Feb 21, 2024</td>
															<td>$449.00</td>
															<td>
																<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
															</td>
															<td class="text-end">
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr></tbody>
												</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_profile_overview_table_length"><label><select name="kt_profile_overview_table_length" aria-controls="kt_profile_overview_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_profile_overview_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_profile_overview_table_previous"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_profile_overview_table_next"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline timeline-border-dashed">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon me-4">
									<i class="ki-duotone ki-flag fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-500">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-500">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-500">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task 
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with 
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-pencil fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-sms fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case 
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-pencil fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon">
									<i class="ki-duotone ki-basket fs-2 text-gray-500">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
									</i>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order 
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities 
					<i class="ki-duotone ki-arrow-right fs-3 text-primary">
						<span class="path1"></span>
						<span class="path2"></span>
					</i></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-0">
							<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-dots-square fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
									<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
							<i class="ki-duotone ki-cross-square fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here: 
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-duotone ki-paper-clip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-duotone ki-cloud-add fs-3">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
			<!--begin::Messenger-->
			<div class="card card-flush w-100 rounded-0">
				<!--begin::Card header-->
				<div class="card-header">
					<!--begin::Title-->
					<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
							<i class="ki-duotone ki-cross fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body hover-scroll-overlay-y h-400px pt-5">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
								<span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 350</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
								<span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
								<span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 150</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
								<span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
								<span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 720</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 430</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Total</span>
						<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Sub total</span>
						<span class="text-primary fw-bolder fs-5">$ 246.35</span>
					</div>
					<!--end::Item-->
					<!--end::Action-->
					<div class="d-flex justify-content-end mt-9">
						<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
					</div>
					<!--end::Action-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-semibold fs-5">If you need more info, please check 
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
													<div class="fw-semibold opacity-75">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/ 
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/ 
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise 
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/ 
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
													<div class="fw-semibold opacity-75">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-success">Contact Us</a>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_custom">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for corporations</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
								<!--begin::Indicator label-->
								<span class="indicator-label">Upgrade Plan</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait... 
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create App</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Aside-->
							<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
								<!--begin::Nav-->
								<div class="stepper-nav ps-lg-10">
									<!--begin::Step 1-->
									<div class="stepper-item current" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="ki-duotone ki-check stepper-check fs-2"></i>
												<span class="stepper-number">1</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Details</h3>
												<div class="stepper-desc">Name your App</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="ki-duotone ki-check stepper-check fs-2"></i>
												<span class="stepper-number">2</span>
											</div>
											<!--begin::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Frameworks</h3>
												<div class="stepper-desc">Define your app framework</div>
											</div>
											<!--begin::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="ki-duotone ki-check stepper-check fs-2"></i>
												<span class="stepper-number">3</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Database</h3>
												<div class="stepper-desc">Select the app database type</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="ki-duotone ki-check stepper-check fs-2"></i>
												<span class="stepper-number">4</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Billing</h3>
												<div class="stepper-desc">Provide payment details</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="ki-duotone ki-check stepper-check fs-2"></i>
												<span class="stepper-number">5</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Completed</h3>
												<div class="stepper-desc">Review and Submit</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Step 5-->
								</div>
								<!--end::Nav-->
							</div>
							<!--begin::Aside-->
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
													<span class="required">App Name</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Category</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin:Options-->
												<div class="fv-row">
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-compass fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-element-11 fs-1 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-timer fs-1 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
												</div>
												<!--end:Options-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Framework</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-html fs-2x text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-react fs-2x text-success">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-angular fs-2x text-danger">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="ki-duotone ki-vue fs-2x text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="required fs-5 fw-semibold mb-2">Database Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Database Engine</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-note text-success fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-google text-danger fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-microsoft text-warning fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
													<span class="required">Name On Card</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
													<!--end::Input-->
													<!--begin::Card logos-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-5">
														<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
													</div>
													<!--end::Card logos-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Col-->
												<div class="col-md-8 fv-row">
													<!--begin::Label-->
													<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
																<option></option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
																<option></option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
																<option value="2026">2026</option>
																<option value="2027">2027</option>
																<option value="2028">2028</option>
																<option value="2029">2029</option>
																<option value="2030">2030</option>
																<option value="2031">2031</option>
																<option value="2032">2032</option>
																<option value="2033">2033</option>
																<option value="2034">2034</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
														<span class="required">CVV</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
													<!--begin::Input wrapper-->
													<div class="position-relative">
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
														<!--end::Input-->
														<!--begin::CVV icon-->
														<div class="position-absolute translate-middle-y top-50 end-0 me-3">
															<i class="ki-duotone ki-credit-cart fs-2hx">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::CVV icon-->
													</div>
													<!--end::Input wrapper-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													<span class="form-check-label fw-semibold text-muted">Save Card</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div data-kt-stepper-element="content">
										<div class="w-100 text-center">
											<!--begin::Heading-->
											<h1 class="fw-bold text-gray-900 mb-3">Release!</h1>
											<!--end::Heading-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
											<!--end::Description-->
											<!--begin::Illustration-->
											<div class="text-center px-4 py-15">
												<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<i class="ki-duotone ki-arrow-left fs-3 me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit 
												<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></span>
												<span class="indicator-progress">Please wait... 
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue 
											<i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></button>
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - New Target-->
		<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_new_target_form" class="form" action="#">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<!--begin::Title-->
								<h1 class="mb-3">Set First Target</h1>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-5">If you need more info, please check 
								<a href="#" class="fw-bold link-primary">Project Guidelines</a>.</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Target Title</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">Assign</label>
									<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
										<option value="">Select user...</option>
										<option value="1">Karina Clark</option>
										<option value="2">Robert Doe</option>
										<option value="3">Niel Owen</option>
										<option value="4">Olivia Wild</option>
										<option value="5">Sean Bean</option>
									</select>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">Due Date</label>
									<!--begin::Input-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
										</i>
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8">
								<label class="fs-6 fw-semibold mb-2">Target Details</label>
								<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Tags</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-stack mb-8">
								<!--begin::Label-->
								<div class="me-5">
									<label class="fs-6 fw-semibold">Adding Users by Team Members</label>
									<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="1" checked="checked" />
									<span class="form-check-label fw-semibold text-muted">Allowed</span>
								</label>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-15 fv-row">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack">
									<!--begin::Label-->
									<div class="fw-semibold me-5">
										<label class="fs-6">Notifications</label>
										<div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
									</div>
									<!--end::Label-->
									<!--begin::Checkboxes-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-10">
											<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
											<span class="form-check-label fw-semibold">Email</span>
										</label>
										<!--end::Checkbox-->
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid">
											<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
											<span class="form-check-label fw-semibold">Phone</span>
										</label>
										<!--end::Checkbox-->
									</div>
									<!--end::Checkboxes-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait... 
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end:Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - New Target-->
		<!--begin::Modal - View Users-->
		<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Browse Users</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out our 
							<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Users-->
						<div class="mb-15">
							<!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">melody@altbox.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$50,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">max@kt.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$75,900</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">sean@dellito.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$10,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox 
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">brian@exchange.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$20,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">mik@pex.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$9,300</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$15,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild 
											<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$45,800</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">dam@consilting.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$90,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">emma@intenso.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$5,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$70,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">robert@benko.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-gray-900">$45,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex justify-content-between">
							<!--begin::Label-->
							<div class="fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - View Users-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out 
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/projects/project/project.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="assets/js/custom/utilities/modals/new-target.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>