<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container  d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Account Overview</h1>
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
											<li class="breadcrumb-item text-muted">Account</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container ">
									<!--begin::Navbar-->
                                    <div class="card mb-5 mb-xl-10">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap">
												<!--begin: Pic-->
												<div class="me-7 mb-4">
													<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
														<img src="<?=$user->photo;?>" alt="image">
														<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
													</div>
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<!--begin::Title-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::User-->
														<div class="d-flex flex-column">
															<!--begin::Name-->
															<div class="d-flex align-items-center mb-2">
																<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?=$user->name;?></a>
																<a href="#">
																	<i class="ki-duotone ki-verify fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</a>
															</div>
															<!--end::Name-->
															<!--begin::Info-->
															<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-duotone ki-profile-circle fs-4 me-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i><?=$user->phone;?></a>
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-duotone ki-geolocation fs-4 me-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>SF, Bay Area</a>
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
																<i class="ki-duotone ki-sms fs-4">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i><?=$user->email;?></a>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Actions-->
														<div class="d-flex my-4">
															
															<!-- <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a> -->
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
													<!--end::Title-->
													<!--begin::Stats-->
													<div class="d-flex flex-wrap flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column flex-grow-1 pe-8">
															<!--begin::Stats-->
															<div class="d-flex flex-wrap">
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		
																		<div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1"><?=$user->total_earning;?></div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-500">Earning</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		
																		<div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-500">Projects</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		
																		<div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Progress-->
													
														<!--end::Progress-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Details-->
											<!--begin::Navs-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--begin::Nav item-->
												<?php  $id=$this->uri->segment('2'); ?>
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?=base_url('userdetails/').$id?>" >Settings</a>
												</li>
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="<?=base_url('Billing/').$id?>">Billing</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?= base_url('statement/').$id?>">Statements</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="<?=base_url('referral/').$id?>">Referrals</a>
												</li>
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?=base_url('Logs/').$id?>">Logs</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--begin::Navs-->
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::details View-->
								
									<!--end::details View-->
									<!--begin::Row-->
									
									<!--end::Row-->
									<!--begin::Row-->
                                
                                    <div class="card">
										<!--begin::Header-->
										<div class="card-header card-header-stretch">
											<!--begin::Title-->
											<div class="card-title">
												<h3 class="m-0 text-gray-800">Statement</h3>
											</div>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar m-0">
												<!--begin::Tab nav-->
												<!-- <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
													<li class="nav-item" role="presentation">
														<a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1" aria-selected="true">This Year</a>
													</li>
													<li class="nav-item" role="presentation">
														<a id="kt_referrals_2019_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2" aria-selected="false" tabindex="-1">2023</a>
													</li>
													<li class="nav-item" role="presentation">
														<a id="kt_referrals_2018_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_3" aria-selected="false" tabindex="-1">2022</a>
													</li>
													<li class="nav-item" role="presentation">
														<a id="kt_referrals_2017_tab" class="nav-link text-active-gray-800 ms-8" data-bs-toggle="tab" role="tab" href="#kt_referrals_4" aria-selected="false" tabindex="-1">2021</a>
													</li>
												</ul> -->
												<!--end::Tab nav-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Tab Content-->
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
										<!--end::Tab Content-->
									</div>
                                   
									<!--end::Row-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						
						</div>
						<!--end::Footer-->
					
                 
		<!--end::Custom Javascript-->
		<!--end::Javascript-->