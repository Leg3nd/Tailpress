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