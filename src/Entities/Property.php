<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Entities;

use Stefna\PersonContract\Entities\Address;
use Stefna\PersonContract\Entities\Person;
use Stefna\PropertyLookup\Values\PropertyIdentification;

interface Property
{
	public function getPropertyIdentification(): PropertyIdentification;

	public function getAddress(): Address;

	public function getMarking(): string;

	public function getType(): string;

	/**
	 * @return Person&PropertyOwner[]
	 */
	public function getOwners(): array;
}
