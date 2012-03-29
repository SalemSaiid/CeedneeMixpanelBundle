<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

class Auth
{
    /**
     *
     */
    protected $params = array();

    /**
     *  Constructor
     *
     * @param string $api_key    The user api key
     * @param string $api_secret The user api secret
     */
    public function __construct($api_key, $api_secret)
    {
        $this->params['api_key'] = $api_key;
        $this->params['api_secret'] = $api_secret;

        $this->run();
    }

    protected function run()
    {

    }

    /**
     * Sets the user api key
     *
     * @param string $api_key The user api key
     */
    public function setApiKey($api_key)
    {
        $this->params['api_key'] = $api_key;

        return $this;
    }

    /**
     * Sets the user api secret
     *
     * @param string $api_secret The user api secret
     */
    public function setApiSecret($api_secret)
    {
        $this->params['api_secret'] = $api_secret;

        return $this;
    }

    /**
     * How long you wish the request consuming data to last.
     *
     * To learn more see {@link https://mixpanel.com/docs/api-documentation/data-export-api#auth-implementation}
     *
     * @param integer $time The request expiration time in second (default: 5mns)
     */
    public function setRequestExpirationTime($time = 300)
    {
        date_default_timezone_set('UTC');

        $t = time();
        $x = $t+date("Z",$t);
        $current_utc_time = $x;

        print_r($x);

        $this->params['request_expiration_time'] = $current_utc_time + $time;

        return $this;
    }

    /**
     * Gets the request expiration time
     *
     * @return integer The request expiration time
     */
    public function getRequestExpirationTime()
    {
        return $this->params['request_expiration_time'];
    }

    /**
     * Gets user signature
     * @return string The user signatue
     */
    public function getSignature()
    {
        return $this->params['sig'];
    }

    /**
     * Gets all parameters
     *
     * @return array An array of parameters
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generates user signature of the request using his api_secret
     *
     * <p>
     *  Calculating the signature is done in parts:
     *  1. sort the parameters you are including with the URL alphabetically,
     *  2. join into a string resulting in key=valuekey2=value2,
     *  3. concatenate the result with the api_secret by appending it,
     *  4. and lastly md5 hash the final string.
     * </p>
     *
     * To learn more see {@link https://mixpanel.com/docs/api-documentation/data-export-api#auth-implementation}
     *
     * @return string The user signature
     */
    protected function generateSignature()
    {
        $this->params['sig'] = array();
    }

    /**
     * Generates the URL request
     *
     * @return string The URL request to send
     */
    protected function generateUrlRequest()
    {

    }
}
