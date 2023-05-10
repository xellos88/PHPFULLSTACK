
// const url = "https://picsum.photos/v2/list?page=2&limit=5";
// https://picsum.photos/v2/list?page=1&limit=5
// https://picsum.photos/v2/list?page=3&limit=5



// fetch(url)
// .then(res => {return res.json()})
// .then(data => makeList(data))
// .cath(console.log);

function capi() {
    const uip = document.getElementById("uip");
    const url = uip.value;

    fetch(url)
        .then(res => res.json())
        .then(data => makeList(data))
        .catch(error => console.log(error));
}

function makeList(data){
    const div = document.querySelector('div');
    div.innerHTML = '';

    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        div.appendChild(tagImg);
    });
}