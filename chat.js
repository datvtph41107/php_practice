const selectedPage = document.querySelectorAll('.selected-page');
const containerProduct = document.querySelector('.new');
selectedPage.forEach(element => {
    element.onclick = (e) =>{
        const pageValue = e.target.value
        let xhttpRequest = new XMLHttpRequest();
        xhttpRequest.open("POST", "./views/layouts/part/productOnly.php", true);
        xhttpRequest.onload = () => {
            if (xhttpRequest.readyState === XMLHttpRequest.DONE) {
                if (xhttpRequest.status === 200) {
                    let data = xhttpRequest.response;
                    containerProduct.innerHTML = data;
                }
            }
        }
        xhttpRequest.onerror = function() {
            console.error("Request failed");
        };
        xhttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttpRequest.send("pageValue="+pageValue);
    }
});

const url = new URL(
    window.location.href,
);
if (url.pathname === '/product') {
    console.log();
    const form = document.querySelector(".form_comment");
    const sendBtn = document.querySelector(".btn-primary");
    const  inputField = document.querySelector(".input-field");
    const  incoming_id = document.querySelector(".incoming_id").value;
    const  chatBox = document.querySelector(".chat-box");
    let count = 0;

    window.onload = (event) => {
        count = 0;
        fetchData();
    };

    form.onsubmit = (e)=>{
        e.preventDefault();
    }

    sendBtn.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "./controllers/admin/comments/addComments.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    inputField.value = "";
                    fetchData();
                }
            }
        }
        xhr.onerror = function() {
            console.error("Request failed");
        };

        let formData = new FormData(form);
        xhr.send(formData);
    }

    function fetchData() {
        count++;
        let xhrFetch = new XMLHttpRequest();
        xhrFetch.open("POST", "./controllers/chat.php", true);
        xhrFetch.onload = () => {
            if (xhrFetch.readyState === XMLHttpRequest.DONE) {
                if (xhrFetch.status === 200) {
                    let data = xhrFetch.response;
                    chatBox.innerHTML = data;
                    scrollToBottom()
                }
            }
        };
        xhrFetch.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhrFetch.send("incoming_id="+incoming_id + "&another_data=" + count);
    }

    function scrollToBottom(){
        chatBox.scrollTop = chatBox.scrollHeight;
    }
} 

const searchProduct = document.querySelector('.search_product');
// Uncaught TypeError: updateDebounce is not a function
const updateDebounce = debounced(text => {
    let searchXhr = new XMLHttpRequest();
    searchXhr.open("POST", "./views/layouts/part/productOnly.php", true);
    searchXhr.onload = () => {
        if (searchXhr.readyState === XMLHttpRequest.DONE) {
            if (searchXhr.status === 200) {
                let data = searchXhr.response;
                console.log(data);
                containerProduct.innerHTML = data;
            }
        }
    }
    searchXhr.onerror = function() {
        console.error("Request failed");
    };
    searchXhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        searchXhr.send("debounceValue="+text);
}, 500);

searchProduct.addEventListener('input', e => {
    updateDebounce(e.target.value);
});

function debounced(cb, delay) {
    let timeout;
    // tra ve mot function
    // ...args chua gtri truyen trong tham so updateDebounce
    return (...args) =>{
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            // cb= text => {console.log(text);}); => text la tham so chua args
            cb(...args);
        }, delay)
    }
};


