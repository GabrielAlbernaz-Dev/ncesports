export default function themeApp() {
    const $toggleBtn = document.querySelector('.toggle-button')
    const $html = document.documentElement

    $toggleBtn.addEventListener('change',toggleAppTheme)

    function toggleAppTheme() {
        $html.classList.toggle('light')
    }
}