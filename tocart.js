const divFod=document.querySelector('.cardbox');
      const btn=document.querySelector('#prix');

     btn.addEventListener('click',
      function(event){
        event.preventDefault();
      console.log(btn.textContent); 
       });


       function addToCard(element, price) {
        const cardItems = document.getElementById('card-items');
        const totalCost = document.getElementById('total-cost');
        const currentTotal = parseFloat(totalCost.textContent.substring(1)) || 0;
    
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${element}</td>
            <td>$${price}</td>
        `;
    
        cardItems.appendChild(newRow);
        totalCost.textContent = `$${currentTotal + price}`;
    }




    //<button onclick="addToCard(this.getAttribute('data-element'), this.getAttribute('data-price'))" data-element="Element 1" data-price="10">Add to Card</button>
//<button onclick="addToCard(this.getAttribute('data-element'), this.getAttribute('data-price

$date=date('d/m/Y');
 $sql="SELECT * FROM commande WHERE status='0'";
 $result=mysqli_query($con,$sql);
 while($donnees= mysqli_fetch_array($result))			
     {
      $n=$donnees['n'];    
      $n=$n+1;
     }
     
     
     $array = json_decode($_POST['array']);  


  foreach  ($array as $item) {
  $name = $item['name']; 
  $price = $item['price']; 
  $qnt=$item['quantity'];
  @$com=$com.'<br>'.$name.'('.$qnt.')'.'/'.$price ;
     }  

  

   
   
     if((isset( $_POST['array']))   ){  
 $client = $_POST['client'];   
  $numero =$_POST['numero'];  
  $addr = $_POST['addr'];  
    $sql="INSERT INTO `commande` VALUES('$n','$com','$price','$client','$addr','$numero','$date','0')"; 
    $result=mysqli_query($con,$sql);
     }
              
             


     $.ajax({
      type: 'POST',
      url: 'index.php',
      data: {array: JSON.stringify(cart)},
      success: function(data){
        console.log("Data inserted successfully"); 
        console.log(cart); 
      }
    });
 
     
       
?>