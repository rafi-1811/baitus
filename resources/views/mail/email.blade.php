<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terima kasih atas donasi anda!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
</head>

<body style="margin: 0; padding: 0; background-color: #f9f9f9;">
    <div
        style="background-color: #ffffff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); max-width: 600px; margin: auto;">
        <!-- Judul Email -->
        <img src="https://www.baitussaadahamanah.org/assets/images/logo/logo.png" alt="Logo Yayasan"
            style="margin-top: 16px; display: block; margin-left: auto; margin-right: auto; width: 150px;" />

        <!-- Pembukaan -->
        <p style="font-size: 18px; font-family: 'Poppins', sans-serif;">Terima Kasih, {{ $nama }}!</p>

        <!-- Pesan Utama -->
        <p style="margin-top: 16px; color: #4a4a4a; font-family: 'Roboto', sans-serif;">
            Kami dari Yayasan Baitus Sa'adah Amanah mengucapkan terima kasih yang sebesar-besarnya atas donasi yang Anda
            berikan. Setiap rupiah yang Anda sumbangkan sangat berarti bagi anak-anak yatim yang kami bina. Dukungan
            Anda membantu kami terus memberikan pendidikan, makanan, dan kebutuhan lain yang sangat diperlukan oleh
            mereka.
        </p>

        <!-- Detail Donasi -->
        <div
            style="margin-top: 16px; border-top: 1px solid #ccc; padding-top: 16px; font-family: 'Roboto', sans-serif;">
            <h2 style="font-size: 20px; font-weight: 500; font-family: 'Poppins', sans-serif;">Detail donasi anda</h2>
            <div style="line-height: 10px">
                <p>Id Donasi: {{ $id }}</p>
                <p>Jumlah Donasi: Rp {{ number_format($jumlah, 0, '.', '.') }}</p>
                <p>Tanggal Donasi: {{ $tanggal }}</p>
                </p>
            </div>
        </div>

        <!-- Dampak Donasi -->
        <div style="margin-top: 16px; font-family: 'Roboto', sans-serif;">
            <p style="color: #4a4a4a;">
                Donasi Anda berdampak signifikan pada kesejahteraan anak-anak. Dukungan Anda memungkinkan kita
                menghadirkan inisiatif yang membantu mereka tumbuh dan membuka peluang untuk masa depan yang lebih
                cerah. Mari bersama-sama ciptakan perubahan berarti bagi mereka.
            </p>
        </div>

        <!-- Informasi Kontak -->
        <div style="margin-top: 16px; font-family: 'Roboto', sans-serif;">
            <p style="color: #4a4a4a;">
                Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami melalui halaman kontak kami, <a
                    href="https://www.baitussaadahamanah.org/kontak"
                    style="color: #1e90ff; text-decoration: none;">Disini</a>.
            </p>
        </div>

        <!-- Penutupan -->
        <div style="margin-top: 16px; font-family: 'Roboto', sans-serif;">
            <p style="font-weight: bold;">Terima kasih sekali lagi atas dukungan Anda!</p>
            <p style="margin-top: 8px;">Salam hangat,</p>
            <p style="font-weight: bold;">Yayasan Baitus Sa'adah Amanah</p>
            <p style="text-align: center; margin-top: 8px; font-size: 12px; color: #999;">&copy; {{ date('Y') }}
                Yayasan Baitus Sa'adah Amanah. Semua hak dilindungi.</p>
        </div>
    </div>
</body>

</html>
