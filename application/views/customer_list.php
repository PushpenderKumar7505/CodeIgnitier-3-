<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<!--begin::Title-->
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Customers List</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">
										<a href="" class="text-muted text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-gray-500 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">Customers</li>
									<!--end::Item-->
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->

						</div>
						<!--end::Toolbar container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Content-->
					<div id="kt_app_content" class="app-content flex-column-fluid">
						<!--begin::Content container-->
						<div id="kt_app_content_container" class="app-container container-xxl">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Customers" />
										</div>
										<!--end::Search-->
									</div>
									<!--begin::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
											<!--begin::Filter-->
											<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-filter fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>Filter</button>
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-4 text-gray-900 fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
											</div>
											<!--end::Menu 1-->
											<!--end::Filter-->
											<!--begin::Export-->
											<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
												<i class="ki-duotone ki-exit-up fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>Export</button>
											<!--end::Export-->
											<!--begin::Add customer-->

											<!--end::Add customer-->
										</div>
										<!--end::Toolbar-->
										<!--begin::Group actions-->
										<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
											<div class="fw-bold me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
											<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
										</div>
										<!--end::Group actions-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
										<thead>
											<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
												<th class="w-10px pe-2">
													<div class="form-check form-check-sm form-check-custom form-check-solid me-3">

													</div>
												</th>
												<th class="min-w-100px">Customer Id</th>
												<th class="min-w-100px">Created Date</th>
												<th class="min-w-100px">Customer Name</th>
												<th class="min-w-100px">Phone no</th>
												<th class="min-w-100px">Email</th>
												<th class="min-w-150px">Last Active Time</th>
												<th class="min-w-150px">Wallet Balance</th>
												<th class="min-w-100px">Status</th>
												<th class="text-end min-w-70px">Actions</th>
											</tr>
										</thead>
										<tbody class="fw-semibold text-gray-600">
											<tr class="odd">
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">

													</div>
												</td>
												<td>001</td>
												<td>12/11/2001</td>
												<td>
													Emma Smith
												</td>
												<td>
													7817837812
												</td>
												<td>
													<a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
												</td>
												<td>2024-08-15</td>
												<td>$150.00</td>
												<td>Active</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="<?php echo base_url(
                   "coustomer_view"
               ); ?>" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="even">
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">

													</div>
												</td>
												<td>
													002
												</td>
												<td>12/03/2000</td>

												<td>
													Melody Macy
												</td>
												<td>1726378313</td>
												<td>
													<a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
												</td>
												<td>01 Dec 2020, 10:12 am</td>
												<td>
													$200.00</td>

												<td>InActive</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="odd">
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">

													</div>
												</td>
												<td>003</td>
												<td>12/03/2002</td>
												<td>
													Max Smith
												</td>
												<td>
													2437847811
												</td>
												<td>max@kt.com</td>
												<td data-order="2020-11-12T14:01:00+05:30">12 Nov 2020, 2:01 pm</td>
												<td>$75.00</td>
												<td>Active</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="<?php echo base_url(
                   "coustomer_view"
               ); ?>" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="even">
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">

													</div>
												</td>
												<td>004</td>
												<td>12/03/2003</td>
												<td>
													Sean Bean
												</td>
												<td>
													465676767
												</td>
												<td>sean@dellito.com</td>
												<td>
													2024-08-14</td>
												<td>$120.00</td>
												<td>InActive</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="even">
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
													</div>
												</td>
												<td>005</td>
												<td>12/09/1987</td>
												<td>
													Mikaela Collins
												</td>
												<td>
													32676376474
												</td>
												<td>
													mik@pex.com</td>
												<td> 23 Sep 2020, 12:37 am</td>

												<td>$120.00</td>
												<td>Inactive</td>

												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											<tr class="even">
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
													</div>
												</td>
												<td>006</td>
												<td>12/09/1987</td>
												<td>
													Collins
												</td>
												<td>
													32676376474
												</td>
												<td>
													mik@pex.com</td>
												<td>23 Sep 2020, 12:37 am</td>
												<td>$120.00</td>
												<td>Inactive</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="odd">
												<td>007</td>
												<td>12/09/1984</td>
												<td>
													Francis Mitcham
												</td>
												<td>
													562456176

												</td>
												<td><a href="#" class="text-gray-600 text-hover-primary mb-1">
														f.mit@kpmg.com</a></td>

												<td data-order="2020-09-11T15:15:00+05:30">11 Sep 2020, 3:15 pm</td>
												<td>$50.00</td>
												<td>Active</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="even">
												<td>008</td>
												<td>12/09/1987</td>
												<td>
													Olivia Wild
												</td>
												<td>45345345345</td>
												<td>
													olivia@corpmail.com
												</td>
												<td data-order="2020-09-03T01:08:00+05:30">03 Sep 2020, 1:08 am</td>
												<td>$120.00</td>
												<td>InActive</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="odd">
												<td>009</td>
												<td>11/03/1573</td>
												<td>
													Neil Owen
												</td>
												<td>
													2454234222
												</td>
												<td>owen.neil@gmail.com</td>
												<td data-order="2020-09-01T16:58:00+05:30">01 Sep 2020, 4:58 pm</td>
												<td>$150.00</td>
												<td>InActive</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr class="even">
												<td>010</td>
												<td>13/12/1479</td>
												<td>
													Dan Wilson
												</td>
												<td>
													431245453
												</td>
												<td>dam@consilting.com</td>
												<td data-order="2020-08-18T15:34:00+05:30">18 Aug 2020, 3:34 pm</td>
												<td>$275.00</td>
												<td>Active</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="apps/customers/view.html" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
										</tbody>
									</table>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>

						</div>
						<!--end::Content container-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Content wrapper-->
			</div>
			<!--end:::Main-->
</body>
<!--end::Body-->

</html>