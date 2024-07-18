<?php

/**
 * SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Nextcloud\KItinerary;

use Nextcloud\KItinerary\Exception\KItineraryRuntimeException;

class ItineraryExtractor
{

	/** @var Adapter */
	private $adapter;

	public function __construct(Adapter $adapter)
	{
		$this->adapter = $adapter;
	}

	/**
	 * @param string $source
	 * @return Itinerary
	 * @throws KItineraryRuntimeException
	 */
	public function extractFromString(string $source): Itinerary
	{
		return new Itinerary(
			$this->adapter->extractFromString($source)
		);
	}

}
