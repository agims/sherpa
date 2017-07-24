<?php
/*

=================
SocialMedia Class
=================

This is a class for showing social media.  It can be used to show a single social media link or all of them.

To define which social media links are shown, the easiest way is to send an array when the class is instantiated.
You would do that like this:

$sm = new SocialMedia(array('facebook','twitter','pinterest'));
$sm->showNetworkButtons();

This will not only set which ones are used but also the order in which they are shown when showing them all.

If you are just wanting to show a single network, you can instantiate and then show that single one.

$sm = new SocialMedia();
$sm->showSingle('facebook');

*/
class SocialMedia {
    
    // Private vars
	private $facebook = array(
		'url' => FACEBOOK,
		'name' => "Facebook",
		'icon' => 'facebook',
		'default' => 'http://facebook.com/',
	);
	private $twitter = array(
		'url' => TWITTER,
		'name' => 'Twitter',
		'icon' => 'twitter',
		'default' => 'http://twitter.com/',
	);
	private $googleplus = array(
		'url' => GOOGLEPLUS,
		'name' => 'Google Plus',
		'icon' => 'google-plus',
		'default' => 'http://plus.google.com/',
	);
	private $pinterest = array(
		'url' => PINTEREST,
		'name' => 'Pinterest',
		'icon' => 'pinterest-p',
		'default' => 'http://pinterest.com/',
	);
	private $linkedin = array(
		'url' => LINKEDIN,
		'name' => 'LinkedIn',
		'icon' => 'linkedin',
		'default' => 'http://linkedin.com/',
	);
	private $youtube = array(
		'url' => YOUTUBE,
		'name' => 'YouTube',
		'icon' => 'youtube-play',
		'default' => 'https://www.youtube.com',
	);
	private $showNetworks = array();
	private $networkNames = array(
		'facebook',
		'twitter',
		'googleplus',
		'pinterest',
		'linkedin',
		'youtube'
	);

	private $size = 'lg';
	private $style = 'square';
	private $echoed = TRUE;
	private $listType = 'list-inline';
	private $colorType = 'lighten';
	private $showEmpty = TRUE;
	
	private $sizeOpts = array(
		'sm',
		'lg'
	);
	
	private $styleOpts = array(
		'rounded',
		'circle',
		'square'
	);
	
	private $listTypeOpts = array(
    	'list-inline',
    	'list-unstyled'
	);
	
	private $colorTypeOpts = array(
    	'lighten',
    	'darken',
    	'singlecolor'
	);
	
	private $listId = '';
	
	
    // Public functions
	public function __construct($val) {
		if(empty($val)) {
			return FALSE;
		}
		if(is_array($val)) {
			$this->setNetworks($val);
		}
	}

	public function getSize() { return $this->size; }
	public function getStyle() { return $this->style; }
	public function getEchoed() { return $this->echoed; }
	public function getListType() { return $this->listType; }
	public function getListId() { return $this->listId; }
	public function getColorType() { return $this->colorType; }
	public function getShowEmpty() { return $this->showEmpty; }
	
	public function setSize($val) { 
		if(in_array($val, $this->sizeOpts)) {
			$this->size = $val;
			return $this;
		} else {
			return false;
		}
	}

	public function setStyle($val) { 
		if(in_array($val, $this->styleOpts)) {
			$this->style = $val;
			return $this;
		} else {
			return false;
		}
	}
	
	public function setEchoed($val) {
		if(is_bool($val)) {
			$this->echoed = $val;
			return $this;
		} else {
			return false;
		}
	}
	
	public function setListType($val) {
		if(in_array($val, $this->listTypeOpts)) {
			$this->listType = $val;
			return $this;
		} else {
			return false;
		}
	}

	public function setNetworks($networks = array()) {
		if(is_array($networks)) {
			$this->showNetworks = array();
			
			foreach($networks as $network) {
    			if(in_array($network, $this->networkNames)) {
        			$this->showNetworks[] = $network;
    			}
			}
			
			return $this;

		} else {
			return false;
		}
	}
	
	public function setListId($val) {
    	if(is_string($val)) {
        	$this->listId = $val;
        	
        	return $this;
    	} else {
        	return false;
    	}
	}

	public function setColorType($val) {
		if(in_array($val, $this->colorTypeOpts)) {
			$this->colorType = $val;
			return $this;
		} else {
			return false;
		}
	}

	public function setShowEmpty($val) {
		if(is_bool($val)) {
			$this->showEmpty = $val;
			return $this;
		} else {
			return false;
		}
	}

	
	private function setupSingle($bob = string) {
		
		extract($this->$bob);
		
		if($this->getShowEmpty() == FALSE && $url == $default)
		{
    		return FALSE;
		}

		if($this->size == 'sm') {
			$size_class = '';
		} elseif($this->size == 'lg') {
			$size_class = 'fa-lg';
		}

		return "<a href=\"$url\" class=\"$bob-button social-media-button " . $this->getSize() . ' ' . $this->getStyle() . ' ' . $this->getColorType() . " external\"><i class=\"fa fa-" . $icon . " fa-fw $size_class\"><span>" . $name . "</span></i></a>";
	}
	
	public function showSingle($networkName) {
		if($this->getEchoed == TRUE) {
			echo $this->setupSingle($networkName);
		} else {
			return $this->setupSingle($networkName);
		}
	}

	public function showNetworkButtons() {
		
		ob_start();
		
		if(count($this->showNetworks) > 0) {
    		
    		if(!empty($this->listId)) {
        		$id = ' id="' . $this->listId . '"';
    		} else {
        		$id = NULL;
    		}
			
			?>
			<ul class="<?=$this->listType?> social-media <?=$this->size?>"<?=$id?>>
			<?php

			foreach($this->showNetworks as $network) {
    			$single = $this->setupSingle($network);
    			
    			if($single != FALSE)
    			{
				?>
				<li><?=$single?></li>
				<?php
    			}
			}
			
			?>
			</ul>
			<?php
		}
		
		$to_return = ob_get_clean();
		
		if($this->echoed == TRUE) {
			echo $to_return;
		} else {
			return $to_return;
		}
		
	}
	
	
}
