<?php
class header {

	var $js = '';
	var $css = '';
	var $title = 'Sistema NAS';
	var $char_set = 'ISO-8859-1';
	var $http = '';

	function cab() {

		global $pref;
		$LANG = 'pt_BR';
		$cr = chr(13) . chr(10);
		header("Content-Type: text/html; charset=" . $this -> char_set, true);
		$sx = '<!DOCTYPE html>' . $cr;
		$sx .= '<html lang="pt-BR">' . $cr;
		$sx .= '<head>' . $cr;
		$sx .= '<title>' . $this -> title . '</title>' . $cr;
		$sx .= '<meta http-equiv="Content-Type" content="text/html; charset=' . $this -> char_set . '" />' . $cr;
		$sx .= '<meta name="expires" content="never" />' . $cr;
		$sx .= '<link rel="shortcut icon" type="img/favicone.png" />' . $cr;
		$sx .= '<!-- STYLES // -->	' . $cr;
		/*Css*/
		$sx .= '<link rel="stylesheet" type="text/css" href="' . $this -> http . 'css/style.css" />' . $cr;
		/*Java*/
		$sx .= '<script language="JavaScript" type="text/javascript" src="'.$this->http.'js/jquery-1.9.1.min.js"></script>'.$cr;
		$sx .= '</head>' . $cr;
		$sx .= '<body leftmargin="0" topmargin="0" >' . $cr;
		return ($sx);
	}

	function menu() {
		
		return($sx);
	}
  
  function top(){
		
		return($sx);
	}
	
	function foot(){
		
	
		return($sx);
	}

}
?>