<?php

namespace Drupal\custom_book_list\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the custom book route.
 */
class CustomBookListController extends ControllerBase {

  /**
   * Renders the content for the custom book route.
   *
   * @return array
   *   A render array representing the content.
   */
  public function content() {
    // You can modify this content as needed.
    $build = [
      '#markup' => $this->t('This is the custom book page.'),
    ];
    return $build;
  }

}
