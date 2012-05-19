<?
namespace Clean;

/*
 * Clean and Store
 * 
 * @property CI_Loader $load
 * @property Subtitles $subtitles
 */
class CS{
	
	private $CI;
	private $file;
	private $error_msg;
	private $movie_name;
	private $subtitle_prefix;
	private $subtitles_path;
	private $replace_chars = array();
	private $extra_replace_chars = array(
		'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
		'Å'=>'A', 'Ă'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 
		'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
		'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a',
		'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i',
		'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o',
		'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'ÿ'=>'y', 'ƒ'=>'f'
	);
	
	private $part_replace_chars = array(
		'þ' => 't',
		'Þ' => 'T',
		'º' => 's',
		'ª' => 'S'
	);
	
	private $remove_from_title = array(
		'bluray', 'brrip', 'axxo', '1cd', '[0-9]+cds', 'cd[0-9]+', 'ac3', 'bdrip', 't0xic', 'fps', 'dvdscr', 'hq', 'hd', 'dts', 'lol',
		'dvdrip', 'xvid', 'eng', 'M720p', '720p', '1080p', 'ts', 'v2', 'x264', '[0-9]+x[0-9]+', 'S[0-9]+E[0-9]+', 'hdtv', 'zombies', 'santi', 'hdchina', 'usi',
		'dvdscr', 'no\swatermark|no\s\swatermark', 'part(\s[a-zA-Z0-9]+|[a-zA-Z0-9]+)', '[0-9]+fps|[0-9]+\sfps', 'www(.*)(ro|com|net|info|org|eu)', '[0-9]{5,}'
	);
	
	function __construct() {
		$this->CI = &get_instance();
		$this->CI->load->language('CS');
		$this->subtitles_path = BASEPATH.'../uploads/subtitles/'; 
		$this->CI->load->model('subtitles');
		$this->subtitle_prefix = SETTINGS_WEBSITE_FOR_TITLES.'_';
	}
	
	function clean($file, $clean_type = 'full'){
		
		if(!file_exists($file)){
			return FALSE;
		}
		
		if($clean_type == 'full'){
			$this->replace_chars = array_merge($this->part_replace_chars, $this->extra_replace_chars);
		}else{
			$this->replace_chars = $this->part_replace_chars;
		}
		
		$file_info = pathinfo($file);
                
                if($file_info['extension'] == 'zip'){
                    $this->_process_arhive($file);
                }else{
                    $this->_process_file($file);
                }
		
		return TRUE;
	}
	
        
        
	
	/**
	 * Get the movie name from subtitle name
	 * 
	 * @param string $file_name
	 * @return string 
	 */
	public function get_movie_name($file_name){
		$this->_set_movie_name($file_name);
		return $this->movie_name;
	}
	
	/**
	 * Display the error message
	 *
	 * @param	string $open
	 * @param	string $close
	 * @return	string
	 */
	public function display_errors($open = '', $close = '')
	{
		$str = '';
                if(is_array($this->error_msg)){
                    foreach ($this->error_msg as $val)
                    {
                            $str .= $open.$val.$close;
                    }
                }
		return $str;
	}
	
	
	
	/**
	 * Set an error message
	 *
	 * @param	mixed
	 * @return	void
	 */
	public function set_error($msg)
	{
		if (is_array($msg))
		{
			foreach ($msg as $val)
			{
				$msg = ($this->CI->lang->line($val) == FALSE) ? $val : $this->CI->lang->line($val);
				$this->error_msg[] = $msg;
				log_message('error', $msg);
			}
		}
		else
		{
			$msg = ($this->CI->lang->line($msg) == FALSE) ? $msg : $this->CI->lang->line($msg);
			$this->error_msg[] = $msg;
			log_message('error', $msg);
		}
	}
	
        
        private function _process_file($file){
            
            $file_info = pathinfo($file);
            $clean_name = preg_replace('/(www(\.|\_|\-|\s)(.*)(\.|\_|\-|\s)(ro|com|net|info|org|eu)(\.|\_|\-|\s)|(.*)(\.|\_|\-|\s)(ro|com|net|info|org|eu)(\.|\_|\-|\s))/', '', $file_info['basename']);

            //copy original file to temporary subtitle directory
            copy($file_info['dirname'].'/'.$file_info['basename'], $this->subtitles_path.$clean_name);
            //rename($file_info['dirname'].'/'.$file_info['basename'], $file_info['dirname'].'/'.$this->subtitle_prefix.$clean_name);



            //clean content file
            if(!$this->_clean_file($file)){
                    $this->set_error('file_not_exist');
                    return FALSE;
            }
            $a = $this->CI->subtitles->get_by_name($clean_name);
            if(!$this->CI->subtitles->get_by_name($clean_name)){

                    $this->_set_subtitle_details_from_name($file_info['basename']);

                    $this->CI->subtitles->name = $clean_name;
                    $this->CI->subtitles->add_date = time();
                    $this->CI->subtitles->save();
            }
            return TRUE;
        }
        
	/**
	 *Get content of file and clean it
	 * 
	 * @param string $file
	 * 
	 * @return boolean 
	 */
	private function _clean_file($file){
		$content	= file_get_contents($file);
		$content	= utf8_encode($content);
		$content	= strtr( $content,$this->replace_chars);
		$content	= utf8_encode($content);
		file_put_contents($file, $content);
		return TRUE;
	}
	
	

	/**
	 * Clean file name, to remaining movie file 
	 * 
	 * @param string $file_name 
	 */
	private function _set_movie_name($file_name){
		
		$this->movie_name = preg_replace('/(\_|\.|\-|\[|\]|\(|\)|\{|\})/', '  ', $file_name);
		
		foreach($this->remove_from_title as $key => $patern){
			$this->remove_from_title[$key] = '/(\s'.$patern.'\s)/i';
		}
		$this->movie_name = preg_replace($this->remove_from_title, '', ' '.$this->movie_name.' ');
		$this->movie_name = preg_replace('/([\s\s]+)/', ' ', trim($this->movie_name));
		$this->movie_name = preg_replace_callback('%[0-9]{4}(?!.*[0-9]{4}.*)(.*)%', create_function('$match', 'return substr($match[0], 0, 4);'), $this->movie_name);
	}
	
	
	private function _set_subtitle_details_from_name($file_name){
		//get number of cd.
		if(preg_match_all('/([0-9]+cds|[0-9]+cd|cd[0-9]+)/i', $file_name, $matches)){
			$this->CI->subtitles->cds = preg_replace('/(cd|cds)/i', '',$matches[0][0]);
		}
		
		//get fps
		if(preg_match_all('/([0-9]+\.[0-9]+fps|[0-9]+fps|fps[0-9]+\.[0-9]+|fps[0-9]+)/i', $file_name, $matches)){
			$this->CI->subtitles->fps = preg_replace('/(fps)/i', '',$matches[0][0]);
		}
		
	}
	
}
