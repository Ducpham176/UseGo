const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const imageProducts = $$('.poster-product');
document.addEventListener('DOMContentLoaded', function() {
    imageProducts.forEach(element => {
        element.classList.add('loadFinished')
    });
});


// Set status element for storage
const contIcons = $('.cont-icons');

const btnHideContIcons = $('.hide-icons-taskbar');
const btnShowContIcons = $('.show-icon-taskbar');
// 

function handleStorageConIcons() {
    const pathValue = onExistStorageConIcons.split(' ');
    const statusContIcons = pathValue[0];
    const statusBtnShowContIcons = pathValue[1];

    contIcons.classList.add(statusContIcons);
    btnShowContIcons.classList.add(statusBtnShowContIcons);
}

const onExistStorageConIcons = localStorage.getItem('hideConIcons-saved');
if(onExistStorageConIcons) {
    handleStorageConIcons();
}

// Hide, show class => cont-icons

function savedStorage(storageName, storageContent) {
    localStorage.setItem(storageName, storageContent);
}

// Storage Status
function storageHideConIcons() {
    savedStorage('hideConIcons-saved', 'hide show');
}

function hideConIcons() {
    contIcons.classList.add('hide');
    btnShowContIcons.classList.add('show');
    storageHideConIcons();
}
// Hide taskbar
btnHideContIcons.addEventListener('click', () => hideConIcons());

// Show taskbar
function renderShowConIcons() {
    contIcons.classList.remove('hide');
    btnShowContIcons.classList.remove('show');
}

function showConIcons(nameStorage) {
    if(nameStorage) {
        localStorage.removeItem(nameStorage);
        renderShowConIcons();
    }
}

btnShowContIcons.addEventListener('click', () => showConIcons('hideConIcons-saved'));