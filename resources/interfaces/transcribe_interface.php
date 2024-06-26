<?php

//define the template class
if (!interface_exists('transcribe_interface')) {
	interface transcribe_interface {
		public function set_path(string $audio_path);
		public function set_filename(string $audio_filename);
		public function transcribe() : string;
		public function set_language(string $audio_language);
		public function get_languages() : array;
	}
}

?>