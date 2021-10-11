<?php declare(strict_types=1);

namespace Stefna\PropertyLookup\Exceptions;

use Stefna\PropertyLookup\Values\PropertyIdentification;
use Throwable;

final class PropertyNotFound extends \DomainException implements PropertyLookupException
{
	/** @var PropertyIdentification */
	private $propertyIdentification;

	public function __construct(
		PropertyIdentification $propertyIdentification,
		string $message = "",
		Throwable $previous = null
	) {
		parent::__construct($message ?: 'Property not found', 0, $previous);
		$this->propertyIdentification = $propertyIdentification;
	}

	public function getPropertyIdentification(): PropertyIdentification
	{
		return $this->propertyIdentification;
	}
}
