<?php

class View {

    public static function render($filePath, $data = array()) {

        extract($data);
        ob_start();
        require_once(getcwd() . "/project/mvc/view/" . $filePath);
        $content = ob_get_clean();
        /*$content= str_replace("{{", "<?php echo '", $content);
        $content= str_replace("}}", "';?>", $content);*/
        require_once(getcwd() . "/project/theme/default.php");
    }

    public static function renderPartial($filePath, $data = array(), $return = false) {
        extract($data);
        if ($return) {
            ob_start();
        }
        require_once(getcwd() . "/project/view" . $filePath);
        if ($return) {
            return ob_get_clean();
        }
    }

    public static function component($filePath, $data = array(), $return = false) {
        extract($data);
        if (!str_has($filePath, ".php")) {
            $filePath = $filePath . ".php";
        }

        if ($return) {
            ob_start();
        }
        require(getcwd() . "/project/mvc/view/components/" . $filePath);

        if ($return) {
            return ob_get_clean();
        }
    }

    public static function partial($filePath, $data = array(), $return = false) {
        extract($data);
        if (!str_has($filePath, ".php")) {
            $filePath = $filePath . ".php";
        }
        if ($return) {
            ob_start();
        }
        require(getcwd() . "/project/mvc/view/partials/" . $filePath);
        if ($return) {
            return ob_get_clean();
        }
    }

}

function component($filePath, $data = array(), $return = false) {
    return View::component($filePath, $data, $return);
}

function partial($filePath, $data = array(), $return = false) {
    return View::partial($filePath, $data, $return);
}