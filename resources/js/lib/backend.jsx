const baseUrl = 'https://crispy-space-guide-6jp6j6vxrvhxwx-8000.app.github.dev/api';
const config = {};

const callApi = (url, method, data, authorize = false) => {
    let headers = {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    };
    if (authorize) {
        headers.Authorization = 'Bearer ' + config.token;
    }
    return fetch(baseUrl + url, {
        method: method,
        headers: headers,
        body: JSON.stringify(data)
    }).then(response => {
        return response.json();
    }).catch(error => {
        console.log(error);
    });
}

function post(url, data, authorize = false) {
    return callApi(url, 'POST', data, authorize);
}

function get(url, data = null, authorize = false) {
    if (data) {
        let query = Object.keys(data).map(key => key + '=' + data[key]).join('&');
        url += '?' + query;
    }
    return callApi(url, 'GET', null, authorize);
}

export default {
    post,
    get
}