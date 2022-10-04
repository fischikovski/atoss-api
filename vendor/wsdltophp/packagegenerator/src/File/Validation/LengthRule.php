<?php

declare(strict_types=1);

namespace WsdlToPhp\PackageGenerator\File\Validation;

/**
 * @see https://www.w3.org/TR/xmlschema-2/#rf-length
 * Validation Rule: Length Valid
 * A value in a ·value space· is facet-valid with respect to ·length·, determined as follows:
 *  - 1 if the {variety} is ·atomic· then
 *   - 1.1 if {primitive type definition} is string or anyURI, then the length of the value, as measured in characters ·must· be equal to {value};
 *   - 1.2 if {primitive type definition} is hexBinary or base64Binary, then the length of the value, as measured in octets of the binary data, ·must· be equal to {value};
 *   - 1.3 if {primitive type definition} is QName or NOTATION, then any {value} is facet-valid.
 *  - 2 if the {variety} is ·list·, then the length of the value, as measured in list items, ·must· be equal to {value}
 */
final class LengthRule extends AbstractLengthRule
{
    public function name(): string
    {
        return 'length';
    }

    public function symbol(): string
    {
        return self::SYMBOL_STRICT;
    }
}
