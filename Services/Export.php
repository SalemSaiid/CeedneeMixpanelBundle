<?php
namespace Ceednee\CeedneeMixpanelBundle\Services;

use Ceednee\CeedneeMixpanelBundle\Services\Mixpanel;

class Export extends Mixpanel
{
    /**
     *
     */
    protected
        $uri = 'export';

    /**
     * Gets a "raw dump" of tracked events over a time period.
     *
     * * <p>
     * URI: {@link https://data.mixpanel.com/api/2.0/export/}
     *
     * Example URL:
     * {@link https://data.mixpanel.com/api/2.0/export?from_date=2012-02-14&expire=1329760783&sig=bbe4be1e144d6d6376ef5484745aac45
     * &to_date=2012-02-14&api_key=f0aa346688cee071cd85d857285a3464
     * &where=properties%5B%22%24os%22%5D+%3D%3D+%22Linux%22&event=%5B%22Viewed+report%22%5D}
     * </p>
     *
     * <p>
     * available parameters:
     *
     * required string $from_date
     * The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     *
     * required string $to_date
     * The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive.
     *
     * optional array $event
     * The event or events that you wish to get data for, encoded as a JSON array.
     * Example format: '["play song", "log in", "add playlist"]'
     *
     * optional string $where
     * An expression to filter events by. See the expression section on the main data export API page
     *
     * optional string $bucket
     * The specific data bucket you would like to query.
     * see {@link https://mixpanel.com/docs/api-documentation/displaying-mixpanel-data-to-your-users}
     * </p>
     *
     * @param array $params An array of parameters
     *
     * @return string       An formatted Url
     */
    public function getExport(array $params = array())
    {
    }
}