<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class Mixpanel implements DataInterface
{
    /**
     *
     */
    protected
        $params = array(),
        $url,
        $signature;

    /**
     * ContainerBuilder service
     * @var \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    private $container;

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
     * {@inheritdoc}
     *
     * @return string
     */
    public function generateSignature()
    {
        ksort($this->params);
        $signature = '';

        foreach ($this->params as $key => $param) {
            $signature .= $key . "=" . $param;
        }

        return $this->signature = $signature;
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
   public function generateUrlRequest()
   {
       $url = '';

       return $this->url = $url;
   }
}


