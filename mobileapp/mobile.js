let content = document.getElementsByClassName('content');

let option = document.querySelectorAll('.choice div');

option[0].style.borderBottom = '3px solid #fa6501';
content[1].style.display = 'none';

option.forEach((object, index) => {
    object.addEventListener('click', (e) => {
        option[index].style.borderBottom = '3px solid #fa6501';
        option[(index + 1) % 2].style.borderBottom = 'none';
        content[index].style.display = 'flex';
        content[(index + 1) % 2].style.display = 'none';
    })
})