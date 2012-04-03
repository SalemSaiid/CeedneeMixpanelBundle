<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\Mixpanel;

class Segmentation extends Mixpanel
{
    /**
     *
     */
    protected
        $uri = 'segmentation';

    /**
     * Gets data for an event, segmented and filtered by properties.
     *
     * <p>
     * URI: http://mixpanel.com/api/2.0/segmentation/
     *
     * Example URL:
     * http://mixpanel.com/api/2.0/funnels/list?api_key=f0aa346688cee071cd85d857285a3464&
     * sig=775573914d02cf618de0d545584dfdc9&expire=1275687367
     * </p>
     *
     * @param  $event       string      The event that you wish to segment on.
     * @param  $from_date   string      The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @param  $to_date     string      The date in yyyy-mm-dd format from which to stop querying for the event from.
     *                                  This date is inclusive. The date range may not be more than 30 days.
     * @param  $on          string      The property expression to segment the event on.
     *                                  @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param  $unit        string      This can be 'hour' or 'day'.
     *                                  This determines the buckets into which the property values that you segment on are placed.
     *                                  The default value is 'day'.
     * @param  $where       string      An expression to filter events by.
     *                                  @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param  $limit       $integer    Return the top limit property values. This parameter does nothing if 'on' is not specified.
     * @param  $type        string      This can be 'general' or 'unique'.
     *                                  If this is set to 'unique', we return the unique count of events or property values.
     *                                  If not, we return the total, including repeats.
     *                                  The default value is 'general'.
     *
     * @return string An formatted Url
     */
    public function getSegmentation($event, $from_date, $to_date, $on = null, $unit = null, $where = null, $limit = null, $type = null)
    {
    }

    /**
     * Gets data for an event, segmented and filtered by properties, with values placed into numeric buckets.
     *
     * <p>
     * URI: http://mixpanel.com/api/2.0/segmentation/numeric/
     * </p>
     *
     * @param string $event     The event that you wish to segment on.
     * @param string $from_date The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @param string $to_date   The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive.
     *                          The date range may not be more than 30 days.
     * @param string $on        The property expression to segment the event on.
     *                          @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param integer $bucket   The number of buckets that you wish to divide the numeric values up into.
     *                          We automatically compute the bucket ranges based on the maximum and minimum of your 'on' expression.
     * @param string $unit      This can be 'hour' or 'day'.
     *                          This determines the buckets into which the property values that you segment on are placed.
     *                          The default value is 'day'.
     * @param string $where     An expression to filter events by.
     *                          @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param string $type      This can be 'general' or 'unique'.
     *                          If this is set to 'unique', we return the unique count of events or property values.
     *                          If not, we return the total, including repeats.
     *                          The default value is 'general'.
     *
     * @return string           An formatted Url
     */
    public function getNumeric($event, $from_date, $to_date, $on, $bucket, $unit = null, $where = null, $type = null)
    {
    }

    /**
     * Sums an expression for events per unit time.
     *
     * <p>
     * URI: http://mixpanel.com/api/2.0/segmentation/sum/
     * </p>
     *
     * @param string $event     The event that you wish to segment on.
     * @param string £from_date The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @param string $to_date   The date in yyyy-mm-dd format from which to stop querying for the event from.
     *                          This date is inclusive. The date range may not be more than 30 days.
     * @param string $on        The expression to sum per unit time. The result of the expression should be a numeric value.
     *                          If the expression is not numeric, a value of 0.0 is assumed.
     *                          @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param string $unit      This can be 'hour' or 'day'.
     *                          This determines the buckets into which the property values that you segment on are placed.
     *                          The default value is 'day'.
     * @param string $where     An expression to filter events by.
     *                          @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     *
     * @return string           An formatted Url
     */
    public function getSum($event, $from_date, $to_date, $on, $unit = null, $where = null)
    {
    }


    /**
     * Averages an expression for events per unit time.
     *
     * <p>
     * URI: http://mixpanel.com/api/2.0/segmentation/average/
     * </p>
     *
     * @param string $event     The event that you wish to segment on.
     * @param string $from_date The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @param string $to_date   The date in yyyy-mm-dd format from which to stop querying for the event from.
     *                          This date is inclusive. The date range may not be more than 30 days.
     * @param string $on        The expression to average per unit time. The result of the expression should be a numeric value.
     *                          If the expression is not numeric, a value of 0.0 is assumed.
     *                          @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     * @param string $unit      This can be 'hour' or 'day'.
     *                          This determines the buckets into which the property values that you segment on are placed.
     *                          The default value is 'day'.
     * @param string $where     An expression to filter events by.
     *                          @see https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions
     *
     * @return string           An formatted Url
     */
    public function getAverage($event, $from_date, $to_date, $on, $unit = null, $where = null)
    {
    }
}
