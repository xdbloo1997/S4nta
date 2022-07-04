<?php 
	
	class Device
	{
		private $device;

		public function Device($userAgent){
			$this->device = $userAgent;
		}

		public function isMobile(){
			return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini
  |mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $this->device);
		}
	}
?>