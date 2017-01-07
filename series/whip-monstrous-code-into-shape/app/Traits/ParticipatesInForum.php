<?php

namespace App\Traits;

trait ParticipatesInForum {
    public function startComversation(Conversation $conversation)
    {
        // create new thread for the current user.
    }

    public function replyTo(Conversation $conversation, Reply $reply)
    {
        // have the user reply to a conversation with the given reply.
    }
}