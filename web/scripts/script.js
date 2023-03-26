function changeLinc(){
    let a = selectRole.value;
    switch (a){
        case "1":
            link.innerHTML = "<a href='?r=head'>Войти</a>";
        break;
        case "2":
            link.innerHTML = "<a href='?r=tutor'>Войти</a>";
        break;
        case "3":
            link.innerHTML = "<a href='?r=supervisor'>Войти</a>";
        break;
    }
}

// selectRole.addEventListener('change', changeLinc);

// let programAddWin = document.getElementsByClassName("creature");
programAdd.onclick = () => programAddWin.classList.add("show");
closeWin.onclick =() => programAddWin.classList.remove("show");