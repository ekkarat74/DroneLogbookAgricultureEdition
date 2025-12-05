const mobileNavSidebar = document.querySelector('.mobile-links');
const readMore = document.querySelector('.resource .read-more');
const cardContent = document.querySelector('.resource .card-more');

function toggleMobileNav(icon) {
  if (icon.classList.contains('clicked')) {
    icon.classList.remove('clicked');
    mobileNavSidebar.classList.remove('clicked');
  } else {
    icon.classList += ' clicked ';
    mobileNavSidebar.classList += ' clicked ';
  }
}

function toggleExpandCard(el) {
  const parent = el.parentNode.parentNode.parentNode;

  if (parent.classList.contains('expanded')) {
    parent.classList.remove('expanded');
    readMore.innerHTML = 'Read More';
    cardContent.style.display = 'none';
  } else {
    parent.classList += ' expanded ';
    readMore.innerHTML = 'Close';
    cardContent.style.display = 'block';
  }
}
