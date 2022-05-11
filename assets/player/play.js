
function playFile(){

  const audio = document.getElementById('audioFile');
  const playBtn = document.getElementById('playButton');
  const musicContainer = document.getElementById('player');

  const isPlaying = musicContainer.classList.contains('playButton');

  if (isPlaying) {
      musicContainer.classList.remove('playButton');
      playBtn.querySelector('i.bi').classList.remove('bi-pause');
      playBtn.querySelector('i.bi').classList.add('bi-play');
      audio.pause();
  } else {
      musicContainer.classList.add('playButton');
      playBtn.querySelector('i.bi').classList.remove('bi-play');
      playBtn.querySelector('i.bi').classList.add('bi-pause');
      audio.play();
  }
}

