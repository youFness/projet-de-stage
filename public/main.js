const logoMainMenu = document.querySelector(".fa-caret-down");
const logoProduit = document.querySelector(".fa-product-hunt");
const logoClient = document.querySelector(".fa-male");
const logoEdition = document.querySelector(".fa-i-cursor");
const logoHome = document.querySelector(".fa-home");
const logoImage = document.querySelector(".logoimage");
const p1 = document.querySelector(".p1");
const p2 = document.querySelector(".p2");
const p3 = document.querySelector(".p3");
const p4 = document.querySelector(".p4");
const button = document.querySelector(".button");
const test = document.querySelector(".test");

// const NameInput = document.querySelector(".NameInput");
// const NdT = document.querySelector(".NdT");
// const D = document.querySelector(".D");
// const arrayName = [];
// const arrayNumber = [];
// const arrayDate = [];

if(location.href === "http://localhost/projet%20de%20stage/public/after-connexion.php" || location.href ==="http://localhost/projet%20de%20stage/public/connexion.php"){
    test.classList.toggle('disabled');
    logoImage.classList.toggle('disabled');
    // console.log(logoImage);
    // console.log(test);
}
// if(location.href === "http://localhost/projet%20de%20stage/public/connexion.php"){
//     test.classList.toggle('disabled');
//     logoImage.classList.toggle('disabled');
//     // console.log(logoImage);
//     // console.log(test);
// }

const passIcon = document.querySelector(".fa-eye");
const password = document.querySelector("#password");

// console.log(passIcon);

const clientName = document.querySelector("#clientname");

const creeAcc = document.querySelector(".creeacc p");

addEventListener('click',(e)=>{
    if(e.target === passIcon){
        const type = password.getAttribute('type') === 'text' ? 'password' : 'text'
        password.setAttribute('type', type);
        // its not working
        e.target.classList.toggle('fa-eye-slash')
        // 'fa-eye-slash'
    }
    
    if(e.target === logoMainMenu || e.target === p4){
        location.replace('main-menu.php');

    }else if (e.target === logoProduit ||e.target === p1){
        location.replace('produit.php');
        // for(let i = 0 ; i < arrayName.length; i++){
        //     const option =document.createElement('option');
        //     option.innerHTML = arrayName[i];
        //    clientName.appendChild(option);
        // }

    }else if (e.target === logoClient || e.target === p2){
        location.replace('client.php');
        
    }else if (e.target === logoEdition || e.target === p3){
        location.replace('edition.php');
        
    }else if (e.target === logoHome || e.target === logoImage) {
         location.replace('index.html');
        
    }
    if (e.target === creeAcc) {
        location.replace('connexion.php');
    }
    // if(e.target === button){
    //     arrayName.push(NameInput.value);
    //     arrayNumber.push(NdT.value);
    //     arrayDate.push(D.value);
    //     console.log(NameInput.value,NdT.value,D.value);
    // }
})