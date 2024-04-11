const ajaxs_forms = document.querySelectorAll(".FormAjax")
function submit_form_ajax(evt) {
    // Prevent redirect to file that process the petition submit (<form action="load.php"...> for example)
    evt.preventDefault();
    let confirm_submit = confirm("Are you want to submit the data in this form?")
    if (!confirm_submit) {
        return;
    }
    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let headers = new Headers()
    let config = {
        method: method,
        heades: headers,
        mode: "cors",
        cache: "no-cache",
        body: data
    };
    fetch(action, config)
        .then(response => response.text())
        .then(response => {
            alert(response);
        })
}
ajaxs_forms.forEach((forms) => {
    forms.addEventListener("submit", submit_form_ajax);
});