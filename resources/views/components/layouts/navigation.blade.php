<nav class="bg-white w-full fixed top-0 z-50 h-20 shadow-lg shadow-gray-400/50">
    <div class=" px-6 mx-auto py-4 flex justify-between items-center h-full ml-[140px]">
        <div class="flex items-center gap-x-5">
        <!-- Logo -->
            <a href="{{ route('home') }}" class="ml-2 mr-5 flex items-center space-x-2 lg:ml-0" wire:navigate>
                <x-app-logo />
            </a>
            <!-- Dropdown Tipologie Servizi -->
            <flux:dropdown>
                <flux:button
                    icon-trailing="chevron-down"
                    class="bg-white text-[#232323] border-none hover:text-514f8d"
                    >Tipologie Servizi
                </flux:button>

                <flux:menu>
                @foreach (config('buildIn.Tipologie_servizi') as $category => $subCategories)
                    <flux:menu.submenu
                        class="hover:text-514f8d!"
                        heading="{{ $category }}"
                        >
                        @foreach ($subCategories as $subCategory => $elements)
                            <flux:menu.submenu heading="{{ $subCategory }}">
                                @foreach ($elements as $element)
                                    <flux:menu.item>{{ $element }}</flux:menu.item>
                                @endforeach
                            </flux:menu.submenu>
                        @endforeach
                    </flux:menu.submenu>
                @endforeach
            </flux:menu>
            </flux:dropdown>
            <!-- Dropdown Aziende -->

            <flux:dropdown>
                <flux:button
                    icon-trailing="chevron-down"
                    class="bg-white text-[#232323] border-none hover:text-514f8d"
                    >Aziende
                </flux:button>

                <flux:menu>
                    <flux:menu.item class="hover:text-514f8d">Artedile Due</flux:menu.item>
                    <flux:menu.item class="hover:text-514f8d">Bassetti Ristrutturazione Casa</flux:menu.item>
                    <flux:menu.item class="hover:text-514f8d">Domus Ristrutturazioni</flux:menu.item>
                    <flux:menu.item class="hover:text-514f8d">FaberExpert Architetti</flux:menu.item>
                    <flux:menu.item class="hover:text-514f8d">Rizzuti Costruzioni</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </div>
        <!-- Pulsanti di autenticazione -->
        <div class="flex items-center space-x-4">
            <flux:button
                href="{{ route('login') }}"
                variant="primary"
                size="sm"
                data-variant-primary
                data-color-indigo
            >Accedi
            </flux:button>
            <flux:button
                href="{{ route('register') }}"
                variant="filled"
                size="sm"
                data-variant-filled
                data-color-indigo
            >Iscriviti
            </flux:button>
        </div>
    </div>
</nav>

<div class="h-10"></div>
