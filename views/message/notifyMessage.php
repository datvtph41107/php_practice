<?php 
    function getMessageError($notifyMessage) {
        $message = '<div class="text-white" style="padding: 20px; background-color: #f44336;">';
        $message .= '<span class="ms-1 text-white float-end fw-bold " style="font-size: 22px; line-height: 20px; transition: 0.3s; cursor: pointer;" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
        $message .= '<span style="font-weight: bold;">'. $notifyMessage .'</span>';
        $message .= '</div>';

        return $message;
    }

    function getMessageSucceed($notifyMessage) {
        $message = '<div class="text-white" style="padding: 20px; background-color: #04AA6D;">';
        $message .= '<span class="ms-1 text-white float-end fw-bold " style="font-size: 22px; line-height: 20px; transition: 0.3s; cursor: pointer;" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
        $message .= '<span style="font-weight: bold;">'. $notifyMessage .'</span>';
        $message .= '</div>';

        return $message;
    }
?>