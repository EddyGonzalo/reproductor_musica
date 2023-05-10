<?php 
    require_once "./clases/Conexion.php";
    require_once "./clases/Crud.php";
    $crud = new Crud();
    $datos = $crud->songs();
    $datos1 = $crud->songs();
    //print_r($datos);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-FX9gUrTMcJYOk18+rHJTLKjZ01s1/UOpyl0C+bmKj0rwxXrOc70YsW/M0f03G2KkC1ZGv2F3I/zssxucnci9XQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Music App</title>
</head>

<body>

<header>
    <div class="menu_side">
       
        <h1>Playlist</h1>
        <div class="playlist">
            <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
            <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
        </div>
        <div class="menu_song">
                <?php 
                    $contador = 0;
                    foreach($datos as $item){
                        if($contador < 8){
                ?>
                    <li class="songItem">
                        <img src="<?php echo $item->poster;?>" alt="Alan">
                        <h5><?php echo $item->songName;?></h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="<?php echo $item->id;?>"></i>
                    </li>
                <?php 
                            $contador++;
                        } else {
                            break;
                        }
                    }
                ?>


            <!--

            <li class="songItem">
                <span>02</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
            </li>
            <li class="songItem">
                <span>06</span>
                <img src="img/1.jpg" alt="Alan">
                <h5>
                    On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
            </li> -->
        </div>
    </div>

                   

    <div class="song_side">
        <nav>
            <ul>
                <li>Discover <span></span></li>
                <li>MY LIBRARY</li>
                <li>RADIO</li>
            </ul>
            <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search Music...">
            </div>
            <div class="user">
                <img src="img/KDS CODER.png" alt="User" title="KDS CODER (Jahid Khan)" id="user-btn">
            </div>
            
        </nav>
        <div class="content">
            <h1>Alen Walker-Fade</h1>
            <p>
                You were the shadow to my light Did you feel us Another start You fade 
                <br>
                Away afraid our aim is out of sight Wanna see us Alive
            </p>
            <div class="buttons">
                <button>PLAY</button>
                <button>FOLLOW</button>
            </div>
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Popular Song</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <?php 
                    foreach($datos1 as $item){
                ?>
                <li class="songItem">
                    <div class="img_play">
                        <img src="<?php echo $item->poster;?>" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="<?php echo $item->id;?>"></i>
                    </div>
                    <h5><?php echo $item->songName; ?>
                    </h5>
                    <?php } ?>
                </li>
                <!--<li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                    </div>
                    <h5>On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>-->
            </div>
        </div>
        <div class="popular_artists">
            <div class="h4">
                <h4>Popular Artists</h4>
                <div class="btn_s">
                    <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                    <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="item">
                <li>
                    <img src="img/arjit.jpg" alt="Arjit Singh" title="Arjit Singh">
                </li>
                <li>
                    <img src="img/alan.jpg" alt="Alan Walker" title="Alan Walker">
                </li>
                <li>
                    <img src="img/atif.jpg" alt="Atif Aslam" title="Atif Aslam">
                </li>
                <li>
                    <img src="img/guru.jpg" alt="Guru RAndawa" title="Guru Randawa">
                </li>
                <li>
                    <img src="img/dhvani.jpg" alt="Dhvani" title="Dhvani">
                </li>
                <li>
                    <img src="img/Diljit_Dosanjh.jpg" alt="Diljit Dosanjh" title="Diljit Dosanjh">
                </li>
                <li>
                    <img src="img/jubin Nautiyal.jpg" alt="Jubin Nautiyal" title="Jubin Nautiyal">
                </li>
                <li>
                    <img src="img/neha.jpg" alt="Neha Kakker" title="Neha Kakker">
                </li>
                <li>
                    <img src="img/justin-bieber-lede.jpg" alt="Justin Bieber" title="Justin Bieber">
                </li>
                <li>
                    <img src="img/honey.jpg" alt="Honey Singh" title="Honey Singh">
                </li>
                <li>
                    <img src="img/akhil.jpg" alt="Akhil" title="Akhil">
                </li>
                <!-- change all img  -->
            </div>
        </div>
    </div>


    <div class="master_play">
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
        <img src="img/26th.jpg" alt="Alan" id="poster_master_play">
        <h5 id="title">Vande Mataram<br>
            <div class="subtitle">Bankim Chandra</div>
        </h5>
        <div class="icon">
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next"></i>
        </div>
        <span id="currentStart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" value="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>
        <span id="currentEnd">0:00</span>

        <div class="vol">
            <i class="bi bi-volume-down-fill" id="vol_icon"></i>
            <input type="range" id="vol" min="0" value="30" max="100">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
    </div>
</header>
<!-- Incluir los scripts de Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-3pNj/3+cd/zwVgkYu9lkzPOzeRl5A5hYdxYgkl5Zivp5A1qH+1xsUIh5rduE5jDz+H2xxEIdYUrAUBlQ1+MDlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-mz7sJmBf4d6aZU6cGkwRmJVlQH/ZD0jySZXOTrOJN3qtrEB7YpDj8LZnVAKIliJlP7VvPn2Wj7sGmyErIlJzLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="Node.js"></script>
</body>

</html>