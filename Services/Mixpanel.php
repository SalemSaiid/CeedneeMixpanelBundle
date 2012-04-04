<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Ceednee\CeedneeMixpanelBundle\Services\GeneratorInterface;
use Ceednee\CeedneeMixpanelBundle\Services\Auth;

class Mixpanel implements GeneratorInterface
{
    /**
     * @var
     */
    protected
        $auth = null,
        $params = array(),
        $url,
        $prepared_url,
        $signature,
        $prepared_signature,
        $container;


    public function __construct(Auth $auth = null)
    {
        $this->auth = $auth;
    }


    /**
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Returns the existent container
     *
     * @return \Symfony\Component\DependencyInjection\ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Gets params
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Gets generated url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Gets generated signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param $params
     *
     * This code is based on the mixpanel api php example
     * see {@link https://mixpanel.com/site_media//api/v2/mixpanel.phps}
     */
    public function generateSignature($params)
    {
        $this->params = $params;

        print_r($this->container);

        $prepared_signature = $this->prepareSignature($params);
        $prepared_url = $this->prepareUrlRequest($params);

        //concatenate the result with the api_secret by appending it
        /*$sig =  $this->getContainer->get('api_url') . '/' .
                $this->getContainer->get('api_version') . '/' .
                $prepared_url . '?sig=' . $prepared_signature;

        print $sig;*/
    }


    /**
     * {@inheritdoc}
     *
     * @param $params   An array of parameters
     *
     * @return string
     */
    public function prepareSignature($params)
    {
        $string = $this->iterateParams($params, 'sig');

        return $this->prepared_signature = $string;
    }


    public function generateUrlRequest($params)
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param $params   An array of parameters
     *
     * @return string
     */
    public function prepareUrlRequest($params)
    {
        $string = $this->iterateParams($params, 'url');

        return $this->prepared_url = $string;
    }


    /**
     * Iterates throw all params and generates a sig or url string
     *
     * @param $params   An array of parameters
     * @param $type     The type of string to generate defau
     *
     * @return string
     */
    private function iterateParams($params, $type = 'sig')
    {
        $string = '';

        foreach ($params as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            if ('url' == $type) {
                $string .= '&' . urlencode($key) . '=' . urlencode($value);
            }

            if ('sig' == $type) {
                $string .= $key . '=' . $value;
            }
        }

        return $string;
    }

    /**
     *
     */
    public function send()
    {

    }
}


