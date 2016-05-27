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
	private $facebook = array(
		'url' => FACEBOOK,
		'name' => "Facebook",
		'icon' => 'facebook'
	);
	private $twitter = array(
		'url' => TWITTER,
		'name' => 'Twitter',
		'icon' => 'twitter'
	);
	private $googleplus = array(
		'url' => GOOGLEPLUS,
		'name' => 'Google Plus',
		'icon' => 'google-plus'
	);
	private $pinterest = array(
		'url' => PINTEREST,
		'name' => 'Pinterest',
		'icon' => 'pinterest-p'
	);
	private $linkedin = array(
		'url' => LINKEDIN,
		'name' => 'LinkedIn',
		'icon' => 'linkedin'
	);
	private $showNetworks = array();
	private $networkNames = array(
		'facebook',
		'twitter',
		'googleplus',
		'pinterest',
		'linkedin'
	);

	private $size = 'lg';
	private $style = 'square';
	private $echoed = TRUE;
	
	private $sizeOpts = array(
		'sm',
		'lg'
	);
	
	private $styleOpts = array(
		'rounded',
		'circle',
		'square'
	);
	
	

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

	public function setNetworks($networks = array()) {
		
		if(is_array($networks)) {
			$this->showNetworks = array();
			
			foreach($this->networkNames as $name) {
				if(in_array($name, $networks)) {
					$this->showNetworks[] = $name;
				}
			}
		} else {
			return false;
		}
		
	}
	
	private function setupSingle($bob = string) {
		
		//print_r($this->$bob);
		extract($this->$bob);
		//$robert = $this->$bob;
		//explode $robert;
/*
		$url = $this->$networkName['url'];
		$icon = $this->$networkName['icon'];
		$name = $this->$networkName['name'];
*/		

		if($this->size == 'sm') {
			$size_class = '';
		} elseif($this->size == 'lg') {
			$size_class = 'fa-lg';
		}

		return "<a href=\"$url\" class=\"$bob-button social-media-button " . $this->size . ' ' . $this->style . "external\"><i class=\"fa fa-" . $icon . " $size_class\"><span>" . $name . "</span></i></a>";
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
			
			?>
			<ul class="list-inline social-media">
			<?php
				
			foreach($this->showNetworks as $network) {
				?><li><?php
					echo $this->setupSingle($network);
				?></li><?php
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
