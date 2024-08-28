<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

</head>
<body>
    
    <header class="header">
        <div class="left">
            <i class="fa-solid fa-gear" style="font-size: 30px; cursor: pointer;"></i>
            <img src="aset/play_logo.png" alt="" class="logo">
            <div class="search_content" id="searchBar">
                <label for="search_bar" style="cursor: pointer;"><i class="fa-solid fa-magnifying-glass"></i></label>
                <input type="search" name="" id="search_bar" class="search_bar" placeholder="What do you want to play?">
            </div>
        </div>
        <!-- <div class="btn_content">
            <div class="btn_back" id="backButton" onclick="goBack()"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="btn_next" id="forwardButton" onclick="goForward()"><i class="fa-solid fa-chevron-right"></i></div>
        </div> -->
        <div class="profile_cntn">
            <div class="premium">
                <h3>Up Play Premium</h3>
            </div>
            <div class="bell">
                <i class="fa-solid fa-bell"></i>
            </div>
            <div class="img_profile">
    
            </div>
        </div>
    </header>

    <main>
        <aside class="side_playlist" id="side_playlist">
            <div class="menu">
                <h3>Your Library</h3>
                <i class="fa-solid fa-plus" style="margin-left: 40px;"></i>
                <i class="fa-solid fa-arrow-left" style="margin-left: 10px;" id="btnClose"></i>
            </div>
            <div class="title">
                <h3>PLaylist</h3>
            </div>
            <div class="playlist_scroll">
                <div class="playlist_box">
                    <div class="img">
    
                    </div>
                    <div class="desc">
                        <h3>PLaylist 1</h3>
                        <h3>Playlist Justdhif</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img">
    
                    </div>
                    <div class="desc">
                        <h3>PLaylist 1</h3>
                        <h3>Playlist Justdhif</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img">
    
                    </div>
                    <div class="desc">
                        <h3>PLaylist 1</h3>
                        <h3>Playlist Justdhif</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img">
    
                    </div>
                    <div class="desc">
                        <h3>PLaylist 1</h3>
                        <h3>Playlist Justdhif</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img">
    
                    </div>
                    <div class="desc">
                        <h3>PLaylist 1</h3>
                        <h3>Playlist Justdhif</h3>
                    </div>
                </div>
            </div>
            <div class="title">
                <h3>Artist</h3>
            </div>
            <div class="playlist_scroll">
                <div class="playlist_box">
                    <div class="img_artist">
                        
                    </div>
                    <div class="desc">
                        <h3>Maroon 5</h3>
                        <h3>Artist</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img_artist">

                    </div>
                    <div class="desc">
                        <h3>Maroon 5</h3>
                        <h3>Artist</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img_artist">

                    </div>
                    <div class="desc">
                        <h3>Maroon 5</h3>
                        <h3>Artist</h3>
                    </div>
                </div>
                <div class="playlist_box">
                    <div class="img_artist">

                    </div>
                    <div class="desc">
                        <h3>Maroon 5</h3>
                        <h3>Artist</h3>
                    </div>
                </div>
            </div>
        </aside>

        <aside class="side_bar">
            <div class="menu">
                <div class="icon_navbar active">
                    <i class="fa-solid fa-house"></i>
                    <h3>Home</h3>
                </div>
                <div class="icon_navbar" id="search_content">
                    <i class="fa-regular fa-compass"></i>
                    <h3>Explore</h3>
                </div>
                <div class="icon_navbar" style="color: var(--main-color);">
                    <i class="fa-solid fa-compact-disc" id="btnOpen" style="cursor: pointer;"></i>
                    <h3>Playlist</h3>
                </div>
                
            </div>
        </aside>

        <section class="home_page">

            <div class="nav_btn_content">
                <button class="nav_button" onclick="goBack()"><i class="fa-solid fa-circle-chevron-left"></i></button>
                <button class="nav_button" onclick="goForward()"><i class="fa-solid fa-circle-chevron-right"></i></button>
            </div>

            <div class="fav_container">
                <div class="fav_wrapper">
                    <div class="fav_box mySwiper">
                        <div class="fav_content swiper-wrapper">
                            <div class="fav_slide swiper-slide">
                                <div class="img">
                                    <img src="aset/song.jpg" alt="">
                                </div>
                                <div class="song_desc">
                                    <h3>Playlist 1</h3>
                                    <h1 class="title_song">AVANGARD</h1>
                                    <h3><img src="aset/song.jpg" alt=""> IONOWN • 2024, 2 m 36 s</h3>
                                </div>
                            </div>
                            <div class="fav_slide swiper-slide" id="doodle">
                                <div class="img">
                                    <img src="aset/doodle.png" alt="">
                                </div>
                                <div class="song_desc">
                                    <h3>Playlist 2</h3>
                                    <h1 class="title_song">DOODLE</h1>
                                    <h3><img src="aset/song.jpg" alt=""> IONOWN • 2024, 2 m 36 s</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="navigasi_playlist">
                    <h3>All</h3>
                </div>
                <div class="navigasi_playlist">
                    <h3>Artist</h3>
                </div>
                <div class="navigasi_playlist">
                    <h3>Music</h3>
                </div>
            </nav>
            <div class="playlist_content">
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                    <div class="desc_playlist">
                        <h1>PLaylist 1</h1>
                        <p>By : Justdhif</p>
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                    <div class="desc_playlist">
                        <h1>PLaylist 1</h1>
                        <p>By : Justdhif</p>
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                    <div class="desc_playlist">
                        <h1>PLaylist 1</h1>
                        <p>By : Justdhif</p>
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                    <div class="desc_playlist">
                        <h1>PLaylist 1</h1>
                        <p>By : Justdhif</p>
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                    <div class="desc_playlist">
                        <h1>PLaylist 1</h1>
                        <p>By : Justdhif</p>
                    </div>
                </div>
            </div>

            <div class="title_content">
                <h3>New Music & Song</h3>
            </div>
            <div class="playlist_content">
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
            </div>
            <div class="title_content">
                <h3>New Music & Song</h3>
            </div>
            <div class="playlist_content">
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
                <div class="playlist_card">
                    <div class="img">
                        <img src="aset/doodle.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div class="song_play" id="song_play">
            <header class="song_header">
                <h3>Playlist 1</h3>
                <i class="fa-solid fa-xmark"></i>
            </header>
            <div class="song_scroll">
                <div class="img">
                    <img src="aset/doodle.png" alt="">
                </div>
                <div class="song_desc">
                    <div class="title">
                        <h3>Doodle</h3>
                        <p>Zachz Winner</p>
                    </div>
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <div class="about_artist">
                    <div class="img">
                        <h3>About the artist</h3>
                    </div>
                    <div class="desc_artist">
                        <h1>Zachz Winner</h1>
                        <p>426,229 monthly listener</p>
                        <p style="text-align: justify; margin: 10px 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi iure architecto laborum quis quibusdam blanditiis!</p>
                        <div class="btn_follow">Follow</div>
                    </div>
                </div>
                <div class="about_artist">
                    <header>
                        <h3>Credit</h3>
                        <h3>Show All</h3>
                    </header>
                    <div class="credit_desc">
                        <div class="name">
                            <h3>Zachz Winner</h3>
                            <h3>Main artist</h3>
                        </div>
                        <div class="follow">follow</div>
                    </div>
                    <div class="credit_desc" style="padding-bottom: 20px;">
                        <div class="name">
                            <h3>Zachz Winner</h3>
                            <h3>Main artist</h3>
                        </div>
                        <div class="follow">follow</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="song_bottom">
        <div class="desc_song">
            <div class="img">
                <img src="aset/doodle.png" alt="">
            </div>
            <div class="desc">
                <h3>DOODLE</h3>
                <p>Zachz Winner</p>
            </div>
        </div>
        <div class="song_control">
            <div class="btn_content">
                <i class="fa-solid fa-backward"></i>
                <i class="fa-solid fa-circle-play" style="font-size: 30px;"></i>
                <i class="fa-solid fa-forward"></i>
            </div>
            <div class="line">
                <p>00.58</p>
                <span>
                    <div class="active"></div>
                </span>
                <p>03.50</p>
            </div>
        </div>
        <div class="ctrl_song">
            <i class="fa-regular fa-circle-play" id="song_btn"></i>
            <i class="fa-solid fa-list"></i>
            <i class="fa-solid fa-computer"></i>
            <i class="fa-solid fa-volume-off"></i>
            <div class="line"></div>
            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
        </div>
    </footer>

    <script>
        function goBack() {
            window.history.back();
        }

        function goForward() {
            window.history.forward();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>