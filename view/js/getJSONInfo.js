let requestURL = './model/pokemon/pokezone.json'
let request = new XMLHttpRequest();
request.open('POST', requestURL);
request.responseType = 'json';
request.send();

request.onload = function () {
    let pokemon = request.response;
    let p = pokemon['pokemon']
    console.log(p.length);
    $('#primo').attr("src",pokemon['pokemon'][5]['forms']['b']['photo'])
    $('#primo').attr("alt",pokemon['pokemon'][5]['name'])
    $('#test').html(pokemon['pokemon'][5]['name'])
    $('#types').append(pokemon['pokemon'][5]['type1'] + " - " + pokemon['pokemon'][5]['type2'])
    $('#prof').append(" FireWolf ")
    const stars = '<div class="d-flex justify-content-center small text-warning mb-2">' + 
    '<div class="bi-star-fill"></div>' +
    '<div class="bi-star-fill"></div>' +
    '<div class="bi-star-fill"></div>' +
    '<div class="bi-star-fill"></div>' +
    '<div class="bi-star-fill"></div>' +
    '</div>'
    $('#prof').append(stars)
    $('#req').html("Required: " + pokemon['pokemon'][2]['name'])
    const photo = pokemon['pokemon'][2]['photo']
    $('#req').append("<img src='"+photo+"' width='20' height='20'>")
}