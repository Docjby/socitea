<x-layouts::app :title="__('feeds')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">

        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="xl" level="1">Good afternoon, {{ str(auth()->user()->name)->before(' ') }}
                </flux:heading>
                <flux:text class="mt-2 mb-6 text-base">Here's what's new today</flux:text>
            </div>

            <flux:modal.trigger name="create-post">
                <flux:button variant="primary" icon="pencil-square">Create a post</flux:button>
            </flux:modal.trigger>
        </div>

        <livewire:create-post />
        
        <flux:separator variant="subtle" />

        <div class="flex flex-col gap-4 mt-6">
            @foreach ($posts as $post)
                <livewire:post-card :post="$post" :key="$post->id" />
            @endforeach
        </div>
    </div>
</x-layouts::app>
