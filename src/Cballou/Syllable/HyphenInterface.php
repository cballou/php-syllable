<?php

namespace Cballou\Syllable;

	interface HyphenInterface {
		public function joinText($parts);
		public function joinHtmlDom($parts, DOMNode $node);
		public function stripHtml($html);
	}
