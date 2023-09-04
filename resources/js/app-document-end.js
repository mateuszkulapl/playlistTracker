Livewire.on('toast', msg => {
    let toast = document.getElementById('toast-template').content.cloneNode(true);
    let randomIdString = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    toast.firstElementChild.id = randomIdString;
    toast.querySelector('.toast-msg').innerText = msg;
    document.getElementById('toasts').appendChild(toast);
    setTimeout(function () {
        document.getElementById(randomIdString).remove();
    }, 3000);
});


function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

Livewire.on('categorySelected', categoryId => {
    setCookie('categoryId', categoryId, categoryId);
})