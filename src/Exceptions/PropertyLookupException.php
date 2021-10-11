<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Exceptions;

use Stefna\PropertyLookup\Values\PropertyIdentification;

interface PropertyLookupException extends \Throwable
{
	public function getPropertyIdentification(): PropertyIdentification;
}
