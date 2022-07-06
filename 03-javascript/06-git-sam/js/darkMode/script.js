function check() {
    let form = document.sombre;
    if (form.dark.checked) {
        document.body.style.backgroundColor = "#3c3c3c";
        document.body.style.color = "#fff";
    }else {
        document.body.style.backgroundColor = "#fff";
        document.body.style.color = "#000";
    }
}