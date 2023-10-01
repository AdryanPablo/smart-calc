window.addEventListener('keypress', (event) => {

    if (event.key === 'Enter') {

        console.log('Apertou Enter');

        const calculatorPanel = document.querySelector('.calculator-panel')

        calculatorPanel.submit()
    
    }
})