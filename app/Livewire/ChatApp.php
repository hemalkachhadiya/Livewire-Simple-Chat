<?php

namespace App\Livewire;

use Livewire\Component;

class ChatApp extends Component
{
    public $messages = [];
    public $newMessage;

    // Function to handle sending messages
    public function sendMessage()
    {
        $this->messages[] = ['user' => 'You', 'text' => $this->newMessage];

        $this->newMessage = '';

        $this->botResponse();
    }

    public function botResponse()
    {

        $botMessage = $this->generateBotResponse($this->messages[count($this->messages) - 1]['text']);

        $this->messages[] = ['user' => 'Bot', 'text' => $botMessage];
    }

    public function generateBotResponse($userMessage)
    {

        if (strpos(strtolower($userMessage), 'hello') !== false) {
            return "Hi there! How can I help you today?";
        }
        if (strpos(strtolower($userMessage), 'how are you') !== false) {
            return "I'm doing great, thank you for asking!";
        }
        if (strpos(strtolower($userMessage), 'i am ') !== false) {
            return "Whats Great Name Man!";
        }
        if (strpos(strtolower($userMessage), 'tired') !== false) {
            return "take rest and be healthy!";
        }
        if (strpos(strtolower($userMessage), 'ok bye') !== false) {
            return "Nice to meet you, see you tomorrow!";
        }
        return "Sorry, I didn't understand that. Can you rephrase?";
    }

    public function ClearChat(){

        $this->messages = []; // Clear the chat history
        $this->newMessage = ''; // Clear the input field

    }
    public function render()
    {
        return view('livewire.chat-app');
    }
}
