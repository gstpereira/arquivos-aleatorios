<?php
  $filters = array();

  foreach ( $products as $product ) {


    // Primeiro resgata os filtros pai
    foreach ( $product->filters as $filterOption ) {
      $options = array();
      $filter = new \stdClass;
      $filter->id = $filterOption->filter->id;
      $filter->name = $filterOption->filter->name;

      foreach ($filterOption->options as $option) {
        $options[] = $option;
      }

      $filter->options = $options;

    }

  }