<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Symfony\Component\DependencyInjection\ContainerInterface;


class Mixpanel implements GeneratorInterface
{
    /**
     * @var
     */
    protected
        $params = array(),
        $url,
        $prepared_url,
        $signature,
        $prepared_signature,
        $container;

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


    public function calculateSignature($params)
    {
        $this->params = $params;

        $generated_signature = $this->generateSignature($params);

        $generated_url = $this->generateUrlRequest($params);
    }


    /**
     * {@inheritdoc}
     *
     * @param $params   An array of parameters
     *
     * @return string
     */
    public function generateSignature($params)
    {
        // join into a string resulting in key=valuekey2=value2
        $string = '';

        foreach($params as $key => $value) {
            $string .= $key . '=' . $value;
        }

        //concatenate the result with the api_secret by appending it
        $string = $string . $this->container;

        return $this->prepared_signature = $string;
    }

    /**
     * {@inheritdoc}
     *
     * @param $params   An array of parameters
     *
     * @return string
     */
    public function generateUrlRequest($params)
    {
        $string = '';

        // sort the parameters you are including with the URL alphabetically
        ksort($params);

        foreach ($params as $key => $value) {
            if (is_array($value)) {
                $string = json_encode($value);
            }

            $string .= '&' . urlencode($key) . '=' . urlencode($value);
        }

        return $this->prepared_url = $string;
    }
}


