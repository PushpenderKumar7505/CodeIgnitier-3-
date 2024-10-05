<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/aws/aws-autoloader.php';
require_once APPPATH . 'libraries/BaseController.php';
require_once APPPATH . 'libraries/db_connect.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
use Aws\S3\Exception\S3Exception;
use Aws\S3\ObjectUploader;

class Aws3 {

    private $S3;

    public function __construct() {
        $db = new DB_CONNECT();
        $sql = "SELECT * from settings";
        $query = mysqli_query($db->connect(), $sql);
        $list1 = array();
        if ($query) {
            while ($row = mysqli_fetch_array($query)) {
                $list['type'] = $row['type'];
                $list['value'] = $row['value'];
                array_push($list1, $list);
            }
        }
        foreach ($list1 as $val) {
            $bonusInfo[$val['type']] = $val['value'];
        }
        $this->S3 = S3Client::factory([
                    // 'profile' => 'default',
                    'version' => 'latest',
                    'region' => $bonusInfo['region'],
                    'endpoint' => $bonusInfo['endpoint'],
                    'use_path_style_endpoint' => true,
                    'credentials' => [
                        'key' => $bonusInfo['storage_key'],
                        'secret' => $bonusInfo['storage_secret_key']
                    ],
        ]);
    }

    public function uploadFile($fileName, $sourceFile, $bucket) {
        $result['isSuccess'] = TRUE;
        try {
            $result['data'] = $this->S3->putObject(array(
                'Bucket' => $bucket,
                'Key' => $fileName,
                'SourceFile' => $sourceFile,
                // 'ACL' => 'public-read',
                'ContentType' => mime_content_type($sourceFile),
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
            $result['data'] = $this->S3->getObject(array(
                'Bucket' => $bucket,
                'Key' => $fileName,
                    // 'SaveAs'       => '/var/www/html/application/tmp/abccc.pdf'
            ));
        } catch (AwsException $e) {
            $result['isSuccess'] = false;
            $result['errorMessage'] = $e->__toString();
        }

        return $result;
    }

    public function listBuckets() {
        $buckets = $this->S3->listBuckets();

        foreach ($buckets['Buckets'] as $bucket) {
            echo $bucket['Name'] . "<br>";
        }
    }

    public function createBucket($bucket_name) {
        //Creating S3 Bucket
        try {
            $result = $this->S3->createBucket([
                'Bucket' => $bucket_name,
            ]);
        } catch (AwsException $e) {
            echo $e->getMessage();
        }
    }

}
