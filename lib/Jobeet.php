<?php
/**
 * Jobeet helper functions
 * User: szines
 * Date: 1/03/15
 * Time: 12:04 AM
 */

class Jobeet
{
  public static function slugify($text)
  {
    $text = preg_replace('/\W+/', '-', $text);
    $text = strtolower(trim($text, '-'));

    return $text;
  }
}
