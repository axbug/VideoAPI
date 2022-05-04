<?php
declare (strict_types = 1);

namespace app\Api\controller;

use app\Utils\BaseCache;
use think\App;
use think\exception\ValidateException;

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
        $controller = $this->request->controller(true);
        $action = $this->request->action(true);
        if(isset($routeList[$controller]["action"][$action])){
            $this->validate($routeList[$controller]["validate"],$routeList[$controller]["action"][$action]["scene"]);
            if(env("CACHE.KAN")){
                $data = BaseCache::Get();
                if(!empty($data)) app("json")->Success($data);
            }
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
