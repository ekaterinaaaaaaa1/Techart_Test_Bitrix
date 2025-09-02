document.querySelectorAll('.news').forEach(news => {
    const title = news.querySelector('.news-title');
    const button = news.querySelector('.button');
    const buttonText = button.querySelector('.button-text');

    const img = news.querySelector('.button-arrow');

    const imgSrc = img.getAttribute('src');
    const activeImgSrc = img.getAttribute('data-active');
  
    news.addEventListener('mouseenter', () => {
        button.classList.add('button-active');
        buttonText.classList.add('button-text-active');
        img.src = activeImgSrc;

        title.classList.add('title-active');
    });
      
    news.addEventListener('mouseleave', () => {
        button.classList.remove('button-active');
        buttonText.classList.remove('button-text-active');
        img.src = imgSrc;

        title.classList.remove('title-active');
    });
});

document.querySelectorAll('.page-switch-button').forEach(button => {
    button.addEventListener('mouseenter', () => {
        button.classList.add('button-active');
        button.classList.add('button-text-active');
    })

    button.addEventListener('mouseleave', () => {
        button.classList.remove('button-active');
        button.classList.remove('button-text-active');
    });
})

const pageSwitchButtonArrow = document.querySelector('.page-switch-button-arrow');
const img = pageSwitchButtonArrow.querySelector('.page-switch-button-arrow-img');
const imgSrc = img.getAttribute('src');
const activeImgSrc = img.getAttribute('data-active');

pageSwitchButtonArrow.addEventListener('mouseenter', () => {
    img.src = activeImgSrc;
})

pageSwitchButtonArrow.addEventListener('mouseleave', () => {
    img.src = imgSrc;
});