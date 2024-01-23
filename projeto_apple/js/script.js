











const itemloja = document.getElementById("idloja")
const divloja = document.getElementById("iddivloja")
const btnLupaMenu = document.getElementById("btnLupamenu")
const containerArea = document.getElementById("containerArea")
const suporte = document.getElementById("suportemenu")
const acessorio = document.getElementById("acessoriomenu")
const entreterimento = document.getElementById("entreterimentomenu")
const tv = document.getElementById("Tvmenu")
const air = document.getElementById("Airmenu")
const watch = document.getElementById("Watchmenu")
const iPad = document.getElementById("iPadmenu")
const mac = document.getElementById("macmenu")
const loja = document.getElementById("lojamenu")

itemloja.addEventListener("mouseover", function(){
    divloja = divloja.style.display = "block"
})

itemloja.addEventListener("mouseout", function(){
    divloja = divloja.style.display = "none"
})

btnLupaMenu.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

containerArea.addEventListener("mouseover",function(){
    containerArea.style.filter="blur(0px)"
})

suporte.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

acessorio.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

entreterimento.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

tv.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

air.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

watch.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

iPad.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

mac.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})

loja.addEventListener("click",function(){
    containerArea.style.filter="blur(10px)"
})