<?php

namespace rocketfellows\TinkoffInvestV1OperationsRestClient;

use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException;

interface GetWithdrawLimitsInterface
{
    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    public function getWithdrawLimits(array $params): array;
}
