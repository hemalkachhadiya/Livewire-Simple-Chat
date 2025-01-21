<div>
    <div class="text-center text-danger">
    <h2> user send the message like this : </h2>
          <h2>1==> hellow,
        <h2>  2==> how are you,</h2>
    <h2>      3==> i am 'you name',</h2>
    <h2>      4==> tired,</h2>
    <h2>      5==> ok bye </h2>
    <h2>6 ==> any other messsage you send so bot response like this  : sorry </h2>
    <h2>     curresponding respose send the bot </h2>
    </div>
    <!-- Chat Box -->
    <div class="chat-box">
        <!-- Chat Header -->
        <div class="chat-header">
            <div class="chat-title">Chat with Bot</div>
            <div class="chat-actions">
                <button class="action-button">⚙️</button>
            </div>
        </div>

        <!-- Messages Area -->
        <div class="messages" id="messages">
            @foreach ($messages as $message)
                @if(is_array($message) && isset($message['user'], $message['text']))
                    <div class="message {{ $message['user'] == 'You' ? 'user-message' : 'bot-message' }}">
                        <strong>{{ $message['user'] }}:</strong> {{ $message['text'] }}
                    </div>
                @endif
            @endforeach

            <!-- Typing indicator (initially hidden) -->
            <div id="typing-indicator" style="display: none;">Bot is typing...</div>
        </div>

        <!-- Message Input Form -->
        <form wire:submit.prevent="sendMessage" class="message-form">
            <input type="text" wire:model="newMessage" placeholder="Type a message..." class="message-input" id="newMessage" />
            <button type="submit" class="send-button">Send</button>
            <button type="button" class="clear" wire:click='ClearChat'>Clear</button>
        </form>
    </div>

    <style>
        /* Chat Box Styles */
        .chat-box {
            max-width: 600px;
            height: 600px;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
        }

        /* Chat Header Styles */
        .chat-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #00796b;
            color: #fff;
            font-size: 1.2rem;
        }
        .chat-title {
            font-weight: bold;
        }
        .chat-actions button {
            background: none;
            color: #fff;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
        }

        /* Messages Container */
        .messages {
            padding: 20px;
            flex: 1;
            height: calc(100% - 60px);
            overflow-y: auto;
            background-color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        /* Individual Message Styles */
        .message {
            padding: 12px 18px;
            margin: 8px 0;
            border-radius: 20px;
            width: fit-content;
            max-width: 75%;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .user-message {
            background-color: #e1f5fe;
            color: #0288d1;
            margin-left: auto;
            text-align: right;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .bot-message {
            background-color: #e8f5e9;
            color: #388e3c;
            margin-right: auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Typing Indicator */
        #typing-indicator {
            color: #999;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        /* Message Input Form Styles */
        .message-form {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #eceff1;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            box-shadow: inset 0 -1px 5px rgba(0, 0, 0, 0.1);
        }
        .message-input {
            flex: 1;
            padding: 14px;
            border: 1px solid #b0bec5;
            border-radius: 30px;
            outline: none;
            margin-right: 15px;
            transition: all 0.3s ease;
        }
        .message-input:focus {
            border-color: #80deea;
            box-shadow: 0 0 5px rgba(128, 222, 234, 0.8);
        }
        .send-button {
            padding: 12px 24px;
            background-color: #00796b;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .send-button:hover {
            background-color: #004d40;
            transform: scale(1.05);
        }
        .clear {
            padding: 12px 24px;
            background-color: #f44336;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-left: 10px;
        }
        .clear:hover {
            background-color: #d32f2f;
            transform: scale(1.05);
        }
    </style>

        <script>
    document.addEventListener('livewire:load', function () {
        // Listen for the 'typingIndicator' event from Livewire
        Livewire.on('typingIndicator', (event) => {
            const typingIndicator = document.getElementById('typing-indicator');
            if (event.show) {
                typingIndicator.style.display = 'block';  // Show the typing indicator
            } else {
                typingIndicator.style.display = 'none';  // Hide the typing indicator
            }
        });
    });
</script>

</div>
