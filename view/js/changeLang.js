function changeLanguage(lang) {
    const formData = new FormData();
    formData.append("lang",lang);

    var destination = 'model/sitePreferences/language.php';
    var path = window.location.href.substring(window.location.href.lastIndexOf("/")+1);
    if(path != "index.php" && path!=""){
        path = "../../index.php";
        destination = "../../model/sitePreferences/language.php";
    }else if(path=="") {
        path="index.php";
        destination = 'model/sitePreferences/language.php';
    }

    fetch(destination, {
        method: 'POST',
        header: {
            'Content-Type': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        window.location = path;
    })
    .catch((error) => {
        console.error("Error: ", error);
    })
}