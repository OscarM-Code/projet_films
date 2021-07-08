<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ressource/style.css">
    <title>projet_films</title>
</head>
<body>
    <header>
    <h1>projet_films</h1>
    </header>
   
    <section id="big">
        <div>
            <img src="<?php echo $donnees['images']; ?>">
        </div>
        <div>
            <p> <?php echo $donnees['titre']; ?> </p>
        </div>
    </section>

    <section class="container">

    <button id="btPrev"><</button>

    <div class="slider">
        <div class="slide">1</div>
        <div class="slide">2</div>
        <div class="slide">3</div>
        <div class="slide">4</div>
        <div class="slide">5</div>
        <div class="slide">6</div>
        <div class="slide">7</div>
        <div class="slide">8</div>
        <div class="slide">9</div>
        <div class="slide">10</div>
        <div class="slide">11</div>
        <div class="slide">12</div>
        <div class="slide">13</div>
        <div class="slide">14</div>
        <div class="slide">15</div>
        <div class="slide">16</div>
        <div class="slide">17</div>
        <div class="slide">18</div>
        <div class="slide">19</div>
        <div class="slide">20</div>
        <div class="slide">21</div>
        <div class="slide">22</div>
        <div class="slide">23</div>
        <div class="slide">24</div>
        <div class="slide">25</div>
        <div class="slide">26</div>
        <div class="slide">27</div>
        <div class="slide">28</div>
        <div class="slide">29</div>
        <div class="slide">30</div>
        <div class="slide">31</div>
        <div class="slide">32</div>
        <div class="slide">33</div>
        <div class="slide">34</div>
        <div class="slide">35</div>
        <div class="slide">36</div>
        <div class="slide">37</div>
        <div class="slide">38</div>
        <div class="slide">39</div>
        <div class="slide">40</div>
        <div class="slide">41</div>
        <div class="slide">42</div>

    </div>

    <button id="btNext">></button>
        
    </section>

    <footer>
    <p>CECI EST UN FOOTER</p>
    </footer>

    <script src="ressource/script.js"></script>
</body>
</html>