<!--
  - SPDX-FileCopyrightText: 2020 Nextcloud GmbH and Nextcloud contributors
  - SPDX-License-Identifier: AGPL-3.0-or-later
-->

# kitinerary

[![REUSE status](https://api.reuse.software/badge/github.com/nextcloud-libraries/kitinerary)](https://api.reuse.software/info/github.com/nextcloud-libraries/kitinerary)

[KDE itinerary extractor](https://github.com/KDE/itinerary) for php. This package does not provide the bindings to the C++ applications. Use the [binary adapter](https://packagist.org/packages/christophwurst/kitinerary-bin) and [Flatpak adapter](https://packagist.org/packages/christophwurst/kitinerary-flatpak) in combination with this package.

## Installation

```sh
composer require nextcloud/kitinerary
```

## Usage

```php
use Nextcloud\KItinerary\ItineraryExtractor;
use Nextcloud\KItinerary\Exception\KItineraryRuntimeException;

$extractor = new ItineraryExtractor(/* adapter instance */);

try {
    $itinerary = $extractor->extractFromString('...');
} catch (KItineraryRuntimeException $e) {
    // ...
}
```
