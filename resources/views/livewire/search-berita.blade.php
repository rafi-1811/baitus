<div class="blog_details-widget mb-30 tp_fade_left">
    <h5 class="blog_details-widget-title mb-30">Cari Berita</h5>
    <form wire:submit="cari" class="blog_details-widget-search">
        <input type="text" placeholder="Cari disini..." wire:model="search">
        <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
    </form>
    @foreach ($berita as $item)
        <div>{{ $item->judul }}</div>
    @endforeach

    @if ($error)
        <!-- Overlay -->
        <div class="modal-overlay">
            <!-- Modal Box -->
            <div class="modal-box">
                <!-- SVG Icon -->
                <div class="modal-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12" y2="16"></line>
                    </svg>
                </div>
                <!-- Body -->
                <p class="modal-body">Data berita tidak ditemukan.</p>
                <button class="modal-close" onclick="closeModal()">Tutup</button>
            </div>
        </div>

        <!-- CSS -->
        <style>
            /* Overlay (background gelap) */
            .modal-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }

            /* Modal Box */
            .modal-box {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                width: 300px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                text-align: center;
                animation: fadeIn 0.3s ease;
            }

            /* SVG Icon */
            .modal-icon {
                margin-bottom: 15px;
            }

            .icon {
                width: 50px;
                height: 50px;
                stroke: #e53935;
                /* Warna merah untuk ikon */
            }

            /* Isi Modal */
            .modal-body {
                font-size: 16px;
                margin-bottom: 20px;
                color: #333;
            }

            /* Tombol Tutup */
            .modal-close {
                background-color: #e53935;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .modal-close:hover {
                background-color: #d32f2f;
            }

            /* Animasi Masuk */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.9);
                }

                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
        </style>

        <!-- JavaScript -->
        <script>
            function closeModal() {
                document.querySelector('.modal-overlay').style.display = 'none';
            }
        </script>
    @endif



</div>
