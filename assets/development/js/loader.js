jQuery(document).ready(function($){
// Script goes here

/* ************************************************
     Scripts for loader functionality
************************************************ */

const loader = document.querySelector('.loader');

function fadeLoader() {
	loader.classList.add('is-loader-hidden');
setTimeout(hideLoader, 200);
}

function hideLoader() {
  loader.classList.add('is-loader-gone');
}

setTimeout(fadeLoader, 1000);

});