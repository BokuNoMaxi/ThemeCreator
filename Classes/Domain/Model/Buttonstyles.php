<?php
namespace BokuNo\ThemeCreator\Domain\Model;
use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use BokuNo\ThemeCreator\Domain\Model\Theme;

class Buttonstyles extends AbstractEntity{

  /**
   * theme
   * @var Theme
   */
  private $theme;

  /**
   * class_name
   * @var string
   */
  private $className;

  /**
   * class_name
   * @var string
   */
  private $backgroundColor;

  /**
   * class_name
   * @var string
   */
  private $color;
  /**
   * class_name
   * @var string
   */
  private $hoverBackgroundColor;

  /**
   * class_name
   * @var string
   */
  private $hoverColor;

  /**
   * class_name
   * @var string
   */
  private $borderColor;

  /**
   * class_name
   * @var string
   */
  private $hoverBorderColor;


  /**
   * Get theme
   *
   * @return  Theme
   */
  public function getTheme()
  {
    return $this->theme;
  }

  /**
   * Set theme
   *
   * @param  Theme  $theme  theme
   *
   * @return  self
   */
  public function setTheme(Theme $theme)
  {
    $this->theme = $theme;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getClassName()
  {
    return $this->className;
  }

  /**
   * Set class_name
   *
   * @param  string  $class_name  class_name
   *
   * @return  self
   */
  public function setClassName(string $class_name)
  {
    $this->className = $class_name;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }

  /**
   * Set class_name
   *
   * @param  string  $background_color  class_name
   *
   * @return  self
   */
  public function setBackgroundColor(string $background_color)
  {
    $this->backgroundColor = $background_color;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set class_name
   *
   * @param  string  $color  class_name
   *
   * @return  self
   */
  public function setColor(string $color)
  {
    $this->color = $color;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getHoverBackgroundColor()
  {
    return $this->hoverBackgroundColor;
  }

  /**
   * Set class_name
   *
   * @param  string  $hover_background_color  class_name
   *
   * @return  self
   */
  public function setHoverBackgroundColor(string $hover_background_color)
  {
    $this->hoverBackgroundColor = $hover_background_color;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getHoverColor()
  {
    return $this->hoverColor;
  }

  /**
   * Set class_name
   *
   * @param  string  $hover_color  class_name
   *
   * @return  self
   */
  public function setHoverColor(string $hover_color)
  {
    $this->hoverColor = $hover_color;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getBorderColor()
  {
    return $this->borderColor;
  }

  /**
   * Set class_name
   *
   * @param  string  $border_color  class_name
   *
   * @return  self
   */
  public function setBorderColor(string $border_color)
  {
    $this->borderColor = $border_color;

    return $this;
  }

  /**
   * Get class_name
   *
   * @return  string
   */
  public function getHoverBorderColor()
  {
    return $this->hoverBorderColor;
  }

  /**
   * Set class_name
   *
   * @param  string  $hover_border_color  class_name
   *
   * @return  self
   */
  public function setHoverBorderColor(string $hover_border_color)
  {
    $this->hoverBorderColor = $hover_border_color;

    return $this;
  }
}
