

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