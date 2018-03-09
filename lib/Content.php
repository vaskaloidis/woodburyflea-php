<?php

class Content {
	private $id;
	private $section;
	private $content;
	private $created;
    private $niceName;
	
	public function getId() {
		return $this->id;
	}
	public function getSection() {
		return $this->section;
	}
	public function getContent() {
		return $this->content;
	}
	public function getCreated() {
		return $this->created;
	}
    public function getNiceName() {
        return $this->niceName;
    }
	
	public function setId($id) {
		$this->id = $id;
	}
	public function setSection($section) {
		$this->section = $section;
	}
	public function setContent($content) {
		$this->content = $content;
	}
	public function setCreated($created) {
		$this->created = $created;
	}
	public function setNiceName($nicename) {
        $this->niceName = $nicename;
    }
}


?>