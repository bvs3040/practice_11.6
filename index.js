const textField=document.querySelector("#lorem");

textField.addEventListener("mouseover",  () => { 
    textField.style.color = "red";
});

textField.addEventListener("mouseout",  () => { 
    textField.style.color = "#585858";
});
