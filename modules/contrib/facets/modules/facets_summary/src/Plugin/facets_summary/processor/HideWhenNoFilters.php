<?php

namespace Drupal\facets_summary\Plugin\facets_summary\processor;

use Drupal\facets_summary\FacetsSummaryInterface;
use Drupal\facets_summary\Processor\BuildProcessorInterface;
use Drupal\facets_summary\Processor\ProcessorPluginBase;

// islandora-muni
/**
 * Provides a processor that hides the summary when the source was not rendered.
 *
 * @SummaryProcessor(
 *   id = "hide_when_no_filters",
 *   label = @Translation("Hide Summary when no filters."),
 *   description = @Translation("When checked, this facet will only be rendered when any filter is active."),
 *   default_enabled = TRUE,
 *   stages = {
 *     "build" = 9
 *   }
 * )
 */
class HideWhenNoFilters extends ProcessorPluginBase implements BuildProcessorInterface {

  /**
   * {@inheritdoc}
   */
  public function build(FacetsSummaryInterface $facets_summary, array $build, array $facets) {
    if (empty($build['#items'])) {
      return NULL;
    }
    return $build;
  }

}
