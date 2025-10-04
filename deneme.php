<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ders 1 - Tek Çift Sayı Hesaplama</title>
    <style>
        /* Sayfa arka planı - Güzel gradient efekti */
        body {
            background: linear-gradient(135deg, #74b9ff 0%, #0984e3 50%, #6c5ce7 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        
        /* Form container - Beyaz arka plan ile öne çıkarma */
        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            text-align: center;
        }
        
        /* Başlık stili */
        h2 {
            color: #2d3436;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        /* Hesapla butonu stili */
        .btn{
            padding: 12px;
            width: 250px;
            background: linear-gradient(45deg, #00b894, #00cec9);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s;
            margin: 0 auto;
            display: block;
        }
        
        /* Buton hover efekti */
        .btn:hover {
            transform: translateY(-2px);
        }
        
        /* Input alanı stili */
        .input{
            padding: 12px;
            width: 226px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            margin: 0 auto 15px auto;
            transition: border-color 0.3s;
            display: block;
        }
        
        /* Input focus efekti */
        .input:focus {
            border-color: #74b9ff;
            outline: none;
        }
        
        /* Sonuç gösterme alanı */
        .result {
            background: linear-gradient(135deg, #fd79a8, #e84393);
            color: white;
            padding: 15px;
            width: 226px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            margin: 0 auto 20px auto;
            text-align: center;
            animation: fadeIn 0.5s ease-in;
        }
        
        /* Sonuç animasyonu */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🔢 Tek - Çift Sayı Kontrolü</h2>
        
        <?php
        // Form gönderildi mi kontrol et
        if ($_POST) {
            // POST ile gelen sayı değerini al
            $sayi = $_POST["sayi"];
            
            // Modül operatörü (%) ile tek-çift kontrolü
            // Sayı 2'ye bölündüğünde kalan 0 ise çift, değilse tek
            if ($sayi % 2 == 0) {
                echo "<div class='result'>✅ $sayi sayısı çifttir!</div>";
            } else {
                echo "<div class='result'>⭐ $sayi sayısı tektir!</div>";
            }
        }
        ?>
        
        <!-- HTML Form - Kullanıcıdan sayı girişi alır -->
        <form action="deneme.php" method="post">
            <!-- Number input - Sadece sayı girişine izin verir -->
            <input type="number" name="sayi" placeholder="Bir sayı giriniz..." class="input" required>
            <br><br>
            <!-- Submit butonu - Formu gönderir -->
            <input type="submit" value="🧮 Hesapla" class="btn">
        </form>
        
        <p style="color: #636e72; font-size: 12px; margin-top: 20px;">💡 PHP Ders 1 - Modül Operatörü Kullanımı</p>
    </div>
</body>
</html>