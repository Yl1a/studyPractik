const counter = (counterEls) => {

    const counters = document.querySelectorAll(counterEls);
    console.log('sdjfsdf')
    counters.forEach((counter) => {

        const minus = counter.querySelector('.minus-el');
        const plus = counter.querySelector('.plus-el');
        const output = counter.querySelector('.output-el');
        const input = counter.querySelector('#count');
        console.log(minus);

        if (!minus || !plus || !counter) return false;

        minus.addEventListener('click', (event) => {
            event.preventDefault()
            if (parseInt(output.textContent) > 1 && parseInt(input.value) > 1) {
                input.value--
                output.textContent--
            }
        })

        plus.addEventListener('click', (event) => {
            event.preventDefault()
            if (parseInt(output.textContent) < 10 && parseInt(input.value) < 10) {
                input.value++
                output.textContent++
            }
        })

    })

}