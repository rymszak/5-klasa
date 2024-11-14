const dzis=document.querySelector("#dzis")
const display=document.querySelector("#display")
dzis.addEventListener('click',function(evt){
    //obliczanie daty z dziś
    evt.preventDefault()
    const wyd=document.querySelector("#wydarzenie")
    if(wyd.value=="wybierz egzamin"){
        display.innerHTML="wybierz egzamin"
    }
    else{
    const dzien = 24 * 60 * 60 * 1000;
    const start = Date.now()

    const end = new Date(wyd.value)
    let days = Math.round(Math.abs((start - end) / dzien));
    days+=1
    display.innerHTML=`dni do egzaminu <br>${days}`
}
})
const hid=document.querySelector(".hidden")
const kal=document.querySelector("#kal")
kal.addEventListener(`click`, function(ev){
    ev.preventDefault()
    hid.classList.toggle('hidden');
})

const callendar=document.querySelector("#dataa")
callendar.addEventListener(`change`,function(ev){
        const wyd=document.querySelector("#wydarzenie")
    hid.classList.toggle('hidden');
    if(wyd.value=="wybierz egzamin"){
        display.innerHTML="wybierz egzamin"
    }
    else{
    const dzien = 24 * 60 * 60 * 1000;
    const start = new Date(callendar.value)-1
    const end = new Date(wyd.value)
    const days = Math.round(Math.abs((start - end) / dzien))
    display.innerHTML=`dni do egzaminu <br>${days}`
    }
})
