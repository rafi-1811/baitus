<div class="image-docs" x-data="galleryModal()">
    <div class="container">
        <div class="wrap-content">
            @forelse ($docs->gambar_dokumentasi as $index => $item)
                <div class="image-wrap" @click="openModal('{{ asset('storage/' . $item) }}')">
                    <img class="image-content" src="{{ asset('storage/' . $item) }}" alt="Gambar Dokumentasi">
                    <div class="image-overlay">
                        <span class="overlay-text">Lihat Gambar</span>
                    </div>
                </div>
            @empty
                <div class="text-center">Data Kosong</div>
            @endforelse
        </div>

        <div class="youtube-wrap">
            <div class="youtube-item">
                <iframe class="youtube-content" src="https://www.youtube.com/embed/{{ $videoId }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <!-- Modal tampil gambar -->
    <div class="image-modal show" x-show="isOpen" x-cloak x-transition>
        <button class="close-modal" @click="closeModal">
            <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </button>

        <!-- Tombol Prev dan Next -->
        <button class="prev-btn" @click="prevImage">
            <svg class="prev-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </button>
        <button class="next-btn" @click="nextImage">
            <svg class="next-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
        </button>

        <!-- Gambar Besar -->
        <img class="modal-content" :src="currentImage" alt="Gambar Besar">
    </div>
</div>

<script>
    function galleryModal() {
        return {
            isOpen: false,
            images: @json($docs->gambar_dokumentasi),
            currentIndex: 0,
            currentImage: '',

            openModal(image) {
                this.currentIndex = this.images.indexOf(image);
                this.currentImage = image;
                this.isOpen = true;
            },

            closeModal() {
                this.isOpen = false;
            },

            prevImage() {
                this.currentIndex = (this.currentIndex > 0) ? this.currentIndex - 1 : this.images.length - 1;
                this.currentImage = this.getFullUrl(this.images[this.currentIndex]);
            },

            nextImage() {
                this.currentIndex = (this.currentIndex < this.images.length - 1) ? this.currentIndex + 1 : 0;
                this.currentImage = this.getFullUrl(this.images[this.currentIndex]);
            },

            getFullUrl(imagePath) {
                return "{{ url('storage') }}/" + imagePath;
            }
        };
    }
</script>
