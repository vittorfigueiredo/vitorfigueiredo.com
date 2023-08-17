async function getLatestArticles() {
  const response = await fetch('/api/article/all', {
    method: 'GET',
    headers: {
      'Authorization': localStorage.getItem('accessToken')
    }
  });

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
    const latestArticlesLinksP = document.createElement('p');
    latestArticlesLinksA.href = `article?name=${article.content}`;
    latestArticlesLinksA.innerText = article.title;
    latestArticlesLinksA.setAttribute('class', 'text-secondary');
    latestArticlesLinksA.setAttribute('aria-label', `Read more about ${article.title}`);

    latestArticlesLinksDiv.appendChild(latestArticlesLinksUl);
    latestArticlesLinksUl.appendChild(latestArticlesLinksLi);
    latestArticlesLinksLi.appendChild(latestArticlesLinksA);

    const dateDiff = new Date() - new Date(article.createdAt);

    if ((dateDiff / (1000 * 60 * 60 * 24)) <= 7) {
      latestArticlesLinksP.innerText = '*NEW*';
      latestArticlesLinksP.style.fontWeight = 'bold';
      latestArticlesLinksP.setAttribute('class', 'text-success');
    }

    latestArticlesLinksLi.appendChild(latestArticlesLinksP)
  }

  return;
}

async function getPopularArticles() {
  const response = await fetch('/api/article/popular', {
    method: 'GET',
    headers: {
      'Authorization': localStorage.getItem('accessToken')
    }
  });

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
    const popularArticlesLinksP = document.createElement('p');
    popularArticlesLinksA.href = `article?name=${article.content}`;
    popularArticlesLinksA.innerText = article.title;
    popularArticlesLinksA.setAttribute('class', 'text-secondary');
    popularArticlesLinksA.setAttribute('aria-label', `Read more about ${article.title}`);

    popularArticlesLinksDiv.appendChild(popularArticlesLinksUl);
    popularArticlesLinksUl.appendChild(popularArticlesLinksLi);
    popularArticlesLinksLi.appendChild(popularArticlesLinksA);

    const dateDiff = new Date() - new Date(article.createdAt);

    if ((dateDiff / (1000 * 60 * 60 * 24)) <= 7) {
      popularArticlesLinksP.innerText = '*NEW*';
      popularArticlesLinksP.style.fontWeight = 'bold';
      popularArticlesLinksP.setAttribute('class', 'text-success');
    }

    popularArticlesLinksLi.appendChild(popularArticlesLinksP);
  }

  return;
}

getLatestArticles();
getPopularArticles();
