const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// Function Headers
function hoverAddElement() {
    $('#part-dropdown').classList.add('show');
} // Add class 
function hoverRemoveElement() {
    $('#part-dropdown').classList.remove('show');
} // Remove class

// Handle Header Topic 
const topicHeader = $('.item-topic');
topicHeader.addEventListener('mouseenter', () => hoverAddElement()); // On hover
topicHeader.addEventListener('mouseleave', () => hoverRemoveElement()); // No hover


function addShowHeaderSerach() {
    $('.container-search').classList.add('show');
}

// Handle Show Search ... 
const btnHeaderSearch = $('.search-click');
btnHeaderSearch.addEventListener('click', () => addShowHeaderSerach()); // Toggle


function slideRemoveShowHeaderSearch() {
    $('.container-search').classList.remove('show');
}

const btnRemoveShowHeaderSearch = $('#remove-pattern');
btnRemoveShowHeaderSearch.addEventListener('click', () => slideRemoveShowHeaderSearch()); // Remove

// Background color white navbar when scroll 
const headerElement = $('.wrapper-header');
const elementsToChangeColor = $$('header a, header .search-click');

window.addEventListener('scroll', () => {
    let scrollPosition = window.scrollY;
    if (scrollPosition >= 439) {
        headerElement.style.background = 'rgba(255,255,255,255)';
        elementsToChangeColor.forEach(text => {
            text.style.color = 'rgba(3,3,3)'
        });
        $('.search-click').style.background = '#3333331f';
        $('.line').style.border = '2px solid #ff6000';
    } else {
        headerElement.style.background = ''; 
        elementsToChangeColor.forEach(text => {
            text.style.color = ''
        });
        $('.search-click').style.background = '';
        $('.line').style.border = '';
    }
});
