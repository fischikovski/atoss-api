<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\Tests\File;

use InvalidArgumentException;
use WsdlToPhp\PackageGenerator\File\StructArray as ArrayFile;
use WsdlToPhp\PackageGenerator\Model\Struct as StructModel;

/**
 * @internal
 * @coversDefaultClass
 */
final class StructArrayTest extends AbstractFile
{
    public function testSetModelGoodNameTooManyAttributesWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $struct = new StructModel(self::bingGeneratorInstance(), 'FooArray');
        $struct
            ->addAttribute('bar', 'string')
            ->addAttribute('foo', 'int')
        ;
        $array = new ArrayFile(self::bingGeneratorInstance(), 'Foo');
        $array->setModel($struct);
    }

    public function testSetModelBasNameOneAttributeWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $struct = new StructModel(self::bingGeneratorInstance(), 'Foo');
        $struct->addAttribute('bar', 'string');
        $array = new ArrayFile(self::bingGeneratorInstance(), 'Foo');
        $array->setModel($struct);
    }

    public function testWriteBingSearchArrayOfNewsRelatedSearch()
    {
        $generator = self::bingGeneratorInstance();
        if (($model = $generator->getStructByName('ArrayOfNewsRelatedSearch')) instanceof StructModel) {
            $struct = new ArrayFile($generator, $model->getName());
            $struct
                ->setModel($model)
                ->write()
            ;
            $this->assertSameFileContent('ValidApiArrayOfNewsRelatedSearch', $struct);
        } else {
            $this->fail('Unable to find ArrayOfNewsRelatedSearch struct for file generation');
        }
    }

    public function testWriteBingSearchArrayOfWebSearchOption()
    {
        $generator = self::bingGeneratorInstance();
        if (($model = $generator->getStructByName('ArrayOfWebSearchOption')) instanceof StructModel) {
            $struct = new ArrayFile($generator, $model->getName());
            $struct
                ->setModel($model)
                ->write()
            ;
            $this->assertSameFileContent('ValidApiArrayOfWebSearchOption', $struct);
        } else {
            $this->fail('Unable to find ArrayOfWebSearchOption struct for file generation');
        }
    }

    public function testWriteBingSearchArrayOfString()
    {
        $generator = self::bingGeneratorInstance();
        if (($model = $generator->getStructByName('ArrayOfString')) instanceof StructModel) {
            $struct = new ArrayFile($generator, $model->getName());
            $struct
                ->setModel($model)
                ->write()
            ;
            $this->assertSameFileContent('ValidApiArrayOfString', $struct);
        } else {
            $this->fail('Unable to find ArrayOfString struct for file generation');
        }
    }

    public function testWriteBingSearchArrayOfError()
    {
        $generator = self::bingGeneratorInstance();
        if (($model = $generator->getStructByName('ArrayOfError')) instanceof StructModel) {
            $struct = new ArrayFile($generator, $model->getName());
            $struct
                ->setModel($model)
                ->write()
            ;
            $this->assertSameFileContent('ValidApiArrayOfError', $struct);
        } else {
            $this->fail('Unable to find ArrayOfError struct for file generation');
        }
    }

    public function testWriteBingSearchApiArrayOfErrorProject()
    {
        $generator = self::bingGeneratorInstance();
        if (($model = $generator->getStructByName('ArrayOfError')) instanceof StructModel) {
            $generator
                ->setOptionPrefix('Api')
                ->setOptionSuffix('Project')
            ;
            $struct = new ArrayFile($generator, $model->getName());
            $struct
                ->setModel($model)
                ->write()
            ;
            $this->assertSameFileContent('ValidApiArrayOfErrorProject', $struct);
        } else {
            $this->fail('Unable to find ArrayOfError struct for file generation');
        }
    }

    public function testDestination()
    {
        $generator = self::bingGeneratorInstance();
        if (($model = $generator->getStructByName('ArrayOfError')) instanceof StructModel) {
            $generator
                ->setOptionPrefix('Api')
                ->setOptionSuffix('Project')
            ;
            $struct = new ArrayFile($generator, $model->getName());
            $struct->setModel($model);

            $this->assertSame(sprintf('%s%s%s/', self::getTestDirectory(), $generator->getOptionSrcDirname().DIRECTORY_SEPARATOR, $model->getContextualPart()), $struct->getFileDestination());
        } else {
            $this->fail('Unable to find ArrayOfError struct for file generation');
        }
    }
}
