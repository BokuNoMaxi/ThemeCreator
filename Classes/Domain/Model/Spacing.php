<?php
namespace BokuNo\ThemeCreator\Domain\Model;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Spacing extends AbstractEntity{

  /**
   * type
   *
   * @var int
   */
  private $type;

  /**
   * top
   *
   * @var string
   */
  private $top;

  /**
   * right
   *
   * @var string
   */
  private $right;

  /**
   * bottom
   *
   * @var string
   */
  private $bottom;

  /**
   * left
   *
   * @var string
   */
  private $left;

  /**
   * horizontal
   *
   * @var string
   */
  private $horizontal;

  /**
   * vertical
   *
   * @var string
   */
  private $vertical;

  /**
   * sectionstyles
   *
   * @var ObjectStorage<Sectionstyles>
   */
  private $sectionstyles;




  /**
   * Get vertical
   *
   * @return  string
   */
  public function getVertical()
  {
    return $this->vertical;
  }

  /**
   * Set vertical
   *
   * @param  string  $vertical  vertical
   *
   * @return  self
   */
  public function setVertical(string $vertical)
  {
    $this->vertical = $vertical;

    return $this;
  }

  /**
   * Get horizontal
   *
   * @return  string
   */
  public function getHorizontal()
  {
    return $this->horizontal;
  }

  /**
   * Set horizontal
   *
   * @param  string  $horizontal  horizontal
   *
   * @return  self
   */
  public function setHorizontal(string $horizontal)
  {
    $this->horizontal = $horizontal;

    return $this;
  }

  /**
   * Get left
   *
   * @return  string
   */
  public function getLeft()
  {
    return $this->left;
  }

  /**
   * Set left
   *
   * @param  string  $left  left
   *
   * @return  self
   */
  public function setLeft(string $left)
  {
    $this->left = $left;

    return $this;
  }

  /**
   * Get bottom
   *
   * @return  string
   */
  public function getBottom()
  {
    return $this->bottom;
  }

  /**
   * Set bottom
   *
   * @param  string  $bottom  bottom
   *
   * @return  self
   */
  public function setBottom(string $bottom)
  {
    $this->bottom = $bottom;

    return $this;
  }

  /**
   * Get right
   *
   * @return  string
   */
  public function getRight()
  {
    return $this->right;
  }

  /**
   * Set right
   *
   * @param  string  $right  right
   *
   * @return  self
   */
  public function setRight(string $right)
  {
    $this->right = $right;

    return $this;
  }

  /**
   * Get top
   *
   * @return  string
   */
  public function getTop()
  {
    return $this->top;
  }

  /**
   * Set top
   *
   * @param  string  $top  top
   *
   * @return  self
   */
  public function setTop(string $top)
  {
    $this->top = $top;

    return $this;
  }

  /**
   * Get type
   *
   * @return  int
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set type
   *
   * @param  int  $type  type
   *
   * @return  self
   */
  public function setType(int $type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get sectionstyles
   *
   * @return  ObjectStorage<Sectionstyles>
   */
  public function getSectionstyles()
  {
    return $this->sectionstyles;
  }

  /**
   * Set sectionstyles
   *
   * @param  ObjectStorage<Sectionstyles>  $sectionstyles  sectionstyles
   *
   * @return  self
   */
  public function setSectionstyles(ObjectStorage $sectionstyles)
  {
    $this->sectionstyles = $sectionstyles;

    return $this;
  }

  /**
   * Add sectionstyle
   *
   * @param  Sectionstyles  $sectionstyle  sectionstyle
   *
   * @return  self
   */
  public function addSectionstyle(Sectionstyles $sectionstyle)
  {
    $this->sectionstyles->attach($sectionstyle);

    return $this;
  }

  /**
   * Remove sectionstyle
   *
   * @param  Sectionstyles  $sectionstyle  sectionstyle
   *
   * @return  self
   */
  public function removeSectionstyle(Sectionstyles $sectionstyle)
  {
    $this->sectionstyles->detach($sectionstyle);

    return $this;
  }

}
?>
