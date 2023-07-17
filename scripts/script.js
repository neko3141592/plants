'use strict'

let $doc = document;
let $header = document.getElementById('head');
let $headerList = $header.getElementsByTagName('a');

function init () {
    $header.style.backgroundColor = "#f2f2f2";
    for(const element of $headerList) {
        element.style.color = "#000";
    }
}

function headerChange (y) {
    if(y < 10) {
        $header.style.backgroundColor = "#f2f2f2";
    } else {
        $header.style.backgroundColor = `rgba(51,51,51,${y/500})`;
    }
    for(const element of $headerList) {
        if(y < 10) {
            element.style.color = "#333";
        } else {
            element.style.color = `rgba(${y},${y},${y},1)`;
        }
    }
}

init();

$doc.addEventListener('scroll' , () => {
    let y = window.scrollY;
    headerChange(y);
});