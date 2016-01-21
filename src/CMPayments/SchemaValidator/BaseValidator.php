<?php namespace CMPayments\SchemaValidator;

use CMPayments\SchemaValidator\Exceptions\ValidateException;
use CMPayments\SchemaValidator\Validators\ArrayTrait;
use CMPayments\SchemaValidator\Validators\EnumTrait;
use CMPayments\SchemaValidator\Validators\ErrorTrait;
use CMPayments\SchemaValidator\Validators\FormatTrait;
use CMPayments\SchemaValidator\Validators\NumberTrait;
use CMPayments\SchemaValidator\Validators\StringTrait;

class BaseValidator
{
    use ErrorTrait;
    use ArrayTrait;
    use EnumTrait;
    use FormatTrait;
    use NumberTrait;
    use StringTrait;

    const TYPE   = 'type';
    const FORMAT = 'format';

    // Types
    const _ARRAY  = 'array';
    const BOOLEAN = 'boolean';
    const DOUBLE  = 'double';
    const INTEGER = 'integer';
    const NUMBER  = 'number';
    const OBJECT  = 'object';
    const STRING  = 'string';
    const CLOSURE = 'closure';
    const _NULL   = 'null';

    // String formats
    const DATE        = 'date';
    const DATETIME    = 'datetime';
    const EMAIL       = 'email';
    const TIME        = 'time';
    const UTC_SECONDS = 'utc-seconds';

    // Valid types for the items in $schema->properties
    private $validTypes = [
        self::_ARRAY,
        self::BOOLEAN,
        self::NUMBER,
        self::OBJECT,
        self::STRING
    ];

    // Valid formats for string typed items
    private $validFormats = [
        self::DATE,
        self::DATETIME,
        self::EMAIL,
        self::TIME,
        self::UTC_SECONDS
    ];

    /**
     * @return array
     * @throws ValidateException
     */
    public function getValidTypes()
    {
        return $this->validTypes;
    }

    /**
     * @return array
     */
    public function getValidFormats()
    {
        return $this->validFormats;
    }


}