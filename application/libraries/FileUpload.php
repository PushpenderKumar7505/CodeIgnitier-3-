<?php
ini_set('display_errors', 1);
defined('BASEPATH') OR exit('No direct script access allowed');

//echo ''.APPPATH . 'libraries/aws/aws-autoloader.php';
require_once APPPATH . 'libraries/aws/aws-autoloader.php';
require_once APPPATH . 'libraries/db_connect.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

class FileUpload {
    public $db;
    private $S3_object;
    private $bucket;
    private $server_type;
    private $region;
    private $endpoint;
    private $storage_key;
    private $storage_secret_key;

     public function __construct() {
        $this->db = new DB_CONNECT();
        
        $settingsData = $this->get_settings_data();
        $bucket_info = [];
        foreach ($settingsData as $val) {
            $bucket_info[$val['typ']] = $val['val'];
        }
        $this->bucket = $bucket_info['bucketName'];
        $this->server_type = $bucket_info['ServerType'];
        $this->endpoint = $bucket_info['endpoint'];
        $this->region = $bucket_info['region'];
        $this->storage_key = $bucket_info['storage_key'];
        $this->storage_secret_key = $bucket_info['storage_secret_key'];

        $this->S3_object = S3Client::factory([
                    'version' => 'latest',
                    'region' => $this->region,
                    'endpoint' => $this->endpoint,
//                    'ACL' => 'public-read',
                    'use_path_style_endpoint' => true,
                    'credentials' => [
                        'key' => $this->storage_key,
                        'secret' => $this->storage_secret_key
                    ],
        ]);
    }

    function uploadFile($fileNameArray, $folderName) {
        if ($this->server_type == 'AWS' || $this->server_type == 'DIGITAL') {
            $result = $this->uploadFileOnServer($fileNameArray, $folderName);         
            if ($result['isSuccess']) {
                $image_name = $result['data']['ObjectURL'];
                return $image_name;
            } else {
                return ['e' => ['error' => $result->display_errors()]];
            }
        } else {
            return ['e' => ['error' => 'Invalid server type']];
        }
    }

    private function get_settings_data() {

        $sql = "SELECT type, value FROM settings";
        $result = $this->db->connect()->query($sql);
        $settingsData = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $settingsData[] = array(
                    'typ' => $row['type'],
                    'val' => $row['value']
                );
            }
            //print_r($settingsData);exit;
        } else {
            echo "No settings found";
        }
        return $settingsData;
    }

    public function uploadFileOnServer($fileNameArray, $folderName) {
  //   echo "<pre>";   print_r($fileNameArray);exit;
        $result['isSuccess'] = TRUE;
        try {
            $file_name = $folderName . '/' . $fileNameArray['name'];
            $result['data'] = $this->S3_object->putObject(array(
                'Bucket' => $this->bucket,
                'Key' => $file_name,
                'ACL' => 'public-read',
                'SourceFile' => $fileNameArray['tmp_name'],
                'ContentType' => $fileNameArray['type'], // Using file type as content type
            ));
        } catch (AwsException $e) {
            $result['isSuccess'] = FALSE;
            $result['errorMessage'] = $e->__toString();
        }
        return $result;
    }

    public function downloadFile($fileName, $bucket) {
        $result['isSuccess'] = true;
        try {
            $result['data'] = $this->S3_object->getObject(array(
                'Bucket' => $bucket,
                'Key' => $fileName,
//                'SaveAs'       => '/var/www/html/application/tmp/abccc.pdf'
            ));
        } catch (AwsException $e) {
            $result['isSuccess'] = false;
            $result['errorMessage'] = $e->__toString();
        }
        return $result;
    }

}
