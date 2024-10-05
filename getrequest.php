<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Request</title>
</head>

<body>
    <h1 style="color: green; text-align:center;">Get Request</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr style="background-color: green; color: white; ">
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
            <?php

            // URL API publik
            $url = 'https://jsonplaceholder.typicode.com/posts';

            // Inisialisasi cURL
            $ch = curl_init();

            // Set opsi cURL untuk mengambil URL dengan metode GET
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Eksekusi cURL dan simpan respon
            $response = curl_exec($ch);

            // Tutup cURL
            curl_close($ch);

            // Ubah respon dari JSON menjadi array PHP
            $data = json_decode($response, true);

            //Mengambil 5 data pertama dalam bentuk array PHP
            $lima_pertama = array_slice($data, 0, 5);

            // Menampilkan 5 data pertama
            foreach ($lima_pertama as $post) {
                echo "<tr>";
                echo "<td>" . $post['id'] . "</td>";
                echo "<td>" . $post['title'] . "</td>";
                echo "<td>" . $post['body'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>

</body>

</html>