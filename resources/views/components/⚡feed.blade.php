<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public $posts = null;

    public function loadPosts()
    {
        $this->posts = Post::with(['user', 'reactions', 'comments'])
            ->latest()
            ->get();
    }
};
?>

<div class="flex flex-col gap-4 mt-6" wire:init="loadPosts">

    @if (!$posts)

        {{-- Skeleton cards --}}
        @for ($i = 0; $i < 5; $i++)
            <flux:skeleton.group animate="shimmer">

                <div class="rounded-lg border p-4 space-y-1">
                    <div class="flex items-center gap-2 mb-4">
                        <flux:skeleton class="size-8 rounded-full" />
                        <flux:skeleton.line class="w-1/4" />
                    </div>
                    <flux:skeleton.line class="w-1/3" />
                    <flux:skeleton.line />
                    <flux:skeleton.line class="w-2/3" />
                </div>
            </flux:skeleton.group>
        @endfor
    @else
        @foreach ($posts as $post)
            <livewire:post-card :post="$post" :key="$post->id" />
        @endforeach

    @endif

</div>
