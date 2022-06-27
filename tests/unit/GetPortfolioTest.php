<?php

namespace rocketfellows\TinkoffInvestV1OperationsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1OperationsRestClient\GetPortfolioInterface;

/**
 * @group methods
 */
class GetPortfolioTest extends OperationsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('GetPortfolio', self::PARAMS, $expectedResponse);

        return $this->operationsService->getPortfolio(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetPortfolioInterface::class,
        ];
    }
}
