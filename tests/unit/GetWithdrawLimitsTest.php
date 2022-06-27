<?php

namespace rocketfellows\TinkoffInvestV1OperationsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1OperationsRestClient\GetWithdrawLimitsInterface;

/**
 * @group methods
 */
class GetWithdrawLimitsTest extends OperationsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('GetWithdrawLimits', self::PARAMS, $expectedResponse);

        return $this->operationsService->getWithdrawLimits(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetWithdrawLimitsInterface::class,
        ];
    }
}
