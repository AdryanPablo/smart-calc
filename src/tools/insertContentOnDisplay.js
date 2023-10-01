window.addEventListener('load', () => {

    const calculatorButtons = document.querySelectorAll('.calculator-button')

    calculatorButtons.forEach((button) => {
        button.addEventListener('click', (event) => {

            insertContentOnDisplay(event.target.textContent)

        })
    })
})

export function insertContentOnDisplay(content) {

    const calculatorDisplay = document.querySelector('.calculator-display')
    const expression = document.querySelector('.expression')

    if (content !== 'Enter') {

        calculatorDisplay.textContent += content
        expression.value += content
    
    }
}