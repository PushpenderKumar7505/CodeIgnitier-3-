<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
			<!--begin::Title-->
			<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Gift List</h1>
			<!--end::Title-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="<?php echo base_url('giftDetails')?>" class="text-muted text-hover-primary">Home</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-500 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">Gifts</li>
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
						<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Gift" />
					</div>
                    
					<!--end::Search-->
				</div>
				<!--begin::Card title-->
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
				<div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
					<!--begin::Add subscription-->
					<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" style="
    height: 37px;
">Add Gift</a>
					
					<!--end::Add subscription-->
				</div>
              
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
														<form id="kt_modal_new_target_form" class="form" action="<?= base_url("insertGiftData") ?>" method="post" enctype="multipart/form-data">
		<!--begin::Heading-->
		<div class="mb-13 text-center">
			<!--begin::Title-->
			<h1 class="mb-3">Add Gift Details</h1>

		</div>
		<!--end::Heading-->
		<!-- <style>
		.small-input {
			width: 300px; /* Adjust width as needed */
			height: 36px; /* Adjust height if needed */
		} -->
	<!-- </style> -->
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



<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>


<div class="modal fade" id="kt_modal_new_target2" tabindex="-1" aria-hidden="true">
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
														<form id="kt_modal_new_target_form" class="form" action="<?= base_url("insertGiftData") ?>" method="post" enctype="multipart/form-data">
															<input type="hidden" id="gift_id" name="id" value="">
		<!--begin::Heading-->
		<div class="mb-13 text-center">
			<!--begin::Title-->
			<h1 class="mb-3">Edit Gift Details</h1>

		</div>
		<!--end::Heading-->
		<!-- <style>
		.small-input {
			width: 300px; /* Adjust width as needed */
			height: 36px; /* Adjust height if needed */
		} -->
	<!-- </style> -->
		

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
			<input type="number" class="form-control form-control-solid small-input" id="gift_price" placeholder="Enter Gift price" name="gift_price" required />
		</div>
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
			<input type="number" class="form-control form-control-solid small-input" id="gift_value" placeholder="Enter Gift Value" name="gift_value" required />
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
			<input type="file" class="form-control form-control-solid small-input" id="gift_file" placeholder="Enter Gift Icon" name="gift_icon" required />
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



<!--end::Modal body-->
</div>
<!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
			</div>			
			<!--end::Card header-->
			<div class="card-body pt-0">
				<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
					<thead>
						<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
							<th class="min-w-100px">Gift id</th>
							<th class="min-w-100px">Gift Image</th>
							<th class="min-w-150px">Gift Value</th>
							<th class="min-w-100px">Gift Price</th>
							<th class="min-w-100px">Gift Status</th>
							
							<th class="min-w-100px">Action</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($record as $gift_item): ?>
						<tr>
							<td><?php echo $gift_item["gift_id"]; ?></td>
							<td><a href="<?php echo $gift_item["gift_icon"]; ?>" target="_blank"><img src="<?php echo $gift_item["gift_icon"]; ?>" alt="" width="50" height="50"></a></td>
							<td><?php echo number_format($gift_item["gift_value"],2); ?></td>
							<td><?php echo number_format($gift_item["gift_price"],2); ?></td>
							
							<td><?php echo $gift_item["status"]; ?></td>
                            
							<td >
								<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
									<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
									
									<div class="menu-item px-3">
										<a href="<?php echo base_url("deleteGiftdata/") .$gift_item["gift_id"]; ?>" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
									</div>
									<div class="menu-item px-3">
										<a  onclick="myFunction(<?php echo $gift_item['gift_id']?>)" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Edit</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</td>
                            <td>
								<!-- <div class="menu-item px-3">
										<a href="<?php echo base_url("editGiftList/") .$gift_item["gift_id"]; ?>" class="menu-link px-3">Edit</a>
								</div> -->
								<!-- <div class="card-toolbar">
									<a href="#" onclick="myFunction(<?php echo $gift_item['gift_id']?>)"class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_mofgcdgfdcgfdal_new_target_edit">Edit</a>
								</div> -->
							</td>
							
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		<!--end::Card-->
	</div>
	<!--end::Content container-->
	</div>
						
	<script>
	// funtion myFunction()
	// {
	// 	alert("helo");
		// $.ajax({
		
		// url : '<?php echo base_url('editPackageList/(:any)')?>',
		// type : 'GET',
		// data : {
		// 	'numberOfWords' : 10
		// },
		// dataType:'json',
		// success : function(data) {              
		// 	alert('Data: '+data);
		// },
		// error : function(request,error)
		// {
		// 	alert("Request: "+JSON.stringify(request));
		// }
		// });

	// };
	function myFunction(v){
		//alert(v);
		var id=v;
		$.ajax({
		
		url : '<?php echo base_url('updateGift')?>',
		type : 'POST',
		data : {
			'id' : id
		},
		//dataType:'json',
		success : function(data) {    
			const record = JSON.parse(data);          
		
			//console.log(record.package_id);
			// alert(record.package_name);
			$('#gift_value').val(record.gift_value);
			$('#gift_price').val(record.gift_price);
			$('#gift_icon').val(record.gift_icon);
			$('#gift_id').val(record.gift_id);
			//$('#kt_modal_new_target_edit').show();
			$('#kt_modal_new_target2').modal('show');
		},
	
		});
	};

	function myFunction3()
	{
		
	}

</script>
