export default function tabsApp() {
    const $tabButtons = document.querySelectorAll('[data-tab]')
    const $tabContents = document.querySelectorAll('[data-tab-content]')
    const $tabItems = [$tabButtons, $tabContents]

    $tabButtons.forEach((tab,i) => {
        tab.addEventListener('click',()=>{
            toggleTab(i)
        })
    })

    function initTabs() {
        $tabButtons[0].classList.add('active')
        $tabContents[0].classList.add('active')
    }

    window.addEventListener('load', initTabs)

    function toggleTab(i) {
        $tabItems.forEach((tabItem) => {
            tabItem.forEach((tab) => {
                tab.classList.remove('active')
            })
        })

        $tabButtons[i].classList.add('active')
        $tabContents[i].classList.add('active')

    }
}