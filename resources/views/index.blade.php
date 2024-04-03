<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>VenylsOnline</title>
</head>
<body>
    <main>
        <div class="content-container">
            <header class="site-header ">
                <div class="container-header">
                    <div class="logo-container">
                        <p class = "logo-txt"> VinylsOnline</p>
                        <img class = "logo-pic" src="../images/vinyl-record.svg" alt="Vinyls picture">
                    </div>
                    <div class="menu-container">
                        <ul class = "header-menu">
                            <li class="menu-item"><a class="menu-link" href="#">Home</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Latest</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Albums</a></li>
                            <li class="menu-item"><a class="menu-link" href="#">Single</a></li>
                        </ul>
                        <div class="cart">
                            <img class = "cart-img"  src="../images/shop-basket.svg" alt="Shopping Trolly">
                            <span class="cart-price">£350</span>
                        </div>
                        <div class="user-avatar">
                            <img  class = "avatar-img" src="../images/avatar.png" alt="User Avatar">
                            <a class = "login_link" href="#">Login/Register</a>
                        </div>
                    </div>
                </div>
            </header>
            <section class = "home-section">
        <div class="home-container">
            <div class="description">
                <h2 class = "description-title">Create a space vibe in<br> your home.</h2>
                <p class = "description-text">We are a Scottish based online mail order<br>vinyl record shop and also a bricks and<br><br>
                    mortar high street shop in the centre of<br> Wishaw. We have an extensive stock of 7"<br>singles, LPs,<br><br>
                    12" singles, limited editions, picture discs<br>and imports.</p>
                <button class = "find-button" >Find the vinyl</button>
            </div>
            <div class="vinyl-image">
                <img src="../images/home-screen.jpg" alt="Vinyl Record">
            </div>
        </div>
        <section class="choose-section">
            <h2 class="section-title">Why choose our vinyl records?</h2>
            <div class="choose-container">
                <div class="choose-item">
                    <div class="choose-items-pic">
                    <img src="../images/note.svg" alt="Perfect Quality">
                    </div>
                    <div class="choose-items-describe">
                    <h3 class="choose-title">Perfect Quality</h3>
                    <p class="choose-description">Our records sound clear and<br>
                    noise-free, all thanks to the<br>
                    highest qualityproduct!</p>

                </div>
                <div class="choose-item">
                    <div class="choose-items-pic">
                    <img src="../images/cloud.svg" alt="Perfect Quality">
                    </div>
                    <div class="choose-items-describe">
                    <h3 class="choose-title">Ambience</h3>
                    <p class="choose-description">We select only the best albums<br>
                    to create an incredible<br>
                    ambience right in your home.
                </div>
                <div class="choose-item">
                    <div class="choose-items-pic">
                    <img src="../images/paint.svg" alt="Not just the sound">
                    </div>
                    <div class="choose-items-describe">
                    <h3 class="choose-title">Not just the sound</h3>
                    <p class="choose-description">The most real art! All records can<br>
                    be the perfect addition to your<br>
                    interior!
                </div>
            </div>
        </section>
        <section class="catalogue">
            <div class="catalogue-container">
                <h2 class = "catalogue-tittle" >Our record catalogue</h2>
                <div class="category-list-container">
                    <ul class="category-list">
                    <li class="category-item first-button"><a href="#all">All</a></li>
                    <li class="category-item"><a href="#hip-hop">Hip hop</a></li>
                    <li class="category-item"><a href="#lo-fi">Lo-fi</a></li>
                    <li class="category-item"><a href="#lounge">Lounge</a></li>
                    <li class="category-item"><a href="#jazz">Jazz</a></li>
                    <li class="category-item"><a href="#ambient">Ambient</a></li>
                    </ul>
            </div>
            <div class="catalogue-slider">
                <div class="slider-cards">
                    <div class="card card-left custom-content-style">
                        <div class="album-cover">
                        <img src="../images/grandson.png" alt="Album Cover">
                        </div>
                        <div class="artist-details">
                            <div class="artist-name">grandson</div>
                            <div class="album-title">Death Of An Optimist</div>
                        </div>
                        <div class="music-style">
                            <span class="style-circle alternative-rock-bg"></span>
                            <span class="style-name alternative-rock ">Alternative Rock</span>
                        </div>
                        <div class="music-style">
                            <span class="style-circle hip-hop-bg"></span>
                            <span class="style-name hip-hop">Hip hop</span>
                        </div>
                    </div>
                    <div class="card card-middle custom-content-style">
                        <div class="album-cover">
                        <img src="../images/linkin park.png" alt="Album Cover">
                        </div>
                        <div class="artist-details">
                            <div class="artist-name">Linkin Park</div>
                            <div class="album-title">Minutes to midnight</div>
                        </div>
                        <div class="music-style">
                            <span class="style-circle alternative-rock-bg"></span>
                            <span class="style-name alternative-rock ">Alternative Rock</span>
                        </div>
                        <div class="music-style">
                            <span class="style-circle punk-rock-bg"></span>
                            <span class="style-name punk-rock">Punk Rock</span>
                        </div>
                    </div>
                    <div class="card card-right custom-content-style">
                        <div class="album-cover">
                        <img src="../images/gorillaz.png" alt="Album Cover">
                        </div>
                        <div class="artist-details">
                            <div class="artist-name">Gorillaz</div>
                            <div class="album-title">Demon Days</div>
                        </div>
                        <div class="music-style">
                            <span class="style-circle pop-bg"></span>
                            <span class="style-name pop">POP</span>
                        </div>
                        <div class="music-style">
                            <span class="style-circle funk-bg"></span>
                            <span class="style-name funk">Funk</span>
                        </div>
                    </div>
                </div>
                <div class="slider-arrows">
                    <button class = "slider-arrow prev"><</button>
                    <button class = "slider-arrow next">></button>
                </div>
            </div>
        </section>


            <footer class="site-footer">
                <!-- Здесь размещаем содержимое подвала сайта -->
            </footer>
        </div>
    </main>
</body>

</html>
