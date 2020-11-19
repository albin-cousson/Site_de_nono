
let url_complete = new URL(window.location.href)
let search = new URLSearchParams(url_complete.search.slice("true"))

if (search.has("reload")){
    window.stop()
}

window.addEventListener("load", function(){
    let url = new URLSearchParams(window.location.search)
    url.set("reload", "true")
    history.replaceState(null, null, "?" + url.toString())
    window.location.reload()
})
