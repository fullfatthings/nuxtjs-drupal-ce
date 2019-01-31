<?php

namespace Drupal\custom_elements\Processor;


use Drupal\custom_elements\CustomElement;

/**
 * Processes data into custom elements.
 */
interface CustomElementProcessorInterface {

  /**
   * Determines whether processing the given data is supported.
   *
   * @param mixed $data
   *   The data to be processed into a custom element.
   *
   * @return bool
   */
  public function supports($data);

  /**
   * Processes the given data and adds it to the element.
   *
   * @param string $key
   *   The key under which to add this data.
   * @param mixed $data
   *   The data to be added.
   * @param \Drupal\custom_elements\CustomElement $element
   *   The custom element that is generated.
   * @param string $viewMode
   *   The view mode under which the element is rendered.
   */
  public function addtoElement($key, $data, CustomElement $element, $viewMode);
}
