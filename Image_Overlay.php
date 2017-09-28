<?php

/**
 * Image color/gradient overlay.
 *
 * This class serves the function of returning an image with a color/gradient overlay
 *
 * PHP version 5.6.30
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Helpers
 * @package    Ciccarone
 * @author     Tony Ciccarone <me@tonyciccarone.com>
 * @copyright  2004-2017 Tony Ciccarone
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       http://pear.php.net/package/PackageName
 */

/**
 * Usage:
 * $img = new Overlay_Image('image.jpg');
 * echo $img->display();
 */
  class Overlay_Image
  {

    /**
     *
     * The $image variable expects a working relative/absolute URL
     *
     * @var string
     */

    var $image = '';


    /**
     *
     * The $color variable is optional and can take an rgba() string or array
     * There is no limit on the number of array elements passed in
     *
     * e.g.
     * $color = rgba(0, 0, 0, .5);
     * or
     * $color = [rgba(0, 0, 0, .5), rgba(255, 255, 255, .5)];
     *
     * @var array
     */

    var $color = '';


    /**
     *
     * The $html variable is optional and can take HTML data for insertion into image overlay frame
     *
     * @var string
     */

    var $html = '';


    /**
     *
     * The $background_size variable is optional, defaulting to cover
     *
     * @var string
     */

    var $background_size = '';


    /**
     *
     * The $background_position variable is optional, defaulting to center
     *
     * @var string
     */

    var $background_position = '';


    /**
     *
     * Constructs Image Overlay Variables
     *
     * @param string $image  URL of image
     * @param array $color  Color overlay in rgba()
     * @param string $background_size  CSS attribute
     * @param string $background_position  CSS attribute
     */

    function __construct($image = 'test.jpg', $color = 'rgba(0,0,0,.5)', $html = '', $background_size = 'cover', $background_position = 'center center')
    {

      $this->image = $image;

      $this->color = (is_array($color)) ? join($color, ',') : "$color, $color";

      $this->html = $html;

      $this->background_size = $background_size;

      $this->background_position = $background_position;

    }

    /**
     *
     * Display the image overlay
     *
     * @return string
     */

    public function display()
    {

      return '<div style="background: linear-gradient(' . $this->color . '),url(' . $this->image . '); background-size:' . $this->background_size . '!important;background-position:' . $this->background_position . '!important;">' . $this->html . '</div>';

    }

  }

  // $img = new Overlay_Image('http://www.nwnit.com/assets/NWN-Cloud-Video-Panel1.png?1506616243866', 'rgba(0,0,0,.5)', '<h1>hello world</h1>');
  //
  // echo $img->display();
