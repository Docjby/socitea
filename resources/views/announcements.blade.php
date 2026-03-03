<x-layouts::app :title="__('Announcements')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">
        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="xl" level="1">Announcements</flux:heading>
                <flux:text class="mt-2 mb-6 text-base">Latest updates and news</flux:text>
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="flex flex-col gap-4 mt-6">
            <div class="flex flex-col items-center justify-center py-16 text-center">
                <flux:icon name="megaphone" class="size-12 text-zinc-300 dark:text-zinc-600 mb-4" />
                <flux:heading size="lg">No announcements yet</flux:heading>
                <flux:text class="mt-1">Check back later for updates and news.</flux:text>
            </div>
        </div>
    </div>
</x-layouts::app>