<?php

namespace Drupal\Tests\inflector\Unit;

use Drupal\Core\Template\Loader\StringLoader;
use Drupal\inflector\InflectorTwigExtension;
use Drupal\Tests\UnitTestCase;

/**
 * @coversDefaultClass \Drupal\inflector\InflectorTwigExtension
 */
class TwigExtensionTest extends UnitTestCase {

  /**
   * Twig environment.
   *
   * @var \Twig_Environment
   */
  protected $twig;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $loader = new StringLoader();
    $twig = new \Twig_Environment($loader);
    $twig->addExtension(new InflectorTwigExtension());

    $this->twig = $twig;
  }

  /**
   * Tests singularize filter.
   */
  public function testSingularizeFilter() {
    $rendered = $this->twig->render('{{ "lives"|singularize }}');
    $this->assertEquals('life', $rendered);
  }

  /**
   * Tests pluralize filter.
   */
  public function testPluralizeFilter() {
    $rendered = $this->twig->render('{{ "life"|pluralize }}');
    $this->assertEquals('lives', $rendered);
  }

}
