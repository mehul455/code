<?php
include 'config.php';
if($login == 0){
    echo " <meta http-equiv='refresh' content='0; url=login.php'>";

}else{
$u_id = $_COOKIE['uid'];
$getinfo = mysqli_query($conn,"SELECT * FROM musicapp WHERE  u_id= $u_id");
$arr = mysqli_fetch_array($getinfo);
?>

<span>Name : <?php echo $arr['u_name'];?></span>
<span>Email : <?php echo $arr['u_email'];?></span>
<span>User ID : <?php echo $arr['u_id'];?></span>
<a style="text-decoration:none; margin: 20px; color:#48dbfb;" href="logout.php">Logout</a>
<a style="text-decoration:none;  margin: 20px; boreder-radius: 20%; border:1px solid #48dbfb; color:#48dbfb;" href="review.php">Comments</a>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d3c2c42342.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        

*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}

html{
    --bg: #f5f6f7;
    --color-text: #9c9c9c;
    --banner: #333333;
    --color-shadow: -4px -2px 4px 0px #ffffff,
    4px 2px 6px 0 #dfe4ea;
    --color-inset-shadow: inset -2px -2px 6px rgba(255,255,255,0.8),
                        inset 2px 2px 6px rgba(0 ,0,0,0.1);
    
}
html[data-theme='dark']{
    --bg: #121212;
    --color-text: #e2e2e2;
    --banner: #fefefe;
    --color-shadow: -3px -3px 10px rgba(255,255,255,0.05),
    3px 3px 15px rgba(0,0,0,0.5);
    --color-inset-shadow: inset -2px -2px 6px rgba(255,255,255,0.01),
                        inset 2px 2px 6px rgba(0 ,0,0,0.8);
    
}

body{
    background: var(--bg);
    color: var(--color-text);
}

a{
    text-decoration: none;
}

.player{
    width: 80%;
    min-height: 550px;
    max-width: 300px;
    padding: 3rem 1.25rem;
    margin: 2rem auto;
    background: var(--bg);
    box-shadow: var(--color-shadow);
    border-radius: 15px;
    position: relative;
}

.heder{
    height: 40px;
    display: grid;
    grid-template-columns: 1fr 3fr 1fr;
    align-items: center;
    justify-items: center;
}

.heder > .button{
    width: 2rem;
    height: 2rem;
    display: grid;
    align-items: center;
    justify-items: center;
    background: var(--bg);
    box-shadow: var(--color-shadow);
    border-radius: 5px;
}






.image{
    display: block;
    width: 175px;
    height: 175px;
    object-fit: cover;
    margin: 1rem auto;
    border-radius: 50%;
    border: 10px solid #dcdfe2;
    box-shadow: var(--color-shadow);
   

}

@keyframes animatedgradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

.information{
    margin: 1.5rem 0;
    text-align: center;

}

