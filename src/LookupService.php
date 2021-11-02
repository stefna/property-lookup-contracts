<?php declare(strict_types=1);

namespace Stefna\PropertyLookup;

use Stefna\PersonContract\Entities\Address;
use Stefna\PersonContract\Entities\Person;
use Stefna\PersonContract\Entities\PersonWithAddress;
use Stefna\PropertyLookup\Values\PropertyIdentification;
use Stefna\PropertyLookup\Entities\Property;
use Stefna\PropertyLookup\Exceptions\PropertyLookupException;

interface LookupService
{
	/**
	 * @throws PropertyLookupException
	 */
	public function lookup(PropertyIdentification $identification): Property;

	/**
	 * @throws PropertyLookupException
	 * @return Property[]
	 */
	public function lookupByAddress(Address $address): array;

	/**
	 * @throws PropertyLookupException
	 * @param PersonWithAddress&Person
	 * @return Property[]
	 */
	public function lookupByPerson(PersonWithAddress $person): array;
}
