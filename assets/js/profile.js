
const profileTub = document.querySelectorAll('.p_tub');
const profileContent = document.querySelectorAll('.content');


profileTub.forEach(el => {
    el.addEventListener('click', (event) => {
        currentProfileTub = el;
        let idProfile = currentProfileTub.getAttribute('data-tab');
        let currentProfileContent = document.querySelector(idProfile)

        profileContent.forEach(e => {
            e.classList.remove('active');
        })


        currentProfileContent.classList.add('active')
        event.preventDefault();
    })
})
/* const counter = (counterEls) => {
    console.log('sdjfsdf')

    const counters = document.querySelectorAll(counterEls);

    counters.forEach((counter) => { */

const minus = document.querySelector('.minus-el');
const plus = document.querySelector('.plus-el');
const output = document.querySelector('.output-el');
const input = document.querySelector('#count');
console.log(minus);

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

/* })

} */