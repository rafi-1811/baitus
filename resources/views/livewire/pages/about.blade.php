{{-- SEO --}}
@section('title', "Tentang Kami - Yayasan Baitus Sa'adah Amanah")
@section('meta_description',
    'Yayasan Baitus Saadah Amanah adalah lembaga yang didirikan dengan tujuan untuk memberikan
    perhatian dan kepedulian terhadap anak yatim. Kami memberikan pendidikan yang layak, kebutuhan pokok, serta membimbing
    anak-anak yatim dalam aspek moral dan spiritual. Pelajari lebih lanjut tentang visi, misi, dan komitmen kami dalam
    mewujudkan masa depan yang cerah bagi anak-anak yatim.')
@section('meta_keywords',
    'tentang Yayasan Baitus Saadah Amanah, visi misi, peduli yatim, pemberdayaan anak yatim,
    lembaga sosial, pendidikan anak yatim, bimbingan moral, yayasan sosial, organisasi sosial, komitmen yayasan')
    {{-- @section('meta_image') --}}

    <!-- section Tentang Kami -->
    <section>

        <x-tentang-kami />

        <!-- Section Program -->
        <x-program-kami />

        <!-- section Visi Misi -->
        <x-visi-misi />

        {{-- section Data Yatim --}}
        <x-data-yatim />

        {{-- 5 Section Data Yatim --}}
        <x-donasi />
    </section>
