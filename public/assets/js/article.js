async function getArticleByName() {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const name = urlParams.get('name');

  const response = await fetch('/article/name?' + new URLSearchParams({name}), { method: 'GET' });

  const article = await response.json();

  const articleTitle = document.querySelectorAll('.title');
  articleTitle[0].children[0].textContent = article.title;
}

getArticleByName();
