<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

class Auth
{
    /**
     *
     */
    protected $params = array();

    /**
     * Constructor
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
     * Returns the user api key
     *
     * @return string The user api key
     */
    public function getApiKey()
    {
        return $this->params['api_key'];
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
     * Returns the user api secret
     *
     * @return string The user api secret
     */
    public function getApiSecret()
    {
        return $this->params['api_secret'];
    }

    /**
     * How long you wish the request consuming data to last.
     *
     * To learn more see {@link https://mixpanel.com/docs/api-documentation/data-export-api#auth-implementation}
     *
     * @param integer $time The request expiration time in second (default: 300 | 5mns)
     */
    public function setExpire($time = 300)
    {
        $current_utc_time =  time() + date('Z', time());

        $this->params['expire'] = $current_utc_time + $time;
        return $this;
    }

    /**
     * Gets the request expiration time
     *
     * @return integer The request expiration time
     */
    public function getExpire()
    {
        return $this->params['expire'];
    }

    /**
     * Gets user signature
     *
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
}
