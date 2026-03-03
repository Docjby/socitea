<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
        <flux:brand href="{{ route('feeds') }}" logo="{{ asset('logo.png') }}" name="SocieTea"
            class="max-lg:hidden dark:hidden" />
        <flux:brand href="{{ route('feeds') }}" logo="{{ asset('logo.png') }}" name="SocieTea"
            class="max-lg:hidden! hidden dark:flex" />
        <flux:navbar class="-mb-px ml-5 max-lg:hidden">
            <flux:navbar.item icon="rss" :href="route('feeds')" :current="request()->routeIs('feeds')"
                wire:navigate>Drops</flux:navbar.item>
            <flux:navbar.item icon="megaphone" :href="route('announcements')"
                :current="request()->routeIs('announcements')" wire:navigate>Announcement</flux:navbar.item>
            <flux:separator vertical variant="subtle" class="my-2" />
            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon:trailing="chevron-down">About</flux:navbar.item>
                <flux:navmenu>
                    <flux:navmenu.item icon="clipboard-document-list" :href="route('rules')" wire:navigate>Rules
                    </flux:navmenu.item>
                    <flux:navmenu.item icon="shield-check" :href="route('privacy')" wire:navigate>Privacy Policy
                    </flux:navmenu.item>
                    <flux:navmenu.item icon="bug-ant" x-data x-on:click="$flux.modal('developer').show()">Developer
                    </flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>
        <flux:spacer />
        {{-- <flux:navbar class="me-4">
            <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
            <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" label="Settings" />
            <flux:navbar.item class="max-lg:hidden" icon="information-circle" href="#" label="Help" />
        </flux:navbar> --}}
        <flux:dropdown position="top" align="start">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />
            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>{{ auth()->user()->name }}</flux:menu.radio>
                </flux:menu.radio.group>

                {{-- <flux:menu.separator /> --}}

                <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                    Settings
                </flux:menu.item>
                <flux:menu.separator />
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                        class="w-full cursor-pointer" data-test="logout-button">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    <flux:modal name="developer" class="max-w-sm">
        <div class="flex flex-col items-center text-center gap-3 py-4">
            <flux:icon name="bug-ant" class="size-10 text-zinc-400" />
            <flux:heading size="lg">Developer</flux:heading>
            <flux:text>Built and maintained by <strong>Docjby</strong>.</flux:text>
            <flux:text>Have feedback or found a bug? Reach out at <a href="mailto:dev.freeprojects@gmail.com"
                    class="underline">dev.freeprojects@gmail.com</a></flux:text>
            <flux:button variant="ghost" x-on:click="$flux.modal('developer').close()">Close</flux:button>
        </div>
    </flux:modal>


    <flux:sidebar sticky collapsible="mobile"
        class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.header>
            <flux:sidebar.brand href="{{ route('feeds') }}" logo="{{ asset('logo.png') }}"
                logo:dark="{{ asset('logo.png') }}" name="Societea" />
            <flux:sidebar.collapse
                class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
        </flux:sidebar.header>
        <flux:sidebar.nav>
            <flux:sidebar.item icon="rss" :href="route('feeds')" :current="request()->routeIs('feeds')"
                wire:navigate>Drops</flux:sidebar.item>
            <flux:sidebar.item icon="megaphone" :href="route('announcements')"
                :current="request()->routeIs('announcements')" wire:navigate>Announcement</flux:sidebar.item>
            <flux:sidebar.group expandable heading="About" class="grid">
                <flux:sidebar.item icon="clipboard-document-list" :href="route('rules')" wire:navigate>Rules
                </flux:sidebar.item>
                <flux:sidebar.item icon="shield-check" :href="route('privacy')" wire:navigate>Privacy Policy
                </flux:sidebar.item>
                <flux:sidebar.item icon="bug-ant" href="#">Developer</flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>
        <flux:sidebar.spacer />
    </flux:sidebar>

    {{ $slot }}

    @fluxScripts
</body>

</html>
