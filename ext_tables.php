<?php
defined('TYPO3') or die();

if (version_compare(\TYPO3\CMS\Core\Utility\VersionNumberUtility::getNumericTypo3Version(), '12.0.0', '<=')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Backend\Template\Components\ButtonBar']['getButtonsHook'][]
        = 'Goran\SaveCloseCe\Hooks\SaveCloseHook->addSaveCloseButton';
}
