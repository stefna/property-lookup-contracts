<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Entities;

use Stefna\PersonContract\Entities\Person;

interface PropertyOwner
{
	public function getPropertyOwnership(): int;
}
