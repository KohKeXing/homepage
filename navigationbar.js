/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.querySelector('.menu');
    const languageBtn = document.querySelector('.language');
    const languageDropdown = document.querySelector('.language-dropdown .dropdown-content');
    const languageSpan = languageBtn.querySelector('span');

    // 菜单按钮点击事件
    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    }

    // 语言按钮点击事件
    if (languageBtn) {
        languageBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            languageDropdown.style.display = languageDropdown.style.display === 'block' ? 'none' : 'block';
        });
    }

    // 语言选择事件
    if (languageDropdown) {
        languageDropdown.querySelectorAll('a').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                languageSpan.textContent = e.target.textContent;
                languageDropdown.style.display = 'none';
            });
        });
    }

    // 点击页面其他地方关闭语言下拉菜单
    document.addEventListener('click', () => {
        if (languageDropdown) {
            languageDropdown.style.display = 'none';
        }
    });

    // 防止Feng Shui链接点击事件冒泡到语言选择
    document.querySelectorAll('.feng-shui-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });
});


