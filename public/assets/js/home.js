async function getLatestArticles() {
  const response = await fetch('/article/all', { method: 'GET' });

  const articles = await response.json();

  const latestArticlesLinksDiv = document.getElementById('latest-articles-links');

  if (Object.keys(articles).length === 0 || response.status !== 200) {
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
    latestArticlesLinksA.setAttribute('aria-label', `Read more about ${article.title}`);

    latestArticlesLinksDiv.appendChild(latestArticlesLinksUl);
    latestArticlesLinksUl.appendChild(latestArticlesLinksLi);
    latestArticlesLinksLi.appendChild(latestArticlesLinksA);
  }

  return;
}

async function getPopularArticles() {
  const response = await fetch('/article/popular', { method: 'GET' });

  const articles = await response.json();

  const popularArticlesLinksDiv = document.getElementById('popular-articles-links');

  if (Object.keys(articles).length === 0 || response.status !== 200) {
    popularArticlesLinksDiv.innerText = 'Nenhum artigo encontrado!';
    popularArticlesLinksDiv.style.fontWeight = 300;

    return;
  }

  for (let article of articles) {
    const popularArticlesLinksUl = document.createElement('ul');
    const popularArticlesLinksLi = document.createElement('li');
    const popularArticlesLinksA = document.createElement('a');
    popularArticlesLinksA.href = `article?name=${article.content}`;
    popularArticlesLinksA.innerText = article.title;
    popularArticlesLinksA.setAttribute('aria-label', `Read more about ${article.title}`);

    popularArticlesLinksDiv.appendChild(popularArticlesLinksUl);
    popularArticlesLinksUl.appendChild(popularArticlesLinksLi);
    popularArticlesLinksLi.appendChild(popularArticlesLinksA);
  }

  return;
}

getLatestArticles();
getPopularArticles();
