<!--begin::Toolbar-->
<!-- // ye content k bich mein kr rha  h  -->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container  d-flex flex-stack">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
			<!--begin::Title-->
			<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Setting</h1>
			<!--end::Title-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="<?php echo base_url("settingList"); ?>" class="text-muted text-hover-primary">Home</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-500 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Settings</li>
				<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
	<!--begin::Content container-->
	<div id="kt_app_content_container" class="app-container ">
		<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
			<!--begin:::Tab item-->
			<li class="nav-item" role="presentation">
				<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab" aria-selected="true" role="tab">App Detail</a>
			</li>
			<!--end:::Tab item-->
			<!--begin:::Tab item-->
			<li class="nav-item" role="presentation">
				<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab" aria-selected="false" tabindex="-1" role="tab">Bonus Detail</a>
			</li>
			<!--end:::Tab item-->
			<!--begin:::Tab item-->
			<li class="nav-item" role="presentation">
				<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements" data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">Referral Bonus Detail</a>
			</li>
			<!--end:::Tab item-->
		</ul>
		<!--end:::Tabs-->
		<!--begin:::Tab content-->
		<!-- ye wali line isko ek tab se dusre tab mein same line mein rkh rhi  h  -->
		<div class="tab-content" id="myTabContent">
			<!--begin:::Tab pane-->
			<!-- ye line agr hataoge toh phla vala tb work krega aur sbhi tab mein aaega aur uske niche dusre tab hongein -->
			<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
				<!--begin::Card-->
				<div class="card pt-4 mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body pt-0 pb-5">
						<form id="kt_modal_new_target_form" class="form" action="<?= base_url("appFormSubmitData") ?>" method="post" enctype="multipart/form-data">
						<!-- <input type="hidden" name="id" value="<?php echo $data->id; ?>" /> -->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!-- App Name Field -->
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">App Name</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<!-- <input type="text" class="form-control form-control-solid input-small" placeholder="Enter App Name" name="app_name" value="<?php echo $data->app_name; ?>" required /> -->
									<input type="text" class="form-control form-control-solid input-small" placeholder="Enter App Name" name="app_name"  required />
								</div>
								<!-- Website URL Field -->
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">Website URL</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid input-small" placeholder="Enter Website URL" name="website_url"  required />
									<!-- <input type="text" class="form-control form-control-solid input-small" placeholder="Enter Website URL" name="website_url" value="<?php echo $data->website_url; ?>" required /> -->
								</div>
							</div>
							<div class="row g-9 mb-8">
								<!--begin::Label-->
								<div class="col-md-6 fv-row">
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">Support Email Id</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid input-small" placeholder="Enter Support Email Id" name="support_email_id" required />
								</div>
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">Support Phone No</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="number" class="form-control form-control-solid input-small" placeholder="Enter Support Phone No" name="support_phone_no" required />
								</div>
							</div>
							<div class="row g-9 mb-8">
								<!--begin::Label-->
								<div class="col-md-6 fv-row">
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">Android App Url</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="text" class="form-control form-control-solid input-small" placeholder="Enter Android App Url" name="android_app_url" required />
								</div>
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
										<span class="required">IOS App Url</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="text" class="form-control form-control-solid input-small" placeholder="Enter IOS App Url" name="ios_app_url" required />
								</div>
							</div>
							<div class="col-md-6 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Upload Panel Logo</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<input type="file" class="form-control form-control-solid input-small" placeholder="Enter Upload Panel Logo" name="up" required />
							</div><br>
							<!--end::Label-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_form" class="btn btn-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end:::Tab pane-->
			<!--begin:::Tab pane-->
			<div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
				<!--begin::Card-->
				<div class="card pt-4 mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body py-0">
						<form id="kt_modal_new_target_form" class="form" action="<?= base_url("bonusFormSubmit") ?>" method="post">
							<!--begin::Input group-->
							
							<div class="row g-9 mb-8">
								<!--begin::Label-->
								<div class="col-md-6 fv-row">
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">Email Verify Cash Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<input type="email" class="form-control form-control-solid input-small" placeholder="Enter Email Verified Bonus" name="email_verified_bonus" required />
								</div>
								<!--end::Input group-->
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">Mobile Verify Cash Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="number" class="form-control form-control-solid input-small" placeholder="Enter Mobile Verify Cash Bonus" name="mobile_verify_bonus" required />
								</div>
							</div>
							<div class="row g-9 mb-8">
								<!--begin::Label-->
								<div class="col-md-6 fv-row">
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">PAN Card Verification Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="number" class="form-control form-control-solid input-small" placeholder="Enter PAN Card Verification Bonus" name="pan_verify_bonus" required />
								</div>
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">Bank Details Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="number" class="form-control form-control-solid input-small" placeholder="Enter Bank Details Bonus" name="bank_verify_bonus" required />
								</div>
							</div><br>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_form" class="btn btn-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
							<br>
						</form>
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end:::Tab pane-->
			<!--begin:::Tab pane-->
			<div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
				<!--begin::Statements-->
				<div class="card mb-6 mb-xl-9">
					<!--end::Header-->
					<!--begin::Card body-->
					<div class="card-body pb-5">
						<form id="kt_modal_new_target_form" class="form" action="<?= base_url("") ?>" method="post">
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">Email Verify Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid input-small" placeholder="Enter Email Verify Bonus" name="email" required />
								</div>
								<div class="col-md-6 fv-row">
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">Mobile Verify Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="number" class="form-control form-control-solid input-small" placeholder="Enter Mobile Verify Bonus" name="phone_no" required />
								</div>
							</div>
							<div class="row g-9 mb-8">
								<!--begin::Label-->
								
								<!--end::Label-->
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
										<span class="required">Referral PAN Verify Bonus(Rs)</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<input type="number" class="form-control form-control-solid input-small" placeholder="Enter Referral PAN Verify Bonus" name="pan_no" required />
								</div>
								<div class="col-md-6 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-1">
									<span class="required">Referral Bank Verify Bonus(Rs)</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<input type="number" class="form-control form-control-solid input-small" placeholder="Enter Referral Bank Verify Bonus" name="bank_no" required />
							</div>
							</div>
							<br>
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_form" class="btn btn-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
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
