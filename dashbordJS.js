let form =  document.querySelector('form'),
nom = form.nom,
prenom = form.prenom,
rdv = form.date,
message = form.description;

let patient = [];






form.addEventListener('submit',e=>{
    e.preventDefault();

    // patient.push(nom.value+' '+prenom.value);
    // patient.push(rdv.value);
    // patient.push(message.value);

    if(nom.value.length && prenom.value.length && rdv.value.length && message.value.length ){  
        buildTable(nom.value,prenom.value,rdv.value,message.value);
        form.reset();
    };
    


});
function buildTable(nom,prenom,rdv,message){
    let tableau  = document.querySelector('#tableau');
        let row = `<tr class="row">
            <td><input type=" text" value=" ${nom+" "+prenom}" readonly="readonly" id="input"></td>
            <td><input type=" text" value="${rdv}" readonly="readonly" id="input"></td>
            <td><input type=" text" value="${message}" readonly="readonly" id="input" style="width:500px"></td>
            <td class="edit-part">
                <div class="supp"></div>
                <div class="edit"></div>
            </td>
        </tr>`
        tableau.innerHTML += row; 
}

let pat  = document.querySelector('table');
// console.log(pat);
pat.addEventListener('click',e=>{
    // console.log(e.target);
    if(e.target.classList.contains('supp')){
        let v1 = e.target.parentNode;
        let v2 = v1.parentNode;
        v2.remove();
    }
    if(e.target.classList.contains('edit')){
        let v1 = e.target.parentNode;
        let v2 = v1.parentNode;
        let inputs = v2.children;
        for(let i = 0 ; i < 3 ; i++){
            let input = inputs[i].firstChild;
            console.log(input);
            input.toggleAttribute("readonly");
        }

    }
});

