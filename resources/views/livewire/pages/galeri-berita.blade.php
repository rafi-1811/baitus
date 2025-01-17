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
    </div>

    <!-- Modal -->
    <div class="image-modal show" x-show="isOpen" x-transition>
        <button class="close-modal" @click="closeModal">&times;</button>

        <!-- Tombol Prev dan Next -->
        <button class="prev-btn" @click="prevImage">&lt;</button>
        <button class="next-btn" @click="nextImage">&gt;</button>

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
                this.currentIndex = (this.currentIndex === 0) ? this.images.length - 1 : this.currentIndex - 1;
                this.currentImage = this.getFullUrl(this.images[this.currentIndex]);
            },

            nextImage() {
                this.currentIndex = (this.currentIndex === this.images.length - 1) ? 0 : this.currentIndex + 1;
                this.currentImage = this.getFullUrl(this.images[this.currentIndex]);
            },

            getFullUrl(imagePath) {
                return "{{ url('storage') }}/" + imagePath;
            }
        };
    }
</script>
