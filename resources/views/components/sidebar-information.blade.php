<aside id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <button id="close-sidebar" class="close-sidebar-btn">&times;</button>
    </div>
    <nav>
        <ul>
            <li><a wire:navigate href="/" class="menu-link">Beranda</a></li>
            <li class="dropdown-program">
                <a href="#"
                    class="menu-link dropdown-toggle d-flex align-items-center justify-content-center gap-2">Program
                    Kami</a>
                <ul class="program-menu-list">
                    @foreach ($staticData['program'] as $item)
                        <li><a wire:key="{{ $item->slug }}" wire:navigate href="/program/{{ $item->slug }}"
                                class="menu-link">{{ $item->kategori_program }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a wire:navigate href="/tentang-kami" class="menu-link">Tentang Kami</a></li>
            <li><a wire:navigate href="/berita" class="menu-link">Berita</a></li>
            <li><a wire:navigate href="/kontak" class="menu-link">Kontak</a></li>
            <li><a wire:navigate href="/campaign" class="cta-donasi mx-auto">Donasi Sekarang</a></li>
        </ul>

        <img class="sidebar-logo mx-auto" src="{{ asset('assets/images/logo/logo.png') }}"
            alt="Logo Baitussaadah Amanah">
    </nav>
</aside>

<div id="sidebar-overlay" class="sidebar-overlay"></div>

@push('scripts')
    <script>
        function initSidebar() {
            const clickOpenSidebar = document.querySelector(".header-menu-bar");
            const sidebar = document.getElementById("sidebar");
            const menuClick = document.querySelector(".dropdown-toggle");
            const listProgram = document.querySelector(".program-menu-list");
            const closeSidebar = document.getElementById("close-sidebar");
            const sidebarOverlay = document.getElementById("sidebar-overlay");

            if (menuClick) {
                const newMenuClick = menuClick.cloneNode(true);
                menuClick.parentNode.replaceChild(newMenuClick, menuClick);

                newMenuClick.addEventListener("click", (e) => {
                    e.preventDefault();
                    listProgram.classList.toggle("open");
                });
            }

            if (closeSidebar) {
                closeSidebar.addEventListener("click", () => {
                    sidebar.classList.remove("open");
                    sidebarOverlay.classList.remove("open");
                });
            }

            if (clickOpenSidebar) {
                clickOpenSidebar.addEventListener("click", () => {
                    sidebar.classList.add("open");
                    sidebarOverlay.classList.add("open");
                });
            }
        }

        // Pasang event listener untuk navigasi Livewire
        document.addEventListener("livewire:navigated", () => {
            initSidebar();
        });

        // Pasang event listener saat dokumen pertama kali dimuat
        document.addEventListener("livewire:init", () => {
            initSidebar();
        });
    </script>
@endpush
