function confirmation(e){
    if (confirm('esta seguro que desea eliminar este registro?')){
        return true;
    }else{
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".table__item__link");

for(let i = 0; i < linkDelete.length; i++){
linkDelete[i].addEventListener('click', confirmation)
}