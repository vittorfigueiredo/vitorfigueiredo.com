/**
 *  Light Switch @version v0.1.4
 */

(function () {
  let lightSwitch = document.getElementById('lightSwitch');
  if (!lightSwitch) {
    return;
  }

  /**
   * @function darkmode
   * @summary: changes the theme to 'dark mode' and save settings to local stroage.
   * Basically, replaces/toggles every CSS class that has '-light' class with '-dark'
   */
  function darkMode() {
    document.querySelectorAll('.bg-light').forEach((element) => {
      element.className = element.className.replace(/-light/g, '-dark');
    });

    document.querySelectorAll('.bg-dark').forEach((element) => {
      if (element.id === 'cb-cookie-banner') {
        element.className = element.className.replace(/bg-dark/g, 'bg-light');
        element.childNodes[3].className = element.childNodes[3].className.replace(/btn-light/g, 'btn-dark');
      }
    });

    document.querySelectorAll('.text-light').forEach((element) => {
      if (element.id === 'cb-cookie-banner') {
        element.className = element.className.replace(/text-light/, 'text-dark');
      } else {
        element.className = element.className.replace(/text-dark/, 'text-light');
      }
    });

    document.querySelectorAll('.text-dark').forEach((element) => {
      if (element.id !== 'cb-cookie-banner') {
        element.className = element.className.replace(/text-dark/, 'text-light');
      }
    });

    document.body.classList.add('bg-dark');

    if (document.body.classList.contains('text-dark')) {
      document.body.classList.replace('text-dark', 'text-light');
    } else {
      document.body.classList.add('text-light');
    }

    // Tables
    const tables = document.querySelectorAll('table');

    for (let i = 0; i < tables.length; i++) {
      // add table-dark class to each table
      tables[i].classList.add('table-dark');
    }

    // set light switch input to true
    if (!lightSwitch.checked) {
      lightSwitch.checked = true;
    }
    localStorage.setItem('lightSwitch', 'dark');
  }

  /**
   * @function lightmode
   * @summary: changes the theme to 'light mode' and save settings to local stroage.
   */
  function lightMode() {
    document.querySelectorAll('.bg-dark').forEach((element) => {
      if (element.id !== 'cb-cookie-banner') {
        element.className = element.className.replace(/-dark/, '-light');
      }
    });

    document.querySelectorAll('.bg-light').forEach((element) => {
      if (element.id === 'cb-cookie-banner') {
        element.className = element.className.replace(/bg-light/, 'bg-dark');
        element.childNodes[3].className = element.childNodes[3].className.replace(/btn-dark/g, 'btn-light');
      }
    });

    document.querySelectorAll('.text-light').forEach((element) => {
      console.log(element)
      element.className = element.className.replace(/text-light/, 'text-dark');
    });

    document.querySelectorAll('.text-dark').forEach((element) => {
      if (element.id === 'cb-cookie-banner') {
        element.className = element.className.replace(/text-dark/, 'text-light');
      }
    });

    document.body.classList.add('bg-light');

    if (document.body.classList.contains('text-light')) {
      document.body.classList.replace('text-light', 'text-dark');
    } else {
      document.body.classList.add('text-dark');
    }

    // Tables
    const tables = document.querySelectorAll('table');

    for (let i = 0; i < tables.length; i++) {
      if (tables[i].classList.contains('table-dark')) {
        tables[i].classList.remove('table-dark');
      }
    }

    if (lightSwitch.checked) {
      lightSwitch.checked = false;
    }
    localStorage.setItem('lightSwitch', 'light');
  }

  /**
   * @function onToggleMode
   * @summary: the event handler attached to the switch. calling @darkMode or @lightMode depending on the checked state.
   */
  function onToggleMode() {
    if (lightSwitch.checked) {
      darkMode();
    } else {
      lightMode();
    }
  }

  /**
   * @function getSystemDefaultTheme
   * @summary: get system default theme by media query
   */
  function getSystemDefaultTheme() {
    const darkThemeMq = window.matchMedia('(prefers-color-scheme: dark)');

    if (darkThemeMq.matches) {
      return 'dark';
    }
    return 'light';
  }

  function setup() {
    let settings = localStorage.getItem('lightSwitch');

    if (settings == null) {
      settings = getSystemDefaultTheme();
    }

    if (settings == 'dark') {
      lightSwitch.checked = true;
    }

    lightSwitch.addEventListener('change', onToggleMode);
    onToggleMode();
  }

  setup();
})();
