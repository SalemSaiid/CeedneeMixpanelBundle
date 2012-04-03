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
     * URI: http://mixpanel.com/api/2.0/events/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/funnels/?funnel_id=1&expire=1275687370&sig=0446b1725ffedf241f7bf3d2097af162
     * &api_key=f0aa346688cee071cd85d857285a3464&unit=week
     * </p>
     *
     * @param $funnel_id integer    The funnel that you wish to get data for (passed back from list).
     * @param $from_date string     The date in yyyy-mm-dd format from which to begin querying for the event from. *
     *                              This date is inclusive.
     * @param $to_date   string     The date in yyyy-mm-dd format from which to stop querying for the event from.
     *                              This date is inclusive.
     *                              The date range may not be more than 30 days.
     * @param $length    integer    The number of days each user has to complete the funnel, starting from the time they triggered
     *                              The first step in the funnel.
     *                              The default value is 14.
     * @param $interval  integer    The number of days you want your results bucketed into.
     *                              The default value is 1.
     * @param $unit      string     This is an alternate way of specifying interval and can be 'day' or 'week'.
     * @param $on        string     The property expression to segment the event on. See the expression section below.
     * @param $where     string     An expression to filter events by. See the expression section below.
     * @param $limit     string     Return the top limit property values. This parameter does nothing if 'on' is not specified.
     *
     * @return string               An formatted Url
     */
    public function getFunnels($funnel_id,
                               $from_date = null,
                               $to_date = null,
                               $length = null,
                               $interval = null,
                               $unit = null,
                               $on = null,
                               $where = null,
                               $limit = null)
    {
    }

    /**
     * Gets the names and funnel_ids of your funnels. This method takes no parameters.
     *
     * <p>
     * URI: http://mixpanel.com/api/2.0/funnels/list/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/funnels/list?api_key=f0aa346688cee071cd85d857285a3464&
     * sig=775573914d02cf618de0d545584dfdc9&expire=1275687367
     * </p>
     *
     * @return string   An formatted Url
     */
    public function getList()
    {
    }
}
