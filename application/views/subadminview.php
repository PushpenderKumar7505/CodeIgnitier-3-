<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row">
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
											<!--begin::Card-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Summary-->
													<!--begin::User Info-->
													<div class="d-flex flex-center flex-column py-5">
														<!--begin::Avatar-->
														<div class="symbol symbol-100px symbol-circle mb-7">
															<img src="assets/media/avatars/300-6.jpg" alt="image">
														</div>
														<!--end::Avatar-->
														<!--begin::Name-->
														<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3"><?=$record->name?></a>
														<!--end::Name-->
														<!--begin::Position-->
														<div class="mb-9">
															<!--begin::Badge-->
															<div class="badge badge-lg badge-light-primary d-inline"><?=$record->role?></div>
															<!--begin::Badge-->
														</div>
														<!--end::Position-->
														<!--begin::Info-->
														<!--begin::Info heading-->
														<!-- <div class="fw-bold mb-3">Assigned Tickets 
														<span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week.">
															<i class="ki-duotone ki-information fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></div> -->
														<!--end::Info heading-->
														
														<!--end::Info-->
													</div>
													<!--end::User Info-->
													<!--end::Summary-->
													<!--begin::Details toggle-->
													<div class="d-flex flex-stack fs-4 py-3">
														<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details 
														<span class="ms-2 rotate-180">
															<i class="ki-duotone ki-down fs-3"></i>
														</span></div>
														<!-- <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
															<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
														</span> -->
													</div>
													<!--end::Details toggle-->
													<div class="separator"></div>
													<!--begin::Details content-->
													<div id="kt_user_view_details" class="collapse show">
														<div class="pb-5 fs-6">
															<!--begin::Details item-->
															<div class="fw-bold mt-5">User ID</div>
															<div class="text-gray-600"><?=$record->userId?></div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Email</div>
															<div class="text-gray-600">
																<a href="#" class="text-gray-600 text-hover-primary"><?=$record->email?></a>
															</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<!-- <div class="fw-bold mt-5">Address</div>
															<div class="text-gray-600">101 Collin Street, 
															<br>Melbourne 3000 VIC
															<br>Australia</div> -->
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Language</div>
															<div class="text-gray-600">English</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Last Login</div>
															<div class="text-gray-600"><?=$record->updatedDtm?></div>
															<!--begin::Details item-->
														</div>
													</div>
													<!--end::Details content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Connected Accounts-->
											
											<!--end::Connected Accounts-->
										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-15">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_user_view_overview_tab" aria-selected="true" role="tab"></a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security" data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Security</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab" aria-selected="false" tabindex="-1" role="tab">Events &amp; Logs</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item ms-auto">
													<!--begin::Action menu-->
													<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions 
													<i class="ki-duotone ki-down fs-2 me-0"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
														<!--begin::Menu item-->
														
														
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="<?php echo base_url('deleteSubadmin/').$record->userId ?>" class="menu-link text-danger px-5">Delete customer</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::Menu-->
												</li>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane active" id="kt_user_view_overview_security" role="tabpanel">
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Profile</h2>
															</div>
															<!--end::Card title-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 pb-5">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																	<tbody class="fs-6 fw-semibold text-gray-600">
																		<tr>
																			<td>Email</td>
																			<td><?=$record->email?></td>
																			<td class="text-end">
																				<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
																					<i class="ki-duotone ki-pencil fs-3">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																				</button>
																			</td>
																		</tr>
																		<tr>
																			<td>Password</td>
																			<td>******</td>
																			<td class="text-end">
																				<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
																					<i class="ki-duotone ki-pencil fs-3">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																				</button>
																			</td>
																		</tr>
																		
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title flex-column">
																<h2>Email Notifications</h2>
																<div class="fs-6 fw-semibold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>
															</div>
															<!--end::Card title-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body">
															<!--begin::Form-->
															<form class="form" id="kt_users_email_notification_form">
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked="checked">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_0">
																			<div class="fw-bold">Successful Payments</div>
																			<div class="text-gray-600">Receive a notification for every successful payment.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_1">
																			<div class="fw-bold">Payouts</div>
																			<div class="text-gray-600">Receive a notification for every initiated payout.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_2">
																			<div class="fw-bold">Application fees</div>
																			<div class="text-gray-600">Receive a notification each time you collect a fee from an account.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked="checked">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_3">
																			<div class="fw-bold">Disputes</div>
																			<div class="text-gray-600">Receive a notification if a payment is disputed by a customer and for dispute resolutions.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4" id="kt_modal_update_email_notification_4" checked="checked">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_4">
																			<div class="fw-bold">Payment reviews</div>
																			<div class="text-gray-600">Receive a notification if a payment is marked as an elevated risk.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5" id="kt_modal_update_email_notification_5">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_5">
																			<div class="fw-bold">Mentions</div>
																			<div class="text-gray-600">Receive a notification if a teammate mentions you in a note.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6" id="kt_modal_update_email_notification_6">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_6">
																			<div class="fw-bold">Invoice Mispayments</div>
																			<div class="text-gray-600">Receive a notification if a customer sends an incorrect amount to pay their invoice.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7" id="kt_modal_update_email_notification_7">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_7">
																			<div class="fw-bold">Webhooks</div>
																			<div class="text-gray-600">Receive notifications about consistently failing webhook endpoints.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<div class="separator separator-dashed my-5"></div>
																<!--begin::Item-->
																<div class="d-flex">
																	<!--begin::Checkbox-->
																	<div class="form-check form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8" id="kt_modal_update_email_notification_8">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<label class="form-check-label" for="kt_modal_update_email_notification_8">
																			<div class="fw-bold">Trial</div>
																			<div class="text-gray-600">Receive helpful tips when you try out our products.</div>
																		</label>
																		<!--end::Label-->
																	</div>
																	<!--end::Checkbox-->
																</div>
																<!--end::Item-->
																<!--begin::Action buttons-->
																<div class="d-flex justify-content-end align-items-center mt-12">
																	<!--begin::Button-->
																	<button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait... 
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
																<!--begin::Action buttons-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Card body-->
														<!--begin::Card footer-->
														<!--end::Card footer-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Login Sessions</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Filter-->
																<button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
																<i class="ki-duotone ki-entrance-right fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Sign out all sessions</button>
																<!--end::Filter-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 pb-5">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																	<thead class="border-bottom border-gray-200 fs-7 fw-bold">
																		<tr class="text-start text-muted text-uppercase gs-0">
																			<th class="min-w-100px">Location</th>
																			<th>Device</th>
																			<th>IP Address</th>
																			<th class="min-w-125px">Time</th>
																			<th class="min-w-70px">Actions</th>
																		</tr>
																	</thead>
																	<tbody class="fs-6 fw-semibold text-gray-600">
																		<tr>
																			<td>Australia</td>
																			<td>Chome - Windows</td>
																			<td>207.10.36.261</td>
																			<td>23 seconds ago</td>
																			<td>Current session</td>
																		</tr>
																		<tr>
																			<td>Australia</td>
																			<td>Safari - iOS</td>
																			<td>207.28.18.67</td>
																			<td>3 days ago</td>
																			<td>
																				<a href="#" data-kt-users-sign-out="single_user">Sign out</a>
																			</td>
																		</tr>
																		<tr>
																			<td>Australia</td>
																			<td>Chrome - Windows</td>
																			<td>207.45.26.75</td>
																			<td>last week</td>
																			<td>Expired</td>
																		</tr>
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Logs</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Button-->
																<button type="button" class="btn btn-sm btn-light-primary">
																<i class="ki-duotone ki-cloud-download fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Download Report</button>
																<!--end::Button-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body py-0">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
																	<tbody>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_4982_8644/payment</td>
																			<td class="pe-0 text-end min-w-200px">10 Mar 2024, 6:43 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_4982_8644/payment</td>
																			<td class="pe-0 text-end min-w-200px">21 Feb 2024, 5:20 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_2363_2204/payment</td>
																			<td class="pe-0 text-end min-w-200px">21 Feb 2024, 9:23 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_2363_2204/payment</td>
																			<td class="pe-0 text-end min-w-200px">05 May 2024, 10:30 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_7640_2191/payment</td>
																			<td class="pe-0 text-end min-w-200px">25 Oct 2024, 5:20 pm</td>
																		</tr>
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Events</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Button-->
																<button type="button" class="btn btn-sm btn-light-primary">
																<i class="ki-duotone ki-cloud-download fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Download Report</button>
																<!--end::Button-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body py-0">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
																<tbody>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2024, 9:23 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from 
																		<span class="badge badge-light-warning me-1">Pending</span>to 
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2024, 10:30 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from 
																		<span class="badge badge-light-warning me-1">Pending</span>to 
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2024, 8:43 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from 
																		<span class="badge badge-light-succees me-1">In Transit</span>to 
																		<span class="badge badge-light-success">Approved</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2024, 11:30 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2024, 5:30 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2024, 6:43 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2024, 2:40 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2024, 5:30 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2024, 5:30 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to 
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2024, 11:05 am</td>
																	</tr>
																</tbody>
															</table>
															<!--end::Table-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Layout-->
									<!--begin::Modals-->
									<!--begin::Modal - Update user details-->
									<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form" action="#" id="kt_modal_update_user_form">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_update_user_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Update User Details</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
															<i class="ki-duotone ki-cross fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px" style="max-height: 47px;">
															<!--begin::User toggle-->
															<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information 
															<span class="ms-2 rotate-180">
																<i class="ki-duotone ki-down fs-3"></i>
															</span></div>
															<!--end::User toggle-->
															<!--begin::User form-->
															<div id="kt_modal_update_user_user_info" class="collapse show">
																<!--begin::Input group-->
																<div class="mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Update Avatar</span>
																		<span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Image input wrapper-->
																	<div class="mt-1">
																		<!--begin::Image placeholder-->
																		<style>.image-input-placeholder { background-image: url('assets/media/svg/avatars/blank.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/avatars/blank-dark.svg'); }</style>
																		<!--end::Image placeholder-->
																		<!--begin::Image input-->
																		<div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
																			<!--begin::Preview existing avatar-->
																			<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg"></div>
																			<!--end::Preview existing avatar-->
																			<!--begin::Edit-->
																			<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
																				<i class="ki-duotone ki-pencil fs-7">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																				<!--begin::Inputs-->
																				<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
																				<input type="hidden" name="avatar_remove">
																				<!--end::Inputs-->
																			</label>
																			<!--end::Edit-->
																			<!--begin::Cancel-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																			<!--end::Cancel-->
																			<!--begin::Remove-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																			<!--end::Remove-->
																		</div>
																		<!--end::Image input-->
																	</div>
																	<!--end::Image input wrapper-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Name</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Emma Smith">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Email</span>
																		<span class="ms-1" data-bs-toggle="tooltip" aria-label="Email address must be active" data-bs-original-title="Email address must be active" data-kt-initialized="1">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="smith@kpmg.com">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Description</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="" name="description">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-15">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Language</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select form-select-solid select2-hidden-accessible" data-dropdown-parent="#kt_modal_update_details" data-select2-id="select2-data-24-8jto" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option data-select2-id="select2-data-26-69ck"></option>
																		<option value="id">Bahasa Indonesia - Indonesian</option>
																		<option value="msa">Bahasa Melayu - Malay</option>
																		<option value="ca">Català - Catalan</option>
																		<option value="cs">Čeština - Czech</option>
																		<option value="da">Dansk - Danish</option>
																		<option value="de">Deutsch - German</option>
																		<option value="en">English</option>
																		<option value="en-gb">English UK - British English</option>
																		<option value="es">Español - Spanish</option>
																		<option value="fil">Filipino</option>
																		<option value="fr">Français - French</option>
																		<option value="ga">Gaeilge - Irish (beta)</option>
																		<option value="gl">Galego - Galician (beta)</option>
																		<option value="hr">Hrvatski - Croatian</option>
																		<option value="it">Italiano - Italian</option>
																		<option value="hu">Magyar - Hungarian</option>
																		<option value="nl">Nederlands - Dutch</option>
																		<option value="no">Norsk - Norwegian</option>
																		<option value="pl">Polski - Polish</option>
																		<option value="pt">Português - Portuguese</option>
																		<option value="ro">Română - Romanian</option>
																		<option value="sk">Slovenčina - Slovak</option>
																		<option value="fi">Suomi - Finnish</option>
																		<option value="sv">Svenska - Swedish</option>
																		<option value="vi">Tiếng Việt - Vietnamese</option>
																		<option value="tr">Türkçe - Turkish</option>
																		<option value="el">Ελληνικά - Greek</option>
																		<option value="bg">Български език - Bulgarian</option>
																		<option value="ru">Русский - Russian</option>
																		<option value="sr">Српски - Serbian</option>
																		<option value="uk">Українська мова - Ukrainian</option>
																		<option value="he">עִבְרִית - Hebrew</option>
																		<option value="ur">اردو - Urdu (beta)</option>
																		<option value="ar">العربية - Arabic</option>
																		<option value="fa">فارسی - Persian</option>
																		<option value="mr">मराठी - Marathi</option>
																		<option value="hi">हिन्दी - Hindi</option>
																		<option value="bn">বাংলা - Bangla</option>
																		<option value="gu">ગુજરાતી - Gujarati</option>
																		<option value="ta">தமிழ் - Tamil</option>
																		<option value="kn">ಕನ್ನಡ - Kannada</option>
																		<option value="th">ภาษาไทย - Thai</option>
																		<option value="ko">한국어 - Korean</option>
																		<option value="ja">日本語 - Japanese</option>
																		<option value="zh-cn">简体中文 - Simplified Chinese</option>
																		<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-25-e4ol" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-language-9p-container" aria-controls="select2-language-9p-container"><span class="select2-selection__rendered" id="select2-language-9p-container" role="textbox" aria-readonly="true" title="Select a Language..."><span class="select2-selection__placeholder">Select a Language...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::User form-->
															<!--begin::Address toggle-->
															<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Address Details 
															<span class="ms-2 rotate-180">
																<i class="ki-duotone ki-down fs-3"></i>
															</span></div>
															<!--end::Address toggle-->
															<!--begin::Address form-->
															<div id="kt_modal_update_user_address" class="collapse show">
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Address Line 1</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Address Line 2</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="address2">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Town</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="row g-9 mb-7">
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold mb-2">State / Province</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria">
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold mb-2">Post Code</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000">
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Country</span>
																		<span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid select2-hidden-accessible" data-dropdown-parent="#kt_modal_update_details" data-select2-id="select2-data-27-24sh" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option value="" data-select2-id="select2-data-29-efw7">Select a Country...</option>
																		<option value="AF">Afghanistan</option>
																		<option value="AX">Aland Islands</option>
																		<option value="AL">Albania</option>
																		<option value="DZ">Algeria</option>
																		<option value="AS">American Samoa</option>
																		<option value="AD">Andorra</option>
																		<option value="AO">Angola</option>
																		<option value="AI">Anguilla</option>
																		<option value="AG">Antigua and Barbuda</option>
																		<option value="AR">Argentina</option>
																		<option value="AM">Armenia</option>
																		<option value="AW">Aruba</option>
																		<option value="AU">Australia</option>
																		<option value="AT">Austria</option>
																		<option value="AZ">Azerbaijan</option>
																		<option value="BS">Bahamas</option>
																		<option value="BH">Bahrain</option>
																		<option value="BD">Bangladesh</option>
																		<option value="BB">Barbados</option>
																		<option value="BY">Belarus</option>
																		<option value="BE">Belgium</option>
																		<option value="BZ">Belize</option>
																		<option value="BJ">Benin</option>
																		<option value="BM">Bermuda</option>
																		<option value="BT">Bhutan</option>
																		<option value="BO">Bolivia, Plurinational State of</option>
																		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																		<option value="BA">Bosnia and Herzegovina</option>
																		<option value="BW">Botswana</option>
																		<option value="BR">Brazil</option>
																		<option value="IO">British Indian Ocean Territory</option>
																		<option value="BN">Brunei Darussalam</option>
																		<option value="BG">Bulgaria</option>
																		<option value="BF">Burkina Faso</option>
																		<option value="BI">Burundi</option>
																		<option value="KH">Cambodia</option>
																		<option value="CM">Cameroon</option>
																		<option value="CA">Canada</option>
																		<option value="CV">Cape Verde</option>
																		<option value="KY">Cayman Islands</option>
																		<option value="CF">Central African Republic</option>
																		<option value="TD">Chad</option>
																		<option value="CL">Chile</option>
																		<option value="CN">China</option>
																		<option value="CX">Christmas Island</option>
																		<option value="CC">Cocos (Keeling) Islands</option>
																		<option value="CO">Colombia</option>
																		<option value="KM">Comoros</option>
																		<option value="CK">Cook Islands</option>
																		<option value="CR">Costa Rica</option>
																		<option value="CI">Côte d'Ivoire</option>
																		<option value="HR">Croatia</option>
																		<option value="CU">Cuba</option>
																		<option value="CW">Curaçao</option>
																		<option value="CZ">Czech Republic</option>
																		<option value="DK">Denmark</option>
																		<option value="DJ">Djibouti</option>
																		<option value="DM">Dominica</option>
																		<option value="DO">Dominican Republic</option>
																		<option value="EC">Ecuador</option>
																		<option value="EG">Egypt</option>
																		<option value="SV">El Salvador</option>
																		<option value="GQ">Equatorial Guinea</option>
																		<option value="ER">Eritrea</option>
																		<option value="EE">Estonia</option>
																		<option value="ET">Ethiopia</option>
																		<option value="FK">Falkland Islands (Malvinas)</option>
																		<option value="FJ">Fiji</option>
																		<option value="FI">Finland</option>
																		<option value="FR">France</option>
																		<option value="PF">French Polynesia</option>
																		<option value="GA">Gabon</option>
																		<option value="GM">Gambia</option>
																		<option value="GE">Georgia</option>
																		<option value="DE">Germany</option>
																		<option value="GH">Ghana</option>
																		<option value="GI">Gibraltar</option>
																		<option value="GR">Greece</option>
																		<option value="GL">Greenland</option>
																		<option value="GD">Grenada</option>
																		<option value="GU">Guam</option>
																		<option value="GT">Guatemala</option>
																		<option value="GG">Guernsey</option>
																		<option value="GN">Guinea</option>
																		<option value="GW">Guinea-Bissau</option>
																		<option value="HT">Haiti</option>
																		<option value="VA">Holy See (Vatican City State)</option>
																		<option value="HN">Honduras</option>
																		<option value="HK">Hong Kong</option>
																		<option value="HU">Hungary</option>
																		<option value="IS">Iceland</option>
																		<option value="IN">India</option>
																		<option value="ID">Indonesia</option>
																		<option value="IR">Iran, Islamic Republic of</option>
																		<option value="IQ">Iraq</option>
																		<option value="IE">Ireland</option>
																		<option value="IM">Isle of Man</option>
																		<option value="IL">Israel</option>
																		<option value="IT">Italy</option>
																		<option value="JM">Jamaica</option>
																		<option value="JP">Japan</option>
																		<option value="JE">Jersey</option>
																		<option value="JO">Jordan</option>
																		<option value="KZ">Kazakhstan</option>
																		<option value="KE">Kenya</option>
																		<option value="KI">Kiribati</option>
																		<option value="KP">Korea, Democratic People's Republic of</option>
																		<option value="KW">Kuwait</option>
																		<option value="KG">Kyrgyzstan</option>
																		<option value="LA">Lao People's Democratic Republic</option>
																		<option value="LV">Latvia</option>
																		<option value="LB">Lebanon</option>
																		<option value="LS">Lesotho</option>
																		<option value="LR">Liberia</option>
																		<option value="LY">Libya</option>
																		<option value="LI">Liechtenstein</option>
																		<option value="LT">Lithuania</option>
																		<option value="LU">Luxembourg</option>
																		<option value="MO">Macao</option>
																		<option value="MG">Madagascar</option>
																		<option value="MW">Malawi</option>
																		<option value="MY">Malaysia</option>
																		<option value="MV">Maldives</option>
																		<option value="ML">Mali</option>
																		<option value="MT">Malta</option>
																		<option value="MH">Marshall Islands</option>
																		<option value="MQ">Martinique</option>
																		<option value="MR">Mauritania</option>
																		<option value="MU">Mauritius</option>
																		<option value="MX">Mexico</option>
																		<option value="FM">Micronesia, Federated States of</option>
																		<option value="MD">Moldova, Republic of</option>
																		<option value="MC">Monaco</option>
																		<option value="MN">Mongolia</option>
																		<option value="ME">Montenegro</option>
																		<option value="MS">Montserrat</option>
																		<option value="MA">Morocco</option>
																		<option value="MZ">Mozambique</option>
																		<option value="MM">Myanmar</option>
																		<option value="NA">Namibia</option>
																		<option value="NR">Nauru</option>
																		<option value="NP">Nepal</option>
																		<option value="NL">Netherlands</option>
																		<option value="NZ">New Zealand</option>
																		<option value="NI">Nicaragua</option>
																		<option value="NE">Niger</option>
																		<option value="NG">Nigeria</option>
																		<option value="NU">Niue</option>
																		<option value="NF">Norfolk Island</option>
																		<option value="MP">Northern Mariana Islands</option>
																		<option value="NO">Norway</option>
																		<option value="OM">Oman</option>
																		<option value="PK">Pakistan</option>
																		<option value="PW">Palau</option>
																		<option value="PS">Palestinian Territory, Occupied</option>
																		<option value="PA">Panama</option>
																		<option value="PG">Papua New Guinea</option>
																		<option value="PY">Paraguay</option>
																		<option value="PE">Peru</option>
																		<option value="PH">Philippines</option>
																		<option value="PL">Poland</option>
																		<option value="PT">Portugal</option>
																		<option value="PR">Puerto Rico</option>
																		<option value="QA">Qatar</option>
																		<option value="RO">Romania</option>
																		<option value="RU">Russian Federation</option>
																		<option value="RW">Rwanda</option>
																		<option value="BL">Saint Barthélemy</option>
																		<option value="KN">Saint Kitts and Nevis</option>
																		<option value="LC">Saint Lucia</option>
																		<option value="MF">Saint Martin (French part)</option>
																		<option value="VC">Saint Vincent and the Grenadines</option>
																		<option value="WS">Samoa</option>
																		<option value="SM">San Marino</option>
																		<option value="ST">Sao Tome and Principe</option>
																		<option value="SA">Saudi Arabia</option>
																		<option value="SN">Senegal</option>
																		<option value="RS">Serbia</option>
																		<option value="SC">Seychelles</option>
																		<option value="SL">Sierra Leone</option>
																		<option value="SG">Singapore</option>
																		<option value="SX">Sint Maarten (Dutch part)</option>
																		<option value="SK">Slovakia</option>
																		<option value="SI">Slovenia</option>
																		<option value="SB">Solomon Islands</option>
																		<option value="SO">Somalia</option>
																		<option value="ZA">South Africa</option>
																		<option value="KR">South Korea</option>
																		<option value="SS">South Sudan</option>
																		<option value="ES">Spain</option>
																		<option value="LK">Sri Lanka</option>
																		<option value="SD">Sudan</option>
																		<option value="SR">Suriname</option>
																		<option value="SZ">Swaziland</option>
																		<option value="SE">Sweden</option>
																		<option value="CH">Switzerland</option>
																		<option value="SY">Syrian Arab Republic</option>
																		<option value="TW">Taiwan, Province of China</option>
																		<option value="TJ">Tajikistan</option>
																		<option value="TZ">Tanzania, United Republic of</option>
																		<option value="TH">Thailand</option>
																		<option value="TG">Togo</option>
																		<option value="TK">Tokelau</option>
																		<option value="TO">Tonga</option>
																		<option value="TT">Trinidad and Tobago</option>
																		<option value="TN">Tunisia</option>
																		<option value="TR">Turkey</option>
																		<option value="TM">Turkmenistan</option>
																		<option value="TC">Turks and Caicos Islands</option>
																		<option value="TV">Tuvalu</option>
																		<option value="UG">Uganda</option>
																		<option value="UA">Ukraine</option>
																		<option value="AE">United Arab Emirates</option>
																		<option value="GB">United Kingdom</option>
																		<option value="US">United States</option>
																		<option value="UY">Uruguay</option>
																		<option value="UZ">Uzbekistan</option>
																		<option value="VU">Vanuatu</option>
																		<option value="VE">Venezuela, Bolivarian Republic of</option>
																		<option value="VN">Vietnam</option>
																		<option value="VI">Virgin Islands</option>
																		<option value="YE">Yemen</option>
																		<option value="ZM">Zambia</option>
																		<option value="ZW">Zimbabwe</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-28-94ax" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-1b-container" aria-controls="select2-country-1b-container"><span class="select2-selection__rendered" id="select2-country-1b-container" role="textbox" aria-readonly="true" title="Select a Country..."><span class="select2-selection__placeholder">Select a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Address form-->
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - Update user details-->
									<!--begin::Modal - Add schedule-->
									<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add an Event</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
													<form id="kt_modal_add_schedule_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Event Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="event_name" value="">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Date &amp; Time</span>
																<span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date &amp; time." data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid flatpickr-input" placeholder="Pick date &amp; time" name="event_datetime" id="kt_modal_add_schedule_datepicker" type="text" readonly="readonly">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Event Organiser</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="event_org" value="">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Send Event Details To</label>
															<!--end::Label-->
															<!--begin::Input-->
															<tags class="tagify  form-control form-control-solid" tabindex="-1">
            <tag title="smith@kpmg.com" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="smith@kpmg.com"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">smith@kpmg.com</span></div></tag><tag title="melody@altbox.com" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="melody@altbox.com"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">melody@altbox.com</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" tabindex="-1">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
									<!--end::Modal - Add schedule-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add a Task</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
													<form id="kt_modal_add_task_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Task Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="task_name" value="">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Task Due Date</span>
																<span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date." data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid flatpickr-input" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" type="text" readonly="readonly">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">Task Description</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid rounded-3"></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
									<!--end::Modal - Add task-->
									<!--begin::Modal - Update email-->
									<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update Email Address</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
													<form id="kt_modal_update_email_form" method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="<?php echo base_url('updateEmail') ?>">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<i class="ki-duotone ki-information fs-2tx text-primary me-4">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-semibold">
																	<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Email Address</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" type="email" name="email" value="<?=$record->email?>">
															<input class="form-control form-control-solid" placeholder="" type="hidden" name="id" value="<?=$record->userId?>">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
									<!--end::Modal - Update email-->
									<!--begin::Modal - Update password-->
									<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update Password</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
													<form id="kt_modal_update_password_form" method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="<?=base_url('passwordUpdate')?>">
														<!--begin::Input group=-->
														
														<!--end::Input group=-->
														<!--begin::Input group-->
								
														<!--end::Input group=-->
														<!--begin::Input group=-->
														<div class="fv-row mb-10 fv-plugins-icon-container">
															<label class="form-label fw-semibold fs-6 mb-2"> New Password</label>
															<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="password" autocomplete="off">
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group=-->
														<!--begin::Actions-->
														<input type="hidden" value="<?=$record->userId?>" name="id">
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
									<!--end::Modal - Update password-->
									<!--begin::Modal - Update role-->
								
									<!--end::Modal - Update role-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add Authenticator App</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
													<!--begin::Content-->
													<div class="fw-bold d-flex flex-column justify-content-center mb-5">
														<!--begin::Label-->
														<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the 
														<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
														<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the 
														<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
														<!--end::Label-->
														<!--begin::QR code-->
														<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
															<img src="assets/media/misc/qr.png" alt="Scan this QR code">
														</div>
														<!--end::QR code-->
														<!--begin::Text code-->
														<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
															<div class="fs-1">gi2kdnb54is709j</div>
														</div>
														<!--end::Text code-->
													</div>
													<!--end::Content-->
													<!--begin::Action-->
													<div class="d-flex flex-center">
														<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
														<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Enable One Time Password</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
													<form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="kt_modal_add_one_time_password_form">
														<!--begin::Label-->
														<div class="fw-bold mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
														<!--end::Label-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Mobile number</span>
																<span class="ms-2" data-bs-toggle="tooltip" aria-label="A valid mobile number is required to receive the one-time password to validate your account login." data-bs-original-title="A valid mobile number is required to receive the one-time password to validate your account login." data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator saperator-dashed my-5"></div>
														<!--end::Separator-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Email</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Confirm password</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="">
															<!--end::Input-->
														<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
									<!--end::Modal - Add task-->
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>