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
     * URI: {@link http://mixpanel.com/api/2.0/segmentation/}
     *
     * Example URL:
     * {@link http://mixpanel.com/api/2.0/funnels/list?api_key=f0aa346688cee071cd85d857285a3464&
     * sig=775573914d02cf618de0d545584dfdc9&expire=1275687367}
     * </p>
     *
     * <p>
     * available parameters:
     *
     * required string $event
     * The event that you wish to segment on.
     *
     * required string $from_date
     * The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     *
     * required string $to_date
     * The date in yyyy-mm-dd format from which to stop querying for the event from.
     * This date is inclusive. The date range may not be more than 30 days.
     *
     * optional string $on
     * The property expression to segment the event on.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional string $unit
     * This can be 'hour' or 'day'.
     * This determines the buckets into which the property values that you segment on are placed.
     * The default value is 'day'.
     *
     * optional string $where
     * An expression to filter events by.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional integer $limit
     * Return the top limit property values. This parameter does nothing if 'on' is not specified.
     *
     * optional string $type
     * This can be 'general' or 'unique'.
     * If this is set to 'unique', we return the unique count of events or property values.
     * If not, we return the total, including repeats.
     * The default value is 'general'.
     * </p>
     *
     * @param array $array  An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getSegmentation(array $array = array())
    {
    }

    /**
     * Gets data for an event, segmented and filtered by properties, with values placed into numeric buckets.
     *
     * <p>
     * URI: {@link http://mixpanel.com/api/2.0/segmentation/numeric/}
     * </p>
     *
     * required string $event
     * The event that you wish to segment on.
     *
     * required string $from_date
     * The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     *
     * required string $to_date
     * The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive.
     * The date range may not be more than 30 days.
     *
     * required string $on
     * The property expression to segment the event on.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * required integer $buckets
     * The number of buckets that you wish to divide the numeric values up into.
     * We automatically compute the bucket ranges based on the maximum and minimum of your 'on' expression.
     *
     * optional string $unit
     * This can be 'hour' or 'day'.
     * This determines the buckets into which the property values that you segment on are placed.
     *
     * The default value is 'day'.
     *
     * optional string $where
     * An expression to filter events by.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional string $type
     * This can be 'general' or 'unique'.
     * If this is set to 'unique', we return the unique count of events or property values.
     * If not, we return the total, including repeats.
     * The default value is 'general'.
     * </p>
     *
     * @param array $array  An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getNumeric(array $array = array())
    {
    }

    /**
     * Sums an expression for events per unit time.
     *
     * <p>
     * URI: {@link http://mixpanel.com/api/2.0/segmentation/sum/}
     * </p>
     *
     * <p>
     * available parameters:
     *
     * required string $event
     * The event that you wish to segment on.
     *
     * required string $from_date
     * The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     *
     * required string $to_date
     * The date in yyyy-mm-dd format from which to stop querying for the event from.
     * This date is inclusive. The date range may not be more than 30 days.
     *
     * required string $on
     * The expression to sum per unit time. The result of the expression should be a numeric value.
     * If the expression is not numeric, a value of 0.0 is assumed.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional string $unit
     * This can be 'hour' or 'day'.
     * This determines the buckets into which the property values that you segment on are placed.
     * The default value is 'day'.
     *
     * optional string $where
     * An expression to filter events by.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     * </p>
     *
     * @param array $array  An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getSum(array $array = array())
    {
    }


    /**
     * Averages an expression for events per unit time.
     *
     * <p>
     * URI: {@link http://mixpanel.com/api/2.0/segmentation/average/}
     * </p>
     *
     * <p>
     * available parameters:
     *
     * required string $event
     * The event that you wish to segment on.
     *
     * required string $from_date
     * The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     *
     * required string $to_date
     * The date in yyyy-mm-dd format from which to stop querying for the event from.
     * This date is inclusive. The date range may not be more than 30 days.
     *
     * required string $on
     * The expression to average per unit time. The result of the expression should be a numeric value.
     * If the expression is not numeric, a value of 0.0 is assumed.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     *
     * optional string $unit
     * This can be 'hour' or 'day'.
     * This determines the buckets into which the property values that you segment on are placed.
     * The default value is 'day'.
     * optional string $where
     * An expression to filter events by.
     * see {@link https://mixpanel.com/docs/api-documentation/data-export-api#segmentation-expressions}
     * </p>
     *
     * @param array $array  An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getAverage(array $array = array())
    {
    }
}
