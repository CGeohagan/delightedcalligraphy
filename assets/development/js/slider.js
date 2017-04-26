jQuery(document).ready(function($){
// Script goes here

	/* ************************************************
	Scripts for styles slider page
	************************************************ */

	/* Add infunctionality to automatically update the width */

	// Select all of the style list items
	var sliderList = document.querySelector('.slider__list');
	var sliderListLi = document.querySelectorAll('.slider__list li');

	// Determine the number of list items using the length property
	var listNum = sliderListLi.length;
	var lastSliderNum = -100 * (listNum - 1);

	// Set the list width to listNum * 100% view width
	sliderList.style.width = listNum * 100 + 'vw';

	// Select the previous and next buttons to navigate slider
	var prevButton = document.querySelector('.prev-button');
	var nextButton = document.querySelector('.next-button');

	// Create function for setting transformX value when slider moves
	function setTransform(transformX) {
		sliderList.style.transform = 'translateX(' + transformX + 'vw)';
	}

	// Create functions for adding and removing function class 
	function addActiveSlider() {
		currentSliderLi.classList.add('is-slider-active');
	}

	function removeActiveSlider() {
		currentSliderLi.classList.remove('is-slider-active');
	}

	// Set the currentSliderLi to the first list item and add the active class	
	var firstSliderLi = sliderList.firstElementChild;
	var lastSliderLi = sliderList.lastElementChild;
	var currentSliderLi = firstSliderLi;
	firstSliderLi.classList.add('is-slider-active');

	// Set the transform value for the list at 0 when the page loads
	// This will set the page on the first slider
	var transformXValue = 0;
	setTransform(transformXValue);	

	// When you click on the next button
	nextButton.addEventListener('click', function() {
		if (currentSliderLi === lastSliderLi) {
			// If the current list item is the last one
			// 1) Move active class to first list item
			removeActiveSlider();
			currentSliderLi = firstSliderLi;
			addActiveSlider();
			// 2) Set the transformX value to beginning of the list
			transformXValue = 0;
			setTransform(transformXValue);
		} else {
			// If the current list item is not the last one
			// 1) Move active class to next list item
			removeActiveSlider();
			currentSliderLi = currentSliderLi.nextElementSibling;
			addActiveSlider();
			// 2) Subtract 100vw from the transformx Value
			transformXValue = transformXValue - 100;
			setTransform(transformXValue);
		}
	});

	// When you click on the previous button
	prevButton.addEventListener('click', function() {
		if (currentSliderLi === firstSliderLi) {
			// If the current list item is the first one
			// 1) Move active class to last list item
			removeActiveSlider();
			currentSliderLi = lastSliderLi;
			addActiveSlider();
			// 2) Set the transformX value to end of the list
			transformXValue = lastSliderNum;
			setTransform(transformXValue);
		} else {
			// If the current list item is not the first one
			// 1) Move active class to previous list item
			removeActiveSlider();
			currentSliderLi = currentSliderLi.previousElementSibling;
			addActiveSlider();
			// 2) Add 100vw from the transformx Value
			transformXValue = transformXValue + 100;
			setTransform(transformXValue);
		}
	});

});