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
     * URI: {@link http://mixpanel.com/api/2.0/retention/}
     *
     * Example URL:
     * {@link http://mixpanel.com/api/2.0/retention/?from_date=2012-01-01&to_date=2012-01-13&retention_type=birth&interval_count=12
     * &event=viewed+report&born_event=event+integration&expire=1326512270&sig=2bdfb7fe5db9337f357e04f7d1a85b86}
     * </p>
     *
     * <p>
     * available parameters:
     *
     * required string $from_date
     * The date in yyyy-mm-dd format from which to begin generating cohorts from.
     * This date is inclusive.
     *
     * required string $to_date
     * The date in yyyy-mm-dd format from which to stop generating cohorts from.
     * This date is inclusive.
     *
     * optional string $retention_type
     * Must be either 'birth' or 'compounded'. Defaults to 'birth'.
     * birth string  $born_event
     * The first event a user must do to be counted in a birth retention cohort.
     * Required when retention_type is 'birth'; ignored otherwise.
     *
     * optional string $event
     * The event to generate returning counts for. Applies to both birth and compounded retention.
     * If not specified, we look across all events.
     *
     * optional string $born_where
     * An expression to filter born_events by.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional string $where
     * An expression to filter the returning events by.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional integer $interval
     * The number of days you want your results bucketed into. The default value is 1 or specified by unit.
     *
     * optional integer $interval_count
     * The number of intervals you want; defaults to 1.
     *
     * optional string $unit
     * This is an alternate way of specifying interval and can be 'day', 'week', or 'month'.
     *
     * optional string $on
     * The property expression to segment the second event on.
     * @see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional integer $limit
     * Return the top limit segmentation values. This parameter does nothing if 'on' is not specified.
     * </p>
     *
     *
     * @param array $array  An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getRetention(array $array = array())
    {
    }
}