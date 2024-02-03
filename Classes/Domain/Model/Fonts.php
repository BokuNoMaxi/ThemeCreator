<?php
namespace BokuNo\ThemeCreator\Domain\Model;
use BokuNo\ThemeCreator\Domain\Model\Theme;
use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Fonts extends AbstractEntity{

  /**
   * theme
   *
   * @var Theme
   */
  protected $theme;

  /**
   * sansSerif
   *
   * @var string
   */
  protected $sansSerif;

  /**
   * monospace
   *
   * @var string
   */
  protected $monospace;

  /**
   * size
   *
   * @var string
   */
  protected $size;

  /**
   * weight
   *
   * @var string
   */
  protected $weight;

  /**
   * color
   *
   * @var string
   */
  protected $color;

  /**
   * backgroundColor
   *
   * @var string
   */
  protected $backgroundColor;

  /**
   * linkColor
   *
   * @var string
   */
  protected $linkColor;

  /**
   * hoverColor
   *
   * @var string
   */
  protected $hoverColor;




  /**
   * Get hoverColor
   *
   * @return  string
   */
  public function getHoverColor()
  {
    return $this->hoverColor;
  }

  /**
   * Set hoverColor
   *
   * @param  string  $hoverColor  hoverColor
   *
   * @return  self
   */
  public function setHoverColor(string $hoverColor)
  {
    $this->hoverColor = $hoverColor;

    return $this;
  }

  /**
   * Get linkColor
   *
   * @return  string
   */
  public function getLinkColor()
  {
    return $this->linkColor;
  }

  /**
   * Set linkColor
   *
   * @param  string  $linkColor  linkColor
   *
   * @return  self
   */
  public function setLinkColor(string $linkColor)
  {
    $this->linkColor = $linkColor;

    return $this;
  }

  /**
   * Get backgroundColor
   *
   * @return  string
   */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }

  /**
   * Set backgroundColor
   *
   * @param  string  $backgroundColor  backgroundColor
   *
   * @return  self
   */
  public function setBackgroundColor(string $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;

    return $this;
  }

  /**
   * Get color
   *
   * @return  string
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set color
   *
   * @param  string  $color  color
   *
   * @return  self
   */
  public function setColor(string $color)
  {
    $this->color = $color;

    return $this;
  }

  /**
   * Get weight
   *
   * @return  string
   */
  public function getWeight()
  {
    return $this->weight;
  }

  /**
   * Set weight
   *
   * @param  string  $weight  weight
   *
   * @return  self
   */
  public function setWeight(string $weight)
  {
    $this->weight = $weight;

    return $this;
  }

  /**
   * Get size
   *
   * @return  string
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set size
   *
   * @param  string  $size  size
   *
   * @return  self
   */
  public function setSize(string $size)
  {
    $this->size = $size;

    return $this;
  }

  /**
   * Get monospace
   *
   * @return  string
   */
  public function getMonospace()
  {
    return $this->monospace;
  }

  /**
   * Set monospace
   *
   * @param  string  $monospace  monospace
   *
   * @return  self
   */
  public function setMonospace(string $monospace)
  {
    $this->monospace = $monospace;

    return $this;
  }

  /**
   * Get sansSerif
   *
   * @return  string
   */
  public function getSansSerif()
  {
    return $this->sansSerif;
  }

  /**
   * Set sansSerif
   *
   * @param  string  $sansSerif  sansSerif
   *
   * @return  self
   */
  public function setSansSerif(string $sansSerif)
  {
    $this->sansSerif = $sansSerif;

    return $this;
  }

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
}
