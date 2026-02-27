<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">
      
        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="xl" level="1">Good afternoon, {{ str(auth()->user()->name)->before(' ') }}</flux:heading>
                <flux:text class="mt-2 mb-6 text-base">Here's what's new today</flux:text>
            </div>
            <flux:button variant="primary" icon="pencil-square">Create a post</flux:button>
        </div>

        <flux:separator variant="subtle" />

    </div>
</x-layouts::app>
