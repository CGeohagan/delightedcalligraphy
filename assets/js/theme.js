jQuery(document).ready(function(e){const c=document.querySelector(".header"),s=document.querySelector(".access__toggle"),t=document.querySelector(".access"),i=document.querySelector(".access__list");s.addEventListener("click",function(){c.classList.toggle("is-header-active"),s.classList.toggle("is-toggle-active"),t.classList.toggle("is-access-active"),i.classList.toggle("is-access-list-active")})});