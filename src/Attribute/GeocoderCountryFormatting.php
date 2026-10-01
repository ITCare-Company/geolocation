<?php

declare(strict_types=1);

namespace Drupal\geolocation\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;

/**
 * Defines a GeocoderCountryFormatting attribute object.
 *
 * @see \Drupal\geolocation\GeocoderCountryFormattingManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class GeocoderCountryFormatting extends Plugin {

  /**
   * Constructs a GeocoderCountryFormatting attribute.
   *
   * @param string $id
   *   The ID.
   * @param string|null $countryCode
   *   (optional) The country code.
   * @param string|null $geocoder
   *   (optional) The geocoder ID.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly ?string $countryCode = NULL,
    public readonly ?string $geocoder = NULL,
    public readonly ?string $deriver = NULL,
  ) {}

}
