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
    });
      
    news.addEventListener('mouseleave', () => {
        button.classList.remove('button-active');
        buttonText.classList.remove('button-text-active');
        img.src = imgSrc;
    });
});