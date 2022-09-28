import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
 
window.Alpine = Alpine
Alpine.plugin(intersect)

Alpine.store('waButton', {
    show: false
})
 
Alpine.start()

// Navigation toggle
// window.addEventListener('load', function () {
//       let main_navigation = document.querySelector('#primary-menu');
//       document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
//             e.preventDefault();
//             main_navigation.classList.toggle('hidden');
//       });
// });