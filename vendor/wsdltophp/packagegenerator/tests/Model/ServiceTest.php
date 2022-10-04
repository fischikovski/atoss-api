<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\Tests\Model;

use WsdlToPhp\PackageGenerator\ConfigurationReader\ServiceReservedMethod;
use WsdlToPhp\PackageGenerator\Model\Method;
use WsdlToPhp\PackageGenerator\Model\Service;
use WsdlToPhp\PackageGenerator\Tests\AbstractTestCase;

/**
 * @internal
 * @coversDefaultClass
 */
final class ServiceTest extends AbstractTestCase
{
    public static function instance(string $name): Service
    {
        return new Service(self::getBingGeneratorInstance(), $name);
    }

    public function testGetMethod()
    {
        $service = self::instance('Foo');
        $service->addMethod('getBar', 'string', 'int');
        $service->addMethod('getFoo', 'string', 'int');

        $this->assertInstanceOf(Method::class, $service->getMethod('getBar'));
        $this->assertNotInstanceOf(Method::class, $service->getMethod('getbar'));

        $service->getMethod('getBar')->setName('getbar');
        $this->assertInstanceOf(Method::class, $service->getMethod('getbar'));
    }

    public function testGetReservedMethodsInstance()
    {
        $this->assertInstanceOf(ServiceReservedMethod::class, self::instance('foo')->getReservedMethodsInstance());
    }
}
