<x-layouts::app :title="__('Privacy Policy')">
    <div class="flex h-full w-full flex-1 flex-col rounded-xl">
        <div>
            <flux:heading size="xl" level="1">Privacy Policy</flux:heading>
            <flux:text class="mt-2 mb-6 text-base">Last updated: {{ now()->format('F d, Y') }}</flux:text>
        </div>

        <flux:separator variant="subtle" />

        <div class="flex flex-col gap-6 mt-6 max-w-2xl">

            <div>
                <flux:heading size="lg" level="2">1. Who we are</flux:heading>
                <flux:text class="mt-1">Societea is an anonymous social platform where users can share insider stories, opinions, and tea without revealing their identity.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">2. What we collect</flux:heading>
                <flux:text class="mt-1">We collect only the information necessary to operate the platform — including your email address and any content you post. We do not collect your real name unless you choose to provide it.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">3. How we use your data</flux:heading>
                <flux:text class="mt-1">Your data is used solely to provide and improve Societea. We use your email for account-related communications such as password resets. We do not sell your data to third parties.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">4. Anonymity</flux:heading>
                <flux:text class="mt-1">Posts on Societea are anonymous by design. However, we may retain metadata (such as timestamps and IP addresses) for safety and moderation purposes.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">5. Cookies</flux:heading>
                <flux:text class="mt-1">We use essential cookies to keep you logged in and maintain your session. We do not use tracking or advertising cookies.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">6. Data retention</flux:heading>
                <flux:text class="mt-1">Your account and posts are retained until you delete your account. You may request deletion of your data at any time by contacting us.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">7. Changes to this policy</flux:heading>
                <flux:text class="mt-1">We may update this policy from time to time. Continued use of Societea after changes means you accept the updated policy.</flux:text>
            </div>

            <div>
                <flux:heading size="lg" level="2">8. Contact</flux:heading>
               <flux:text class="mt-1">For any privacy concerns, reach out to us through the app or via email at <a href="mailto:dev.freeprojects@gmail.com" class="underline">dev.freeprojects@gmail.com</a>.</flux:text>
            </div>

        </div>
    </div>
</x-layouts::app>