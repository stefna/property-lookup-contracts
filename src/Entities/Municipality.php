<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Entities;

interface Municipality
{
	public function getId(): mixed;

	public function getName(): string;
}
