export default function headerApp() {
    const $mobileToggleBtn = document.querySelector('.bars')
    const $navMenu = document.querySelector('.nav-menu')

    $mobileToggleBtn.addEventListener('click',toggleNavMenu)

    function toggleNavMenu({currentTarget}) {
        const mobileBtnNavClass = currentTarget.dataset.class
        const NavMenuClass = 'active'
        
        $mobileToggleBtn.classList.toggle(mobileBtnNavClass)
        $navMenu.classList.toggle(NavMenuClass)
    }
}