# Tinkoff Invest V1 operations service rest client

![Code Coverage Badge](./badge.svg)

Simple implementation of tinkoff invest v1 operations service.
So far provides methods:
- GetPortfolio - https://tinkoff.github.io/investAPI/swagger-ui/#/OperationsService/OperationsService_GetPortfolio
- GetPositions - https://tinkoff.github.io/investAPI/swagger-ui/#/OperationsService/OperationsService_GetPositions
- GetWithdrawLimits - https://tinkoff.github.io/investAPI/swagger-ui/#/OperationsService/OperationsService_GetWithdrawLimits

Methods interfaces:
- rocketfellows\TinkoffInvestV1OperationsRestClient\GetPortfolioInterface
- rocketfellows\TinkoffInvestV1OperationsRestClient\GetPositionsInterface
- rocketfellows\TinkoffInvestV1OperationsRestClient\GetWithdrawLimitsInterface

Methods interfaces implementation aggregated in rocketfellows\TinkoffInvestV1OperationsRestClient\OperationsService.

For the sake of the interface segregation principle you should inject a specific interface as dependencies, and define the implementation through the container (DI).

## Installation
```shell
composer require rocketfellows/tinkoff-invest-v1-operations-rest-client
```

## Methods contract definition

Component methods take an array as parameters, and raw arrays also serve as output values.

Methods throw the following types of exceptions:
- rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException
- rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException
- rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException

## Component dependencies

"rocketfellows/tinkoff-invest-v1-rest-client": "1.0.2" - as a common http client.

## Usage examples

Common http client configuration:

```php
$client = new Client(
    (
        new ClientConfig(
            'https://invest-public-api.tinkoff.ru/rest',
            <your_access_token>
        )
    ),
    new \GuzzleHttp\Client()
);
```

Operations service configuration (or interface specific method configuration via DI):

```php
$operationsService = new OperationsService($client);
```

Get account portfolio method call example:

```php
$operationsService->getPortfolio([
    "accountId" => "<your_account_id>",
])
```

Result scheme you can find here: https://tinkoff.github.io/investAPI/swagger-ui/#/OperationsService/OperationsService_GetPortfolio

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
