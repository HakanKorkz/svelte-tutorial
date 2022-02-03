const HeaderClick = event => {
    const Head = document.querySelector('header')
    const Logo = document.querySelector('.logo')
    const Search = document.querySelector('.search')
    const MobilMenu = document.querySelector('.mobil-menu')
    const Nav = document.querySelector('nav')
    const button = event.target
    if (Head.offsetHeight === 0) {
        Head.classList.remove('up')
        Head.classList.add('down')
        button.innerText = 'Küçült'
    } else {
        Head.classList.add('up')
        Head.classList.remove('down')
        button.innerText = 'Büyüt'
    }


}

export default HeaderClick