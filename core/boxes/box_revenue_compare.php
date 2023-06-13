<?php
require_once DOL_DOCUMENT_ROOT."/core/boxes/modules_boxes.php";

class box_revenue_compare extends ModeleBoxes
{
    public $boxcode="RevenueCompare";
    public $boximg="monmodule.png";
    public $boxlabel="RevenueCompare";
    public $depends = array("revenuecompare"); 

    public $infoBoxHead = array();
    public $infoBoxContents = array();

    public function __construct($db)
    {
        global $langs;
        $langs->load("boxes");

        $this->db = $db;
    
    }

    public function showBox($head = null, $contents = null, $nooutput=0)
    {
        parent::showBox($this->infoBoxHead, $this->infoBoxContents);
    }

    public function loadBox($head = null, $contents = null)
    {
        $this->infoBoxHead = array('text' => 'Titre de la boîte', 'limit'=>500);

        $this->infoBoxContents[] = array(
            0 => array(
                'td' => 'align="left" width="16"',
                'logo' => $this->boximg,
                'url' => DOL_URL_ROOT."/monmodule/mypage.php",
            ),
            1 => array(
                'td' => 'align="left"',
                'text' => 'Contenu de la boîte',
                'url' => DOL_URL_ROOT."/monmodule/mypage.php",
            ),
        );
    }
}
