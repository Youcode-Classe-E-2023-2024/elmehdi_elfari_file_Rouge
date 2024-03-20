const openPopupBtn = document.getElementById('openPopup');
const popupContainer = document.getElementById('popupContainer');
const popupBackground = document.getElementById('popupBackground');

openPopupBtn.addEventListener('click', function() {
    popupContainer.classList.toggle('hidden');
    popupBackground.classList.toggle('hidden');
});
