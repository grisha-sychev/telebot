<?php

namespace Tgb\Data;

class CallbackQuery
{
    private $updateId;
    private $callbackQueryId;
    private $fromId;
    private $fromIsBot;
    private $fromFirstName;
    private $fromLastName;
    private $fromUsername;
    private $messageId;
    private $messageFromId;
    private $messageIsBot;
    private $messageFirstName;
    private $messageLastName;
    private $messageUsername;
    private $chatId;
    private $chatFirstName;
    private $chatUsername;
    private $chatType;
    private $messageDate;
    private $messageText;
    private $inlineKeyboard;
    private $chatInstance;
    private $callbackData;

    public function __construct(array $data)
    {
        $this->updateId = $data['update_id'] ?? null;
        $this->callbackQueryId = $data['callback_query']['id'] ?? null;
        $this->fromId = $data['callback_query']['from']['id'] ?? null;
        $this->fromIsBot = $data['callback_query']['from']['is_bot'] ?? null;
        $this->fromFirstName = $data['callback_query']['from']['first_name'] ?? null;
        $this->fromLastName = $data['callback_query']['from']['last_name'] ?? null;
        $this->fromUsername = $data['callback_query']['from']['username'] ?? null;
        $this->messageId = $data['callback_query']['message']['message_id'] ?? null;
        $this->messageFromId = $data['callback_query']['message']['from']['id'] ?? null;
        $this->messageIsBot = $data['callback_query']['message']['from']['is_bot'] ?? null;
        $this->messageFirstName = $data['callback_query']['message']['from']['first_name'] ?? null;
        $this->messageLastName = $data['callback_query']['message']['from']['last_name'] ?? null;
        $this->messageUsername = $data['callback_query']['message']['from']['username'] ?? null;
        $this->chatId = $data['callback_query']['message']['chat']['id'] ?? null;
        $this->chatFirstName = $data['callback_query']['message']['chat']['first_name'] ?? null;
        $this->chatUsername = $data['callback_query']['message']['chat']['username'] ?? null;
        $this->chatType = $data['callback_query']['message']['chat']['type'] ?? null;
        $this->messageDate = $data['callback_query']['message']['date'] ?? null;
        $this->messageText = $data['callback_query']['message']['text'] ?? null;
        $this->inlineKeyboard = $data['callback_query']['message']['reply_markup']['inline_keyboard'] ?? null;
        $this->chatInstance = $data['callback_query']['chat_instance'] ?? null;
        $this->callbackData = $data['callback_query']['data'] ?? null;
    }

    public function getUpdateId()
    {
        return $this->updateId;
    }

    public function getCallbackQueryId()
    {
        return $this->callbackQueryId;
    }

    public function getFromId()
    {
        return $this->fromId;
    }

    public function getFromIsBot()
    {
        return $this->fromIsBot;
    }

    public function getFromFirstName()
    {
        return $this->fromFirstName;
    }

    public function getFromLastName()
    {
        return $this->fromLastName;
    }

    public function getFromUsername()
    {
        return $this->fromUsername;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function getMessageFromId()
    {
        return $this->messageFromId;
    }

    public function getMessageIsBot()
    {
        return $this->messageIsBot;
    }

    public function getMessageFirstName()
    {
        return $this->messageFirstName;
    }

    public function getMessageLastName()
    {
        return $this->messageLastName;
    }

    public function getMessageUsername()
    {
        return $this->messageUsername;
    }

    public function getChatId()
    {
        return $this->chatId;
    }

    public function getChatFirstName()
    {
        return $this->chatFirstName;
    }

    public function getChatUsername()
    {
        return $this->chatUsername;
    }

    public function getChatType()
    {
        return $this->chatType;
    }

    public function getMessageDate()
    {
        return $this->messageDate;
    }

    public function getMessageText()
    {
        return $this->messageText;
    }

    public function getInlineKeyboard()
    {
        return $this->inlineKeyboard;
    }

    public function getChatInstance()
    {
        return $this->chatInstance;
    }

    public function getCallbackData()
    {
        return $this->callbackData;
    }
}
