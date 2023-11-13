const buttonAdd = document.getElementById("btn_add");
const buttonEdit = document.querySelectorAll(".btn_edit");
const platformModal = document.getElementById("platform_modal");

const inputName = document.getElementById("name");
const inputUrl = document.getElementById("url");
const inputUser = document.getElementById("user");

buttonAdd.addEventListener("click", () => {
    platformModal.showModal();
});

buttonEdit.forEach((button) => {
    button.addEventListener("click", (e) => {
        const modalId = button.getAttribute("data-id");
        const modal = document.getElementById(modalId);
        modal.showModal();
    });
});
