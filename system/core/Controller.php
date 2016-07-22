<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 7/01/16
 * Time: 12:30 AM
 */
class Controller
{
    public function __construct()
    {

    }
    public function load($controller, $action)
    {
        // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
        $controller = (strtolower($controller)) . '_controller';

        // chuyển đổi tên action vì nó có định dạng {name}Action
        $action = strtolower($action) . 'Action';

        // Kiểm tra file controller có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/controllers/' . $controller . '.php')){
            die ('Controller không tồn tại');
        }

        require_once PATH_APPLICATION . '/controllers/' . $controller . '.php';

        // Kiểm tra class controller có tồn tại hay không
        if (!class_exists($controller)){
            die ('Controller không tồn tại');
        }

        // Khởi tạo controller
        $controllerObject = new $controller();

        // Kiểm tra action có tồn tại hay không
        if ( !method_exists($controllerObject, $action)){
            die ('Action không tồn tại');
        }

        // Gọi tới action
        $controllerObject->{$action}();
    }

}
?>