<?php
// Include extension, https://github.com/schulle4u/yellow-include

class YellowInclude {
    const VERSION = "0.9.2";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="include" && ($type=="block" || $type=="inline")) {
            list($name) = $this->yellow->toolbox->getTextArguments($text);
            $output = $this->yellow->page->getPage($name)->getContentHtml();
        }
        return $output;
    }
}
