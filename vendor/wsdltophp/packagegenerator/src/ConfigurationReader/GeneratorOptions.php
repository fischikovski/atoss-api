<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\ConfigurationReader;

use InvalidArgumentException;
use JsonSerializable;

final class GeneratorOptions extends AbstractYamlReader implements JsonSerializable
{
    /**
     * Common values used as option's value.
     */
    public const VALUE_CAT = 'cat';
    public const VALUE_END = 'end';
    public const VALUE_FALSE = false;
    public const VALUE_NONE = 'none';
    public const VALUE_START = 'start';
    public const VALUE_TRUE = true;

    /**
     * Possible option keys.
     */
    public const ADD_COMMENTS = 'add_comments';
    public const ARRAYS_FOLDER = 'arrays_folder';
    public const BASIC_LOGIN = 'basic_login';
    public const BASIC_PASSWORD = 'basic_password';
    public const CATEGORY = 'category';
    public const COMPOSER_NAME = 'composer_name';
    public const COMPOSER_SETTINGS = 'composer_settings';
    public const DESTINATION = 'destination';
    public const ENUMS_FOLDER = 'enums_folder';
    public const GATHER_METHODS = 'gather_methods';
    public const GENERATE_TUTORIAL_FILE = 'generate_tutorial_file';
    public const GENERIC_CONSTANTS_NAME = 'generic_constants_names';
    public const NAMESPACE_PREFIX = 'namespace_prefix';
    public const ORIGIN = 'origin';
    public const PREFIX = 'prefix';
    public const PROXY_HOST = 'proxy_host';
    public const PROXY_LOGIN = 'proxy_login';
    public const PROXY_PASSWORD = 'proxy_password';
    public const PROXY_PORT = 'proxy_port';
    public const SERVICES_FOLDER = 'services_folder';
    public const SOAP_CLIENT_CLASS = 'soap_client_class';
    public const SOAP_OPTIONS = 'soap_options';
    public const SRC_DIRNAME = 'src_dirname';
    public const STANDALONE = 'standalone';
    public const STRUCT_ARRAY_CLASS = 'struct_array_class';
    public const STRUCT_ENUM_CLASS = 'struct_enum_class';
    public const STRUCT_CLASS = 'struct_class';
    public const STRUCTS_FOLDER = 'structs_folder';
    public const SUFFIX = 'suffix';
    public const VALIDATION = 'validation';
    public const SCHEMAS_SAVE = 'schemas_save';
    public const SCHEMAS_FOLDER = 'schemas_folder';
    public const XSD_TYPES_PATH = 'xsd_types_path';

    protected array $options;

    protected function __construct(string $filename)
    {
        $this->options = [];
        $this->parseOptions($filename);
    }

    public function getOptionValue(string $optionName)
    {
        if (!array_key_exists($optionName, $this->options)) {
            throw new InvalidArgumentException(sprintf('Invalid option name "%s", possible options: %s', $optionName, implode(', ', array_keys($this->options))), __LINE__);
        }

        return array_key_exists('value', $this->options[$optionName]) ? $this->options[$optionName]['value'] : $this->options[$optionName]['default'];
    }

    public function setOptionValue(string $optionName, $optionValue, array $values = []): self
    {
        if (!array_key_exists($optionName, $this->options)) {
            $this->options[$optionName] = [
                'value' => $optionValue,
                'values' => $values,
            ];
        } elseif (!empty($this->options[$optionName]['values']) && !in_array($optionValue, $this->options[$optionName]['values'], true)) {
            throw new InvalidArgumentException(sprintf('Invalid value "%s" for option "%s", possible values: %s', $optionValue, $optionName, implode(', ', $this->options[$optionName]['values'])), __LINE__);
        } else {
            $this->options[$optionName]['value'] = $optionValue;
        }

        return $this;
    }

    public static function getDefaultConfigurationPath(): string
    {
        return __DIR__.'/../resources/config/generator_options.yml';
    }

    public function getCategory(): string
    {
        return $this->getOptionValue(self::CATEGORY);
    }

    /**
     * Set current category option value.
     *
     * @param string $category
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setCategory($category)
    {
        return $this->setOptionValue(self::CATEGORY, $category);
    }

    /**
     * Get add comments option value.
     *
     * @return array
     */
    public function getAddComments()
    {
        return $this->getOptionValue(self::ADD_COMMENTS);
    }

    /**
     * Set current add comments option value.
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setAddComments(array $addComments = [])
    {
        /**
         * If array is type array("author:john Doe","Release:1",).
         */
        $comments = [];
        foreach ($addComments as $index => $value) {
            if (is_numeric($index) && mb_strpos($value, ':') > 0) {
                [$tag, $val] = explode(':', $value);
                $comments[$tag] = $val;
            } else {
                $comments[$index] = $value;
            }
        }

