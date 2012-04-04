<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\Mixpanel;

class Funnel extends Mixpanel
{
    /**
     *
     */
    protected
        $uri = 'funnels';

    /**
     * Gets data for a funnel.
     *
     * <p>
     * URI: {@link http://mixpanel.com/api/2.0/events/}
     *
     * Example URL:
     * { @link http://mixpanel.com/api/2.0/funnels/?funnel_id=1&expire=1275687370&sig=0446b1725ffedf241f7bf3d2097af162
     * &api_key=f0aa346688cee071cd85d857285a3464&unit=week}
     * </p>
     *
     * <p>
     * available parameters:
     *
     * required integer $funnel_id
     * The funnel that you wish to get data for (passed back from list).
     *
     * optional string $from_date
     * The date in yyyy-mm-dd format from which to begin querying for the event from. *
     *
     * This date is inclusive.
     * optional string $to_date
     * The date in yyyy-mm-dd format from which to stop querying for the event from.
     * This date is inclusive.
     * The date range may not be more than 30 days.
     *
     * optional integer $length
     * The number of days each user has to complete the funnel, starting from the time they triggered
     * The first step in the funnel.
     * The default value is 14.
     *
     * optional integer $interval
     * The number of days you want your results bucketed into.
     * The default value is 1.
     *
     * optional string $unit
     * This is an alternate way of specifying interval and can be 'day' or 'week'.
     *
     * optional string $on
     * The property expression to segment the event on. See the expression section below.
     *
     * optional string $where
     * An expression to filter events by. See the expression section below.
     *
     * optional string $limit
     * Return the top limit property values. This parameter does nothing if 'on' is not specified.
     * </p>
     *
     * @param array $array  An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getFunnels(array $array = array())
    {
    }

    /**
     * Gets the names and funnel_ids of your funnels. This method takes no parameters.
     *
     * <p>
     * URI: {@link http://mixpanel.com/api/2.0/funnels/list/}
     *
     * Example URL:
     * {@link http://mixpanel.com/api/2.0/funnels/list?api_key=f0aa346688cee071cd85d857285a3464&
     * sig=775573914d02cf618de0d545584dfdc9&expire=1275687367}
     * </p>
     *
     * @return string   An formatted Url
     */
    public function getList()
    {
    }
}
