<?php

namespace Drupal\inflector;

use Symfony\Component\Inflector\Inflector;

/**
 * A class providing Drupal Twig extensions.
 */
class InflectorTwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'inflector.twig.extension';
  }

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('singularize', [Inflector::class, 'singularize']),
      new \Twig_SimpleFilter('pluralize', [Inflector::class, 'pluralize']),
    ];
  }

}
