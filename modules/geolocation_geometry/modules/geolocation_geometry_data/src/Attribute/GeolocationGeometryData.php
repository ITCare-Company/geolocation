<?php

declare(strict_types=1);

namespace Drupal\geolocation_geometry_data\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a GeolocationGeometryData attribute object.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class GeolocationGeometryData extends Plugin {

  /**
   * Constructs a GeolocationGeometryData attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $name
   *   (optional) The name of the plugin.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   (optional) The description of the plugin.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly ?TranslatableMarkup $name = NULL,
    public readonly ?TranslatableMarkup $description = NULL,
    public readonly ?string $deriver = NULL,
  ) {}

}
