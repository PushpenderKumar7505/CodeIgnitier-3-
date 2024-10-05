<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
	<!--begin:Form-->
	<form id="kt_modal_new_target_form" class="form" action="<?= base_url("insertGiftData") ?>" method="post" enctype="multipart/form-data">
		<!--begin::Heading-->
		<div class="mb-13 text-center">
			<!--begin::Title-->
			<h1 class="mb-3">Add Gift Details</h1>

		</div>
		<!--end::Heading-->
		<style>
		.small-input {
			width: 300px; /* Adjust width as needed */
			height: 36px; /* Adjust height if needed */
		}
	</style>
		<div class="d-flex flex-column mb-8 fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="giftValueInput">
				<span class="required">Gift Value</span>
				<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
					<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
					</i>
				</span>
			</label>
			<!--end::Label-->
			<input type="number" class="form-control form-control-solid small-input" placeholder="Enter Gift Value" name="gift_value" required />
		</div>

		<div class="d-flex flex-column mb-8 fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
				<span class="required">Gift Price</span>
				<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
					<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
					</i>
				</span>
			</label>
			<input type="number" class="form-control form-control-solid small-input" placeholder="Enter Gift price" name="gift_price" required />
		</div>
		<!--end::Label-->
        <div class="d-flex flex-column mb-8 fv-row">
			<!--begin::Label-->
			<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
				<span class="required">Gift Icon</span>
				<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
					<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
					</i>
				</span>
			</label>
			<input type="file" class="form-control form-control-solid small-input" placeholder="Enter Gift Icon" name="gift_icon" required />
		</div>
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