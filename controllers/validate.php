<?php
    function validateEmail($email)
    {
        if (empty($email)) {
            return "Bạn không được để trống email ?";
        } else {
            if (!preg_match('/^\S+@\S+\.\S+$/', $email)) {
                return " Vui lòng nhập đúng định dạng email ?";
            }
        }
        return "";
    }

    function validatePhone($phone)
    {
        if (empty($phone)) {
            return " Vui lòng nhập số đt?";
        } else {
            if (!is_numeric($phone)) {
                return "Số điện thoại không hợp lệ";
            }

            if (!preg_match('/^0\d{9}$/', $phone)) {
                return "Số điện thoại không hợp lệ";
            }
        }
        return "";
    }

    function validateName($name)
    {
        if (empty($name)) {
            return "Không được để trống";
        }
        return "";
    }

    function validatePassword($pass) {
        if (empty($pass)) {
            return "Không được để trống";
        }
        return "";
    }

    function validatePasswordConfirm($pass, $confirm)
    {
        if ($pass !== $confirm) {
            return "Mật khẩu không khớp";
        }
        return "";
    }
?>