<?php
class TeleBotLib {
    const API_URL = 'https://api.telegram.org/bot';
    public $token;
    public function __construct($token = null) {
        $this->setToken($token);
    }
    public function setToken($token = null) {
        $this->token = ($token !== null) ? $token : 'setDefaultKey';
    }
    public function sendMessage($chatId, $text, $parseMode = "html") {
        $url = self::API_URL . $this->token . '/sendmessage';
        $postData = array(
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => $parseMode
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
    public function sendDocument($chatId, $text, $documentURL) {
        $url = self::API_URL . $this->token . '/senddocument';
        $postData = array(
            'chat_id' => $chatId,
            'document' => $documentURL,
            'caption' => $text,
            'parse_mode' => 'html'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
    public function editMessage($chatId, $messageId, $text) {
        $url = self::API_URL . $this->token . '/editmessagetext';
        $postData = array(
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'text' => $text,
            'parse_mode' => "html"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
    public function editMessageCaption($chatId, $messageId, $caption) {
        $url = self::API_URL . $this->token . '/editmessagecaption';
        $postData = array(
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'caption' => $caption,
            'parse_mode' => "html"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
    public function pinChatMessage($chatId, $messageId) {
        $url = self::API_URL . $this->token . '/pinchatmessage';
        $postData = array(
            'chat_id' => $chatId,
            'message_id' => $messageId,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
}