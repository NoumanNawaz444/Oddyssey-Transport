let ham = document.getElementById('ham')
let main_navigation = document.getElementById('main_navigation')
let close_ham = document.getElementById('close_ham')

ham.addEventListener('click' , navAya)

function navAya(){
    main_navigation.classList.add('navAyaGya')
}

close_ham.addEventListener('click' , navGya)

function navGya(){
    main_navigation.classList.remove('navAyaGya')
}