<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Entities;

final class SimpleMunicipality implements Municipality
{
	public function __construct(
		private mixed $id,
		private string $name,
	) {}

	public function getId(): mixed
	{
		return $this->id;
	}

	public function getName(): string
	{
		return $this->name;
	}
}
