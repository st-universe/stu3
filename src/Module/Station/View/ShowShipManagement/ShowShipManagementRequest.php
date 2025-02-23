<?php

declare(strict_types=1);

namespace Stu\Module\Station\View\ShowShipManagement;

use Override;
use Stu\Lib\Request\CustomControllerHelperTrait;

final class ShowShipManagementRequest implements ShowShipManagementRequestInterface
{
    use CustomControllerHelperTrait;

    #[Override]
    public function getStationId(): int
    {
        return $this->parameter('id')->int()->required();
    }
}
