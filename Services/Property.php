<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\DataInterface;

class Property extends Mixpanel implements DataInterface
{
    /**
     *
     */
    protected
        $uri = 'properties';

    /**
     * Constructor
     *
     * @param \Ceednee\CeedneeMixpanelBundle\Services\Auth $auth
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
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
     * @param $event    string  The event that you wish to get data for. Note: this is a single event name, not an array.
     * @param $name     string  The name of the property you would like to get data for.
     * @param $values   array   The specific property values that you would like to get data for, encoded as a JSON array.
     *                          Example: If you have a property 'gender' you may have values 'male', 'female' and 'unknown'
     *                          If you just want data for female and unknown users, you can include a values
     *                          property that looks like '["female", "unknown"]'
     * @param $type     string  The analysis type you would like to get data for - such as general, unique, or average events.
     *                          Valid values: 'general', 'unique', or 'average'
     * @param $unit     string  This can be 'hour', 'day', 'week', or 'month'.
     *                          It determines the level of granularity of the data you get back.
     *                          Note that you cannot get hourly uniques
     * @param $interval integer The number of "units" to return data for - hours, days, weeks, or months.
     *                          1 will return data for the current unit (hour, day, week or month).
     *                          2 will return the current and previous units, and so on.
     * @param $format   string  The data return format, such as JSON or CSV.
     *                          Options: 'json' (default), 'csv'
     * @param $limit    integer The maximum number of values to return. Defaults to 255.
     *
     * @return string           An formatted Url
     *
     */
    public function getProperties($event, $name, $values, $type, $unit, $interval, $format = null, $limit = null)
    {
        if (isset($limit) && 255 < $limit) {
            throw new \Exception(sprintf('The maximum this limit can be is 255'));
        }
    }

    /**
     * Get the top property names for an event.
     * <p>
     * URI: http://mixpanel.com/api/2.0/events/properties/top/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/events/properties/top?expire=1275678109&sig=ce1930
     * e14e44db542409686a89bf03ef&api_key=f0aa346688cee071cd85d857285a3464&event=splash+feature
     * </p>
     *
     * @param $event string     The event that you wish to get data for. Note: this is a single event name, not an array.
     * @param $limit integer    The maximum number of properties to return. Defaults to 10.
     *
     * @return string           An formatted Url
     */
    public function getTop($event, $limit = null)
    {
        $this->uri = $this->uri . '/top/';

        if (isset($limit) && 100 < $limit) {
            throw new \Exception(sprintf('The maximum this limit can be is 100'));
        }
    }

    /**
     * Get the top values for a property.
     * <p>
     * URI: http://mixpanel.com/api/2.0/events/properties/values/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/events/properties/values?name=feature&interval=7&expire=12756841
     * 78&sig=9733ee416d27bf27013c0bfde5227055&api_key=f0aa346688cee071cd85d857285a3464&
     * type=general&event=splash+features&unit=day
     * </p>
     *
     * @param  $event string    The event that you wish to get data for. Note: this is a single event name, not an array.
     * @param  $name string     The name of the property you would like to get data for.
     * @param  $limit integer   The maximum number of values to return. Defaults to 255.
     * @param  $bucket bucket   [Platform] - the specific data bucket you would like to query.
     *
     * @return string           An formatted Url
     */
    public function getValues($event, $name, $limit = null, $bucket = null)
    {

    }
}
