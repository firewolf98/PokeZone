let requestURL = './model/pokemon/pokezone.json'
let request = new XMLHttpRequest();
request.open('POST', requestURL);
request.responseType = 'json';
request.send();

request.onload = function () {
    let pokemon = request.response;
    console.log(pokemon['pokemon']);
    $('#primo').attr("src",pokemon['pokemon'][5]['forms']['b']['photo'])
    $('#primo').attr("width","178")
    $('#primo').attr("height","178")
}