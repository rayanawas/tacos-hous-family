let editor = Document.querySelector('textarea');
let button = Document.querySelector(GetElementById('share'));

button.addEventlistener('click' ,() => {
editor.select();
alert('copié!');
});
