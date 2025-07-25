<?php
    $pictures = [
        [
            "image" => "friendspic/friends1.png",
            "description" => "This picture was taken at a cozy coffee shop in Guiguinto, Bulacan, where my elementary friends and I finally managed to get together after a long time. It’s funny how one of our friends, the one wearing blue, just joined us out of nowhere—it’s become a joke we all love! Even though our schedules rarely line up, nothing changes in our friendship. It still feels like the old days when we used to hang out all the time. I’m so thankful for these friends who always listen to my life dramas and share all the 'tsismis' with me. No matter how much time passes, our bond remains strong.",
            "date" => "08-19-2024"
        ],
        [
            "image" => "friendspic/friends2.JPG",
            "description" => "This picture captures a moment with my high school friends, who I consider some of the most solid friendships I’ve ever had. They were the ones who truly shaped my high school experience, and I’m so grateful to be part of this circle. I’ve learned so much from them—about school, life, and growing together. Even now, whenever we reunite, the memories flood back, and the bond remains as strong as ever. These friendships have withstood the test of time, and I’ll always treasure them.",
            "date" => "05-29-2024"
        ],
        [
            "image" => "friendspic/friends3.png",
            "description" => "This picture was taken during our college year-end party at one of our friend's house. It may have been a simple gathering—just some food, drinks, and karaoke—but the memories we created that day were truly unforgettable. The laughter, the joy, and the bond we shared made it an incredibly special moment. It’s something I’ll always cherish, and I hope we’ll have many more events like this in the future. It was definitely one of the highlights of my college life, and I’m so grateful for the friendships we’ve built.",
            "date" => "12-28-2023"
        ],
        [
            "image" => "friendspic/friends4.jpg",
            "description" => "This picture captures some of my closest friends—those I’ve spent the most time with throughout college. In a time where competition and stress are inevitable, we stood out for our support of one another. There was no room for jealousy or rivalry; instead, we focused on helping each other grow and succeed. We believed that everyone could graduate, and we made sure no one was left behind. College life can be tough, but with friends like these, it was much easier to get through. I’m incredibly thankful for them, and I know our friendship will last well beyond our college years.",
            "date" => "07-04-2024"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends Album</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>The Circle of Friends</h1>
        <p>Celebrating fun and memories with my closest friends.</p>
    </header>
    <section class="gallery">
        <?php foreach ($pictures as $picture): ?>
        <div class="picture">
            <img src="<?php echo $picture['image']; ?>" alt="Friend's Picture">
            <p><?php echo $picture['description']; ?></p>
            <p><?php echo $picture['date']; ?></p>
        </div>
        <?php endforeach; ?>
    </section>
    <footer>
        <a href="index.html" class="back-link"><i class="fas fa-arrow-left"></i> Back to Main Page</a>
    </footer>
</body>
</html>
