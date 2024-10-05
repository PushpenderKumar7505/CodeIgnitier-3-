<?php

//require 'Caw_upload.php';
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class : BaseController
 * Base Class to control over all the classes
 */
class BaseController extends CI_Controller {

    protected $role = '';
    protected $vendorId = '';
    protected $name = '';
    protected $roleText = '';
    protected $global = array();
    private $subject;

    /**
     * Takes mixed data and optionally a status code, then creates the response
     *
     * @access public
     * @param array|NULL $data
     *        	Data to output to the user
     *        	running the script; otherwise, exit
     */
    public function response($data = NULL) {
        $this->output->set_status_header(200)->set_content_type('application/json', 'utf-8')->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
        exit();
    }

    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn() {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            redirect('login');
        } else {
            $this->role = $this->session->userdata('role');
            $this->vendorId = $this->session->userdata('userId');
            $this->name = $this->session->userdata('name');
            $this->view = $this->session->userdata('view');
            $this->roleText = $this->session->userdata('roleText');

            $this->global ['name'] = $this->name;
            $this->global ['role'] = $this->role;
            $this->global ['view'] = $this->view;
            $this->global ['userId'] = $this->vendorId;
            $this->global ['role_text'] = $this->roleText;
        }
    }

    /**
     * This function is used to check the access
     */
    function isAdmin() {
        if ($this->role != ROLE_ADMIN) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This function is used to check the access
     */
    function isTicketter() {
        if ($this->role != ROLE_ADMIN || $this->role != ROLE_MANAGER) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This function is used to load the set of views
     */
    function loadThis() {
        $this->global ['pageTitle'] = 'play11 : Access Denied';

        $this->load->view('includes/header', $this->global);
        $this->load->view('access');
        $this->load->view('includes/footer');
    }

    /**
     * This function is used to logged out user from system
     */
    function logout() {
        $this->session->sess_destroy();

        redirect('login');
    }

    /**
     * This function used to load views
     * @param {string} $viewName : This is view name
     * @param {mixed} $headerInfo : This is array of header information
     * @param {mixed} $pageInfo : This is array of page information
     * @param {mixed} $footerInfo : This is array of footer information
     * @return {null} $result : null
     */
    function loadViews($viewName = "", $headerInfo = NULL, $pageInfo = NULL, $footerInfo = NULL) {

        $this->load->view('rander/header', $headerInfo);
        $this->load->view($viewName, $pageInfo);
        $this->load->view('rander/footer', $footerInfo);
    }

    /**
     * This function used provide the pagination resources
     * @param {string} $link : This is page link
     * @param {number} $count : This is page count
     * @param {number} $perPage : This is records per page limit
     * @return {mixed} $result : This is array of records and pagination data
     */
    function paginationCompress($link, $count, $perPage = 10) {
        $this->load->library('pagination');

        $config ['base_url'] = base_url() . $link;
        $config ['total_rows'] = $count;
        $config ['uri_segment'] = SEGMENT;
        $config ['per_page'] = $perPage;
        $config ['num_links'] = 5;
        $config ['full_tag_open'] = '<nav><ul class="pagination">';
        $config ['full_tag_close'] = '</ul></nav>';
        $config ['first_tag_open'] = '<li class="arrow">';
        $config ['first_link'] = 'First';
        $config ['first_tag_close'] = '</li>';
        $config ['prev_link'] = 'Previous';
        $config ['prev_tag_open'] = '<li class="arrow">';
        $config ['prev_tag_close'] = '</li>';
        $config ['next_link'] = 'Next';
        $config ['next_tag_open'] = '<li class="arrow">';
        $config ['next_tag_close'] = '</li>';
        $config ['cur_tag_open'] = '<li class="active"><a href="#">';
        $config ['cur_tag_close'] = '</a></li>';
        $config ['num_tag_open'] = '<li>';
        $config ['num_tag_close'] = '</li>';
        $config ['last_tag_open'] = '<li class="arrow">';
        $config ['last_link'] = 'Last';
        $config ['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = $config ['per_page'];
        $segment = $this->uri->segment(SEGMENT);

        return array(
            "page" => $page,
            "segment" => $segment
        );
    }

    /**
     * This function is used to check entered url by user  
     */
    function validateUrl($id) {
        $this->db->select("*");
        $this->db->from('tbl_users');
        $this->db->where('userId', $id);
        $query = $this->db->get();
        $res = $query->row();
        if (!empty($res) && $res->roleId == 7) {
            redirect('referralDashboard');
        }
    }

    function getBaseURL() {
        $this->config->load('config');
        $host_url = $this->config->item('host_url');
        return $host_url;
    }

    function getAdminURL() {
        $base = $this->getBaseURL() . "/cpanel/";
        return $base;
    }

    function getAPIURL() {
        $base = $this->getBaseURL() . "/webservices/";
        return $base;
    }

    function getAPIKEY() {
        $this->config->load('config');
        $api_key = $this->config->item('api_key');
        return $api_key;
    }

    function file_storage_folder() {
        $servertype = $this->get_settings_data();
        foreach ($servertype as $val) {
            $settingsInfo[$val->typ] = $val->val;
        }
        $info = $settingsInfo;
        $storage_forlder = $info['server_storage_folder'];
        $folderName = $storage_forlder;
        return $folderName;
    }

    function getDataFromApi($apiUrl, $param) {
        $ch = @curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
        $rawdata = curl_exec($ch);
        curl_close($ch);
        return $rawdata;
    }

    function sendNotificationToUser($userId, $title, $message) {

        $postData = '';
        $params = array(
            'title' => $title,
            'msg' => $message,
            'image' => null,
            'user_id' => $userId
        );

        $postData = http_build_query($params);

        $ch = curl_init();
        $url = $this->getAPIURL() . 'fcm/send_notification.php';
        echo $url;
        die;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $output = curl_exec($ch);
        $output_data = json_decode($output);
        pre($output);
        die;
        curl_close($ch);
    }

    function sendEmailToUser($to, $subject, $name, $message) {
        $post = [
            'to' => $to,
            'subject' => $subject,
            'name' => $name,
            'message' => $message,
        ];
        $email_url = $this->getAPIURL() . 'sendEmailApi.php';
        //echo $email_url;die;
        $ch = curl_init($email_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $res = curl_exec($ch);
        // close the connection, release resources used
        curl_close($ch);
        return $res;
    }

    function refundAmount($league_id, $match_id) {
        $this->load->model('teams_model');
        $this->load->model('user_model');
        $this->load->model('match_model');
        $this->load->model('transaction_model');
        $this->load->model('joined_league_model');
        $this->load->model('notification_model');
        $this->load->model('league_model');
// Match Informtion
        $matchInfo = $this->match_model->getMatch($match_id);
        $team1 = $matchInfo[0]->team1;
        $team2 = $matchInfo[0]->team2;
        $match_name = $team1 . ' vs ' . $team2;
// League Information
        $league_info = $this->league_model->getLegueInforefund($league_id);
        //  pre($league_info);
        $entry_fees = $league_info[0]->entry_fees;
        $league_status = $league_info[0]->status;
        $refund_status = $league_info[0]->refund;
// User Joined List regarding this league
        $contestJoinedUserLIst = $this->league_model->getContestJoinedUserList($league_id);
        if (!empty($contestJoinedUserLIst)) {
            foreach ($contestJoinedUserLIst as $joinedList) {
                $txn_id = $this->setting_model->getTransID();
                $used_cash_bonus = $joinedList->used_cash_bonus;
                $used_referral_binus = $joinedList->used_referral_binus;
                $used_add_cash = $joinedList->used_add_cash;
                $used_winning_amount = $joinedList->used_winning_amount;
                $user_joined_id = $joinedList->id;
                $refund = $joinedList->refund;
                if ($refund == 0) {
                    $userid = $joinedList->user_id;
                    $trn_data = array();
                    $trn_ids = array();
                    $user_info = $this->user_model->getUser($userid);
                    $ckc_transaction_entry = $this->league_model->checkRefundTransactionByContestJoin($user_joined_id, $userid);
                    if (empty($ckc_transaction_entry)) {
                        $refund_msg = "Your entry fee has been refunded for the Rs." . "$entry_fees " . "contest. The contest you joined had to be cancelled as all the slots were not filled or match is Abandoned.";
                        $name = $user_info[0]->name;
                        $to = $user_info[0]->email;
                        $teams_bw = $match_name;
                        $date = date("d-m-Y");
                        $this->subject = "Refund Amount confirmation!";
                        $this->sendEmailToUser($to, $this->subject, $name, $refund_msg);
                        $wallet_amount = $user_info[0]->cash_bonus + $user_info[0]->referral_bonus + $user_info[0]->add_cash + $user_info[0]->cash_winning + $entry_fees;
                        $trn_data = array(
                            'txn_id' => $txn_id,
                            'user_id' => $userid,
                            'txn_amt' => $entry_fees,
                            'txn_status' => 'CREDIT',
                            'txn_type' => 'REFUND_AMT',
                            'wallet_amount' => $wallet_amount,
                            'txn_msg' => $refund_msg,
                            'joined_id' => $user_joined_id
                        );
                        $this->transaction_model->addTrans($trn_data);
                        $user_data = array(
                            'cash_bonus' => $user_info[0]->cash_bonus + $used_cash_bonus,
                            'referral_bonus' => $user_info[0]->referral_bonus + $used_referral_binus,
                            'add_cash' => $user_info[0]->add_cash + $used_add_cash,
                            'cash_winning' => $user_info[0]->cash_winning + $used_winning_amount,
                            'wallet_amount' => $wallet_amount
                        );
                        $this->user_model->editAppUser($user_data, $userid);
                        $refundUpdate = array(
                            "refund" => 1
                        );
                        $this->load->model('joined_league_model');
                        $lastId = $this->joined_league_model->updateContestrefund($refundUpdate, $user_joined_id);
                    }
                    //MARK: Notification template............
                    $template = $this->notification_template('REFUND');
                    $VarValue = ["#VAR1#"];
                    $dynamicVal = [$entry_fees];
                    $msg = str_replace($VarValue, $dynamicVal, $template->message);
                    $title = $template->title;
                    $postData = '';
                    if ($template->status == 'ACTIVE') {
                        $params = array(
                            'title' => $title,
                            'msg' => $msg,
                            'image' => null,
                            'user_id' => $userid
                        );
                        $notify_url = $this->getAPIURL() . 'fcm/send_notification.php';
                        $postData = http_build_query($params);
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $notify_url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($ch, CURLOPT_HEADER, false);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
                        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 400);
                        $output = curl_exec($ch);
                        $output_data [] = json_decode($output);
                        curl_close($ch);
                        $params = array(
                            'title' => $title,
                            'message' => $msg,
                            'user_id' => $userid
                        );
                        $nid = $this->notification_model->addNewNotification($params);
                    }
                }
            }
        }
        $data = array(
            'status' => 'CANCEL',
            'cancel_desc' => 'Auto Cancelled because League not full',
            'refund' => true
        );
        $this->league_model->updateStatus($data, $league_id);
//}
    }

//AWS3 FILE UPLOAD COMMON FUNCTION THAT IS USED TO ALL UPLOAD FILES.
//    function file_upload_function($file_name, $folder_name, $page = NULL) {
//        $servertype = $this->get_settings_data();
//        foreach ($servertype as $val) {
//            $settingsInfo[$val->typ] = $val->val;
//        }
//        $bucket_info = $settingsInfo;
//        $bucket = $bucket_info['bucketName'];
//        $page = '';
//        $server_type = $bucket_info['ServerType'];
//        $end_points = $bucket_info['endpoint'];
//        if ($server_type == 'AWS') {
//            $config['allowed_types'] = '*';
//            $config['encrypt_name'] = TRUE;
//            $this->load->library('upload');
//            $this->load->library('caw_upload', $config);
//            if (!$this->caw_upload->do_upload_caw_file($file_name, $bucket, $folder_name)) {
//                $data['e'] = array('error' => $this->caw_upload->display_errors());
//                return $data;
//            } else {
//                $data = $this->caw_upload->data();
//                $image = $data['file_name'];
//                $uRl = 'https://' . $bucket . '.s3.ap-south-1.amazonaws.com/' . $image;
//                $dataArray = array('image' => $image, 'url' => $uRl);
//                return $dataArray;
//            }
//        } else if ($server_type == 'DIGITAL') {
//            $config['allowed_types'] = '*';
//            $config['encrypt_name'] = TRUE;
//            $this->load->library('upload');
//            $this->load->library('caw_upload_digital', $config);
//            $file_storage_folder = $this->file_storage_folder();
//            if (!$this->caw_upload_digital->do_upload_caw_file($file_name, $bucket, $folder_name, $file_storage_folder)) {
//                $data['e'] = array('error' => $this->caw_upload_digital->display_errors());
//                //pre( $data['e']);die;
//                return $data;
//            } else {
//                $data = $this->caw_upload_digital->data();
//                // pre($data);die;
//                $image = $data['file_name'];
//                $uRl = $end_points . '/' . $bucket . '/' . $image;
//                $dataArray = array('image' => $image, 'url' => $uRl);
//                return $dataArray;
//            }
//        } else {
//            $config = array();
//            if ($page == 'bankVerify') {
//                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder_name . '/';
//            } else {
//                $config['upload_path'] = './' . $folder_name . '/';
//            }
//            $config['allowed_types'] = 'gif|jpg|png';
//            $config['overwrite'] = FALSE;
//            $this->load->library('upload', $config);
//            $files = $_FILES;
//            $this->upload->initialize($config);
//            $this->upload->do_upload($file_name);
//            $dataInfo = $this->upload->data();
//            $image = $dataInfo['file_name'];
//            $uRl = base_url() . $folder_name . '/' . $image;
//            $dataArray = array('image' => $image, 'url' => $uRl);
//            return $dataArray;
//        }
//    }

    function get_settings_data() {
        $this->load->model('setting_model');
        $res = $this->setting_model->getBonusInfo();
        return $res;
    }

    function getAWSURL() {
        $this->config->load('config');
        $awsUrl = $this->config->item('aws_url');
        return $awsUrl;
    }

// used to generate manual match id for all sports type
    function form_series() {
        $query = $this->db->select("*")
                ->from("form_series")
                ->where("name", 'match')
                ->get();
        $sql = $query->row();
        if (!empty($sql)) {
            return $sql;
        }
        return FALSE;
    }

    function email_template($type) {
        $query = $this->db->select("*")
                ->from("template")
                ->where("template_used", $type)
                ->get();
        $sql = $query->row();
        if (!empty($sql)) {
            return $sql;
        }
        return FALSE;
    }

    function notification_template($type) {
        $query = $this->db->select("*")
                ->from("notification_templates")
                ->where("type", $type)
                ->get();
        $sql = $query->row();
        if (!empty($sql)) {
            return $sql;
        }
        return FALSE;
    }

    function ip_url() {
        $this->config->load('config');
        $ipUrl = $this->config->item('ip_url');
        return $ipUrl;
    }

    function lineups_ready_to_start($match_id) {
        $list = array();
        $this->load->model('notification_model');
        $upcomingMatches = $this->notification_model->get_upcoming_matches($match_id);
        if (!empty($upcomingMatches)) {
            foreach ($upcomingMatches as $match) {
                date_default_timezone_set('Asia/Kolkata');
                $current_time = date('Y-m-d H:i:s', time());
                $live_start_date = date('Y-m-d H:i:s', strtotime('-15 minutes', strtotime($match->start_dt)));
                if ((strtotime($current_time) > strtotime($live_start_date))) {
                    $checkSendNotification = $this->notification_model->check_notification_by_match($match->match_id);
                    if (empty($checkSendNotification)) {
                        //  $users = $this->notification_model->get_users_for_notification();
                        //if (!empty($users)) {
                        //  foreach ($users as $u) {
                        //$userid = $u->id;
                        //MARK: Notification template............
                        $template = $this->notification_template('LINEUPS_START');
                        $VarValue = ["#VAR1#", "#VAR2#"];
                        $dynamicVal = [$match->team1_short_name, $match->team2_short_name];
                        $msg = str_replace($VarValue, $dynamicVal, $template->message);
                        $title = str_replace($VarValue, $dynamicVal, $template->title);
                        $postData = '';
                        if ($template->status == 'ACTIVE') {
                            $params = array(
                                'title' => $title,
                                'msg' => $msg,
                                'image' => null,
                                'user_id' => 4942
                            );
                            $notify_url = $this->getAPIURL() . 'fcm/send_notification.php';
                            $postData = http_build_query($params);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $notify_url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                            curl_setopt($ch, CURLOPT_HEADER, false);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
                            curl_setopt($ch, CURLOPT_TIMEOUT_MS, 400);
                            $output = curl_exec($ch);
                            $output_data = json_decode($output);
                            curl_close($ch);
                            if (!empty($output_data) && $output_data->success == 1) {
                                $params = array(
                                    'title' => $title,
                                    'message' => $msg,
                                    'user_id' => 4942
                                );
                                $nid['id'] = $this->notification_model->addNewNotification($params);
                                array_push($list, $nid);
                            }
                        }
                    }
                    if (!empty($list)) {
                        $data = array(
                            "match_id" => $match->match_id,
                            "before_lineups" => 1
                        );
                        $this->notification_model->update_notification_schadule($data);
                    }
                    //}
                    //}
                }
            }
        }
    }

    function lineups_out() {
        $this->load->model('notification_model');
        $lineupmatches = $this->notification_model->get_lineups_matches();
        if (!empty($lineupmatches)) {
            date_default_timezone_set('Asia/Kolkata');
            foreach ($upcomingMatches as $match) {
                $checkSendNotification = $this->notification_model->check_notification_forLineupsOut($match->match_id);
                if (empty($checkSendNotification)) {
                    // $users = $this->notification_model->get_users_for_notification();
                    // if (!empty($users)) {
                    //foreach ($users as $u) {
                    // $userid = $u->id;
                    //MARK: Notification template............
                    $template = $this->notification_template('LINEUPS_OUT');
                    $VarValue = ["#VAR1#", "#VAR2#"];
                    $dynamicVal = [$match->team1_short_name, $match->team2_short_name];
                    $msg = str_replace($VarValue, $dynamicVal, $template->message);
                    $title = str_replace($VarValue, $dynamicVal, $template->title);
                    $postData = '';
                    if ($template->status == 'ACTIVE') {
                        $params = array(
                            'title' => $title,
                            'msg' => $msg,
                            'image' => null,
                            'user_id' => 4
                        );
                        $notify_url = $this->getAPIURL() . 'fcm/send_notification.php';
                        $postData = http_build_query($params);
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $notify_url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($ch, CURLOPT_HEADER, false);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
                        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 400);
                        $output = curl_exec($ch);
                        $output_data = json_decode($output);
                        curl_close($ch);
                        if (!empty($output_data) && $output_data->success == 1) {
                            $params = array(
                                'title' => $title,
                                'message' => $msg,
                                'user_id' => 4
                            );
                            $nid['id'] = $this->notification_model->addNewNotification($params);
                            array_push($list, $nid);
                        }
                    }
                }
                if (!empty($list)) {
                    $data = array(
                        "lineups_out" => 1
                    );
                    $this->notification_model->update_notification_lineupOut($data, $match->match_id);
                    // }
                    // }
                }
            }
        }
    }

    function tds_calcutation_summary($user_id, $current_withdraw, $wr_id) {
        $effective_date = '2023-06-17 00:00:00';
        $actual_tds_amount = 0;
        $opening_banalce = $this->withdraw_request_model->get_opening_balance($user_id);
        $opening_banalce = $opening_banalce->opening_balance;
        $total_deposit = $this->withdraw_request_model->get_total_deposit($user_id, $effective_date);
        $total_deposit_amt = $total_deposit->total_deposit;
        $total_tds_deduction = $this->withdraw_request_model->get_tds_deduction($user_id, $effective_date);
        //pre($total_tds_deduction);die;
        if (!empty($total_tds_deduction)) {
            $previous_withdraw = $total_tds_deduction->total_withdraw;
            $previous_withdraw_amt = $total_tds_deduction->total_withdraw;
        } else {
            $previous_withdraw_amt = 0;
            $previous_withdraw = 0;
        }
        $current_withdraw = $current_withdraw;
        $total_withdraw_amt = $previous_withdraw + $current_withdraw;
        //echo $total_withdraw_amt;die;
        if (!empty($total_tds_deduction)) {
            $tds_deducted_till_date = $total_tds_deduction->taxable_amount;
        } else {
            $tds_deducted_till_date = 0;
        }
        $taxable_amt = ($total_withdraw_amt - $total_deposit_amt - $opening_banalce - $tds_deducted_till_date);
        //echo $taxable_amt ;die;
//echo $taxable_amt;die;
        if ($taxable_amt < 0) {
            $taxable_amt = 0;
        } else {
            $taxable_amt = $taxable_amt;
        }
        if ($taxable_amt > 0) {
            $tds_percent = $this->setting_model->getBonusInfo();
            $tds_per = $tds_percent[27]->val;
            $actual_tds_amount = $taxable_amt * $tds_per / 100;
        }
        $net_withdrawal_amount = $current_withdraw - $actual_tds_amount;

        $data = array(
            'wr_id' => $wr_id,
            'user_id' => $user_id,
            'previous_withdraw' => $previous_withdraw_amt,
            'current_withdraw' => $current_withdraw,
            'total_withdraw' => $total_withdraw_amt,
            'tds_deducted_till_date' => $tds_deducted_till_date,
            'taxable_amount' => $taxable_amt,
            'actual_tds_amount' => $actual_tds_amount,
            'net_withdrawal_amount' => $net_withdrawal_amount
        );
        $this->withdraw_request_model->insert_tds_summary($data);
        $update_request = array(
            'tds_amount' => $actual_tds_amount,
            'net_withdraw_amount' => $net_withdrawal_amount,
        );
        $this->withdraw_request_model->editstatus($update_request, $wr_id);
    }

  
    function file_upload_function($file_name, $folder_name, $page = NULL) {
        $this->load->library('FileUpload');
        $fileUpload = new FileUpload();
        $response = $fileUpload->uploadFile($file_name, $folder_name);
        return $response;
    }

}
