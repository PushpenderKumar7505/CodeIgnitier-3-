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
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?=base_url('Billing/').$id?>">Billing</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="<?= base_url('statement/').$id?>">Statements</a>
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
                                			<?php if(!empty($bank)){?>
                                    <div class="card mb-5 mb-xl-10">
										<!--begin::Card header-->
										<div class="card-header card-header-stretch pb-0">
											<!--begin::Title-->
											<div class="card-title">
												<h3 class="m-0">Payment Methods</h3>
											</div>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar m-0">
												<!--begin::Tab nav-->
												<ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
													<!--begin::Tab item-->
													<li class="nav-item" role="presentation">
														<a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bold me-5 active" data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard" aria-selected="true">Credit / Debit Card</a>
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<!-- <li class="nav-item" role="presentation">
														<a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab" role="tab" href="#kt_billing_paypal" aria-selected="false" tabindex="-1">Paypal</a>
													</li> -->
													<!--end::Tab item-->
												</ul>
												<!--end::Tab nav-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Tab content-->
										<div id="kt_billing_payment_tab_content" class="card-body tab-content">
											<!--begin::Tab panel-->
											<div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel" aria-labelledby="kt_billing_creditcard_tab">
												<!--begin::Title-->
												<h3 class="mb-5">My Cards</h3>
												<!--end::Title-->
												<!--begin::Row-->
												<div class="row gx-9 gy-6">
													<!--begin::Col-->
													
													<!--end::Col-->
													<!--begin::Col-->
												
													<!--end::Col-->
													<!--begin::Col-->
													
													<div class="col-xl-6" data-kt-billing-element="card">
														<!--begin::Card-->
														<div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
															<!--begin::Info-->
															<div class="d-flex flex-column py-2">
																<!--begin::Owner-->
																<div class="d-flex align-items-center fs-4 fw-bold mb-5"><?=$bank->bank_name?>
																<?php if($bank->is_bank_verify=='SUCCESS'){ ?>
																<span class="badge badge-light-success fs-7 ms-2">VARIFIED</span></div>
															<?php }else{?>
																<span class="badge badge-light-danger fs-7 ms-2"><?=$bank->is_bank_verify?></span></div>
																<?php } ?>
																<!--end::Owner-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Icon-->
																	<img src="<?=$bank->bank_photo?>" alt="" class="me-4" width="50" height="50">
																	<!--end::Icon-->
																	<!--begin::Details-->
																	<div>
																		<div class="fs-4 fw-bold"><?php 
																		$var = $bank->account_no;
																		echo '*****' . substr($var,-4);
																		?></div>
																		<div class="fs-6 fw-semibold text-gray-500"><?=$bank->ifsc_code?></div>
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Wrapper-->
																
															</div>
															<div class="d-flex align-items-center py-2">
																<button class="btn btn-sm btn-light btn-active-light-primary me-3" data-kt-billing-action="card-delete">
																	<!--begin::Indicator label-->
																	<span class="indicator-label">Delete</span>
																	<!--end::Indicator label-->
																	<!--begin::Indicator progress-->
																	<span class="indicator-progress">Please wait... 
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	<!--end::Indicator progress-->
																</button>
																<button class="btn btn-sm btn-light btn-active-light-primary editbank" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card" onclick="myFunction(<?=$bank->bank_detail_id ?>)">Edit</button>
															</div>
															<!--end::Info-->
															<!--begin::Actions-->
															
															<!--end::Actions-->
														</div>
														<!--end::Card-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
												
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
												<!--begin::Title-->
												<h3 class="mb-5">My Paypal</h3>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-gray-600 fs-6 fw-semibold mb-5">To use PayPal as your payment method, you will need to make pre-payments each month before your bill is due.</div>
												<!--end::Description-->
												<!--begin::Form-->
												<form class="form">
													<!--begin::Input group-->
													<div class="mb-7 mw-350px">
														<select name="timezone" data-control="select2" data-placeholder="Select an option" data-hide-search="true" class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700 select2-hidden-accessible" data-select2-id="select2-data-9-9ryk" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option data-select2-id="select2-data-11-hb1u">Select an option</option>
															<option value="25">US $25.00</option>
															<option value="50">US $50.00</option>
															<option value="100">US $100.00</option>
															<option value="125">US $125.00</option>
															<option value="150">US $150.00</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-s1wv" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-timezone-5f-container" aria-controls="select2-timezone-5f-container"><span class="select2-selection__rendered" id="select2-timezone-5f-container" role="textbox" aria-readonly="true" title="Select an option">Select an option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
													<!--end::Input group-->
													<button type="submit" class="btn btn-primary">Pay with Paypal</button>
												</form>
												<!--end::Form-->
											</div>
											<!--end::Tab panel-->
										</div>
										<?php } ?>
										<!--end::Tab content-->
									</div>

									<div class="card">
										<!--begin::Card header-->
										<div class="card-header card-header-stretch border-bottom border-gray-200">
											<!--begin::Title-->
											<div class="card-title">
												<h3 class="fw-bold m-0">Billing History</h3>
											</div>
											<!--end::Title-->
											<!--begin::Toolbar-->
											
											<!--end::Toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Tab Content-->
										<div class="tab-content">
											<!--begin::Tab panel-->
											<div id="kt_billing_months" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_billing_months">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table table-row-bordered align-middle gy-4 gs-9">
														<thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
															<tr>
																<td class="min-w-150px">Date</td>
																<td class="min-w-150px">Description</td>
																<td class="min-w-150px">Amount</td>
																<td class="min-w-150px">Status</td>
																<td class="min-w-150px">Invoice</td>
															
															</tr>
														</thead>
														<tbody class="fw-semibold text-gray-600">
															<!--begin::Table row-->
															<?php foreach($payment as $data){?>
															<tr>
																<td><?=$data['req_dt'];?></td>
																<td>
																	<a ><?=$data['msg'];?></a>
																</td>
																<td><?=$data['amount'];?></td>
																<td><?=$data['status'];?></td>
																<td>
																	<a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
																</td>
																
															</tr>
															<?php } ?>
															<!--end::Table row-->
															<!--begin::Table row-->
															
															<!--end::Table row-->
														</tbody>
													</table>
													<!--end::Table-->
												</div>
												<!--end::Table container-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
										
											<!--end::Tab panel-->
											
											<!--end::Tab panel-->
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

						<div class="modal fade show" id="kt_modal_new_card" tabindex="-1" aria-modal="true" role="dialog" style=" padding-left: 0px;">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Edit Bank Details</h2>
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
					<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
						<!--begin::Form-->
						<form id="kt_modal_new_card_form" method="post" enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="<?php echo base_url('updatebankdetailsuser') ?>">
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">Bank Name</span>
									<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" id="bankname" placeholder="" name="bank_name" value="">
								<input type="hidden" class="form-control form-control-solid" id="bankid" placeholder="" name="bankid" value="">
							
							<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
							<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">Account Number</span>
									<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" id="accno" placeholder="" name="acc_no" value="">
							
							<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
							<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">IFSC CODE</span>
									<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" id="ifsccode" placeholder="" name="ifsc_code" value="">
							
							<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
							<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">Bank Image</span>
									<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input type="file" class="form-control form-control-solid"  placeholder="" name="bank_img" value="">
							
							<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<!--end::Input group-->
						
							<!--end::Input group-->
							<!--begin::Input group-->
					
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
								<button type="submit" id="kt_modal_new_card_submit34" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait... 
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<script>
				function myFunction(v){
		//alert(v);
		var id=v;
		$.ajax({
		
		url : '<?php echo base_url('bankDetailsUpdate')?>',
		type : 'POST',
		data : {
			'id' : id
		},
		//dataType:'json',
		success : function(data) {    
			const record = JSON.parse(data);          
		
			//console.log(record.package_id);
			// alert(record.package_name);
			$('#bankname').val(record.bank_name);
			$('#bankid').val(record.bank_detail_id);
			$('#accno').val(record.account_no);
			$('#ifsccode').val(record.ifsc_code);
			// $('#package_type').val(record.package_type);
			// $('#package_coin').val(record.coins_value);
			//$('#kt_modal_new_target_edit').show();
		//	$('#kt_modal_new_target_edit').modal('show');
		},
	
		});
	};
		</script>
						<!--end::Footer-->
					
                 
		<!--end::Custom Javascript-->
		<!--end::Javascript-->