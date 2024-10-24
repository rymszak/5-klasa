const btn=document.querySelector('#btn')
btn.addEventListener('click', function(ev){
    ev.preventDefault()
    const napis=document.querySelectorAll('section p')
    const tekst=Array()
    napis.forEach(element => {
        tekst.push(element.innerText)

    });
const display=document.querySelector('#display')
console.log(napis)
console.log(tekst)
let liczba=0

const zd1=tekst[0].split(' ')
liczba=0
const zd2=tekst[1].split(' ')
const zd3=tekst[2].split(' ')

zd1.forEach(element => {
    if(element.endsWith(".") || element.endsWith("?") || element.endsWith("!")){
        liczba++
    }
});
zd2.forEach(element => {
    
    if(element.endsWith(".") || element.endsWith("?") || element.endsWith("!")){
        liczba++
    }
});
zd3.forEach(element => {
    
    if(element.endsWith(".") || element.endsWith("?") || element.endsWith("!")){
        liczba++
    }
});

liczba_o=0
zd1.forEach(element => {
    if(element.includes("o")){
   liczba_o++     
    }
})    
zd2.forEach(element => {
    if(element.includes("o")){
   liczba_o++     
    }
})
zd3.forEach(element => {
    if(element.includes("o")){
   liczba_o++     
    }
})
display.innerHTML=`liczba zdań to ${liczba}`   
display.innerHTML+=`<br>liczba "o" to ${liczba_o}`

})