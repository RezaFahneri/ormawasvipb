<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

set_include_path(APPPATH . 'third_party/google/' . PATH_SEPARATOR . get_include_path());
require_once APPPATH . 'third_party/google/src/Google/Client.php';

class Google extends Google_Client
{

    function __construct($params = array())
    {

        parent::__construct();
    }
}
