import React from 'react'
import { createRoot } from 'react-dom/client'
import {
    createBrowserRouter,
    RouterProvider
} from 'react-router-dom'
import App from './routes/app'
import MarketAuthorize from './routes/market-authorize'
import AdminExchange from './routes/admin/admin-exchange'
import AdminSymbol from './routes/admin/admin-symbol'
import AdminUser from './routes/admin/admin-user'
import AdminDashboard from './routes/admin/admin-dashboard'

const router = createBrowserRouter([
    {
        path: '/',
        element: <App />
    },
    {
        path: '/authorize',
        element: <MarketAuthorize />
    },
    {
        path: '/admin',
        element: <AdminDashboard />
    },
    {
        path: '/admin/exchange',
        element: <AdminExchange />
    },
    {
        path: '/admin/symbol',
        element: <AdminSymbol />
    },
    {
        path: '/admin/user',
        element: <AdminUser />
    }
])

const root = createRoot(document.getElementById('app'));
root.render(
    <React.StrictMode>
        <RouterProvider router={router} />
    </React.StrictMode>
)