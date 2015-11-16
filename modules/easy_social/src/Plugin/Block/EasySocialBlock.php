<?php

/**
 * @file
 * Contains \Drupal\easy_social\Plugin\Block\EasySocialBlock.
 */

namespace Drupal\easy_social\Plugin\Block;

use Drupal\Core\Block\BlockBase;
//use Drupal\Component\Annotation\Plugin;
//use Drupal\Core\Annotation\Translation;

/**
 * Provides an Easy Social block.
 *
 * @Block(
 *   id = "easy_social_block",
 *   admin_label = @Translation("Easy Social"),
 *   category = @Translation("Blocks")
 * )
 */
class EasySocialBlock extends BlockBase {

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
      //return array('#markup' => 'hello world');
     // echo "hello";die;
    $content = array(
     '#theme' => 'easy_social',
    );
   // print_r($content);die;
   
    return array(
      '#children' => \Drupal::service('renderer')->render($content),
    );
  }

}
