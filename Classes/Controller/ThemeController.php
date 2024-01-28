<?php

namespace BokuNo\ThemeCreator\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

#[AsController]
class ThemeController extends ActionController
{
  public function __construct(
    protected readonly ModuleTemplateFactory $moduleTemplateFactory,
    protected readonly PageRenderer $pageRenderer
  ) {
  }

  // use Psr\Http\Message\ResponseInterface
  public function settingsAction(): ResponseInterface
  {
      $this->pageRenderer->addCssFile('EXT:yet_another_bootstrap_template/Resources/Public/dist/bootstrap-5.3.2-dist/css/bootstrap.min.css');
      $this->pageRenderer->addCssFile('EXT:yet_another_bootstrap_template/Resources/Public/CSS/utilities.css');
      $this->pageRenderer->addJsFile('EXT:yet_another_bootstrap_template/Resources/Public/dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js');

      $this->view->assign('view', 'generate');
      $moduleTemplate = $this->moduleTemplateFactory->create($this->request);
      // Adding title, menus, buttons, etc. using $moduleTemplate ...
      $moduleTemplate->setContent($this->view->render());
      return $this->htmlResponse($moduleTemplate->renderContent());
  }
}
