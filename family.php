<?php
    $pictures = [
        [
            'image' => 'fampic/fam1.png',
            'description' => 'This picture was taken last July 4, when I celebrated my birthday along with my Lola. We had a small gathering at Teodorico\'s in Sta. Maria, Bulacan, with a lot of guests. My Lola was so happy, and it was a special day for both of us. It was a wonderful moment I\'ll always remember.',
            'date' => '07-04-2024',
        ],
        [
            'image' => 'fampic/fam2.png',
            'description' => 'This picture was taken during our trip to Padre Pio in San Jose del Monte, Bulacan. The place is up high, so we had to walk to the top of a mountain to reach the massive statue of Padre Pio. The journey was challenging, but it was such a special bonding experience with my family. We shared laughs, stories, and a sense of accomplishment as we reached the top together, making it a memory I\'ll always cherish.',
            'date' => '10-02-2022',
        ],
        [
            'image' => 'fampic/fam3.jpg',
            'description' => 'This picture was taken on my 18th birthday, a day I will never forget. I felt like a true princess, and it was all thanks to my amazing family. They made my dream of having a beautiful debut come true, and I couldn\'t have asked for anything more. The love and effort they put into making that night special filled me with so much joy. I\'ll always be grateful to them for turning my dream into a reality, making me feel truly celebrated.',
            'date' => '07-04-2021',
        ],
        [
            'image' => 'fampic/fam4.png',
            'description' => 'This picture was taken during our trip to Baguio, which lasted for two days and one night. We had an amazing time exploring the city, visiting different places well into the night, and simply enjoying each other\'s company. A huge thanks to my Tito-Ninong for making this trip happen. We\'re truly grateful for his generosity, and this experience will always be a cherished memory for us.',
            'date' => '05-08-2022',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Album</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Family Portraits</h1>
        <p>A collection of cherished moments with my family, filled with love and memories.</p>
    </header>
    <section class="gallery">
        <?php foreach ($pictures as $picture): ?>
        <div class="picture">
            <img src="<?= $picture['image'] ?>" alt="Family Picture">
            <p><?= $picture['description'] ?></p>
            <p><?= $picture['date'] ?></p>
        </div>
        <?php endforeach; ?>
    </section>
    <footer>
        <a href="index.html" class="back-link"><i class="fas fa-arrow-left"></i> Back to Main Page</a>
    </footer>
</body>
</html>
