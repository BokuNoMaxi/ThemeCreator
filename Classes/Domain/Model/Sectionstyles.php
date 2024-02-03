<?php
namespace BokuNo\ThemeCreator\Domain\Model;
use BokuNo\ThemeCreator\Domain\Model\Theme;
use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Sectionstyles extends AbstractEntity{

  /**
   * theme
   * @var Theme
   */
  private $theme;

  /**
   * container
   * @var string
   */
  private $container;

  /**
   * spacings
   * @var string
   */
  private $spacings;

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
   * Get container
   *
   * @return  string
   */
  public function getContainer()
  {
    return $this->container;
  }

  /**
   * Get spacings
   *
   * @return  string
   */
  public function getSpacings()
  {
    return $this->spacings;
  }

  /**
   * Set theme
   *
   * @param  Theme  $theme  theme
   *
   * @return  void
   */
  public function setTheme(Theme $theme)
  {
    $this->theme = $theme;
  }

  /**
   * Set container
   *
   * @param  string  $container  container
   *
   * @return  void
   */
  public function setContainer(string $container)
  {
    $this->container = $container;
  }

  /**
   * Set spacings
   *
   * @param  string  $spacings  spacings
   *
   * @return  void
   */
  public function setSpacings(string $spacings)
  {
    $this->spacings = $spacings;
  }


}
