const items =document.getElementById('items')
const templateCard = document.getElementById('template-card').content
const fragmento = document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', () => {
    fetchData()
})

const fetchData = async () => {
    try{
        const res =await fetch('api.json')
        const data =await res.json()
        console.log(data)
        mostrarProductos(data)
    }catch (error) {
        console.log(error)
    }
}
//---------- mostrarProductos
const mostrarProductos = data => {
    data.forEach(producto => {
        templateCard.querySelector('h3').textContent = producto.nombre
        templateCard.querySelector('h4').textContent = producto.precio
        templateCard.querySelector('.marca').textContent = `Marca: ${producto.marca}`
        templateCard.querySelector('.numero-parte').textContent = `Número de parte: ${producto.numeroparte}`
        templateCard.querySelector('.clasificacion').textContent = `Clasificación: ${producto.clasificacion}`
        templateCard.querySelector('img').setAttribute("src", producto.miniUrl)

        const clone = templateCard.cloneNode(true)
        fragmento.appendChild(clone)

    });
    items.appendChild(fragmento)
}