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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">View Subscriptions</h1>
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
											<li class="breadcrumb-item text-muted">Subscriptions</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container ">
									<!--begin::Card-->
									<div class="card">
										<!--end::Card header-->	
										<div class="card-body pt-3">
													<!--begin::Section-->
													<div class="mb-10">
														<!--begin::Title-->
														<h5 class="mb-4">Billing Address:</h5>
														<!--end::Title-->
														<!--begin::Details-->
														<div class="d-flex flex-wrap py-5">
															<!--begin::Row-->
															<div class="flex-equal me-5">
																<!--begin::Details-->
																<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
																	<!--begin::Row-->
																	<tr><th>Package Id :</th>
																<th><?php echo $record->package_id;?></th></tr>
																	<tr><th>Package Name :</th>
																	<th><?php echo $record->package_name;?></th>
																</tr>
																	<tr><th>Created :</th>
																	<th><?php echo $record->created;?></th>
																</tr>
																	<tr><th>Package Type:</th>
																	<th><?php echo $record->package_type;?></th>
																</tr>
																	<tr><th>Package Amount:</th>
																	<th><?php echo $record->amount;?></th>
																</tr>
																	<tr><th>Package Coins:</th>
																	<th><?php echo $record->coins_value;?></th>
																</tr>
																</table>
																<!--end::Details-->
															</div>
															<!--end::Row-->
															
														</div>
														<!--end::Row-->
													</div>
													<!--end::Section-->
												</div>
									</div>
									<!--end::Card-->
									
								</div>
								<!--end::Content container-->
							</div>
							<br>
							
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
													<input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Subscriptions">
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->	
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive">
												<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_subscriptions_table">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
													<th class="min-w-100px">Order id</th>
													<th class="min-w-100px">Package Id</th>
													<th class="min-w-100px">Package Name</th>
													<th class="min-w-100px">Purchase Date</th>
													<th class="min-w-100px">User Id</th>
													<th class="min-w-100px">User Name</th>
													<th class="min-w-100px">User Phone No</th>
													<!-- <th class="min-w-100px">Invoice</th> -->
												</thead>
												<tbody class="text-gray-600 fw-semibold">
												<?php //  print_r($record);exit;
											//    $i = 1;
													foreach ($record2 as $user): ?>
														<tr>
															<td><?php echo $user["user_id"]; ?></td>
															<td><?php echo $user["package_id"]; ?></td>
															<td><?php echo $user["package_name"]; ?></td>
															<td><?php echo $user["created"]; ?></td>
															<td><?php echo $user["user_id"]; ?></td>
															<td><?php echo $user["name"]; ?></td>
															<td><?php echo $user["phone"]; ?></td>
															<!-- <td><?php echo $user["package_status"]; ?></td> -->
															<!--end::Menu-->
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
