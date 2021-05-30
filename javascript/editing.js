let option = document.getElementsByClassName('blog');
// console.log(option);

option[0].addEventListener('click', () => {
    option[1].style.display = "flex";
});

let para = document.getElementById('add');
let write = document.getElementById('write');
let read = document.getElementById('read');
let image = document.getElementById('image');
let imageupload = document.getElementById('imageupload')
    // let upload = document.getElementById('upload');
let original = document.querySelector('form input');

let header = document.getElementById('header');
let headersub = document.getElementById('headersub');

let subject = document.getElementById('subject');
let subjectsub = document.getElementById('subjectsub');
console.log(iterate);
let i = 0;




para.addEventListener('click', () => {
    read.value += '<para>' + write.value + '</para>';
    write.value = '';
});

headersub.addEventListener('click', () => {
    read.value += '<heads>' + header.value + '</heads>';
    header.value = '';
});

subjectsub.addEventListener('click', () => {
    read.value += '<topic>' + subject.value + '</topic>';
    subject.value = '';
});

imageupload.addEventListener('click', () => {

    i = image.files.length - 1;
    if (iterate < 0) { return; };

    read.value += '<image>' + user + '[' + iterate + ']' + '[' + i + ']' + '.png</image>';
    i++;
    // for (let index = 0; index < upload.files.length; index++) {}

})