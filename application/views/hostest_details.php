<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
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
							<!--begin::Toolbar-->
							
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
															
															<!-- <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal"></a> -->
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
																				<a href="#" class="">Logs</a>
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
																	<div class="fw-semibold fs-6 text-gray-500">Total Post</div>
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
														<!-- <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
															<div class="d-flex justify-content-between w-100 mt-auto mb-2">
																<span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
																<span class="fw-bold fs-6">50%</span>
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div> -->
														<!--end::Progress-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Details-->
											<!--begin::Navs-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<?php  $id=$this->uri->segment('2'); ?>
												<!--begin::Nav item-->
												<!-- <li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="account/overview.html">Overview</a>
												</li> -->
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" >Settings</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<!-- <li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?= base_url('profile_security')?>">Security</a>
												</li> -->
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<!-- <li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/activity.html">Activity</a>
												</li> -->
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?=base_url('Billing/').$id?>">Billing</a>
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
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?=base_url('referral/').$id?>">Referrals</a>
												</li>
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?=base_url('Logs/').$id?>">Logs</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<!-- <li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/logs.html">Logs</a>
												</li> -->
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
                                			
                                    <div class="card mb-5 mb-xl-10">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Profile Details</h3>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Content-->
										<div id="kt_account_settings_profile_details" class="collapse show">
											<!--begin::Form-->
											<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(<?=$user->photo?>)">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?=$user->photo?>)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
																	<i class="ki-duotone ki-pencil fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--begin::Inputs-->
																	<input type="file" name="photo" accept=".png, .jpg, .jpeg">
																	<input type="hidden" name="avatar_remove">
																	<!--end::Inputs-->
																</label>
																<!--end::Label-->
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
															<!--begin::Hint-->
															<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
															<!--end::Hint-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Row-->
															<div class="row">
																<input type="hidden" name="id" value="<?=$user->user_id?>">
																<!--begin::Col-->
																<div class="col-lg-6 fv-row fv-plugins-icon-container">
																	<label for="" class="col-form-label required ">Name</label>
																	<input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?=$user->name?>">
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label for="" class="col-form-label required">Email</label>
																	<input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Last name"  value="<?=$user->email?>">
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Col-->
															</div>
															<div class="row">
																<!--begin::Col-->
																<div class="col-lg-6 fv-row fv-plugins-icon-container">
																	<label for="" class="col-form-label required ">Phone</label>
																	<input type="text" name="phone" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name"  value="<?=$user->phone?>">
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label for="" class="col-form-label required">Address</label>
																	<input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="<?=$user->address?>">
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Col-->
															</div>
															<div class="row">
																<!--begin::Col-->
																<div class="col-lg-6 fv-row fv-plugins-icon-container">
																	<label for="" class="col-form-label required ">City</label>
																	<input type="text" name="city" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max">
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6 fv-row fv-plugins-icon-container">
																<label for="" class="col-form-label required">Referral Code</label>
																	<input type="text" name="referal_code" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="<?=$user->referral_code?>">
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
												
													
													<!--end::Input group-->
													<!--begin::Input group-->
													
													<!--end::Input group-->
													<!--begin::Input group-->
													
													<!--end::Input group-->
													<!--begin::Input group-->
													
													
													<!--end::Input group-->
													<!--begin::Input group-->
												
													<!--end::Input group-->
													<!--begin::Input group-->
													
													
													<!--end::Input group-->
													<!--begin::Input group-->
													
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-0">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-8 d-flex align-items-center">
															<div class="form-check form-check-solid form-switch form-check-custom fv-row">
																<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked">
																<label class="form-check-label" for="allowmarketing"></label>
															</div>
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card body-->
												<!--begin::Actions-->
												<div class="card-footer d-flex justify-content-end py-6 px-9">
													<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
													<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
												</div>
												<!--end::Actions-->
											<input type="hidden"></form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
                                    <div class="card mb-5 mb-xl-10">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Connected Accounts</h3>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Content-->
										<div id="kt_account_settings_connected_accounts" class="collapse show">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Notice-->
												
												<!--end::Notice-->
												<!--begin::Items-->
												<div class="py-2">
													<!--begin::Item-->
													<?php if($user->login_type=='NORMAL'){?>
													<div class="d-flex flex-stack">
													
														<div class="d-flex">
															<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="">
															<div class="d-flex flex-column">
																<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Normal</a>
																<div class="fs-6 fw-semibold text-gray-500">Plan properly your workflow</div>
															</div>
														</div>
														<div class="d-flex justify-content-end">
															<div class="form-check form-check-solid form-check-custom form-switch">
																<input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked">
																<label class="form-check-label" for="googleswitch"></label>
															</div>
														</div>
													</div>
													<?PHP }elseif($user->login_type=='GOOGLE'){ ?>
													<!--end::Item-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<div class="d-flex">
															<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="">
															<div class="d-flex flex-column">
																<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
																<div class="fs-6 fw-semibold text-gray-500">Keep eye on on your Repositories</div>
															</div>
														</div>
														<div class="d-flex justify-content-end">
															<div class="form-check form-check-solid form-check-custom form-switch">
																<input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked">
																<label class="form-check-label" for="githubswitch"></label>
															</div>
														</div>
													</div>
													<?php }elseif($user->login_type=='FACEBOOK'){ ?>
													<!--end::Item-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<div class="d-flex">
															<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="">
															<div class="d-flex flex-column">
																<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Facebook</a>
																<div class="fs-6 fw-semibold text-gray-500">Integrate Projects Discussions</div>
															</div>
														</div>
														<div class="d-flex justify-content-end">
															<div class="form-check form-check-solid form-check-custom form-switch">
																<input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch">
																<label class="form-check-label" for="slackswitch"></label>
															</div>
														</div>
													</div>
													<?php } ?>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Card body-->

											<!--end::Card footer-->
										</div>
										<!--end::Content-->
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