<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Entities;

interface PropertyWithMunicipality
{
	public function getMunicipality(): Municipality;
}
