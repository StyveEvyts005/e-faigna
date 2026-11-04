const numero = document.querySelector(".num");
const montant = document.querySelector(".mont");

const numeroValue = numero.id;
const montantValue = montant.id;

const payType = document.querySelector(".payType");
console.log(payType.id)
let linkToCall;

if(payType.id === "orange"){
    linkToCall = `tel:#144#1*1*${numeroValue}*${numeroValue}*${montantValue}*1#`;
} else if(payType.id === "mvola"){
    linkToCall = `tel:#111#1*1*${numeroValue}*${montantValue}*1#`;
} else{
    linkToCall = `tel:*436*2*1*${numeroValue}*${montantValue}*1#`;
}

const btnPay = document.querySelector("#payCall");

btnPay.addEventListener("click",()=>{
    location.href = linkToCall;
})