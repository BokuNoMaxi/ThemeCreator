<?php

namespace BokuNo\ThemeCreator\Controller;

use GuzzleHttp\Psr7\Response;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Page\PageRenderer;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use BokuNo\ThemeCreator\Domain\Model\Theme;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Backend\Template\Components\ButtonBar;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use BokuNo\ThemeCreator\Domain\Repository\ThemeRepository;


#[AsController]
class ThemeController extends ActionController
{
  private $moduleTemplate;

  public function __construct(
    protected readonly ModuleTemplateFactory $moduleTemplateFactory,
    protected readonly PageRenderer $pageRenderer,
    protected readonly ThemeRepository $themeRepository,
    protected readonly IconFactory $iconFactory
  ) {}

  private function init(): void
  {
    $this->pageRenderer->addCssFile('EXT:yet_another_bootstrap_template/Resources/Public/dist/bootstrap-5.3.2-dist/css/bootstrap.min.css');
    $this->pageRenderer->addCssFile('EXT:yet_another_bootstrap_template/Resources/Public/CSS/utilities.css');
    $this->pageRenderer->addJsFile('EXT:yet_another_bootstrap_template/Resources/Public/dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js');

    $this->moduleTemplate = $this->moduleTemplateFactory->create($this->request);
    $this->moduleTemplate->setContent($this->view->render());

    //Add this line if we have more Actions in this extension
    //$this->setDocHeader();
  }

  //Add buttons on top of the backend module
  //Set current Action as btn-primary
  private function setDocHeader() {
    //@var TYPO3\CMS\Backend\Template\Components\ButtonBar
    $buttonBar = $this->moduleTemplate->getDocHeaderComponent()->getButtonBar();
    $buttonBar->addButton(
      $buttonBar->makeLinkButton()
        ->setHref($this->uriBuilder->uriFor('list'))
        ->setTitle($this->getLanguageService()->sL('LLL:EXT:theme_creator/Resources/Private/Language/locallang_db.xlf:theme.list'))
        ->setShowLabelText(true)
        ->setIcon($this->iconFactory->getIcon('actions-close', Icon::SIZE_SMALL))
        ->setClasses('btn-primary')
    );
  }

  public function listAction (): ResponseInterface {
    $this->init();
    $themes = $this->themeRepository->findAll();

    return $this->htmlResponse($this->moduleTemplate->renderContent());
  }

  public function newAction (){
    $this->init();
    return $this->htmlResponse($this->moduleTemplate->renderContent());
  }

  public function createAction (Theme $theme){
    $this->themeRepository->add($theme);
    $this->redirect('list');
  }

  public function editAction (){
    $this->init();
    return $this->htmlResponse($this->moduleTemplate->renderContent());
  }

  public function updateAction (Theme $theme){
    $this->themeRepository->update($theme);
    $this->redirect('list');
  }

  public function deleteAction (Theme $theme){
    $this->themeRepository->remove($theme);
    $this->redirect('list');
  }

  protected function getLanguageService(): LanguageService
  {
      return $GLOBALS['LANG'];
  }
}
