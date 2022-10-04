<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\Tests\File\Validation;

use EnumType\ApiAdultOption;
use InvalidArgumentException;

/**
 * @internal
 * @coversDefaultClass
 */
final class EnumerationRuleTest extends AbstractRuleTest
{
    public function testSetAdultValueWithInvalidValueMustThrowAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid value(s) \'foo\', please use one of: Off, Moderate, Strict from enumeration class \EnumType\ApiAdultOption');

        $instance = self::getBingSearchRequestInstance();

        $instance->setAdult('foo');
    }

    public function testSetAdultValueWithValidValueMustPass()
    {
        $instance = self::getBingSearchRequestInstance();

        $this->assertSame($instance, $instance->setAdult(ApiAdultOption::VALUE_MODERATE));
    }

    public function testSetAdultValueWithNullValueMustPass()
    {
        $instance = self::getBingSearchRequestInstance();

        $this->assertSame($instance, $instance->setAdult(null));
    }
}
