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
        setTimeout(() => {
            Logo.classList.remove('hidden')
            Search.classList.remove('hidden')
            Nav.classList.remove('hidden')
            MobilMenu.classList.remove('hidden')

        }, 800)


    } else {
        Head.classList.add('up')
        Head.classList.remove('down')
        button.innerText = 'Büyüt'
        setTimeout(() => {
            Logo.classList.add('hidden')
            Search.classList.add('hidden')
            Nav.classList.add('hidden')
            MobilMenu.classList.add('hidden')
        }, 600)

    }


}

export default HeaderClick