import backend from "./backend";

const api = {
    login: (username, password) => backend.post('/login', { username, password }, false),
    exchanges: () => backend.get('/exchanges'),
}
export default api;