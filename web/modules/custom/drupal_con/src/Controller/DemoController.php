<?php

namespace Drupal\drupal_con\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Demo Controller.
 */
class DemoController extends ControllerBase {

  /**
   * Index.
   *
   * @return array
   *   Return markup.
   */
  public function index() {
    // A simple markup return.
    return [
      '#markup' => "We are excited to be at DrupalCon and showcase our CICD demo with Platform.sh!",
    ];
  }

}
