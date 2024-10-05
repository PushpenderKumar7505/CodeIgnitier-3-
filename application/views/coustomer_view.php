	
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container ">
			<!--begin::Layout-->
			<div class="d-flex flex-column flex-xl-row">
				<!--begin::Sidebar-->
				<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
					<!--begin::Card-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Card body-->
						<div class="card-body pt-15">
							<!--begin::Summary-->
							<div class="d-flex flex-center flex-column mb-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-100px symbol-circle mb-7">
									<img src="assets/media/avatars/300-1.jpg" alt="image">
								</div>
								<!--end::Avatar-->
								<!--begin::Name-->
								<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1"><?=$user->name?></a>
								<!--end::Name-->
								<!--begin::Position-->
								<div class="fs-5 fw-semibold text-muted mb-6"><?=$user->phone?></div>
								<!--end::Position-->
								<!--begin::Info-->
								<div class="d-flex flex-wrap flex-center">
									<!--begin::Stats-->
									<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
										<div class="fs-4 fw-bold text-gray-700">
											<span class="w-75px"><?=$user->deposit_amount?></span>
											
										</div>
										<div class="fw-semibold text-muted">Deposit</div>
									</div>
									<!--end::Stats-->
									<!--begin::Stats-->
									<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
										<div class="fs-4 fw-bold text-gray-700">
											<span class="w-50px"><?=$user->total_earning?></span>
											
										</div>
										<div class="fw-semibold text-muted">Total Earning</div>
									</div>
									<!--end::Stats-->
									<!--begin::Stats-->
									<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
										<div class="fs-4 fw-bold text-gray-700">
											<span class="w-50px"><?=$user->wallet_amount?></span>
											
										</div>
										<div class="fw-semibold text-muted">Wallet</div>
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Summary-->
							<!--begin::Details toggle-->
							<div class="d-flex flex-stack fs-4 py-3">
								<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
									<span class="ms-2 rotate-180">
										<i class="ki-duotone ki-down fs-3"></i>
									</span></div>
								<span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
									<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
								</span>
							</div>
							<!--end::Details toggle-->
							<div class="separator separator-dashed my-3"></div>
							<!--begin::Details content-->
							<div id="kt_customer_view_details" class="collapse show">
								<div class="py-5 fs-6">
									<!--begin::Badge-->
									<div class="badge badge-light-info d-inline">Premium user</div>
									<!--begin::Badge-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">User ID</div>
									<div class="text-gray-600"><?=$user->user_id?></div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Email</div>
									<div class="text-gray-600">
										<a href="#" class="text-gray-600 text-hover-primary"><?=$user->email?></a>
									</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Billing Address</div>
									<div class="text-gray-600"><?=$user->address?></div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Referal Code</div>
									<div class="text-gray-600"><?=$user->referral_code?></div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Referal By</div>
									<div class="text-gray-600"><?=$user->referred_by?></div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<!-- <div class="fw-bold mt-5">Tax ID</div>
									<div class="text-gray-600">TX-8674</div> -->
									<!--begin::Details item-->
								</div>
							</div>
							<!--end::Details content-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Connected Accounts-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Card header-->
						<div class="card-header border-0">
							<div class="card-title">
								<h3 class="fw-bold m-0">Connected Accounts</h3>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-2">
							<!--begin::Notice-->
							<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
								<!--begin::Icon-->
								<i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-semibold">
										<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
											<a href="#" class="me-1">privacy policy</a>and
											<a href="#">terms of use</a>.</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
							<!--begin::Items-->
							<div class="py-2">
								<!--begin::Item-->
								<?php if($user->login_type=='NORMAL') {?>
								<div class="d-flex flex-stack">
									<div class="d-flex">
										<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="">
										<div class="d-flex flex-column">
											<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Normal</a>
											<div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<!--begin::Switch-->
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked">
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
								</div>
								<?php }elseif($user->login_type=='GOOGLE'){ ?>
								<div class="d-flex flex-stack">
									<div class="d-flex">
										<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="">
										<div class="d-flex flex-column">
											<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
											<div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<!--begin::Switch-->
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked">
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
								</div>
								<?php }elseif($user->login_type=='FACEBOOK'){ ?>
								<div class="d-flex flex-stack">
									<div class="d-flex">
										<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="">
										<div class="d-flex flex-column">
											<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Facebook</a>
											<div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<!--begin::Switch-->
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked">
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
								</div>
								<?PHP }?>
								
								
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<!-- <div class="card-footer border-0 d-flex justify-content-center pt-0">
							<button class="btn btn-sm btn-light-primary">Save Changes</button>
						</div> -->
						<!--end::Card footer-->
					</div>
					<!--end::Connected Accounts-->
				</div>
				<!--end::Sidebar-->
				<!--begin::Content-->
				<div class="flex-lg-row-fluid ms-lg-15">
					<!--begin:::Tabs-->
					<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
						<!--begin:::Tab item-->
						<li class="nav-item" role="presentation">
							<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab" aria-selected="true" role="tab">Deposit History</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item" role="presentation">
							<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab" aria-selected="false" tabindex="-1" role="tab">Login History</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item" role="presentation">
							<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements" data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Statements</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
					
						<!--end:::Tab item-->
					</ul>
					<!--end:::Tabs-->
					<!--begin:::Tab content-->
					<div class="tab-content" id="myTabContent">
						<!--begin:::Tab pane-->
						<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Payment Records</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
								
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0 pb-5">
									<!--begin::Table-->
									<div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
										<div class="table-responsive">
											<table class="table align-middle table-row-dashed gy-5 dataTable no-footer" id="kt_table_customers_payment">
												<thead class="border-bottom border-gray-200 fs-7 fw-bold">
													<tr class="text-start text-muted text-uppercase gs-0">
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 30px;">Id</th>
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 50px;">Txn Id.</th>
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 100px;">Date</th>
			
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 78px;">Type </th>
														<!-- <th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 82.1875px;">Status</th> -->
														<th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 78.9271px;">Amount</th>
														<!-- <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 78px;">Wallet Amount </th> -->
							
														<th class="text-end min-w-100px pe-4 sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th>
													</tr>
												</thead>
												<tbody class="fs-6 fw-semibold text-gray-600">
