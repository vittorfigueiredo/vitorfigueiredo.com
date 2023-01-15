function scrollUp() {
  window.scrollTo(0, document.body.scrollTop);
};

function getLatestArticles() {
  for (let i = 0; i < 3; i++) {
    const latestArticlesLinksDiv = document.getElementById('latest-articles-links');

    const latestArticlesLinksUl = document.createElement('ul');
    const latestArticlesLinksLi = document.createElement('li');
    const latestArticlesLinksA = document.createElement('a');
    latestArticlesLinksA.href = '/article?name=2023-01-15-introducao-a-sintaxe-basica-do-php';
    latestArticlesLinksA.innerText = 'Introdução à sintaxe básica do PHP';

    latestArticlesLinksDiv.appendChild(latestArticlesLinksUl);
    latestArticlesLinksUl.appendChild(latestArticlesLinksLi);
    latestArticlesLinksLi.appendChild(latestArticlesLinksA);
  }
}

function getPopularArticles() {
  for (let i = 0; i < 11; i++) {
    const popularArticlesLinksDiv = document.getElementById('popular-articles-links');

    const popularArticlesLinksUl = document.createElement('ul');
    const popularArticlesLinksLi = document.createElement('li');
    const popularArticlesLinksA = document.createElement('a');
    popularArticlesLinksA.href = '/article?name=2023-01-15-introducao-a-sintaxe-basica-do-php';
    popularArticlesLinksA.innerText = 'Introdução à sintaxe básica do PHP';

    popularArticlesLinksDiv.appendChild(popularArticlesLinksUl);
    popularArticlesLinksUl.appendChild(popularArticlesLinksLi);
    popularArticlesLinksLi.appendChild(popularArticlesLinksA);
  }
}


getLatestArticles();
getPopularArticles();
