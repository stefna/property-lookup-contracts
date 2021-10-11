<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Values;

final class SimplePropertyIdentification implements PropertyIdentification
{
	/** @var string */
	private $identification;

	public function __construct(string $identification)
	{
		$this->identification = $identification;
	}

	public function toString(): string
	{
		return $this->identification;
	}
}
