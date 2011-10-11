<?php
namespace Mytypes;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * My custom datatype.
 */
class BlobType extends Type
{
    const BLOB = 'blob'; // modify to match your type name

    public function getSqlDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $this->getClobTypeDeclarationSQL($fieldDeclaration);
    }

    //public function convertToPHPValue($value, AbstractPlatform $platform)
    //{
    //    // This is executed when the value is read from the database. Make your conversions here, optionally using the $platform.
    //}

    //public function convertToDatabaseValue($value, AbstractPlatform $platform)
    //{
    //    // This is executed when the value is written to the database. Make your conversions here, optionally using the $platform.
    //}

    public function getName()
    {
        return self::BLOB ; // modify to match your constant name
    }
}
