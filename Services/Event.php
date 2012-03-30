<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\DataInterface;

class Event implements DataInterface
{
    public $container;

    protected
        $params = array(),
        $auth,
        $url,
        $uri = 'events/';

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Gets unique, total, or average data for a set of events over the last N days, weeks, or months.
     * <p>
     * URI: http://mixpanel.com/api/2.0/events/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/events/?interval=7&expire=1275624968&sig=046ceec93983811dad0fb20
     * f842c351a&api_key=f0aa346688cee071cd85d857285a3464&type=average&event=%5B%22splash+features
     * %22%2C+%22account-page%22%5D&unit=day
     * </p>
     *
     * @param  array   $event    The event or events that you wish to get data for, encoded as a JSON array.
     *                           Example format: '["play song", "log in", "add playlist"]'
     * @param  string  $type     The analysis type you would like to get data for - such as general, unique, or average events.
     *                           Valid values: 'general', 'unique', or 'average'
     * @param  string  $unit     This can be 'hour', 'day', 'week', or 'month'.
     *                           It determines the level of granularity of the data you get back.
                                 Note that you cannot get hourly uniques.
     * @param  integer $interval The number of "units" to return data for - hours, days, weeks, or months.
                                 1 will return data for the current unit (hour, day, week or month).
                                 2 will return the current and previous units, and so on.
     * @param  string  $format   The data return format, such as JSON or CSV. Options: 'json' (default), 'csv'
     *
     * @return string            An formatted Url
     */
    public function events(array $event, $type, $unit, $interval, $format='csv')
    {
    }

    /**
     * Gets the top events for today, with their counts and the normalized percent change from yesterday.
     * <p>
     * URI: http://mixpanel.com/api/2.0/events/top/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/events/top?sig=02e38a843297d188ee73779ab872cc1e&api_key=
     * f0aa346688cee071cd85d857285a3464&type=unique&expire=1275627103
     * </p>
     *
     * @param  string  $type  The analysis type you would like to get data for - such as general, unique, or average events.
     *                        Valid values: 'general', 'unique', or 'average'
     * @param  integer $limit The maximum number of events to return. Defaults to 100.
     *                        The maximum this value can be is 100.
     *
     * @return string         An formatted Url
     */
    public function top($type, $limit)
    {
        if ($limit > 100) {
            throw new \Exception(sprintf('The maximum this limit can be is 100'));
        }
    }

    /**
     * Gets a list of the most common events over the last 31 days.
     * <p>
     * URI: http://mixpanel.com/api/2.0/events/names/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/events/names?expire=1275627103&sig=9f2a0f7024b
     * 6426aa440cf3ecad66165&api_key=f0aa346688cee071cd85d857285a3464&type=general
     * </p>
     *
     * @param  string  $type  The analysis type you would like to get data for - such as general, unique, or average events.
     *                        Valid values: 'general', 'unique', or 'average'
     * @param  integer $limit The maximum number of events to return. Defaults to 255.
     *
     * @return string         An formatted Url
     */
    public function names($type, $limit)
    {
        if ($limit > 100) {
            throw new \Exception(sprintf('The maximum this limit can be is 100'));
        }
    }

    /**
     * Gets unique, total, or average data for of a single event and property over the last N days, weeks, or months.
     * <p>
     * URI: http://mixpanel.com/api/2.0/events/properties/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/events/properties?name=feature&interval=7&expire=1275678109&
     * sig=e0c4bb0c5ead7aeb4cf9b1682e0599a3&api_key=f0aa346688cee071cd85d857285a3464&type=
     * unique&event=splash+features&unit=day
     * </p>
     *
     */
    public function propeties($type, $limit)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function generateSignature()
    {
        ksort($this->params);
        $string = '';

        foreach ($this->params as $key => $param) {
            $string .= $key . "=" . $param;
        }

        //$this->params['sig'] =
    }

    /**
     * {@inheritdoc}
     */
    public function generateUrlRequest()
    {
    }


}
