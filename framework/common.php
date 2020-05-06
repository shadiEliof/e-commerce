<?php
function dump($object) {
    echo "<pre>";
    if (is_array($object)) {
        print_r($object);
    } else if (is_object($object)) {
        var_export($object);
    } else {
        echo $object;
    }
    echo "</pre>";
}


function err403() {
    header('HTTP/1.1 403 Forbidden');
    exit;
}

function err404() {
    header('HTTP/1.1 404 Not Found');
    exit;
}

function hr($return = false) {
    if ($return) {
        return "<hr>\n";
    } else {
        echo "<hr>\n";
    }
}

function br($return = false) {
    if ($return) {
        return "<br>\n";
    } else {
        echo "<br>\n";
    }

}

function logi($message) {
    if (is_array($message)) {
        print_r($message);
    } else if (is_object($message)) {
        print_r($message);
    } else {
        echo $message;
    }
    exit;
}

function dump2($var, $return = false) {
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var, true);
    } else {
        $out = $var;
    }

    if ($return) {
        return "\n<pre style='direction: ltr'>$out</pre>\n";
    } else {
        echo "\n<pre style='direction: ltr'>$out</pre>\n";
    }
}

function current_date_time() {
    return date("Y-m-d H:i:s");
}

function current_timeStamp() {
    $timeZone = new DateTimeZone("Asia/Tehran");
    $date = new DateTime();
    $date->setTimezone($timeZone);
    $current_timeStamp = $date->getTimestamp();
    return $current_timeStamp;
}

function encrypt_password($password) {
    global $config;
    return md5($password . $config['salt']);
}

function redirect($uri) {
    if (empty($uri))
        return false;
    header("Location: $uri");
    exit;
}

function base_url() {
    echo $_SERVER['HTTP_HOST'];
}

function full_url() {
    $fullurl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $fullurl;
}

function request_uri() {
    return $_SERVER['REQUEST_URI'];
}

function generate_random_number() {
    $randomNumber = rand(1000, 9999);
    return $randomNumber;
}

function generate_random_string($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function str_has($string, $search, $caseSensitive = false) {
    if ($caseSensitive) {
        return strpos($string, $search) !== false;
    } else {
        return strpos(strtolower($string), strtolower($search)) !== false;
    }
}

function message($type, $message) {
    $data['message'] = $message;
    View::render("/message/$type.php", $data);
}

function echo_result_response($status_code, $status_message, $data = array()) {
    $response = array("statusCode" => $status_code,
        "statusMessage" => $status_message,
        "data" => $data);
    echo json_encode($response);

}

function base64_to_jpeg($base64_string, $output_file) {
    // open the output file for writing
    $ifp = fopen($output_file, 'wb');

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode(',', $base64_string);

    // we could add validation here with ensuring count( $data ) > 1
    fwrite($ifp, base64_decode($data[1]));

    // clean up the file resource
    fclose($ifp);

    return $output_file;
}

function save_base64_image_to_dir($base64Image, $dir) {
    define('UPLOAD_DIR', getcwd() . $dir);
    $base64Image = str_replace('data:image/png;base64,', '', $base64Image);
    $base64Image = str_replace(' ', '+', $base64Image);
    $data = base64_decode($base64Image);

    $fileName = uniqid() . '.jpg';
    $file = UPLOAD_DIR . $fileName;

    $success = file_put_contents($file, $data);

    $result = array(
        'result' => $success ? true : false,
        'image_name' => $fileName,
        'image_url' => $dir . $fileName,
    );

    return $result;
}

function convert_array_to_ng_model($array, $isReturn = false) {
    if ($isReturn) {
        return htmlspecialchars(json_encode($array));
    } else {
        echo htmlspecialchars(json_encode($array));
    }
}

function assets($name) {
    return "/project/public/assets/" . $name;

}

function image($name) {
    return '/project/public/assets/images/' . $name;

}

function to_object(array $array) {
    if (is_array($array)) {
        return (object)$array;
    }
}

function logo() {
    global $config;
    return $config['settings']['logo'];
}
function lang() {
    global $config;
    return $config['lang'];
}
function color() {
    global $config;
    return $config['settings']['color'];
}
function charset() {
    global $config;
    return $config['charset'];
}
