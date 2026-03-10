<?php

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\On;

new class extends Component {
    public ?Post $post = null;

    public function clearPost(): void
    {
        $this->post = null;
    }

    #[On('view-post')]
    public function open($id)
    {
        $this->post = null;

        $this->post = Post::with(['user', 'reactions', 'comments'])->findOrFail($id);
    }

    public function close(): void
    {
        $this->post = null;
    }

    public function getReactionCountProperty(): int
    {
        return $this->post?->reactions->count() ?? 0;
    }

    public function getIsUpvotedProperty(): bool
    {
        return $this->post?->reactions->contains('user_id', auth()->id()) ?? false;
    }
}; ?>

<div class="flex flex-col gap-4 p-2 min-h-40">

    <div wire:loading>
        <flux:skeleton.group animate="shimmer">
            <div class="flex items-center gap-2 mb-4">
                <flux:skeleton class="size-8 rounded-full" />
                <flux:skeleton.line class="w-1/4" />
            </div>
            <flux:skeleton.line class="mb-4 w-1/2" />
            <flux:skeleton.line />
            <flux:skeleton.line />
            <flux:skeleton.line class="w-3/4" />
        </flux:skeleton.group>
    </div>

    <div wire:loading.remove>
        @if ($post)
          

            <div class="flex items-center gap-2 mb-4">
                <div
                    class="size-8 rounded-full bg-amber-400 dark:bg-amber-500 flex items-center justify-center text-white text-xs font-bold select-none">
                  {{ $post->user->initial }}
                </div>
                <div>
                    <flux:text class="font-medium text-sm">{{ $post->user->name }}</flux:text>
                    <flux:text class="text-xs text-zinc-400">{{ $post->created_at->diffForHumans() }}</flux:text>
                </div>
            </div>

            <flux:separator variant="subtle" class="mb-4" />

            <flux:heading size="lg" class="mb-2">{{ $post->title }}</flux:heading>
            <flux:text class="leading-relaxed text-zinc-600 dark:text-zinc-400">
                {{ $post->content }}
            </flux:text>

            <flux:separator variant="subtle" class="mt-4 mb-3" />

            <div class="flex items-center gap-2">
                <flux:button variant="ghost" icon="arrow-up" size="sm">
                    {{ $this->reactionCount }}
                </flux:button>

                <flux:button variant="ghost" icon="chat-bubble-left" size="sm">
                    {{ $post->comments->count() }}
                </flux:button>
            </div>
        @endif
    </div>

</div>