        return $this->setOptionValue(self::ADD_COMMENTS, $comments);
    }

    /**
     * Get gather methods option value.
     *
     * @return string
     */
    public function getGatherMethods()
    {
        return $this->getOptionValue(self::GATHER_METHODS);
    }

    /**
     * Set current gather methods option value.
     *
     * @param string $gatherMethods
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setGatherMethods($gatherMethods)
    {
        return $this->setOptionValue(self::GATHER_METHODS, $gatherMethods);
    }

    /**
     * Get generate tutorial file option value.
     *
     * @return bool
     */
    public function getGenerateTutorialFile()
    {
        return $this->getOptionValue(self::GENERATE_TUTORIAL_FILE);
    }

    /**
     * Set current generate tutorial file option value.
     *
     * @param bool $generateTutorialFile
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setGenerateTutorialFile($generateTutorialFile)
    {
        return $this->setOptionValue(self::GENERATE_TUTORIAL_FILE, $generateTutorialFile);
    }

    /**
     * Get namespace option value.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->getOptionValue(self::NAMESPACE_PREFIX);
    }

    /**
     * Set current namespace option value.
     *
     * @param string $namespace
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setNamespace($namespace)
    {
        return $this->setOptionValue(self::NAMESPACE_PREFIX, $namespace);
    }

    /**
     * Get generic constants name option value.
     *
     * @return bool
     */
    public function getGenericConstantsName()
    {
        return $this->getOptionValue(self::GENERIC_CONSTANTS_NAME);
    }

    /**
     * Set current generic constants name option value.
     *
     * @param bool $genericConstantsName
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setGenericConstantsName($genericConstantsName)
    {
        return $this->setOptionValue(self::GENERIC_CONSTANTS_NAME, $genericConstantsName);
    }

    /**
     * Get standalone option value.
     *
     * @return bool
     */
    public function getStandalone()
    {
        return $this->getOptionValue(self::STANDALONE);
    }

    /**
     * Set current standalone option value.
     *
     * @param bool $standalone
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setStandalone($standalone)
    {
        return $this->setOptionValue(self::STANDALONE, $standalone);
    }

    /**
     * Get validation option value.
     *
     * @return bool
     */
    public function getValidation()
    {
        return $this->getOptionValue(self::VALIDATION);
    }

    /**
     * Set current validation option value.
     *
     * @param bool $validation
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setValidation($validation)
    {
        return $this->setOptionValue(self::VALIDATION, $validation);
    }

    /**
     * Get struct class option value.
     *
     * @return string
     */
    public function getStructClass()
    {
        return $this->getOptionValue(self::STRUCT_CLASS);
    }

    /**
     * Set current struct class option value.
     *
     * @param string $structClass
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setStructClass($structClass)
    {
        return $this->setOptionValue(self::STRUCT_CLASS, $structClass);
    }

    /**
     * Get struct array class option value.
     *
     * @return string
     */
    public function getStructArrayClass()
    {
        return $this->getOptionValue(self::STRUCT_ARRAY_CLASS);
    }

    /**
     * Set current struct array class option value.
     *
     * @param string $structArrayClass
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setStructArrayClass($structArrayClass)
    {
        return $this->setOptionValue(self::STRUCT_ARRAY_CLASS, $structArrayClass);
    }

    /**
     * Get struct enum class option value.
     *
     * @return string
     */
    public function getStructEnumClass()
    {
        return $this->getOptionValue(self::STRUCT_ENUM_CLASS);
    }

    /**
     * Set current struct enum class option value.
     *
     * @param string $structEnumClass
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setStructEnumClass($structEnumClass)
    {
        return $this->setOptionValue(self::STRUCT_ENUM_CLASS, $structEnumClass);
    }

    /**
     * Get struct array class option value.
     *
     * @return string
     */
    public function getSoapClientClass()
    {
        return $this->getOptionValue(self::SOAP_CLIENT_CLASS);
    }

    /**
     * Set current struct array class option value.
     *
     * @param string $soapClientClass
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setSoapClientClass($soapClientClass)
    {
        return $this->setOptionValue(self::SOAP_CLIENT_CLASS, $soapClientClass);
    }

    /**
     * Get origin option value.
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->getOptionValue(self::ORIGIN);
    }

    /**
     * Set current origin option value.
     *
     * @param string $origin
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setOrigin($origin)
    {
        return $this->setOptionValue(self::ORIGIN, $origin);
    }

    /**
     * Get destination option value.
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->getOptionValue(self::DESTINATION);
    }

    /**
     * Set current destination option value.
     *
     * @param string $destination
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setDestination($destination)
    {
        return $this->setOptionValue(self::DESTINATION, $destination);
    }

    /**
     * Get src dirname option value.
     *
     * @return string
     */
    public function getSrcDirname()
    {
        return $this->getOptionValue(self::SRC_DIRNAME);
    }

    /**
     * Set current src dirname option value.
     *
     * @param string $srcDirname
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setSrcDirname($srcDirname)
    {
        return $this->setOptionValue(self::SRC_DIRNAME, $srcDirname);
    }

    /**
     * Get prefix option value.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->getOptionValue(self::PREFIX);
    }

    /**
     * Set current prefix option value.
     *
     * @param string $prefix
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setPrefix($prefix)
    {
        return $this->setOptionValue(self::PREFIX, $prefix);
    }

    /**
     * Get suffix option value.
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->getOptionValue(self::SUFFIX);
    }

    /**
     * Set current suffix option value.
     *
     * @param string $suffix
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setSuffix($suffix)
    {
        return $this->setOptionValue(self::SUFFIX, $suffix);
    }

    /**
     * Get basic login option value.
     *
     * @return string
     */
    public function getBasicLogin()
    {
        return $this->getOptionValue(self::BASIC_LOGIN);
    }

    /**
     * Set current basic login option value.
     *
     * @param string $basicLogin
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setBasicLogin($basicLogin)
    {
        return $this->setOptionValue(self::BASIC_LOGIN, $basicLogin);
    }

    /**
     * Get basic password option value.
     *
     * @return string
     */
    public function getBasicPassword()
    {
        return $this->getOptionValue(self::BASIC_PASSWORD);
    }

    /**
     * Set current basic password option value.
     *
     * @param string $basicPassword
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setBasicPassword($basicPassword)
    {
        return $this->setOptionValue(self::BASIC_PASSWORD, $basicPassword);
    }

    /**
     * Get basic proxy host option value.
     *
     * @return string
     */
    public function getProxyHost()
    {
        return $this->getOptionValue(self::PROXY_HOST);
    }

    /**
     * Set current proxy host option value.
     *
     * @param string $proxyHost
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setProxyHost($proxyHost)
    {
        return $this->setOptionValue(self::PROXY_HOST, $proxyHost);
    }

    /**
     * Get basic proxy port option value.
     *
     * @return string
     */
    public function getProxyPort()
    {
        return $this->getOptionValue(self::PROXY_PORT);
    }

    /**
     * Set current proxy port option value.
     *
     * @param string $proxyPort
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setProxyPort($proxyPort)
    {
        return $this->setOptionValue(self::PROXY_PORT, $proxyPort);
    }

    /**
     * Get basic proxy login option value.
     *
     * @return string
     */
    public function getProxyLogin()
    {
        return $this->getOptionValue(self::PROXY_LOGIN);
    }

    /**
     * Set current proxy login option value.
     *
     * @param string $proxyLogin
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setProxyLogin($proxyLogin)
    {
        return $this->setOptionValue(self::PROXY_LOGIN, $proxyLogin);
    }

    /**
     * Get basic proxy password option value.
     *
     * @return string
     */
    public function getProxyPassword()
    {
        return $this->getOptionValue(self::PROXY_PASSWORD);
    }

    /**
     * Set current proxy password option value.
     *
     * @param string $proxyPassword
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setProxyPassword($proxyPassword)
    {
        return $this->setOptionValue(self::PROXY_PASSWORD, $proxyPassword);
    }

    /**
     * Get basic soap options option value.
     *
     * @return array
     */
    public function getSoapOptions()
    {
        return $this->getOptionValue(self::SOAP_OPTIONS);
    }

    /**
     * Set current soap options option value.
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setSoapOptions(array $soapOptions)
    {
        return $this->setOptionValue(self::SOAP_OPTIONS, $soapOptions);
    }

    /**
     * Get composer name option value.
     *
     * @return string
     */
    public function getComposerName()
    {
        return $this->getOptionValue(self::COMPOSER_NAME);
    }

    /**
     * Set current composer name option value.
     *
     * @param string $composerName
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setComposerName($composerName)
    {
        return $this->setOptionValue(self::COMPOSER_NAME, $composerName);
    }

    /**
     * Get composer settings option value.
     *
     * @return array
     */
    public function getComposerSettings()
    {
        return $this->getOptionValue(self::COMPOSER_SETTINGS);
    }

    /**
     * Set current composer settings option value.
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setComposerSettings(array $composerSettings = [])
    {
        /**
         * If array is type array("config.value:true","require:library/src",).
         */
        $settings = [];
        foreach ($composerSettings as $index => $value) {
            if (is_numeric($index) && mb_strpos($value, ':') > 0) {
                $path = implode('', array_slice(explode(':', $value), 0, 1));
                $val = implode(':', array_slice(explode(':', $value), 1));
                self::dotNotationToArray($path, $val, $settings);
            } else {
                $settings[$index] = $value;
            }
        }

        return $this->setOptionValue(self::COMPOSER_SETTINGS, $settings);
    }

    /**
     * Get structs folder option value.
     *
     * @return string
     */
    public function getStructsFolder()
    {
        return $this->getOptionValue(self::STRUCTS_FOLDER);
    }

    /**
     * Set current structs folder option value.
     *
     * @param string $structsFolder
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setStructsFolder($structsFolder)
    {
        return $this->setOptionValue(self::STRUCTS_FOLDER, $structsFolder);
    }

    /**
     * Get arrays folder option value.
     *
     * @return string
     */
    public function getArraysFolder()
    {
        return $this->getOptionValue(self::ARRAYS_FOLDER);
    }

    /**
     * Set current arrays folder option value.
     *
     * @param string $arraysFolder
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setArraysFolder($arraysFolder)
    {
        return $this->setOptionValue(self::ARRAYS_FOLDER, $arraysFolder);
    }

    /**
     * Get enums folder option value.
     *
     * @return string
     */
    public function getEnumsFolder()
    {
        return $this->getOptionValue(self::ENUMS_FOLDER);
    }

    /**
     * Set current enums folder option value.
     *
     * @param string $enumsFolder
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setEnumsFolder($enumsFolder)
    {
        return $this->setOptionValue(self::ENUMS_FOLDER, $enumsFolder);
    }

    /**
     * Get services folder option value.
     *
     * @return string
     */
    public function getServicesFolder()
    {
        return $this->getOptionValue(self::SERVICES_FOLDER);
    }

    /**
     * Set current services folder option value.
     *
     * @param string $servicesFolder
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setServicesFolder($servicesFolder)
    {
        return $this->setOptionValue(self::SERVICES_FOLDER, $servicesFolder);
    }

    /**
     * Get schemas save option value.
     *
     * @return bool
     */
    public function getSchemasSave()
    {
        return $this->getOptionValue(self::SCHEMAS_SAVE);
    }

    /**
     * Set schemas save option value.
     *
     * @param bool $saveSchemas
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setSchemasSave($saveSchemas)
    {
        return $this->setOptionValue(self::SCHEMAS_SAVE, $saveSchemas);
    }

    /**
     * Get schemas folder option value.
     *
     * @return string
     */
    public function getSchemasFolder()
    {
        return $this->getOptionValue(self::SCHEMAS_FOLDER);
    }

    /**
     * Set schemas folder option value.
     *
     * @param string $schemasFolder
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setSchemasFolder($schemasFolder)
    {
        return $this->setOptionValue(self::SCHEMAS_FOLDER, $schemasFolder);
    }

    /**
     * Get xsd types path option value.
     *
     * @return string
     */
    public function getXsdTypesPath()
    {
        return $this->getOptionValue(self::XSD_TYPES_PATH);
    }

    /**
     * Set xsd types path option value.
     *
     * @param string $xsdTypesPath
     *
     * @throws InvalidArgumentException
     *
     * @return GeneratorOptions
     */
    public function setXsdTypesPath($xsdTypesPath)
    {
        return $this->setOptionValue(self::XSD_TYPES_PATH, $xsdTypesPath);
    }

    public function toArray(): array
    {
        $options = [];
        foreach (array_keys($this->options) as $name) {
            $options[$name] = $this->getOptionValue($name);
        }

        return $options;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    protected function parseOptions(string $filename): self
    {
        $options = $this->loadYaml($filename);
        if (is_array($options)) {
            $this->options = $options;
        } else {
            throw new InvalidArgumentException(sprintf('Settings contained by "%s" are not valid as the settings are not contained by an array: "%s"', $filename, gettype($options)), __LINE__);
        }

        return $this;
    }

    /**
     * turns my.key.path to array('my' => array('key' => array('path' => $value))).
     *
     * @param string $string
     * @param mixed  $value
     */
    protected static function dotNotationToArray($string, $value, array &$array)
    {
        $keys = explode('.', $string);
        foreach ($keys as $key) {
            $array = &$array[$key];
        }
        $array = ('true' === $value || 'false' === $value) ? 'true' === $value : $value;
    }
}
