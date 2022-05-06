<?php
declare (strict_types = 1);

namespace app\Api\controller;

use think\App;
use think\exception\ValidateException;
use think\facade\Request;

abstract class BaseController
{
    protected $request;
    protected $app;
    protected $middleware = [];

    public function __construct(App $app)
    {
        $this->app     = $app;
        $this->request = $this->app->request;
        $this->initialize();
    }

    protected function initialize()
    {
        $routeList = config("Route");
        $controller = strtolower($this->request->controller());
        $action = strtolower($this->request->action());
        if(isset($routeList[$controller]["action"][$action])){
            $this->validate($routeList[$controller]["validate"],$routeList[$controller]["action"][$action]["scene"]);
        }else{
            app("json")->Fail("路由不存在！");
        }
    }

    private function validate($validate,string $scene)
    {
        if($validate && $scene){
            try {
                validate($validate)
                    ->scene($scene)
                    ->check($this->request->param());;
            } catch (ValidateException $e) {
                app("json")->Fail($e->getError());
            }
        }
    }
}
