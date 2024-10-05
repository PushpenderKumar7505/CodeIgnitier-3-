<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container  d-flex flex-stack">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<!--begin::Title-->
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Agent List</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">
										<a href="<?=base_url('agentDetails')?>" class="text-muted text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-gray-500 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">Agents</li>
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
						<div id="kt_app_content_container" class="app-container ">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Agents" />
										</div>
										<!--end::Search-->
									</div>
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
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
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
										<thead>
											<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
												<th class="min-w-100px">Agent id</th>
												<th class="min-w-100px">Agent name</th>
												<th class="min-w-100px">Phone no</th>
												<th class="min-w-100px">Email</th>
												<th class="min-w-100px">Wallet amount</th>
												<th class="min-w-100px">Status</th>
												<th class="min-w-100px">Created</th>
												<th class="min-w-100px">Last active time</th>
												<th class="min-w-100px">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($record as $user): ?>
											<tr>
												<td><?php echo $user["user_id"]; ?></td>
												<td><?php echo $user["name"]; ?></td>
												<td><?php echo $user["phone"]; ?></td>
												<td><?php echo $user["email"]; ?></td>
												<td><?php echo $user["wallet_amount"]; ?></td>
												<td><?php echo $user["status"]; ?></td>
												<td><?php echo $user["created"]; ?></td>
												<td><?php echo $user["modified_dt"]; ?></td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="<?php echo base_url("userdetails/" ).$user["user_id"]; ?>" class="menu-link px-3">View</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="<?php echo base_url("deleteAgentdata/") . $user["user_id"]; ?>" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<!--end::Table-->
								</div>
							</div>
							<!--end::Card-->
							<!--end::Modals-->
						</div>
						<!--end::Content container-->
					</div>
					<!--end::Content-->

