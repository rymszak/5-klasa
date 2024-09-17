const btn=document.getElementById(`btn`)
const display=document.getElementById(`display`)
btn.addEventListener(`click`, function(evt){
    evt.preventDefault()
    const peeling=document.getElementById(`peeling`)
    const masaz=document.getElementById(`masaz`)
    const makijaz=document.getElementById(`makijaz`)
    const maska=document.getElementById(`maska`)
   suma=0
    if(peeling.checked){
        suma=suma+45
    }
    if(masaz.checked){
        suma=suma+20
    }
    if(maska.checked){
        suma=suma+30
    }
    if(makijaz.checked){
        suma=suma+50
    }
    display.innerHTML=`Cena zabiegów: ${suma}`
})