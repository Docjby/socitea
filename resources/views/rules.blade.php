<x-layouts::app :title="__('Rules')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">
        <div>
            <flux:heading size="xl" level="1">Community Rules</flux:heading>
            <flux:text class="mt-2 mb-6 text-base">Please read and follow these rules to keep Societea a safe space.</flux:text>
        </div>

        <flux:separator variant="subtle" />

        <div class="flex flex-col gap-6 mt-6 max-w-2xl">

            <div>
                <flux:heading size="lg" level="2">☕ 1. Keep it anonymous</flux:heading>
                <flux:text class="mt-1">Do not reveal your identity or try to expose others. Societea is a space for anonymous sharing — respect that.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">🫖 2. No personal attacks</flux:heading>
                <flux:text class="mt-1">Spilling tea is fine, but targeted harassment, bullying, or hate speech is not. Be messy, not mean.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">🍵 3. No false information</flux:heading>
                <flux:text class="mt-1">Share what you know, but don't fabricate stories. Spreading deliberate misinformation can harm real people.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">🧋 4. No explicit or NSFW content</flux:heading>
                <flux:text class="mt-1">Keep posts appropriate. Sexual or violent text content will be removed immediately.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">🫗 5. No doxxing</flux:heading>
                <flux:text class="mt-1">Sharing someone's private information — real name, address, contact details — is strictly prohibited and may result in a permanent ban.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">🍃 6. Respect the community</flux:heading>
                <flux:text class="mt-1">Spam, self-promotion, and off-topic posts will be removed. Keep the tea relevant and interesting.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">⚠️ 7. Violations</flux:heading>
                <flux:text class="mt-1">Breaking these rules may result in post removal, suspension, or a permanent ban depending on the severity.</flux:text>
            </div>

        </div>
    </div>
</x-layouts::app>