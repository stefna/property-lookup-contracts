<?php declare(strict_types=1);

namespace Stefna\PropertyLookup;

use Stefna\PropertyLookup\Values\PropertyIdentification;
use Stefna\PropertyLookup\Entities\Property;
use Stefna\PropertyLookup\Exceptions\PropertyLookupException;

interface LookupService
{
	/**
	 * @throws PropertyLookupException
	 */
	public function lookup(PropertyIdentification $identification): Property;
}
