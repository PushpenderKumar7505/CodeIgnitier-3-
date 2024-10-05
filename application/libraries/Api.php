<?php
require 'db_connect.php';
$con = new DB_CONNECT();
$serInfo = $con->api_setting();
$api_server = $serInfo['server'];
$api_key    = $serInfo['api_key'];
$calculation    = $serInfo['calculation'];
require 'CrickApi.php';
require 'EntityApi.php';

class Api
{
    private $api_server;
    private $api_key;
    private $obj;
    public function __construct()
    {
        $this->api_key= $GLOBALS['api_key'];
        $this->api_server = $GLOBALS['api_server'];
        $this->calculation = $GLOBALS['calculation'];
        $this->obj= new $this->api_server();
    }
    
    function matches()
    {
        return $this->obj->matches($this->api_key);
    }
    /**
     * This Method retuens Squad Details from Crick API Server.
     */
    function fantasySquad($match_id, $competition_id)
    {
        
        return $this->obj->fantasySquad($this->api_key, $match_id);
    }
    /**
     * This Method retuens Player Stats Details from Crick API Server.
     */
    function playerStats($player_id)
    {
        return $this->obj->playerStats($this->api_key, $player_id);
    }
    /**
     * This Method retuens Fantasy Summary Details from Crick API Server.
     */
    
    function fantasySummary($match_id)
    {
        if($this->calculation == 'Auto' && $this->api_server == 'EntityApi'){
          $res = array('type' => 'Autometic', 'data' => json_decode($this->obj->auto_fantasySummary($this->api_key, $match_id)));
        }
        else{
           $res = array('type' => 'Manual', 'data' => json_decode($this->obj->fantasySummary($this->api_key, $match_id)));
       }
        return json_encode($res);//$this->obj->fantasySummary($this->api_key, $match_id);
    }
    
    /**
     * This Method retuens players List from Crick API Server.
     */
    function playerFinder($player_name)
    {
        return $this->obj->playerFinder($this->api_key, $player_name);
    }
    
}