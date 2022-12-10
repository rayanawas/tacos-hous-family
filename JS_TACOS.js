/*function myFunction(){
    var editor = document.getElementById ('textarea');
    var button = document.getElementById('share');
    
    editor.select();
    editor.setSelectionRange(0,99999);
    navigator.clipboard.writeText(textarea.value);
    alert('copié!');
}*/


function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copié " + copyText.value);
}

