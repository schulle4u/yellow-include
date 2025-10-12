<?php
// Include extension, https://github.com/schulle4u/yellow-include

class YellowInclude {
    const VERSION = "0.9.1";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="include" && ($type=="block" || $type=="inline")) {
            list($slug, $style) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($style)) $style = $name;
            $output .= "<div class=\"".htmlspecialchars($style)."\">\n";
            $page = $this->yellow->page->getPage($slug);
            if ($page) {
                $output .= $page->getContentHtml();
            } else {
                $this->yellow->page->error(500, "Shared page '$slug' does not exist!");
            }
            $output .= "</div>\n";
        }
        return $output;
    }
}
