<?php

declare(strict_types=1);

namespace App\Tests;

use App\Service\UsefulService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UsefulServiceTest extends KernelTestCase
{
    private UsefulService $usefulService;

    protected function setUp(): void
    {
        self::bootKernel();

        $this->usefulService = self::getContainer()->get(UsefulService::class);
    }

    public function testUsefulService(): void
    {
        $this->usefulService->doUsefulStuff();
    }
}
