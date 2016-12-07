/**
 * Created by Андрей on 30.10.2016.
 */

var reportBtn = document.getElementById('reportBtn'),
    reportForm = document.getElementById('reportForm'),
    backdrop = document.getElementById('backdrop'),
    reportClose = document.getElementById('reportClose');

reportBtn.onclick = function() {
    showModal();
};
backdrop.onclick = function() {
    hideModal();
};
reportClose.onclick = function() {
    hideModal();
};

function hideModal() {
    reportForm.style.display = 'none';
    backdrop.style.display = 'none';
}

function showModal() {
    reportForm.style.display = 'block';
    backdrop.style.display = 'block';
}
