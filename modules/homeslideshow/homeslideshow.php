<?php

if(!defined('_PS_VERSION_')) {
	exit;
}

class HomeSlideshow extends Module {

	public function __construct() {
		$this->name = 'homeslideshow';
    		$this->version = 1.0;
    		$this->author = 'LeadingThemes';
    		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('Home Slideshow');
    		$this->description = $this->l('Displays a slideshow on your home page');
	}

	public function install() {
		if (parent::install() == false OR !$this->registerHook('header') OR !$this->registerHook('home')) {
			return false;
		}

		return true;
	}

	public function getContent() {

		if($_POST) {
			$xmlData = '<?xml version="1.0" encoding="utf-8"?>'."\n";
			$xmlData .= "<block>\n";

			foreach($_POST as $key => $value) {
				if(substr($key, 0, 3) == 'img') {
					$later[$key] = $value;
					continue;
				}

				$name = $this->cleanName($key);
				$url = $value;

				if($url == '0') {
					unlink(dirname(__FILE__).'/images/'.$name);
				} elseif($url == '1') {
					$xmlData .= "\t<slide>\n";
					$xmlData .= "\t\t<img>".$name."</img>\n";
					$xmlData .= "\t\t<url>".$url."</url>\n";
					$xmlData .= "\t</slide>\n";
				} elseif($url != '0' && $url != '1') {
					$xmlData .= "\t<slide>\n";
					$xmlData .= "\t\t<img>".$name."</img>\n";
					$xmlData .= "\t\t<url>".$url."</url>\n";
					$xmlData .= "\t</slide>\n";
				}
			}

			foreach($_FILES as $key => $value) {
				$name = str_replace(' ', '_', $value['name']);

				if($name == '') {
					continue;
				}

				while(file_exists(dirname(__FILE__).'/images/'.$name)) {
					$namet = $this->cleanName($name, 1);
					$name = $namet['name'].'_2.'.$namet['ext'];
				}
				$url = $later[$key];

				$tmp = $value['tmp_name'];					
				move_uploaded_file($tmp, dirname(__FILE__).'/images/'.$name);

				$xmlData .= "\t<slide>\n";
				$xmlData .= "\t\t<img>".$name."</img>\n";
				$xmlData .= "\t\t<url>".$url."</url>\n";
				$xmlData .= "\t</slide>\n";

				unlink($tmp);
			}

			$xmlData .= "</block>\n";

			$f = fopen(dirname(__FILE__).'/block.xml', 'w');
			fwrite($f, $xmlData);
			fclose($f);
		}

		$existing_images = $this->readData();

		foreach($existing_images as $value) {
			$existing_html .= '<div style="padding-bottom: 7px; border-bottom: 1px solid #ccc; margin-bottom: 7px;"><img width="100" src="'.$this->_path.'images/'.$value['img'].'" alt="" /> URL: <input type="text" name="'.$value['img'].'" value="'.$value['url'].'" /> <input type="hidden" name="" value="1" /> <span style="cursor: pointer; text-decoration: underline;" onclick="this.parentNode.childNodes[4].name=\''.$value['img'].'\'; this.parentNode.childNodes[4].value=\'0\'; this.parentNode.style.display=\'none\';">Remove</span></div>';
		}

		$html = '<h2>'.$this->displayName.'</h2>';
		$html .= '<h3>Slideshow images:</h3>';
		$html .= '<form action="'.$_SERVER['REQUEST_URI'].'" method="post" enctype="multipart/form-data">';
		$html .= $existing_html;
		$html .= '<div style="padding-bottom: 7px; border-bottom: 1px solid #ccc; margin-bottom: 7px;" id="moreb"><span style="cursor: pointer; text-decoration: underline;" class="more">Add more</span></div>';
		$html .= '<input type="submit" value="Save" />';
		$html .= '</form>';
		$html .= '<script type="text/javascript">
		var a=1;
		$(".more").click(function() {
			$("#moreb").before("<div style=\"padding-bottom: 7px; border-bottom: 1px solid #ccc; margin-bottom: 7px;\" id=\"moreb\"><input type=\"file\" name=\"img_"+a+"\" /> URL: <input type=\"text\" name=\"img_"+a+"\" /></div>");
			a++;
		});
		</script>';

		return $html;

	}

	private function cleanName($key, $m='0') {
		if($m == '0') {
			$n = explode('_', $key);
			$ncount = count($n)-1;

			$j = 0;
			while($j < $ncount) {
				$name .= $n[$j++];
				if($j < $ncount) {
					$name .= '_';
				}
			}

			return $name.'.'.$n[$ncount];
		} else {
			$n = explode('.', $key);
			$ncount = count($n)-1;

			$j = 0;
			while($j < $ncount) {
				$name .= $n[$j++];
				if($j < $ncount) {
					$name .= '_';
				}
			}

			$arr['name'] = $name;
			$arr['ext'] = $n[$ncount];

			return $arr;
		}
	}

	private function readData() {
		$xml = simplexml_load_file(dirname(__FILE__).'/block.xml');
		$slides = $xml->xpath('/block/slide');

		foreach($slides as $slide => $value) {
			static $i=0;
			$output[$i]['img'] = (string) $value->img;
			$output[$i++]['url'] = (string) $value->url;
		}

		return $output;
	}

	function hookHeader() {
		Tools::addCSS(($this->_path).'css/camera.css', 'all');
	}

	function hookHome($params) {
		global $smarty;

		$output = $this->readData();

		$smarty->assign('output', $output);
		$smarty->assign('module_path', $this->_path);

		return $this->display(__FILE__, 'homeslideshow.tpl');
	}

	public function hookTop($params) {
		return $this->hookHome($params);
	}
}

?>