<?php 
//PRINT_R($payment);EXIT;

foreach($payment as $record){
	
	?>
													<tr class="odd">
														<td>
															<a href="#" class="text-gray-600 text-hover-primary mb-1"><?=$record['id']?></a>
														</td>
														<td>
															<a href="#" class="text-gray-600 text-hover-primary mb-1"><?=$record['txn_id']?></a>
														</td>
														<td data-order="2020-12-14T20:43:00+05:30"><?=$record['txn_dt']?></td>
														<td>
															<span class="badge badge-light-success"><?=$record['txn_type']?></span>
														</td>
														<!-- <td>
															<span class="badge <?php if($record['txn_status']=='CREDIT'){
																echo 'badge-light-success';
															}else{
																echo "badge-light-danger";

															} ?>"><?=$record['txn_status']?></span>
														</td> -->
														<td><?=$record['txn_amt']?></td>
														
														<!-- <td>
															<span class="badge badge-light-success"><?=$record['wallet_amount']?></span>
														</td> -->
														<td class="pe-0 text-end">
															<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<!-- <div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">View</a>
																</div> -->
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">view</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<?php
													
											
											}
													?>
													
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<div class="row">
											<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
											<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
												<!-- <div class="dataTables_paginate paging_simple_numbers" id="kt_table_customers_payment_paginate">
													<ul class="pagination">
														<li class="paginate_button page-item previous disabled" id="kt_table_customers_payment_previous"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
														<li class="paginate_button page-item active"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
														<li class="paginate_button page-item "><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
														<li class="paginate_button page-item next" id="kt_table_customers_payment_next"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li>
													</ul>
												</div> -->
											</div>
										</div>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							
							<!--end::Card-->
							<!--begin::Card-->
							
							<!--end::Card-->
							<!--begin::Card-->
							
							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
						<!--begin:::Tab pane-->
						<div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Login</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body py-0">
									<!--begin::Table wrapper-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
										<thead class="border-bottom border-gray-200 fs-7 fw-bold">
													<tr class="text-start text-muted text-uppercase gs-0">
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_logs" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 100px;">phone</th>
														<th class="sorting" tabindex="0" aria-controls="kt_table_customers_logs" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 82.1875px;">Date</th>
														<th class="sorting" tabindex="0" aria-controls="kt_table_customers_logs" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 78.9271px;">Api Name</th>
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_logs" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 100px;">ip Address</th>
														
													</tr>
												</thead>
											<tbody>
												<?php foreach($login as $record){?>
												<tr>
													<td class="min-w-70px">
														<div class="badge badge-light-danger"><?=$record['phone']?></div>
													</td>
													<td><?=$record['create_dt']?></td>
													<td ><?=$record['api_name']?></td>
													<td><?=$record['ip_address']?></td>
												</tr>
												<?php } ?>
												
											</tbody>
										</table>
									</div>
									<!--end::Table wrapper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
						
							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
						<!--begin:::Tab pane-->
						<div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
							<!--begin::Earnings-->
							
							<!--end::Earnings-->
							<!--begin::Statements-->
							<div class="card mb-6 mb-xl-9">
								
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body pb-5">
								<div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
										<div class="table-responsive">
											<table class="table align-middle table-row-dashed gy-5 dataTable no-footer" id="kt_table_customers_payment1">
												<thead class="border-bottom border-gray-200 fs-7 fw-bold">
												<tr class="text-start text-muted text-uppercase gs-0">
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 50px;">Txn Id.</th>
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 100px;">Date</th>
			
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 78px;">Type </th>
														<th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 82.1875px;">Status</th>
														<th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 78.9271px;">Amount</th>
														<th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Invoice No.: activate to sort column ascending" style="width: 78px;">Wallet Amount </th>
							
														<th class="text-end min-w-100px pe-4 sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th>
													</tr>
												</thead>
												<tbody class="fs-6 fw-semibold text-gray-600">
<?php foreach($payment as $record){?>
	<tr class="odd">
														<td>
															<a href="#" class="text-gray-600 text-hover-primary mb-1"><?=$record['id']?></a>
														</td>
														<td data-order="2020-12-14T20:43:00+05:30"><?=$record['txn_dt']?></td>
														<td>
															<span ><?=$record['txn_type']?></span>
														</td>
														<td>
															<span class="badge <?php if($record['txn_status']=='CREDIT'){
																echo 'badge-light-success';
															}else{
																echo "badge-light-danger";

															} ?>"><?=$record['txn_status']?></span>
														</td>
														<td><?=$record['txn_amt']?></td>
														
														<td>
															<span ><?=$record['wallet_amount']?></span>
														</td>
														<td class="pe-0 text-end">
															<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<!-- <div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">View</a>
																</div> -->
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">view</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													
													<?php } ?>
																									</tbody>
												<!--end::Table body-->
											</table>
									<!--begin::Tab Content-->
									
									<!--end::Tab Content-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Statements-->
						</div>
						<!--end:::Tab pane-->
					</div>
					<!--end:::Tab content-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Layout-->

	<!--begin::Javascript-->
