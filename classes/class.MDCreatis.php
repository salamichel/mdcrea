<?php

class mdcreatis {

    public $page_id;
    public $path;
    public $filename;
    public $pagesInfo;
    private $db;

    function __construct($db) {
        $this->db = &$db;
        $this->path = "";
    }

    function setPagePath($path) {
        $this->path = $path;
    }

    function getPageInfo() {
        $r = $this->db->where('chemin', $this->path)
                ->get("md_produits");

        $this->pagesInfo = $r;
        return($r);
    }

    function getSubPage($subpage) {
        if (empty($this->pagesInfo))
            $this->getPageInfo();


        foreach ($this->pagesInfo as $page) {
            if ($page["code"] === $subpage) {                
                list($whole, $decimal) = explode('.', $page["prix_ht"]);
                $page["prix"] = $whole;
                $page["decimal"] = $decimal;
                return($page);
            }
        }
    }

}
?>
