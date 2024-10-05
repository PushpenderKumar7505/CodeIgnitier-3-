<?php
defined("BASEPATH") or exit("No direct script access allowed");

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the User guide for complete details:
|
|	https://codeigniter.com/Userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route["default_controller"] = "LoginController";
$route["dashboard"] = "LoginController/dash";
$route["profile"] = "LoginController/profile";
$route["profile_setting"] = "LoginController/profile_setting";
$route["profile_security"] = "LoginController/profile_security";
$route["404_override"] = "";
$route["translate_uri_dashes"] = false;
// $route["list"] = "login/list";
$route["customer"] = "UserController/customerList";
$route["hostess"] = "UserController/hotessList";
$route["dashboard"] = "UserController/dashboard";
$route["coustomer_view/(:any)"] = "UserController/coustomerView/$1";
$route["userdetails/(:any)"] = "HostessController/hostestView/$1";
$route["agentList"] = "UserController/agentList";
$route["subadminRoleList"] = "UserController/roleList";
$route["viewrole"] = "UserController/viewRole";
// $route['rolelist']='login/rolelist';
// $route['viewlist']='login/viewlist';
// $route['navbar']='login/navbar';
$route["Userview"] = "UserController/userView";
$route["subadminUsers"] = "SubAdminController/subAdminList";
$route["updateEmail"] = "SubAdminController/emailUpdate";
$route["passwordUpdate"] = "SubAdminController/passwordUpdate";
$route["deleteSubadmin/(:any)"] = "SubAdminController/passwordUpdate/$1";
$route["subadminview/(:any)"] = "SubAdminController/subAdminView/$1";
$route["setting"] = "UserController/setting";
$route["fileManagerFolder"] = "UserController/fileManagerFolder";
$route["viewUseredit"] = "UserController/viewUserEdit";
$route["projectViewPage"] = "UserController/projectViewPage";
$route["sub"] = "UserController/subscription";
$route["sub_add"] = "UserController/subAdd";
$route["sub_vi"] = "UserController/subView";
$route["userDetail"] = "UserController/userDetail";
// $route["sub_view"] = "Packagecontroller/fetch_data";
$route["login_page"] = "UserController/loginPage";
$route["loginForm"] = "LoginController/loginFormDataMatch";
$route["logout"] = "LoginController/logout";
$route["customerDetails"] = "CustomerController/customerDetails";
$route["hostessDetails"] = "HostessController/hostessDetails";
$route["agentDetails"] = "AgentController/agentDetails";
$route["package"] = "PackageController/packageList";
// $route["viewPackageTable"] = "PackageController/viewPackageTable";
$route["updatePackage"] = "PackageController/updatePackage";
// $route["add"] = "Packagecontroller/add";
$route["insertPackageData"] = "PackageController/insertPackageData";
// $route["editPackageList/(:any)"] = "PackageController/editPackageList/$1";
$route["editPackageList"] = "PackageController/editPackageList";
$route["deletePackage/(:any)"] = "PackageController/deletePackage/$1";
$route["deleteHostessdata/(:any)"] = "HostessController/deleteHostessdata/$1";
$route["Billing"] = "HostessController/hostessBill";
$route["Logs"] = "HostessController/hostessLogs";
$route["deleteAgentdata/(:any)"] = "AgentController/deleteAgentdata/$1";
$route["deleteGiftdata/(:any)"] = "GiftController/deleteGiftdata/$1";
$route["deleteUserData/(:any)"] = "UserController/deleteUserData/$1";
$route["giftDetails"] = "GiftController/giftDetails";
$route["giftAddForm"] = "GiftController/giftAddForm";
$route["insertGiftData"] = "GiftController/insertGiftData";
$route["editGiftList/(:any)"] = "GiftController/editGiftList/$1";
$route["gift_edit_form"] = "GiftController/gift_edit_form";
$route["updateGift"] = "GiftController/updateGift";
$route["settingList"] = "SettingController/settingList";
$route["appFormSubmitData"] = "SettingController/appFormSubmitData";
$route["bonusFormSubmit"] = "SettingController/bonusFormSubmit";
// $route["data"] = "SettingController/data";
$route["updateSettingData"] = "SettingController/updateSettingData";
// $route["view/(:any)"] = "PackageController/viewPackageData/$1";
$route["viewPackageTable/(:any)"] = "PackageController/viewPackageData/$1";
$route["bankDetailsUpdate"] = "HostessController/bankDetails";
$route["updatebankdetailsuser"] = "HostessController/bankDetailsUser";
//$route["agencyView/(:any)"] = "AgentController/hostestView/$1";



