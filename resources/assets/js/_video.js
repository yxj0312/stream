import videojs from 'video.js';

var video = videojs('my-video');
video.ready(function () {
    setTimeout(() => {
        this.play();
    }, 3000);
});