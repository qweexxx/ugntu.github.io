const buttons = document.querySelectorAll(".modal_btn");
const modals = document.querySelectorAll("div.modal");

for (let index = 0; index < buttons.length; index++) {
    buttons[index].addEventListener('click', ()=>{ 
        let id = buttons[index].id;
        for (let i = 0; i < modals.length; i++) {
            if (modals[i].id == "for_" + id) {
                modals[i].classList.add("active");
            }
        }
    })
}

const buttonsClose = document.querySelectorAll(".modal_close");
for (let index = 0; index < buttonsClose.length; index++) {
    buttonsClose[index].addEventListener('click', ()=>{
        for (let i = 0; i < modals.length; i++) {
            modals[i].classList.remove("active");
        }
    })
}