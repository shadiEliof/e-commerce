<?php

class api {

    public static function cast($feed = [], $errorCode = 0, $errorMessage = "") {
        header('Content-Type: application/json');
        $response = [
            'feed' => $feed,
        ];

        if (is_array($feed) && count($feed) === 0) {
            $errorCode = -2;
            $errorMessage = "empty data";
        }

        if ($feed === null) {
            $errorCode = -1;
            $errorMessage = "no data";
        }


        if ($errorCode !== 0) {
           $response= array_merge($response, [
                'status' => 'fail',
                'error_code' => $errorCode,
                'error_message' => $errorMessage,
            ]);
        } else {
            $response['status'] = 'success';
        }
        echo json_encode($response);
        exit;
    }



    public static function cast_query(String $sql, array $params = []) {
        $records = query($sql, $params);
        self::cast($records);
    }

}
