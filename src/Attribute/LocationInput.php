<?php

declare(strict_types=1);

namespace Drupal\geolocation\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a LocationInput attribute object.
 *
 * @see \Drupal\geolocation\LocationInputManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class LocationInput extends Plugin {

  /**
   * Constructs a LocationInput attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $name
   *   (optional) The name of the LocationInput.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   (optional) The description of the LocationInput.
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
