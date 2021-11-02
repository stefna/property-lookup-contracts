<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Entities;

interface PropertyOwner
{
	public function getPropertyOwnership(): float;
}
