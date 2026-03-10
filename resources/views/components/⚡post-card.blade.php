<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function getReactionCountProperty()
    {
        return $this->post->reactions->count();
    }

    public function getCommentCountProperty()
    {
        return $this->post->comments->count();
    }
}; ?>


<flux:modal.trigger name="view-post">
    <div wire:click="$dispatch('view-post', { id: {{ $post->id }} })"
        class="group flex flex-col gap-2.5 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 px-4 py-3.5 cursor-pointer hover:border-zinc-300 dark:hover:border-zinc-700 hover:shadow-md transition-all duration-150">
        {{-- Author row --}}
        <div class="flex items-center justify-between gap-2">
            <div class="flex items-center gap-2 min-w-0">
                <div
                    class="shrink-0 size-6 rounded-full bg-amber-400 dark:bg-amber-500 flex items-center justify-center text-white text-[10px] font-bold select-none">
                  {{ $post->user->initial }}
                </div>
                <flux:text size="sm" class="font-medium truncate">{{ $post->user->name }}</flux:text>
                <flux:text size="sm" class="text-zinc-300 dark:text-zinc-700">·</flux:text>
                <flux:text size="sm" class="text-zinc-400 whitespace-nowrap">
                    {{ $post->created_at->diffForHumans() }}
                </flux:text>
            </div>
        </div>

        {{-- Title --}}
        <flux:heading size="sm" class="line-clamp-1">
            {{ $post->title }}
        </flux:heading>

        {{-- Preview --}}
        <flux:text size="sm" class="text-zinc-500 dark:text-zinc-400 line-clamp-2 leading-relaxed">
            {{ $post->content }}
        </flux:text>

        {{-- Stats row --}}
        <div class="flex items-center gap-1.5 mt-0.5">
            <flux:badge color="zinc" size="sm" icon="eye">
                {{ number_format($post->views_count ?? 0) }}
            </flux:badge>

            <flux:badge color="zinc" size="sm" icon="arrow-up">
                {{ $this->reactionCount }}
            </flux:badge>

            <flux:badge color="zinc" size="sm" icon="chat-bubble-left">
                {{ $this->commentCount }}
            </flux:badge>
        </div>
    </div>
</flux:modal.trigger>
