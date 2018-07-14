<?php

namespace Application\Block\Anchor;
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Block\BlockController;
use Core;

class Controller extends BlockController
{

    public $helpers = array('form');

    protected $btInterfaceWidth = 450;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btInterfaceHeight = 560;
    protected $btExportFileColumns = array('fID');
    protected $btTable = 'btAnchor';

    public function getBlockTypeDescription()
    {
        return t("Mark a section of content to anchor link to");
    }

    public function getBlockTypeName()
    {
        return t("Anchor");
    }

}