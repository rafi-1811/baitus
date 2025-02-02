{{-- <div class="sidebar-info side-info">
    <div class="sidebar-logo-wrapper mb-25">
        <div class="row align-items-end">
            <div class="col-xl-6 col-4">
                <div class="sidebar-close-wrapper text-end">
                    <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-menu-wrapper fix">
        <div class="mobile-menu"></div>
    </div>
    <div class="donasi-area-side"> <a href="https://kitabisa.com/campaign/berbagiberassembakoyatim">
            <button class="button2">Donasi Disini</button></a>
    </div>
    <div class="col-xl-6 col-8">
        <div class="sidebar-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo-img"></a>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div> --}}
<!-- Tombol untuk membuka sidebar -->

<!-- Sidebar -->
<aside id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <button id="close-sidebar" class="close-sidebar-btn">&times;</button>
    </div>
    <nav>
        <ul>
            <li><a href="/" class="menu-link">Beranda</a></li>
            <li class="dropdown-program">
                <a href="#"
                    class="menu-link dropdown-toggle d-flex align-items-center justify-content-center gap-2">Program
                    Kami</a>
                <ul class="program-menu-list">
                    @foreach ($staticData['program'] as $item)
                        <li><a wire:navigate href="/program/{{ $item->slug }}"
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
        document.addEventListener('livewire:navigated', () => {
            const clickOpenSidebar = document.querySelector('.header-menu-bar');
            const sidebar = document.getElementById('sidebar');
            const menuClick = document.querySelector('.dropdown-toggle');
            const listProgram = document.querySelector('.program-menu-list');
            const closeSidebar = document.getElementById('close-sidebar');
            const sidebarOverlay = document.getElementById('sidebar-overlay');

            menuClick.addEventListener('click', () => {
                listProgram.classList.toggle('open');
            })

            closeSidebar.addEventListener('click', () => {
                sidebar.classList.remove('open');
                sidebarOverlay.classList.remove('open');
            })

            clickOpenSidebar.addEventListener('click', () => {
                sidebar.classList.add('open');
                sidebarOverlay.classList.add('open');
            })
        })
    </script>
@endpush
