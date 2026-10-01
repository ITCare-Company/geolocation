<?php

declare(strict_types=1);

namespace Drupal\geolocation\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a MapFeature attribute object.
 *
 * @see \Drupal\geolocation\MapFeatureManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class MapFeature extends Plugin {

  /**
   * Constructs a MapFeature attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $name
   *   (optional) The name of the MapFeature.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   (optional) The description of the MapFeature.
   * @param string|null $type
   *   (optional) The map type supported by this MapFeature.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly ?TranslatableMarkup $name = NULL,
    public readonly ?TranslatableMarkup $description = NULL,
    public readonly ?string $type = NULL,
    public readonly ?string $deriver = NULL,
  ) {}

}
