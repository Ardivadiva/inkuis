<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner</title>

    <link rel="stylesheet" href="css/kuesioner.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
</head>
<body>
    <div class="container">
        <h1></h1>
        <form id="surveyForm" method="POST" action="save.php">
        <div class="question" data-question="d1">
                <p>Berapa Usia Anda</p>
                <div class="options">
                    <label>
                        <input type="radio" name="j1" value="1">
                        <span></span>
                        <div class="option-text">15-19 tahun</div>
                    </label>
                    <label>
                        <input type="radio" name="j1" value="2">
                        <span></span>
                        <div class="option-text">20-25 tahun</div>
                    </label>
                    <label>
                        <input type="radio" name="j1" value="3">
                        <span></span>
                        <div class="option-text">26-40 tahun</div>
                    </label>
                </div>
            </div>


            <div class="question" data-question="d2">
                <p>Apa Profesi Anda</p>
                <div class="options">
                    <label>
                        <input type="radio" name="j2" value="1">
                        <span></span>
                        <div class="option-text">Pelajar SMA/SMK</div>
                    </label>
                    <label>
                        <input type="radio" name="j2" value="2">
                        <span></span>
                        <div class="option-text">Mahasiswa</div>
                    </label>
                    <label>
                        <input type="radio" name="j2" value="3">
                        <span></span>
                        <div class="option-text">Dosen/Guru</div>
                    </label>
                </div>
            </div>
            <br>
            <br>
            <h2><center>Pertanyaan Kuesioner</center></h2>
            <br>
            <div class="question" data-question="1">
                <p>1. Website menyediakan fitur yang memadai untuk mendukung proses pendaftaran magang, memberikan informasi perusahaan, dan melacak aplikasi magang secara menyeluruh.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q1" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>

            <div class="question" data-question="2">
                <p>2. Fitur-fitur pada website bekerja sesuai dengan yang diharapkan dan memenuhi kebutuhan spesifik pengguna, baik dari sisi fungsionalitas maupun kemudahan penggunaan.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q2" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>

            <div class="question" data-question="3">
                <p>3. Website beroperasi dengan stabil dan jarang mengalami gangguan atau kesalahan teknis, sehingga pengguna dapat mengakses fitur-fitur utama tanpa hambatan.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q3" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="4">
                <p>4. Website dirancang untuk memuat halaman utama dan fitur penting dengan cepat, memastikan pengguna tidak mengalami penundaan saat mengaksesnya.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q4" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q4" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q4" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q4" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q4" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="5">
                <p>5. Website memberikan respons yang cepat saat pengguna berinteraksi dengan fitur utama, seperti pendaftaran atau pencarian lowongan magang.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q5" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q5" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q5" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q5" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q5" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>

            <div class="question" data-question="6">
                <p>6. Pengguna dapat mengakses informasi dan fitur tanpa mengalami keterlambatan, kegagalan, atau gangguan teknis yang menghambat pengalaman mereka.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q6" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q6" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q6" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q6" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q6" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>

            <div class="question" data-question="7">
                <p>7. Website berfungsi dengan konsisten dan stabil, memastikan pengguna dapat mengakses fitur-fitur utama tanpa gangguan atau kesalahan teknis.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q7" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q7" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q7" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q7" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q7" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>

            <div class="question" data-question="8">
                <p>8. Website selalu tersedia dan dapat diandalkan untuk memenuhi kebutuhan pengguna, termasuk dalam pendaftaran magang, pencarian informasi perusahaan, dan pelacakan aplikasi.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q8" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q8" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q8" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q8" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q8" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="9">
                <p>9. Website memberikan hasil yang akurat dan sesuai dengan ekspektasi pengguna setiap kali digunakan, tanpa adanya penurunan kualitas layanan.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q9" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q9" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q9" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q9" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q9" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="10">
                <p>10. Website merespons dengan cepat terhadap interaksi pengguna, seperti saat mengakses fitur utama, mengirimkan formulir, atau mencari informasi magang.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q10" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q10" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q10" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q10" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q10" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="11">
                <p>11. Website menyediakan solusi atau tanggapan yang cepat terhadap masalah atau pertanyaan pengguna, memastikan mereka tidak mengalami keterlambatan dalam mendapatkan bantuan.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q11" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q11" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q11" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q11" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q11" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="12">
                <p>12. Semua fitur pada website dirancang untuk memberikan pengalaman yang lancar dan responsif, tanpa jeda atau penundaan yang mengganggu alur kerja pengguna.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q12" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q12" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q12" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q12" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q12" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="13">
                <p>13. Website memastikan keamanan data pribadi pengguna dengan menerapkan enkripsi yang kuat, seperti SSL/TLS, untuk melindungi informasi selama transmisi.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q13" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q13" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q13" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q13" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q13" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="14">
                <p>14. Website menggunakan sistem autentikasi yang aman, seperti autentikasi dua faktor atau pengelolaan kata sandi yang terenkripsi, untuk melindungi akun pengguna dari akses yang tidak sah.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q14" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q14" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q14" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q14" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q14" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="15">
                <p>15. Website dilengkapi dengan mekanisme perlindungan terhadap serangan siber, seperti firewall, deteksi intrusi, dan pembaruan keamanan secara berkala.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q15" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q15" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q15" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q15" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q15" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="16">
                <p>16. Pengguna merasa percaya diri bahwa data mereka aman dan tidak akan disalahgunakan oleh pihak ketiga.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q16" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q16" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q16" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q16" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q16" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="17">
                <p>17. Website dirancang agar dapat diakses dengan optimal di berbagai perangkat, termasuk desktop, tablet, dan ponsel, tanpa kehilangan fungsi atau kualitas tampilan.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q17" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q17" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q17" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q17" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q17" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="18">
                <p>18. Website berjalan dengan lancar di berbagai browser populer, memastikan pengalaman pengguna yang konsisten di seluruh platform.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q18" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q18" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q18" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q18" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q18" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="19">
                <p>19. Website memiliki tampilan visual yang menarik, profesional, dan terorganisir dengan baik, sehingga memberikan kesan yang positif kepada pengguna.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q19" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q19" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q19" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q19" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q19" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="20">
                <p>20. Elemen seperti gambar, ikon, dan tipografi di website memiliki resolusi tinggi dan dirancang untuk memberikan pengalaman visual yang nyaman bagi pengguna.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q20" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q20" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q20" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q20" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q20" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="21">
                <p>21. Website dirancang untuk memahami dan memenuhi kebutuhan spesifik pengguna, seperti menyediakan fitur personalisasi atau rekomendasi magang berdasarkan profil pengguna.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q21" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q21" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q21" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q21" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q21" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="22">
                <p>22. Website memberikan perhatian lebih pada kenyamanan dan kemudahan pengguna dalam mengakses informasi, memastikan navigasi yang intuitif dan ramah pengguna.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q22" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q22" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q22" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q22" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q22" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="23">
                <p>23. Website menawarkan opsi yang fleksibel untuk menyesuaikan pengalaman pengguna, seperti pengaturan tampilan atau fitur yang relevan dengan kebutuhan individu.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q23" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q23" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q23" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q23" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q23" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="24">
                <p>24. Website menyediakan panduan, bantuan, atau fitur interaktif yang membantu pengguna dalam menyelesaikan tugas mereka dengan mudah.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q24" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q24" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q24" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q24" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q24" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="25">
                <p>25. Website ini secara keseluruhan memenuhi kebutuhan saya, termasuk kelengkapan fitur, kemudahan navigasi, dan kecepatan akses.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q25" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q25" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q25" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q25" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q25" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="26">
                <p>26. Saya merasa nyaman dan percaya diri menggunakan website ini untuk memberikan data pribadi atau informasi sensitif.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q26" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q26" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q26" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q26" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q26" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="27">
                <p>27. Desain visual dan tata letak website ini terlihat profesional dan menarik, serta mudah diakses di berbagai perangkat.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q27" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q27" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q27" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q27" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q27" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>
            
            <div class="question" data-question="28">
                <p>28. Website ini merespons kebutuhan saya dengan cepat, termasuk memuat halaman dan memberikan informasi yang saya cari tanpa gangguan.</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q28" value="1">
                        <span></span>
                        <div class="option-text">Sangat Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q28" value="2">
                        <span></span>
                        <div class="option-text">Tidak Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q28" value="3">
                        <span></span>
                        <div class="option-text">Kurang Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q28" value="4">
                        <span></span>
                        <div class="option-text">Setuju</div>
                    </label>
                    <label>
                        <input type="radio" name="q28" value="5">
                        <span></span>
                        <div class="option-text">Sangat Setuju</div>
                    </label>
                </div>
            </div>

            <button type="submit" class="submit-btn">Kirim</button>
        </form>
    </div>

</body>
</html>
