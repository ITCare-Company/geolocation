<?php

declare(strict_types=1);

namespace Drupal\geolocation\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a Location attribute object.
 *
 * @see \Drupal\geolocation\LocationManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Location extends Plugin {

  /**
   * Constructs a Location attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $name
   *   (optional) The name of the Location.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   (optional) The description of the Location.
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
