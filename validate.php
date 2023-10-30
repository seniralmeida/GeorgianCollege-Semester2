<?php
class validate {
    public function checkEmpty($data, $fields) {
        $msg = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $msg .= "<p>$value field empty</p>";
            }
        }
        return $msg;
    }

    public function validStudentId($studentId) {
        if (preg_match("/^[0-9]{9}$/", $studentId)) {
            return true;
        }
        return false;
    }
}
?>
