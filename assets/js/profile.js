const profileTub = document.querySelectorAll('.p_tub');
const profileContent = document.querySelectorAll('.content');


profileTub.forEach(el =>{
    el.addEventListener('click', (event)=>{
        currentProfileTub = el;
        let idProfile = currentProfileTub.getAttribute('data-tab');
        let currentProfileContent = document.querySelector(idProfile)

        profileContent.forEach(e =>{
            e.classList.remove('active');
        })

        event.preventDefault();
        currentProfileContent.classList.add('active')
    })
})