.information h1{
    color: var(--black);
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.information p{
    font-size: 1.15rem;
    color: var(--color-text);

}

.progress{
    padding: 10px 0;
}

.progress-time{
    padding: 3px 5px;
    color: var(--color-text);
    font-weight: bold;
    display: flex;
    justify-content: space-between;
}

.progress-time > p{
    font-size: 0.65rem;
}

.buttons{
    margin: 2rem 0;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.button{
    color: var(--color-text);
    border-radius: 20%;
    margin: 0 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: var(--color-shadow);
}

.button-sm{
    width: 2rem;
    height: 2rem;
    opacity: 0.75;
}
.button-md{
    width: 2.5rem;
    height: 2.5rem;
    opacity: 0.85;
}
.button-lg{
    width: 3.25rem;
    height: 3.25rem;
  
}

.bar{
    width: 50%;
    height: 2px;
    margin: auto;
    background: var(--color-text);
    border-radius: 25px;
    position: absolute;
    transform: translate(-50% , -50%) ;
    left: 50%;
    bottom: 1rem;
}

.playpause.active{
    box-shadow: var(--color-inset-shadow);
}

.loop.active,
.shuffle:active,
.prev:active,
.next:active{
    box-shadow: var(--color-inset-shadow);
}

.fa-play{
    display: block;
}
.fa-pause{
    display: none;
}
.playpause.active .fa-play{
    display: none;
}
.playpause.active .fa-pause{
    display: block;
}

.seekslider{
    width: 100px;
    height: 3px !important;
    -webkit-appearance: none;
    border-radius: 10px;
    background: var(--color-text);
    z-index: 3;
    outline: none;
    position: fixed;
    margin-left: 82px;
    margin-top: 10px;
}


.seekslider::-webkit-slider-thumb{
    -webkit-appearance: none;
    width: 10px;
    height: 10px;
    background: var(--color-text);
    border-radius: 50%;
    cursor: pointer;
    outline: none;
    transform: scale(1);
   
    
}
.seekslider:active::-webkit-slider-thumb{
    transform: scale(1.2);
}
label{
    cursor: pointer;
}

input[type="checkbox"]{
    -webkit-appearance: none;
}

    </style>
    <title>Music App</title>
</head>
<body>
    <main class="player">
        <div class="heder">
            <a href="#" class="button">
                <i class="fas fa-bars"></i>

                  <!-- <span class="sr-only">Menu Bar</span> -->

            </a>
            <p>Now Playing</p>
            <a href="#" class="button">
                <label>

                    <input type="checkbox" name="theme">
                    <!-- <span class="btn sr-only">Search</span> -->
                    <i class="fas fa-moon"></i>

                </label>
            </a>
        </div>



        <img src="images/3.jpeg" alt="album" id="image" class="image">
        <div class="information">
            <h1 id="playlist_status"></h1>
            <p id="playlist_artist"></p>
        </div>




        <div class="progress">
            <div class="progress-time">
                <span id="currenttimetext" class="left">00:00</span>
                <span id="durationtimetext" class="right">00:00</span>
            </div>
            <div class="progress-bar">
                <input type="range" name="" id="seekslider" class="seekslider" min="0" max="100" value="0" step="1">
            </div>
        </div>




        <ul class="buttons">
            <span id="random" class="shuffle button button-sm">
                <i class="fas fa-random fa-sm"></i>
            </span>
            <span id="prevbtn" class="prev button button-md">
                <i class="fas fa-step-backward"></i>
            </span>
            <span id="playpausebtn" class="playpause button button-lg">
                <i class="fas fa-play fa-lg"></i>
                <i class="fas fa-pause fa-lg"></i>
            </span>
            <span id="nextbtn" class="next button button-md">
                <i class="fas fa-step-forward"></i>
            </span>
            <span id="repeat" class="loop button button-sm">
                <i class="fas fa-circle-notch fa-sm"></i>
            </span>
        </ul>



        <div class="bar"></div>
    </main>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    

var audio , playbtn , title , poster , artists , seekslider , seeking=false , seekto, currenttimetext , durationtimetext , playlist_status , dir , playlist , ext , agent , playlists_artists , repeat , random;


dir="songs/";
playlist=["Alan Walker & Ava Max - Alone","Alan_Walker_feat._Noah_Cyrus_-_All_Falls_Down","Alec Benjamin - Let Me Down Slowly","Alec Benjamin _ If We Have Each Other","Billie Eilish - bad guy (PatrickReza Remix)","Billie Eilish - lovely ft. Khalid","Calvin Harris - Outside (Slowed Tiktok Remix) There s a power in what you do ","Chord Overstreet - Hold On","Doug Clark - to the souls that leave us too soon","Ed Sheeran & Justin Bieber - I Don t Care [Official]","JONY, HammAli & Navai - Без тебя я не я","Lela Lela Lela le Rauf & faik [Tik Tok song]","Lewis Capaldi - Someone You Loved","Love_Yourself","Rauf & Faik - я люблю тебя давно (Official Audio)","Sean Paul Temperature on Screen ","Twilight Soundtrack - Bellas Lullaby","Witt Lowry - Into Your Arms (feat. Ava Max)"]

title=["Alone","All Falls Down","Let Me Down Slowly","If We Have Each Other","Bad Guy","Lovely","Outside","Hold On","Doug Clark","I Don't Care","HammAli Без тебя я не я","Lela Lela Lela le","Someone You Loved","Love Yourself","Rauf & Faik - я люблю тебя давно","Sean Paul Temperature on Screen","Twilight Soundtrack","Into Your Arms"]

poster=["images/3.jpeg","images/1.jpeg","images/2.jpeg","images/4.jpeg","images/5.jpeg","images/6.jpeg","images/7.jpeg","images/8.jpeg","images/9.jpeg","images/10.jpeg","images/11.jpeg","images/12.jpeg","images/14.jpeg","images/15.jpeg","images/16.jpeg","images/17.jpeg","images/18.jpeg","images/19.jpeg"]

artists=["Alan Walker & Ava","Alan Walker & Noah Cyrus","Alec Benjamin","Alec Benjamin","Billie Eilish","Billie Eilish","Calvin Harris","Chord Overstreet","Doug Clark","Ed Sheeran & Justin Bieber","JONY, HammAli & Navai","Rauf & faik","Lewis Capaldi","Justin Bieber","Rauf & faik","Sean Paul"," Bellas Lullaby","Witt Lowry"]


playlist_index = 0;

ext =".mp3"
agent = navigator.userAgent.toLowerCase();
if(agent.indexOf('firefox') != -1 || agent.indexOf('opera') != -1){
    ext=".ogg";
}






playbtn = document.getElementById("playpausebtn");
nextbtn = document.getElementById("nextbtn");
prevbtn = document.getElementById("prevbtn");
seekslider = document.getElementById("seekslider");
currenttimetext = document.getElementById("currenttimetext");
durationtimetext = document.getElementById("durationtimetext");
playlist_status = document.getElementById("playlist_status");
playlists_artists = document.getElementById("playlist_artist");
repeat = document.getElementById("repeat");
randomSong = document.getElementById("random");





audio = new Audio();
audio.src = dir+playlist[0]+ext;
audio.loop = false;






playlist_status.innerHTML = title[playlist_index];
playlists_artists.innerHTML = artists[playlist_index];









playbtn.addEventListener("click",playPause);
nextbtn.addEventListener("click",nextSong);
prevbtn.addEventListener("click",prevSong);
seekslider.addEventListener("mousedown" , function(event){ seeking=true; seek(event);});
seekslider.addEventListener("mousemove",function(event){ seek(event);});

seekslider.addEventListener("mouseup", function(){seeking=false;});

audio.addEventListener("timeupdate",function(){seektimeupdate();});
audio.addEventListener("ended",function(){
    switchTrack();
});


repeat.addEventListener("click",loop);
randomSong.addEventListener("click",random);




//functionssssssssssssssssss







function fetchMusicDetail(){
    $("#image").attr("src",poster[playlist_index]);

    playlist_status.innerHTML = title[playlist_index];
    playlist_artist.innerHTML = artists[playlist_index];

    audio.src = dir+playlist[playlist_index]+ext;
    audio.play();
}








function getRandomNumber(min , max){
    let step1 = max - min + 1;
    let step2 = Math.random() * step1;
    let result = Math.floor(step2) + min;
    return result;
}











function random(){
    let randomIndex = getRandomNumber(0 , playlist.length-1);
    playlist_index = randomIndex;
    fetchMusicDetail();
    document.querySelector(".playpause").classList.add("active");
}











function loop(){
    if(audio.loop){
        audio.loop = false;
        document.querySelector(".loop").classList.remove("active");
    }else{
        audio.loop = true;
        document.querySelector(".loop").classList.add("active");
    }
}

















function nextSong(){
    document.querySelector(".playpause").classList.add("active");
    playlist_index++;
    if(playlist_index > playlist.length - 1){
        playlist_index = 0;
    }
    fetchMusicDetail();
}





function prevSong(){
    document.querySelector(".playpause").classList.add("active");
    playlist_index--;
    if(playlist_index < 0){
        playlist_index = playlist.length - 1;
    }
    fetchMusicDetail();
}




function playPause(){
    if(audio.paused){
        audio.play();
        document.querySelector(".playpause").classList.add("active");
    }else{
        audio.pause();
        document.querySelector(".playpause").classList.remove("active");
    }
}









function switchTrack(){
    if(playlist_index == (playlist.length - 1)){
        playlist_index = 0;
    }else{
        playlist_index++;
    }
    fetchMusicDetail();
}










function seek(event){
    if(audio.duration == 0){
        null
    }else{
        if(seeking){
            seekslider.value = event.clientX - seekslider.offsetLeft;
            seekto = audio.duration * (seekslider.value / 100);
            audio.currentTime = seekto;
        }
    }
}








function seektimeupdate(){
    if(audio.duration){
        var nt = audio.currentTime * (100 / audio.duration);
        seekslider.value = nt;
        var curmins = Math.floor(audio.currentTime / 60); 
        var cursecs = Math.floor(audio.currentTime - curmins * 60); 
        var durmins = Math.floor(audio.duration / 60); 
        var dursecs = Math.floor(audio.duration - durmins * 60); 
        if(cursecs < 10){ cursecs = "0"+cursecs; }
        if(dursecs < 10){ dursecs = "0"+dursecs; }
        if(curmins < 10){ curmins = "0"+curmins; }
        if(durmins < 10){ durmins = "0"+durmins; }
        currenttimetext.innerHTML = curmins+":"+cursecs;
        durationtimetext.innerHTML = durmins+":"+dursecs;
    }else{
        currenttimetext.innerHTML = "00"+":"+"00";
        durationtimetext.innerHTML = "00"+":"+"00";
    }
}










let checkbox = document.querySelector('input[name=theme]');
checkbox.addEventListener('change',function(){
    if(this.checked){
        document.documentElement.setAttribute('data-theme','dark');
    }else{
        document.documentElement.setAttribute('data-theme','light');
    }
})
</script>





</body>
</html>


<?php

}


?>
<!-- 

// $con = mysqli_connect('localhost','root');
//     if($con){
//         echo "connection successful";
//     }else{
//         echo "no connection";

//     }

// mysqli_select_db($con, 'schooldatabase');

// $name = $_POST['name'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $msg = $_POST['msg'];

// $query = "insert into dharmit (name, email, contact, msg)
// value ('$name', '$email', '$contact', '$msg')";

// echo "$query";

// mysqli_query($con,$query);
  -->

