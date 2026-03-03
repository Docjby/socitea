<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    public Post $post;

    public function toggleUpvote()
    {
        $existing = $this->post->reactions()->where('user_id', auth()->id())->first();

        if ($existing) {
            $existing->delete();
        } else {
            $this->post->reactions()->create(['user_id' => auth()->id()]);
        }

        $this->post->load('reactions', 'comments');
    }

    public function getReactionCountProperty() {
        return $this->post->reactions->count();
    }

    public function getCommentCountProperty() {
        return $this->post->comments->count();
    }

    public function getIsUpvotedProperty() {
        return $this->post->reactions->contains('user_id', auth()->id());
    }
}; ?>

<div class="flex flex-col gap-2 rounded-xl border border-zinc-200 dark:border-zinc-700 p-5">
    <div class="flex items-start justify-between">
        <div>
            <flux:heading size="lg">{{ $post->title }}</flux:heading>
            <flux:text class="mt-1 text-sm text-zinc-500">{{ $post->user->name }} · {{ $post->created_at->diffForHumans() }}</flux:text>
        </div>
    </div>

    <flux:text class="mt-2">{{ $post->content }}</flux:text>

    <div class="flex items-center gap-4 mt-4">
        <flux:button
            variant="ghost"
            icon="arrow-up"
            wire:click="toggleUpvote"
            class="{{ $this->isUpvoted ? 'text-blue-500' : '' }}"
        >
            {{ $this->reactionCount }}
        </flux:button>

        <flux:button variant="ghost" icon="chat-bubble-left">
            {{ $this->commentCount }}
        </flux:button>
    </div>
</div>