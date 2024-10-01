const lef=document.querySelector("#left")
const rig=document.querySelector("#right")
const dis=document.querySelector("#dis")
let i=1
console.log(i)
lef.addEventListener(`click`, function(){
    if(i==1)
    {i=7
        dis.src=`img${i}.jpg`
    }else{
        i=i-1
    dis.src=`img${i}.jpg`}
    console.log(i)
})

rig.addEventListener('click', function(){
    if(i==7){
     i=1
     dis.src=`img${i}.jpg`
    }else{
    i++
    dis.src=`img${i}.jpg`}
    console.log(i)
})