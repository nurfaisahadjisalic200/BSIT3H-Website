<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="group.css"> 
    <title>Background</title>


</head>
<body>


    <?php include('C:\Users\kianm\OneDrive\Desktop\Group#7 Page\header.php'); ?>
    
    <div>
        <img src="Boarder2.jpg" class="bg-pic">
    </div>
    
    <div class="container-bg"> 
<?php
    $q = "What is Coffee";
    $a = "Coffee is a brewed beverage made from the roasted seeds of the Coffea plant, commonly known as coffee beans. ";
    $b = "These beans are harvested from coffee cherries, which grow on trees primarily in tropical regions. Coffee is known for its distinctive aroma, rich flavor, and stimulating effect due to its caffeine content.";
    $c = $a . $b;

    echo nl2br("<h2>$q\n</h2><br>");
    echo $c;

?>
    </div>

<div class="container-bg">
<?php
    $q = "Why does Coffee is Addictive";
    $a = "Coffee can be addictive primarily due to its caffeine content. Caffeine is a natural stimulant that affects the central nervous system, leading to increased alertness and energy levels. ";
    $b = "While coffee isn’t considered as addictive as some other substances, the dependence on caffeine can lead to habitual consumption and difficulty reducing intake for many people.";
    $c = $a . $b;

    echo nl2br("<h2>$q\n</h2>");
    echo $c;

?>
    </div>

<div class="container-bg">
<?php
    $q = "What are the Health Factors for Drinking Coffee";
    $a = "Coffee, when consumed in moderation, has been associated with several health benefits due to its rich content of antioxidants, caffeine, and other bioactive compounds. While coffee offers many health benefits, it's important to consume it in moderation. ";
    $b = "Excessive intake can lead to negative effects such as anxiety, insomnia, digestive issues, and increased heart rate. Typically, 3 to 5 cups of coffee per day is considered safe for most people, but individual tolerance levels can vary. If you're sensitive to caffeine, consider opting for decaffeinated coffee to still enjoy some of the benefits without the stimulant effects.";
    $c = $a . $b;
        
    echo nl2br("<h2>$q\n</h2>");
    echo $c;
        
?>
     </div>
     
     <div>
        <img src="Boarder2.jpg" class="bg-pic">
    </div>
</body>
</html>