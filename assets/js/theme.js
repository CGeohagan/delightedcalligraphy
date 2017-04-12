jQuery(document).ready(function($){
// Script goes here

	/* ************************************************
 	  Scripts for access navigation and toggle button
 	************************************************ */

 	// Select the header, navigation button, navigation section, and navigation list
 	const header = document.querySelector('.header');
    const accessToggleButton = document.querySelector('.access__toggle');
    const accessNav = document.querySelector('.access');
    const accessNavList = document.querySelector('.access__list');

 	// When you click on the toggle button, toggle the active classes
 	accessToggleButton.addEventListener('click', function() {
 		header.classList.toggle('is-header-active');
 		accessToggleButton.classList.toggle('is-toggle-active');
 		accessNav.classList.toggle('is-access-active');
 		accessNavList.classList.toggle('is-access-list-active');
 	});

});