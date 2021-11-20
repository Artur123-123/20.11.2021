fetch('https://jsonplaceholder.typicode.com/posts')
    .then(res => res.json())
    .then(res => {
        const app = document.getElementById('app')
        res.forEach(element => {
            const p = document.createElement('p')
            p.innerText = element.title
            app.appendChild(p)
            p.setAttribute('class', 'color')
            const body = document.createElement('body')
        })
    })