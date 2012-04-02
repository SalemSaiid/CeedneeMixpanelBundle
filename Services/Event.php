<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\DataInterface;

class Event extends Mixpanel
{
    /**
     *
     */
    protected
        $uri = 'events';

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
     * @param  $event   array       The event or events that you wish to get data for, encoded as a JSON array.
     *                              Example format: '["play song", "log in", "add playlist"]'
     * @param  $type    string      The analysis type you would like to get data for - such as general, unique, or average events.
     *                              Valid values: 'general', 'unique', or 'average'
     * @param  $unit    string      This can be 'hour', 'day', 'week', or 'month'.
     *                              It determines the level of granularity of the data you get back.
                                    Note that you cannot get hourly uniques.
     * @param  $interval integer    The number of "units" to return data for - hours, days, weeks, or months.
                                    1 will return data for the current unit (hour, day, week or month).
                                    2 will return the current and previous units, and so on.
     * @param  $format  string      The data return format, such as JSON or CSV. Options: 'json' (default), 'csv'
     *
     * @return string               An formatted Url
     */
    public function getEvents(array $event, $type, $unit, $interval, $format = null)
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
     * @param  $type string     The analysis type you would like to get data for - such as general, unique, or average events.
     *                          Valid values: 'general', 'unique', or 'average'
     * @param  $limit integer   The maximum number of events to return. Defaults to 100.
     *                          The maximum this value can be is 100.
     *
     * @return string            An formatted Url
     */
    public function getTop($type, $limit = null)
    {
        $this->uri = $this->uri . '/top/';

        if (isset($limit) && 100 < $limit) {
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
     * @param  $type string     The analysis type you would like to get data for - such as general, unique, or average events.
     *                          Valid values: 'general', 'unique', or 'average'
     * @param  $limit integer   The maximum number of events to return. Defaults to 255.
     *
     * @return string           An formatted Url
     */
    public function getNames($type, $limit = null)
    {
        $this->uri = $this->uri . '/names/';

        if (isset($limit) && 100 < $limit) {
            throw new \Exception(sprintf('The maximum number of events to return is limited by 255'));
        }
    }

}
