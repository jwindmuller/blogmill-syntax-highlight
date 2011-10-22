<?php
class SyntaxHighlightHooksComponent extends BlogmillHookComponent {
	
	public function load_resources() {
		$this->Controller->Blogmill->scriptForBottom('/syntax_highlight/css/prettify', 'css');
		$this->Controller->Blogmill->scriptForBottom('/syntax_highlight/css/styles/desert', 'css');
		$this->Controller->Blogmill->scriptForBottom('/syntax_highlight/js/prettify');
		$this->Controller->Blogmill->scriptForBottom('/syntax_highlight/js/load_prettify');
	}
}