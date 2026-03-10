<x-layouts::app :title="__('feeds')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">

        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="xl" level="1">Welcome Back, {{ str(auth()->user()->name)->before(' ') }}
                </flux:heading>
                <flux:text class="mt-2 mb-6 text-base">Here's what's new today</flux:text>
            </div>
            <flux:modal.trigger name="create-post">
                <flux:button variant="primary" icon="pencil-square">Create a post</flux:button>
            </flux:modal.trigger>
        </div>

        <livewire:create-post />
        <flux:separator variant="subtle" />

          <livewire:feed />

    </div>

    <flux:modal name="view-post" class="w-full max-w-2xl">
        <livewire:view-post />
    </flux:modal>

</x-layouts::app>
