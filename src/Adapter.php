<?php

/**
 * SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Nextcloud\KItinerary;

use Nextcloud\KItinerary\Exception\KItineraryRuntimeException;

interface Adapter
{

	public function isAvailable(): bool;

	/**
	 * @param string $source
	 * @throws KItineraryRuntimeException
	 */
	public function extractFromString(string $source): array;

	/**
	 * @param string $source
	 * @return string ics/ical event
	 * @throws KItineraryRuntimeException
	 */
	public function extractIcalFromString(string $source): string;

}
