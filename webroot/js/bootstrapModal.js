
function addToModal(formName) {
    const modal = document.getElementById('bootstrapModal');

    modal.dataset.formName = formName;
}
const ok = document.getElementById('ok');

ok.addEventListener('click', function () {
    const modal = document.getElementById('bootstrapModal');

    let formName = modal.dataset.formName; // data-form-name => formName;

    if (formName) {
        document[formName].submit();
    }
    const bootstrapModal = bootstrap.Modal.getInstance(modal);
    bootstrapModal.hide();
})
