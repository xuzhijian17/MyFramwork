<?php
class view{
	protected $vars;

	public function __construct($value='')
	{
		# code...
	}
	public function assign($key,$val)
	{

		$this->vars[$key] = $val;
		return $this;
	}
	public function display($tfile){

		//$v = array_keys($this->vars);
		$tf = file_get_contents($tfile);
		$rs = str_ireplace('{{', '<?php echo ', $tf);
		foreach ($this->vars as $key => $value) {
			$rs = str_ireplace('$'.$key, '$this->vars["'.$key.'"]', $rs);
		}
		$rs = str_ireplace('}}', ';?>', $rs);
		file_put_contents('views/templates_c/index.php', $rs);
		//print($rs);
		require '/views/templates_c/index.php';
		return $this;
	}
}