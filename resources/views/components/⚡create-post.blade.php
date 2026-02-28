<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public string $title = '';
    public string $content = '';

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'content' => 'required|min:10',
    ];

    public function save()
    {
        $this->validate();

        Post::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'content' => $this->content,
        ]);
        $this->reset(['title', 'content']);
        $this->modal('create-post')->close();
    }

    public function resetForm()
    {
        $this->reset(['title', 'content']);
        $this->resetErrorBag();
    }
}; ?>

<div>
    <flux:modal name="create-post" class="md:w-lg" wire:close="resetForm">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Create a post</flux:heading>
                <flux:text class="mt-2">Share something with the community.</flux:text>
            </div>

            <flux:input label="Title" placeholder="Enter a title" wire:model="title" />
            <flux:textarea label="Content" placeholder="What's on your mind?" rows="10" wire:model="content" />

            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost" wire:close="resetForm">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="primary" wire:click="save">
                    Post
                </flux:button>
            </div>
        </div>
    </flux:modal>
</div>
