// Navigation toggle
// window.addEventListener('load', function () {
//       let main_navigation = document.querySelector('#primary-menu');
//       document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
//             e.preventDefault();
//             main_navigation.classList.toggle('hidden');
//       });
// });

import 'flowbite';

// Navigation toggle 2
window.addEventListener('load', function () {
      const btn = document.getElementById('menu-btn')
      const nav = document.getElementById('menu')

      btn.addEventListener('click', () => {
      btn.classList.toggle('open')
      nav.classList.toggle('flex')
      nav.classList.toggle('hidden')
      })
})

// Reading time as per https://dev.to/michaelburrows/calculate-the-estimated-reading-time-of-an-article-using-javascript-2k9l
function readingTime() {
      const text = document.getElementById("article").innerText;
      const wpm = 225;
      const words = text.trim().split(/\s+/).length;
      const time = Math.ceil(words / wpm);
      document.getElementById("time").innerText = time;
    }
    readingTime();