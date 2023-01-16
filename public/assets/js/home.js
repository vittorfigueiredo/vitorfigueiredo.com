async function getLatestArticles() {
  const response = await fetch('/article/all', { method: 'GET' });

  const articles = await response.json();

  const latestArticlesLinksDiv = document.getElementById('latest-articles-links');

  if (Object.keys(articles).length === 0) {
    latestArticlesLinksDiv.innerText = 'Nenhum artigo encontrado!';
    latestArticlesLinksDiv.style.fontWeight = 300;

    return;
  }

  for (let article of articles) {
    const latestArticlesLinksUl = document.createElement('ul');
    const latestArticlesLinksLi = document.createElement('li');
    const latestArticlesLinksA = document.createElement('a');
    latestArticlesLinksA.href = `article?name=${article.content}`;
    latestArticlesLinksA.innerText = article.title;

    latestArticlesLinksDiv.appendChild(latestArticlesLinksUl);
    latestArticlesLinksUl.appendChild(latestArticlesLinksLi);
    latestArticlesLinksLi.appendChild(latestArticlesLinksA);
  }

  return;
}

function getPopularArticles() {
  for (let i = 0; i < 1; i++) {
    const popularArticlesLinksDiv = document.getElementById('popular-articles-links');

    const popularArticlesLinksUl = document.createElement('ul');
    const popularArticlesLinksLi = document.createElement('li');
    // const popularArticlesLinksA = document.createElement('a');
    // popularArticlesLinksA.href = '#';
    popularArticlesLinksLi.innerText = 'Nenhum artigo encontrado!';

    popularArticlesLinksDiv.appendChild(popularArticlesLinksUl);
    popularArticlesLinksUl.appendChild(popularArticlesLinksLi);
    // popularArticlesLinksLi.appendChild(popularArticlesLinksA);
  }
}


getLatestArticles();
getPopularArticles();
