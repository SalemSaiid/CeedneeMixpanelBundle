<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\Mixpanel;

class Retention extends Mixpanel
{
    /**
     *
     */
    protected
        $uri = 'retention';

    /**
     * Gets cohort analysis.
     *
     * * <p>
     * URI: http://mixpanel.com/api/2.0/retention/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/retention/?from_date=2012-01-01&to_date=2012-01-13&retention_type=birth&interval_count=12
     * &event=viewed+report&born_event=event+integration&expire=1326512270&sig=2bdfb7fe5db9337f357e04f7d1a85b86
     * </p>
     *
     * @param string  $from_date        The date in yyyy-mm-dd format from which to begin generating cohorts from. This date is inclusive.
     * @param string  $to_date          The date in yyyy-mm-dd format from which to stop generating cohorts from. This date is inclusive.
     * @param string  $born_event       The first event a user must do to be counted in a birth retention cohort.
     *                                  Required when retention_type is 'birth'; ignored otherwise.
     * @param string  $retention_type   Must be either 'birth' or 'compounded'. Defaults to 'birth'.
     * @param null    $event            The event to generate returning counts for.
     *                                  Applies to both birth and compounded retention.
     *                                  If not specified, we look across all events.
     * @param string  $born_where       An expression to filter born_events by. See the expression section.
     * @param string  $where            An expression to filter the returning events by. See the expression section.
     * @param integer $interval         The number of days you want your results bucketed into.
     *                                  The default value is 1 or specified by unit.
     * @param integer $interval_count   The number of intervals you want; defaults to 1.
     * @param string  $unit             This is an alternate way of specifying interval and can be 'day', 'week', or 'month'.
     * @param string  $on               The property expression to segment the second event on.
     *                                  @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param integer $limit            Return the top limit segmentation values. This parameter does nothing if 'on' is not specified.
     *
     * @return string                   An formatted Url
     */
    public function getRetention($from_date,
                                 $to_date,
                                 $born_event,
                                 $retention_type = null,
                                 $event = null,
                                 $born_where,
                                 $where,
                                 $interval,
                                 $interval_count,
                                 $unit,
                                 $on,
                                 $limit
    )
    {
    }
}