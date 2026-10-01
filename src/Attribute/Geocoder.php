<?php

declare(strict_types=1);

namespace Drupal\geolocation\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a geocoder attribute object.
 *
 * @see \Drupal\geolocation\GeocoderManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Geocoder extends Plugin {

  /**
   * Constructs a Geocoder attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $name
   *   (optional) The name of the geocoder.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   (optional) The description of the geocoder.
   * @param bool $locationCapable
   *   (optional) Can the geocoder retrieve coordinates.
   * @param bool $boundaryCapable
   *   (optional) Can the geocoder retrieve boundaries.
   * @param bool $frontendCapable
   *   (optional) Can the geocoder be used in the frontend.
   * @param bool $reverseCapable
   *   (optional) Can the geocoder perform reverse geocoding.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly ?TranslatableMarkup $name = NULL,
    public readonly ?TranslatableMarkup $description = NULL,
    public readonly bool $locationCapable = FALSE,
    public readonly bool $boundaryCapable = FALSE,
    public readonly bool $frontendCapable = FALSE,
    public readonly bool $reverseCapable = FALSE,
    public readonly ?string $deriver = NULL,
  ) {}

}
