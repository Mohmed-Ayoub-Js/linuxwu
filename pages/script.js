const htmlelement = document.getElementById('hal');
htmlelement.onclick = () => {
    let helyou = prompt('اقترح حل');
    const inputhal = document.getElementById('input');
    inputhal.value = helyou;
}