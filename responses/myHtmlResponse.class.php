<?php
/**
* @package   tourisme
* @subpackage 
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'tourisme~main';
	
    function __construct() {
		
        parent::__construct();
				
		// CSS
		$this->addCSSLink("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        $this->addCSSLink(jApp::urlBasePath() . "css/main.css");
        $this->addCSSLink(jApp::urlBasePath() . "css/bulma.css");
		
		// JAVASCRIPT
		$this->addJSLink("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js");
		$this->addJSLink(jApp::urlBasePath() . "js/jquery.vmap.js");
		$this->addJSLink(jApp::urlBasePath() . "js/jquery.vmap.france.js");        
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        $this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
