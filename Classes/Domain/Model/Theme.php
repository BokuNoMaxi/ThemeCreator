<?php
namespace BokuNo\ThemeCreator\Domain\Model;
use BokuNo\ThemeCreator\Domain\Model\Fonts;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use BokuNo\ThemeCreator\Domain\Model\Buttonstyles;
use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use BokuNo\ThemeCreator\Domain\Model\Sectionstyles;

class Theme extends AbstractEntity{
  /**
   * title
   *
   * @var string
   */
  private  $title;

  /**
   * description
   *
   * @var string
   */
  private  $description;

  /**
   * sectionstyles
   *
   * @var ObjectStorage<Sectionstyles>
   */
  private  $sectionstyles;

  /**
   * buttonstyles
   *
   * @var ObjectStorage<Buttonstyles>
   */
  private  $buttonstyles;

  /**
   * fonts
   *
   * @var ObjectStorage<Fonts>
   */
  private  $font;


  /**
   * Get fonts
   *
   * @return  ObjectStorage<Fonts>
   */
  public function getFont()
  {
    return $this->font;
  }

  /**
   * Set fonts
   *
   * @param  ObjectStorage<Fonts>  $font  fonts
   *
   * @return  self
   */
  public function setFont(ObjectStorage $font)
  {
    $this->font = $font;

    return $this;
  }

  /**
   * add fonts
   *
   * @param Fonts $font
   *
   * @return void
   */
  public function addFont(Fonts $font){
    $this->font->attach($font);
  }

  /**
   * remove fonts
   *
   * @param Fonts $font
   *
   * @return void
   */
  public function removeFont(Fonts $font){
    $this->font->detach($font);
  }


  /**
   * Get buttonstyles
   *
   * @return  ObjectStorage<Buttonstyles>
   */
  public function getButtonstyles()
  {
    return $this->buttonstyles;
  }

  /**
   * Set buttonstyles
   *
   * @param  ObjectStorage<Buttonstyles>  $buttonstyles  buttonstyles
   *
   * @return  self
   */
  public function setButtonstyles(ObjectStorage $buttonstyles)
  {
    $this->buttonstyles = $buttonstyles;

    return $this;
  }

  /**
   * add buttonstyles
   *
   * @param Buttonstyles $buttonstyles
   *
   * @return void
   */
  public function addButtonstyles(Buttonstyles $buttonstyles){
    $this->buttonstyles->attach($buttonstyles);
  }

  /**
   * remove buttonstyles
   *
   * @param Buttonstyles $buttonstyles
   *
   * @return void
   */
  public function removeButtonstyles(Buttonstyles $buttonstyles){
    $this->buttonstyles->detach($buttonstyles);
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
   * add sectionstyles
   *
   * @param Sectionstyles $sectionstyles
   *
   * @return void
   */
  public function addSectionstyles(Sectionstyles $sectionstyles){
    $this->sectionstyles->attach($sectionstyles);
  }

  /**
   * remove sectionstyles
   *
   * @param Sectionstyles $sectionstyles
   *
   * @return void
   */
  public function removeSectionstyles(Sectionstyles $sectionstyles){
    $this->sectionstyles->detach($sectionstyles);
  }

  /**
   * Get description
   *
   * @return  string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set description
   *
   * @param  string  $description  description
   *
   * @return  self
   */
  public function setDescription(string $description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get title
   *
   * @return  string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set title
   *
   * @param  string  $title  title
   *
   * @return  self
   */
  public function setTitle(string $title)
  {
    $this->title = $title;

    return $this;
  }
}
