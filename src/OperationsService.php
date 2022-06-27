<?php

namespace rocketfellows\TinkoffInvestV1OperationsRestClient;

use rocketfellows\TinkoffInvestV1RestClient\Client;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException;

class OperationsService implements
    GetPortfolioInterface,
    GetPositionsInterface
{
    private const SERVICE_NAME = 'OperationsService';

    private const SERVICE_METHOD_NAME_GET_PORTFOLIO = 'GetPortfolio';
    private const SERVICE_METHOD_NAME_GET_POSITIONS = 'GetPositions';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getPortfolio(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_PORTFOLIO, $params);
    }

    public function getPositions(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_POSITIONS, $params);
    }

    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    private function requestMethod(string $methodName, ?array $params = null): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            $methodName,
            $params
        );
    }
}
