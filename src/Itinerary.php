<?php

/**
 * SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Nextcloud\KItinerary;

use Countable;
use JsonSerializable;
use ReturnTypeWillChange;

class Itinerary implements Countable, JsonSerializable {

	/** @var array */
	private $entries;

	public function __construct(array $entries = []) {
		$this->entries = $entries;
	}

	public static function fromJson(string $json): self {
		return new self(json_decode($json, true));
	}

	public function merge(Itinerary $other): self {
		return new self(array_merge($this->entries, $other->entries));
	}

	public function count(): int {
		return count($this->entries);
	}

	#[ReturnTypeWillChange]
	public function jsonSerialize() {
		return $this->entries;
	}

}
