<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Parkir</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Data Parkir Real-Time</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Tempat Parkir</th>
                <th>Kode Lahan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="parking-data">
            <!-- Data akan dimasukkan di sini -->
        </tbody>
    </table>

    <script>
        function fetchParkingData() {
            $.ajax({
                url: "get_parking_data.php",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    let html = "";
                    data.forEach(function(row) {
                        html += `<tr>
                            <td>${row.waktu_masuk}</td>
                            <td>${row.nama_lokasi}</td>
                            <td>${row.kode_lahan}</td>
                            <td>${row.status === '1' ? 'Berlangsung' : 'Selesai'}</td>
                        </tr>`;
                    });
                    $("#parking-data").html(html);
                }
            });
        }

        // Panggil fungsi pertama kali saat halaman dimuat
        fetchParkingData();

        // Perbarui data setiap 5 detik
        setInterval(fetchParkingData, 5000);
    </script>
</body>
</html>
