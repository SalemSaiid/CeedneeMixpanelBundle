<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

Interface DataInterface
{
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
     * @param $params   An array of parameters
     *
     * @return string   The user signature
     */
    public function generateSignature($params);

    /**
     * Generates the URL request
     *
     * @return string   The URL request to send
     */
    public function generateUrlRequest($params);
}
