
const modal = document.querySelector('.modal');
const tub = document.querySelectorAll('.tub');
const content = document.querySelectorAll('.modal_content');
const closeBtn = document.querySelector('.closeBtn');
const logOpen = document.querySelector('.log');


closeBtn.addEventListener('click', ()=>{
    modal.classList.remove('active')
})
logOpen.addEventListener('click', ()=>{
    modal.classList.add('active')
})

tub.forEach(el =>{
    el.addEventListener('click', (event)=>{
        currentTub = el;
        let id = currentTub.getAttribute('data-tab');
        currentContent = document.querySelector(id)

        content.forEach(e =>{
            e.classList.remove('active');
        })

        event.preventDefault();
        currentContent.classList.add('active')
    })
})

