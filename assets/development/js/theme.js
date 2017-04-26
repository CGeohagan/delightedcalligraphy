jQuery(document).ready(function($){
// Script goes here

	/* ************************************************
 	  Scripts for access navigation and toggle button
 	************************************************ */

	// Select the header, navigation button, navigation section, and navigation list
	var header = document.querySelector('.header');
	var accessToggleButton = document.querySelector('.access__toggle');
	var accessNav = document.querySelector('.access');
	var accessNavList = document.querySelector('.access__list');

	// When you click on the toggle button, toggle the active classes
	accessToggleButton.addEventListener('click', function() {
	header.classList.toggle('is-header-active');
		accessToggleButton.classList.toggle('is-toggle-active');
		accessNav.classList.toggle('is-access-active');
		accessNavList.classList.toggle('is-access-list-active');
	});

});