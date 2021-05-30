let market = document.getElementById('marketdetail');
market = market.children;
document.getElementById('tools').style.transform = 'translateY(' + -1 * document.getElementById('tools').clientHeight / 2 + 'px' + ')';
for (let index = 0; index < market.length; index++) {
    market[index].firstElementChild.style.width = market[index].clientWidth + 'px';
}