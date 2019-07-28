<?php

class ImpactData
{
    protected $source;
    protected $token;
    protected $hostEndPoint;
    protected $hostName;
    protected $ip;
    protected $browserLanguage;
    protected $countryDetected;
    protected $regionDetected;
    /**
     * Constructor with config file from services
     * @param [type] $config
     */
    public function __construct()
    {

     $this->source=1;
     $this->token='E6d5AhJ7vMN5l4anPT3NoNl8lQQLqMDn';
     $this->hostEndPoint='http://176.221.37.155/api/register';
     $this->hostName='impact.webuzz.com.pt';
     $this->ip=$this->getUserIP();
     $this->browserLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    }

    /**
     * gets the array data fields to send and returns the response from server
     * @return Json
     */

    public function send($jsonContent)
    {
        $jsonContent['source']           = $this->source;
        $jsonContent['token']            = $this->token;
        $jsonContent['ip']               = $this->ip;
        $jsonContent['browser_language'] = $this->browserLanguage;
        $curl_lead = curl_init();

        curl_setopt_array($curl_lead, array(
            CURLOPT_URL            => $this->hostEndPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => array('Host: '.$this->hostName),
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($jsonContent),
            ));

            $response = curl_exec($curl_lead);
            $err      = curl_error($curl_lead);

            curl_close($curl_lead);

            if ($err)
            {
                return "cURL Error #:" . $err;
                die();
            }

            return $response;
    }

    private function getUserIP()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }

}
?>