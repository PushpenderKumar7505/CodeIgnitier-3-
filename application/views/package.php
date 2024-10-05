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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Packages List</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="<?=base_url('package')?>" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Packages</li>
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
													<input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Packages">
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
													<!--begin::Add subscription-->
													<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add</a>
													<!--end::Add subscription-->
												</div>
												<!--end::Toolbar-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
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
															<!--begin:Form-->
															<form id="kt_modal_new_target_form" class="form" action="<?= base_url( "insertPackageData") ?>" method="post">
																<!--begin::Heading-->
																<div class="mb-13 text-center">
																	<!--begin::Title-->
																	<h1 class="mb-3">Add Package Form</h1>
																</div>
																<!--end::Heading-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-8 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																		<span class="required">Package Name</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<input type="text" class="form-control form-control-solid"  placeholder="Enter Package Name" name="package_name" required />
																</div>
																<!--end::Input group-->
																<div class="d-flex flex-column mb-8 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																		<span class="required">Package Amount</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<input type="number" class="form-control form-control-solid" placeholder="Enter Package amount" name="amount" required />
																</div>
																<div class="d-flex flex-column mb-8 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																		<span class="required">Package Coins</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<input type="number" class="form-control form-control-solid" placeholder="Enter Package coins" name="coins" required />
																</div>
																<!--end::Label-->
																<!--begin::Input group-->
																<div class="row g-9 mb-8">
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-semibold mb-2">Due Date</label>
																		<!--begin::Input-->
																		<div class="position-relative d-flex align-items-center">
																			<!--begin::Datepicker-->
																			<input type="date" class="form-control form-control-solid ps-12" placeholder="Select a date" name="created" required />
																			<!--end::Datepicker-->
																		</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-semibold mb-2">Package Type</label>
																		<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Package Name" name="package_type" required>
																			<option>Premium</option>
																			<option>Basic</option>
																			<option>Prime</option>
																			<option>Business</option>
																			<option>Standard</option>
																		</select>
																	</div>
																</div>
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
															</form>
															<!--end:Form-->
														</div>
														<!--end::Modal body-->
													</div>
													<!--end::Modal content-->
												</div>
												<!--end::Modal dialog-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!-- Edit pop-up -->
										<div class="modal fade" id="kt_modal_new_target_edit" tabindex="-1" aria-hidden="true">
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
														<!--begin:Form-->
														<form id="kt_modal_new_target_form" class="form" action="<?= base_url("insertPackageData") ?>" method="post">
															<input type="hidden" name="id" id="package_id" value="">
															<!--begin::Heading-->
															<div class="mb-13 text-center">
																	<!--begin::Title-->
																	<h1 class="mb-3">Edit Package Form</h1>
																</div>
																<!--end::Heading-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-8 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																		<span class="required">Package Name</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<input type="text" class="form-control form-control-solid" id="package_name"  placeholder="Enter Package Name" name="package_name" required />
																</div>
																<!--end::Input group-->
																<div class="d-flex flex-column mb-8 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																		<span class="required">Package Amount</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<input type="number" class="form-control form-control-solid" id="package_amount" placeholder="Enter Package amount" name="amount" required />
																</div>
																<div class="d-flex flex-column mb-8 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																		<span class="required">Package Coins</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<input type="number" class="form-control form-control-solid" id="package_coin" placeholder="Enter Package coins" name="coins" required />
																</div>
																<!--end::Label-->
																<!--begin::Input group-->
																<div class="row g-9 mb-8">
																	<!--begin::Col-->
																 
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-semibold mb-2">Package Type</label>
																		<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Package Name" name="package_type" required>
																			<option>Premium</option>
																			<option>Basic</option>
																			<option>Prime</option>
																			<option>Business</option>
																			<option>Standard</option>
																		</select>
																	</div>
																</div>
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
														</form>
														<!--end:Form-->
													</div>
													<!--end::Modal body-->
												</div>
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
								
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive">
												<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_subscriptions_table">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
														<th>Package Id</th>
														<th>Package Name</th>
														<th>Created</th>
														<th>Package Type</th>
														<th> Package Amount</th>
														<th> Package Coins</th>
														<th>Package Status</th>
														<th>Action</th>
														<th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="	
														" style="width: 29.8843px;"></th>
												</thead>
												<tbody class="text-gray-600 fw-semibold">
												<?php //  print_r($record);exit;
											//    $i = 1;
													foreach ($record as $user): ?>
														<tr>
															<td><?php echo $user["package_id"];?></td>
															<td><?php echo $user["package_name"];?></td>
															<td><?php echo $user["created"];?></td>
															<td><?php echo $user["package_type"];?></td>
															<td><?php echo $user["amount"];?></td>
															<td><?php echo $user["coins_value"];?></td>
															<td><?php echo $user["package_status"];?></td>
															<td>
																<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																	<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																<!--begin::Menu-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																	<!--begin::Menu item-->
																	<!-- <div class="menu-item px-3">
																		<a href="<?php echo base_url("editPackageList/") . $user["package_id"]; ?>" class="menu-link px-3">Edit</a>
																	</div> -->
																	<div class="menu-item px-3">
																		<a href="<?php echo base_url( "viewPackageTable/" ).$user[ "package_id"]; ?>" class="menu-link px-3">View</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
										<a  onclick="myFunction(<?php echo $user['package_id']?>)" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Edit</a>
									</div>
																	<div class="menu-item px-3">
																		<a href="<?php echo base_url("deletePackage/") .$user[ "package_id"]; ?>" class="menu-link px-3" data-kt-subscription-table-filter="delete_row">Delete</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu-->
															</td>
															<td>
																
															</td>
														</tr>
														<?php endforeach; ?>
												</tbody>
											</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
											<!-- <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"> -->
												</div></div></div>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
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
		
		url : '<?php echo base_url('updatePackage')?>',
		type : 'POST',
		data : {
			'id' : id
		},
		//dataType:'json',
		success : function(data) {    
			const record = JSON.parse(data);          
		
			//console.log(record.package_id);
			// alert(record.package_name);
			$('#package_id').val(record.package_id);
			$('#package_name').val(record.package_name);
			$('#package_amount').val(record.amount);
			$('#package_type').val(record.package_type);
			$('#package_coin').val(record.coins_value);
			//$('#kt_modal_new_target_edit').show();
			$('#kt_modal_new_target_edit').modal('show');
		},
	
		});
	};

	

</script>