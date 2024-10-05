<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
	<!--begin::Sidebar-->
	<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
		<!--begin::Logo-->
		<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
			<!--begin::Logo image-->
			<a href="<?php echo base_url("dashboard"); ?>">
				<img alt="Video App" src="assets/media/logos/videoappimage.png" class="h-45px app-sidebar-logo-default" />
				<span>Video App</span>
				<!-- <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize" /> -->
			</a>
			<!--end::Logo image-->
			<!--begin::Sidebar toggle-->
			<!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
			<!-- <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
				<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</div> -->
			<!--end::Sidebar toggle-->
		</div>
		<!--end::Logo-->
		<!--begin::sidebar menu-->
		<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
			<!--begin::Menu wrapper-->
			<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
				<!--begin::Scroll wrapper-->
				<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
					<!--begin::Menu-->
					<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="" class="menu-item here show menu-accordion">
							<!--begin:Menu link-->
							<?php //ye h menu vale k liye
								$data = $this->db
										->select("*")
										->from("tbl_menu")
										->where("sub_menu_id", 0)
										->where("status", "Active")
										->order_by("priority", "asc")
										->get()
										->result_array(); ?>
											<?php foreach ($data as $record) {
										//ye h sub menu k option k liye
										$data2 = $this->db
											->select("*")
											->from("tbl_menu")
											->where("sub_menu_id", $record["menu_id"])
											->where("status", "Active")
											->get()
											->result_array();
										if (empty($data2)) { ?>
															<a href="<?php echo base_url($record["url"]); ?>" >
																<span class="menu-link">
																	<span class="menu-icon">
																		<i class="ki-duotone ki-element-11 fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</span>
																	<span class="menu-title"><?= $record["menu_item"] ?></span>
																	<!-- <span class="menu-arrow"></span> -->
																</span>
															</a>
															<?php } else {echo '<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
																					<!--begin:Menu link-->

																					<span class="menu-link">

																						<span class="menu-icon">
																					<i class="ki-duotone ki-element-11 fs-2">
																						<span class="path1"></span>
																						<span class="path2"></span>
																						<span class="path3"></span>
																						<span class="path4"></span>
																					</i>
																				</span>
																						<span class="menu-title">' .
												$record["menu_item"] .
												'</span>
																						<span class="menu-arrow"></span>
																					</span>
																					<div class="menu-sub menu-sub-accordion">
																					';
											foreach ($data2 as $record2) { ?>
															<!--end:Menu link-->
															<!--begin:Menu sub-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="<?php echo base_url($record2["url"]); ?>">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title"><?= $record2["menu_item"] ?></span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<?php }
											echo "</div></div>";
										} 
									}   ?>
															<!--end:Menu item-->
																						<!--begin:Menu item-->
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- </div> -->
<!-- </div>
</div>
</div> -->
<!-- </div> -->
<!-- </div> -->
<div class="continer">



