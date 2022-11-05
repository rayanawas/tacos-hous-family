function myFunction(){
    var editor = document.getElementById ('textarea');
    var button = document.getElementById('share');
    
    editor.select();
    editor.setSelectionRange(0,99999);
    navigator.clipboard.writeText(textarea.value);
    alert('copié!');
}

