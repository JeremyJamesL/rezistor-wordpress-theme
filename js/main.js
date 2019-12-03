//GLOBAL Variables

const docBody = document.getElementsByTagName("BODY")[0];
// const videoControls = document.querySelector(".video--full-width__controls");


// TOUCH SUPPORT //
/* Check to see if device has pointer device. Add class to body of 'touch', else add 'non-touch'.
for managing hover pseudo classes on touch devices */

if(window.matchMedia("(pointer:coarse)").matches) {
  docBody.classList.add("touch");
} else{
  docBody.classList.add("non-touch");
}



// MAIN MENU TOGGLING

const menu = document.querySelector('.menu-primary-menu-container');
const homepageHeader = document.querySelector('.header-homepage');
const homepageHeaderCont = document.querySelector('.header-homepage__content');
const menuToggle = document.querySelector('.main-nav__toggle');
const menuToggleBar = document.querySelectorAll('.main-nav__toggle-bar');
const htmlObj = document.getElementsByTagName("HTML")[0];
const getStarted = document.querySelector('.main-nav__started');

menuToggle.addEventListener('click', () => {

    //Hide 'get started' text
    getStarted.classList.toggle('main-nav__started--hide');


    //Add --open class to open
    menu.classList.toggle('menu-primary-menu-container--open');

    //Close homepage content
    if(homepageHeaderCont) {
    homepageHeaderCont.classList.toggle('header-homepage__content--close');
    }

    //Loop through toggle bars and add --transform class
    for(let i = 0; i < menuToggleBar.length; i++) {
        menuToggleBar[i].classList.toggle('main-nav__toggle-bar--transform');
    } 

    //Hide HTML scroll when menu open
    if(menu.classList.contains('menu-primary-menu-container--open')) {
        htmlObj.style.overflowY = 'hidden';
    } else {
        htmlObj.style.overflowY = 'auto';
    }
})



// HOMEPAGE VIDEO //




if(document.querySelector('.video--full-width')) {

    window.onload = function() {

        // Video
        const video = document.querySelector('.video--full-width');

      
        // Buttons
        const playButton = document.getElementById("play-pause");
        const muteButton = document.getElementById("mute");
        const volumeBar = document.getElementById("volume-bar");
        const fullScreen = document.getElementById("expand");
        const fullScreenIcon = document.querySelector(".fa-expand");
        const vidCont =  document.querySelector(".header-homepage__video-container");

        playButton.addEventListener("click", function() {
            if (video.paused == true) {
              // Play the video
              video.play();
          
              // Update the button text to 'Pause'
              playButton.innerHTML = '<i class="fas fa-pause"></i>';

              //If the page is a single project, remove project details on play
              if(docBody.classList.contains("single-work")) {
                document.querySelector(".single-work-header__content").style.opacity = 0;
              }

            } else {
              // Pause the video
              video.pause();
          
              // Update the button text to 'Play'
              playButton.innerHTML = '<i class="fas fa-play"></i>';

              if(docBody.classList.contains("single-work")) {
                document.querySelector(".single-work-header__content").style.opacity = 1;
              }

            }
          });


        //Event listener for the fullscreen button
        fullScreen.addEventListener("click", function() {

            //Change icon
            if(fullScreenIcon.classList.contains("fa-expand")) {
              fullScreenIcon.classList.remove("fa-expand");
              fullScreenIcon.classList.add("fa-compress");
            }  else if(fullScreenIcon.classList.contains("fa-compress")) {
              fullScreenIcon.classList.remove("fa-compress");
              fullScreenIcon.classList.add("fa-expand");
            }


            //Open fullscreen
            if (vidCont.requestFullscreen) {
              vidCont.requestFullscreen();
            } else if (vidCont.mozRequestFullScreen) { /* Firefox */
              vidCont.mozRequestFullScreen();
            } else if (vidCont.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
              vidCont.webkitRequestFullscreen();
            } else if (vidCont.msRequestFullscreen) { /* IE/Edge */
              vidCont.msRequestFullscreen();
            }   
              
            //Close fullscreen
            if(document.exitFullscreen) {
              document.exitFullscreen();
            }
            else if(document.mozcancelFullScreen) {
              document.mozcancelFullScreen();
            } 
            else if(document.webkitExitFullscreen) {
              document.webkitExitFullscreen();
            }
          
          
        });
      
    
          // Event listener for the mute button
        muteButton.addEventListener("click", function() {
            if (video.muted == false) {
            // Mute the video
            video.muted = true;

            // Update the button text
            muteButton.innerHTML = '<i class="fas fa-volume-mute"></i>';
            } else {
            // Unmute the video
            video.muted = false;

            // Update the button text
            muteButton.innerHTML = '<i class="fas fa-volume-up"></i>';
            }
    });

            // Event listener for the volume bar
            volumeBar.addEventListener("change", function() {
            // Update the video volume
            video.volume = volumeBar.value;

        });

      } 
} 
