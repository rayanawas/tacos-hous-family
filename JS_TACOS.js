let cart = [];
let listCartHTML = document.querySelector('.listCart');
let body = document.querySelector('.body');
let listProductHTML = document.querySelector('.main_container'); 
let iconCart = document.querySelector('.icon-cart');
let iconCartSpan = document.querySelector('.icon-cart span');
let closeCart = document.querySelector('.close');

iconCart.addEventListener('click', () => { 
body.classList.toggle('showCart');
}) 


function adCart(element) {
let item = {
name: element.getAttribute('data-name'), 
price: element.getAttribute('data-price'), 
ido: element.getAttribute('data-ido'),
image: element.getAttribute('data-image')
};
let positionClick = event.target;
if(positionClick.classList.contains('addCart')){
    let id_product = positionClick.id;
    addToCart(item.ido,item.name,item.price,item.image);
}

} 

const addToCart = (product_id,product_name,product_price,product_image) => { 
let positionThisProductInCart = cart.findIndex((value) => value.product_id == product_id);
if(cart.length <= 0){
  cart = [{
      product_id: product_id,
      quantity: 1,
      name: product_name,
      price: product_price, 
      image:product_image
  }];
}else if(positionThisProductInCart < 0){
  cart.push({
      product_id: product_id,
      quantity: 1,
      name: product_name,
      price: product_price, 
      image:product_image         
  });  
}else{
  cart[positionThisProductInCart].quantity = cart[positionThisProductInCart].quantity + 1;
}
addCartToHTML();
addCartToMemory();
}
const addCartToMemory = () => {
localStorage.setItem('cart', JSON.stringify(cart)); 
}
function addCartToHTML () {     
let totalQuantity = 0;  
let newItem= "";
let ppp= 0;
for (let i=0; i< cart.length; i++) { 
      totalQuantity = totalQuantity +  cart[i].quantity;
      ppp = ppp +  cart[i].price * cart[i].quantity;
  
      newItem += `
      
       <tr id="${cart[i].product_id}">
          <td><img id="listimg" src="${cart[i].image}"></td>
          <td><pre id="totale">${cart[i].name}
    ${cart[i].price * cart[i].quantity}DA</pre></td>
          <td class="quantity">
              <span onclick="changeQuantityCart(${cart[i].product_id},'minus')" style="cursor:pointer;" class="minus"><</span>
              <span>${cart[i].quantity}</span>
              <span onclick="changeQuantityCart(${cart[i].product_id},'plus')" style="cursor:pointer;" class="plus">></span>
          </td>
      </tr>
      `;
   
  } 
  
document.getElementById("listCart").innerHTML = newItem;
document.getElementById("span").innerHTML = totalQuantity;
document.getElementById("pp").innerHTML = "Totale:    " + ppp + " DA";
}  

const changeQuantityCart = (product_id, type) => {
let positionItemInCart = cart.findIndex((value) => value.product_id == product_id);
if(positionItemInCart >= 0){
  let info = cart[positionItemInCart];
  switch (type) {
      case 'plus':
          cart[positionItemInCart].quantity = cart[positionItemInCart].quantity + 1;
          break;
  
      default:
          let changeQuantity = cart[positionItemInCart].quantity - 1;
          if (changeQuantity > 0) {
              cart[positionItemInCart].quantity = changeQuantity;
          }else{
              cart.splice(positionItemInCart, 1);
          }
          break;
  }
}
addCartToHTML();
addCartToMemory();
}



const initApp = () => {
  // get data cart from memory
  if(localStorage.getItem('cart')){
      cart = JSON.parse(localStorage.getItem('cart'));
     addCartToHTML();
    console.log(cart); 
     
  }

}
initApp(); 



function tt(){
  const form = document.getElementById("form");

  form.addEventListener("submit", (e) => {
    e.preventDefault();
  
    const nameField = form.elements["client"];
    const client = nameField.value;
  
    const numeroField = form.elements["numero"];
    const number = numeroField.value;
    
    const addressField = form.elements["addr"];
    const address = addressField.value; 
 

   const user = { client, address, number };
    cart.push(user);

    console.log('cart:',cart);

 
    $.ajax({
    type: 'POST',
    url: 'MK.php',
    data: {array: JSON.stringify(cart)},
    success: function(data){
      console.log("Data inserted successfully"); 
  
    }
  });
    });

    alert("Votre commande est envoyer, merci de nous avoire choisi ")

    //suprimer localstorage
    localStorage.removeItem('cart');

    location.reload(true);
}



function next(){ 
  var inpF =document.getElementById('form');
  var table =document.getElementById('listCart');
  var btt =document.getElementById('btt');
  var bttn = document.getElementById('bttn'); 

  table.style.display='none';  
  inpF.style.display='block';
  btt.style.display='none'; 
  bttn.style.display='grid'; 
  
  
}


function func(a,b){
    var div1 = document.getElementById(a);   
    var div2 = document.getElementById(b);  
    if (div1.style.display=='none'){
     div1.style.display='grid';
     div2.style.display='none';
   }
   else{
    div1.style.display='none';
     div2.style.display='none';
   }
  }


function closse(){ 
  var inpF =document.getElementById('form');
  var table =document.getElementById('listCart');
  var btt =document.getElementById('btt');
  var bttn = document.getElementById('bttn'); 

 

  if(inpF.style.display=='block'){
 table.style.display='block';  
  inpF.style.display='none';
  btt.style.display='grid'; 
  bttn.style.display='grid'; 
  event.preventDefault();
  }else{
      body.classList.toggle('showCart'); 
  event.preventDefault();
  }

 
}

