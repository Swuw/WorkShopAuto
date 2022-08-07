function openAddNewCarForm() {
    let button = document.querySelector('.add-car-new');
    let form = document.querySelector('.add-car-form');
    if(button){
        button.addEventListener('click', function (e) {
            if(form.classList.contains('hide')){
               form.classList.remove('hide')
            } else {
               form.classList.add('hide')
            }
        })
    }
}

document.addEventListener('DOMContentLoaded', () => {
    openAddNewCarForm();
});
