<?php

namespace rocketfellows\TinkoffInvestV1OperationsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1OperationsRestClient\GetPositionsInterface;

/**
 * @group methods
 */
class GetPositionsTest extends OperationsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('GetPositions', self::PARAMS, $expectedResponse);

        return $this->operationsService->getPositions(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetPositionsInterface::class,
        ];
    }
}
